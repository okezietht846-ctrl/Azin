<?php

namespace App\Models;

use App\Enums\TxnStatus;
use App\Enums\TxnType;
use Carbon\Carbon;
use Coderflex\LaravelTicket\Concerns\HasTickets;
use Coderflex\LaravelTicket\Contracts\CanUseTickets;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements CanUseTickets, MustVerifyEmail
{
  use HasApiTokens, HasFactory, Notifiable, HasTickets;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'ranking_id',
    'rankings',
    'avatar',
    'first_name',
    'last_name',
    'country',
    'phone',
    'username',
    'email',
    'email_verified_at',
    'gender',
    'date_of_birth',
    'city',
    'zip_code',
    'address',
    'balance',
    'profit_balance',
    'status',
    'kyc',
    'kyc_credential',
    'google2fa_secret',
    'two_fa',
    'deposit_status',
    'withdraw_status',
    'transfer_status',
    'ref_id',
    'password',
    'acc_balance',
    'totaldeposit_bonus',
    'totalInvestment_bonus',
    'site_currency',
    'currency_symbol',
  ];

  protected $appends = [
    'full_name', 'kyc_time', 'kyc_type', 'total_profit','total_invest','acc_balance','totaldeposit_bonus',
    'totalInvestment_bonus',
  ];

  protected $dates = ['kyc_time'];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
    'google2fa_secret',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'two_fa' => 'boolean',
  ];
public function getAccBalanceAttribute()
{
    // Calculate the sum of "balance", "profit_balance", and "totalProfit"
    return $this->attributes['balance'] + $this->attributes['profit_balance'] + $this->attributes['totaldeposit_bonus'] + 
    $this->attributes['totalInvestment_bonus'] + $this->totalProfit();
}

// In your User model
public function setSiteCurrencyAttribute($value)
{
    $this->attributes['site_currency'] = $value;
    $this->attributes['currency_symbol'] = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£',
        'CNY' => '¥',
    ][$value] ?? '$'; // Default to USD if not found
}

  public function getUpdatedAtAttribute(): string
  {
    return Carbon::parse($this->attributes['updated_at'])->format('M d Y h:i');
  }

  public function getFullNameAttribute(): string
  {
    return ucwords("{$this->attributes['first_name']} {$this->attributes['last_name']}");
  }

  public function getKycTypeAttribute(): string
  {
    return json_decode($this->attributes['kyc_credential'], true)['kyc_type_of_name'] ?? '';
  }

  public function getKycTimeAttribute(): string
  {
    return json_decode($this->attributes['kyc_credential'], true)['kyc_time_of_time'] ?? '';
  }

  public function getTotalProfitAttribute(): string
  {
    return $this->totalProfit();
  }

  public function getTotalDepositBonusAttribute()
{
    return $this->attributes['totaldeposit_bonus'];
}

public function getTotalInvestmentBonusAttribute()
{
    return $this->attributes['totalInvestment_bonus'];
}


  public function getTotalInvestAttribute(): string
  {
    return $this->totalInvestment();
  }

  public function totalProfit($days = null)
  {

    $sum = $this->transaction()->where('status', TxnStatus::Success)->where(function ($query) {
      $query->Where('type', TxnType::SignupBonus)
        
        ->orWhere('type', TxnType::Bonus);

    });

    if (null != $days) {
      $sum->where('created_at', '>=', Carbon::now()->subDays((int) $days));
    }
    $sum = $sum->sum('amount');

    return round($sum, 2);
  }

public function totalTransfer()
{
    $sum = $this->transaction()
        ->where('status', TxnStatus::Success)
        ->whereIn('type', [
            TxnType::SignupBonus,
            
            TxnType::Referral,
            
            // Add any other relevant types for total account balance
        ])
        ->sum('amount');

    // Add any additional bonuses directly if they aren't captured in transactions
    $sum += $this->attributes['totaldeposit_bonus'] ?? 0;
    $sum += $this->attributes['totalInvestment_bonus'] ?? 0;
    $sum += $this->attributes['balance'] ?? 0;
    $sum += $this->attributes['profit_balance'] ?? 0;
    

    return round($sum, 2);
}

  public function transaction()
  {
    return $this->hasMany(Transaction::class, 'user_id');
  }

  public function totalRoiProfit()
  {
    $sum = $this->transaction()->where('status', TxnStatus::Success)->where(function ($query) {
      $query->where('type', TxnType::Interest);
    })->sum('amount');

    return round($sum, 2);
  }

  public function getReferrals()
  {
    return ReferralProgram::all()->map(function ($program) {
      return ReferralLink::getReferral($this, $program);
    });
  }

  public function referrals()
  {
    return $this->hasMany(User::class, 'ref_id');
  }


  public function totalInvestment()
  {
    $sum = $this->transaction()->where('status', TxnStatus::Success)->where(function ($query) {
      $query->where('type', TxnType::Investment);
    })->sum('amount');

    return round($sum, 2);
  }

  

  public function totalInvestBonus()
  {
    $sum = $this->transaction()->where('status', TxnStatus::Success)->where(function ($query) {
      $query->where('target_id', '!=', null)
        ->where('target_type', 'investment')
        ->where('type', TxnType::Referral);
    })->sum('amount');

    return round($sum, 2);
  }

  public function totalWithdraw()
  {
    $sum = $this->transaction()->where('status', TxnStatus::Success)->where(function ($query) {
      $query->where('type', TxnType::Withdraw)
        ->orWhere('type', TxnType::WithdrawAuto);
    })->sum('amount');

    return round($sum, 2);
  }

public function activeWithdrawal()
{
    // Get the most recent successful withdrawal
    $recentWithdrawal = $this->transaction()
        ->where('status', TxnStatus::Success)
        ->whereIn('type', [TxnType::Withdraw, TxnType::WithdrawAuto])
        ->orderBy('created_at', 'desc') // Order by creation date, latest first
        ->first(); // Get the first result

    return $recentWithdrawal ? $recentWithdrawal->amount : 0; // Return amount or 0 if none
}

public function pendingWithdrawal()
{
    $sum = $this->transaction()->where('status', TxnStatus::Pending) // Assuming 'Pending' is the correct status
        ->where(function ($query) {
            $query->where('type', TxnType::Withdraw)
                  ->orWhere('type', TxnType::WithdrawAuto);
        })->sum('amount');

    return round($sum, 2); // Return the total rounded to 2 decimal places
}

 
  public function totalReferralProfit()
  {
    $sum = $this->transaction()->where('status', TxnStatus::Success)->where(function ($query) {
      $query->where('type', TxnType::Referral);
    })->sum('amount');

    return round($sum, 2);
  }

  public function rank()
  {
    return $this->belongsTo(Ranking::class, 'ranking_id');
  }

  public function ticket()
  {
    return $this->hasMany(Ticket::class);
  }

  public function rankAchieved()
  {
    return count(json_decode($this->rankings, true));
  }
    public function totalDeposit()
{
    $sum = $this->transaction()
        ->where('status', TxnStatus::Success)
        ->whereIn('type', [TxnType::ManualDeposit, TxnType::Deposit])
        ->sum('amount');

    return round($sum, 2);
}

public function activeDeposit()
{
    // Get the most recent successful deposit
    $recentDeposit = $this->transaction()
        ->where('status', TxnStatus::Success)
        ->whereIn('type', [TxnType::ManualDeposit, TxnType::Deposit])
        ->orderBy('created_at', 'desc') // Order by creation date, latest first
        ->first(); // Get the first result

    return $recentDeposit ? $recentDeposit->amount : 0; // Return amount or 0 if none
}

  

  protected function google2faSecret(): Attribute
  {
    return new Attribute(
      get: fn ($value) => $value != null ? decrypt($value) : $value,
      set: fn ($value) => encrypt($value),
    );
  }
}