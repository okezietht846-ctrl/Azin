<?php //d1e7be19e6fa832cb68fdf29754b06cf
/** @noinspection all */

namespace PragmaRX\Google2FALaravel\Tests\Support {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\PragmaRX\Google2FALaravel\Tests\Support\_IH_User_C;
    use LaravelIdea\Helper\PragmaRX\Google2FALaravel\Tests\Support\_IH_User_QB;

    /**
     * @property int $id
     * @property int|null $ranking_id
     * @property array|null $rankings
     * @property string|null $avatar
     * @property string $first_name
     * @property string $last_name
     * @property string $country
     * @property string $phone
     * @property string $username
     * @property string $email
     * @property string $gender
     * @property Carbon|null $date_of_birth
     * @property string|null $city
     * @property string|null $zip_code
     * @property string|null $address
     * @property float $balance
     * @property float $profit_balance
     * @property bool $status
     * @property bool $kyc
     * @property array|null $kyc_credential
     * @property string|null $google2fa_secret
     * @property bool $two_fa
     * @property bool $deposit_status
     * @property bool $withdraw_status
     * @property bool $transfer_status
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @ownLinks ranking_id,\App\Models\Ranking,id
     * @foreignLinks id,\App\Models\Transaction,user_id|id,\App\Models\Invest,user_id|id,\App\Models\WithdrawAccount,user_id|id,\App\Models\Ticket,user_id|id,\App\Models\ReferralLink,user_id|id,\App\Models\ReferralRelationship,user_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}
}
