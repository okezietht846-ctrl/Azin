<?php //fcb04da308fdc759ce44a8a8bb54352d
/** @noinspection all */

namespace App\Models {

    use App\Enums\GatewayType;
    use App\Enums\InvestStatus;
    use App\Enums\TxnStatus;
    use App\Enums\TxnType;
    use Coderflex\LaravelTicket\Models\Category;
    use Coderflex\LaravelTicket\Models\Label;
    use Coderflex\LaravelTicket\Models\Message as Message1;
    use Coderflex\LaravelTicket\Models\Ticket as Ticket1;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Foundation\Auth\User as User1;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_Admin_C;
    use LaravelIdea\Helper\App\Models\_IH_Admin_QB;
    use LaravelIdea\Helper\App\Models\_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomCss_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomCss_QB;
    use LaravelIdea\Helper\App\Models\_IH_EmailTemplate_C;
    use LaravelIdea\Helper\App\Models\_IH_EmailTemplate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Gateway_C;
    use LaravelIdea\Helper\App\Models\_IH_Gateway_QB;
    use LaravelIdea\Helper\App\Models\_IH_Invest_C;
    use LaravelIdea\Helper\App\Models\_IH_Invest_QB;
    use LaravelIdea\Helper\App\Models\_IH_Kyc_C;
    use LaravelIdea\Helper\App\Models\_IH_Kyc_QB;
    use LaravelIdea\Helper\App\Models\_IH_LandingContent_C;
    use LaravelIdea\Helper\App\Models\_IH_LandingContent_QB;
    use LaravelIdea\Helper\App\Models\_IH_LandingPage_C;
    use LaravelIdea\Helper\App\Models\_IH_LandingPage_QB;
    use LaravelIdea\Helper\App\Models\_IH_Language_C;
    use LaravelIdea\Helper\App\Models\_IH_Language_QB;
    use LaravelIdea\Helper\App\Models\_IH_Message_C;
    use LaravelIdea\Helper\App\Models\_IH_Message_QB;
    use LaravelIdea\Helper\App\Models\_IH_Navigation_C;
    use LaravelIdea\Helper\App\Models\_IH_Navigation_QB;
    use LaravelIdea\Helper\App\Models\_IH_PageSetting_C;
    use LaravelIdea\Helper\App\Models\_IH_PageSetting_QB;
    use LaravelIdea\Helper\App\Models\_IH_Page_C;
    use LaravelIdea\Helper\App\Models\_IH_Page_QB;
    use LaravelIdea\Helper\App\Models\_IH_Plugin_C;
    use LaravelIdea\Helper\App\Models\_IH_Plugin_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ranking_C;
    use LaravelIdea\Helper\App\Models\_IH_Ranking_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReferralLink_C;
    use LaravelIdea\Helper\App\Models\_IH_ReferralLink_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReferralProgram_C;
    use LaravelIdea\Helper\App\Models\_IH_ReferralProgram_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReferralRelationship_C;
    use LaravelIdea\Helper\App\Models\_IH_ReferralRelationship_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReferralTarget_C;
    use LaravelIdea\Helper\App\Models\_IH_ReferralTarget_QB;
    use LaravelIdea\Helper\App\Models\_IH_Referral_C;
    use LaravelIdea\Helper\App\Models\_IH_Referral_QB;
    use LaravelIdea\Helper\App\Models\_IH_Schedule_C;
    use LaravelIdea\Helper\App\Models\_IH_Schedule_QB;
    use LaravelIdea\Helper\App\Models\_IH_Schema_C;
    use LaravelIdea\Helper\App\Models\_IH_Schema_QB;
    use LaravelIdea\Helper\App\Models\_IH_Setting_C;
    use LaravelIdea\Helper\App\Models\_IH_Setting_QB;
    use LaravelIdea\Helper\App\Models\_IH_Social_C;
    use LaravelIdea\Helper\App\Models\_IH_Social_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscription_C;
    use LaravelIdea\Helper\App\Models\_IH_Subscription_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_QB as _IH_Ticket_QB1;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_C;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\App\Models\_IH_WithdrawAccount_C;
    use LaravelIdea\Helper\App\Models\_IH_WithdrawAccount_QB;
    use LaravelIdea\Helper\App\Models\_IH_WithdrawMethod_C;
    use LaravelIdea\Helper\App\Models\_IH_WithdrawMethod_QB;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Category_C;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Category_QB;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Label_C;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Label_QB;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Message_C as _IH_Message_C1;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Message_QB as _IH_Message_QB1;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Ticket_C as _IH_Ticket_C1;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\Illuminate\Foundation\Auth\_IH_User_QB as _IH_User_QB1;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role;

    /**
     * @property int $id
     * @property string|null $avatar
     * @property string $name
     * @property string $email
     * @property string $phone
     * @property string $password
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB roles()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_Admin_QB onWriteConnection()
     * @method _IH_Admin_QB newQuery()
     * @method static _IH_Admin_QB on(null|string $connection = null)
     * @method static _IH_Admin_QB query()
     * @method static _IH_Admin_QB with(array|string $relations)
     * @method _IH_Admin_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Admin_C|Admin[] all()
     * @mixin _IH_Admin_QB
     */
    class Admin extends Model {}

    /**
     * @property int $id
     * @property string $cover
     * @property string $title
     * @property string $details
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Blog_QB onWriteConnection()
     * @method _IH_Blog_QB newQuery()
     * @method static _IH_Blog_QB on(null|string $connection = null)
     * @method static _IH_Blog_QB query()
     * @method static _IH_Blog_QB with(array|string $relations)
     * @method _IH_Blog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Blog_C|Blog[] all()
     * @mixin _IH_Blog_QB
     */
    class Blog extends Model {}

    /**
     * @property int $id
     * @property string|null $css
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_CustomCss_QB onWriteConnection()
     * @method _IH_CustomCss_QB newQuery()
     * @method static _IH_CustomCss_QB on(null|string $connection = null)
     * @method static _IH_CustomCss_QB query()
     * @method static _IH_CustomCss_QB with(array|string $relations)
     * @method _IH_CustomCss_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomCss_C|CustomCss[] all()
     * @mixin _IH_CustomCss_QB
     */
    class CustomCss extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $code
     * @property string $for
     * @property string|null $banner
     * @property string|null $title
     * @property string|null $subject
     * @property string|null $salutation
     * @property string $message_body
     * @property string|null $button_level
     * @property string|null $button_link
     * @property bool $footer_status
     * @property string|null $footer_body
     * @property bool $bottom_status
     * @property string|null $bottom_title
     * @property string|null $bottom_body
     * @property string|null $short_codes
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_EmailTemplate_QB onWriteConnection()
     * @method _IH_EmailTemplate_QB newQuery()
     * @method static _IH_EmailTemplate_QB on(null|string $connection = null)
     * @method static _IH_EmailTemplate_QB query()
     * @method static _IH_EmailTemplate_QB with(array|string $relations)
     * @method _IH_EmailTemplate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_EmailTemplate_C|EmailTemplate[] all()
     * @mixin _IH_EmailTemplate_QB
     */
    class EmailTemplate extends Model {}

    /**
     * @property int $id
     * @property string $logo
     * @property string $name
     * @property GatewayType $type
     * @property string $gateway_code
     * @property float $charge
     * @property string $charge_type
     * @property float $minimum_deposit
     * @property float $maximum_deposit
     * @property float $rate
     * @property string|null $supported_currencies
     * @property string $currency
     * @property string $currency_symbol
     * @property string $credentials
     * @property string|null $payment_details
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Gateway_QB onWriteConnection()
     * @method _IH_Gateway_QB newQuery()
     * @method static _IH_Gateway_QB on(null|string $connection = null)
     * @method static _IH_Gateway_QB query()
     * @method static _IH_Gateway_QB with(array|string $relations)
     * @method _IH_Gateway_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Gateway_C|Gateway[] all()
     * @mixin _IH_Gateway_QB
     */
    class Gateway extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $schema_id
     * @property int|null $transaction_id
     * @property float $invest_amount
     * @property int $already_return_profit
     * @property float $total_profit_amount
     * @property Carbon|null $last_profit_time
     * @property Carbon|null $next_profit_time
     * @property string $capital_back
     * @property int $interest
     * @property string $interest_type
     * @property string $return_type
     * @property int $number_of_period
     * @property int $period_hours
     * @property string $wallet
     * @property InvestStatus $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Schema $schema
     * @method HasOne|_IH_Schema_QB schema()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Invest_QB onWriteConnection()
     * @method _IH_Invest_QB newQuery()
     * @method static _IH_Invest_QB on(null|string $connection = null)
     * @method static _IH_Invest_QB query()
     * @method static _IH_Invest_QB with(array|string $relations)
     * @method _IH_Invest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Invest_C|Invest[] all()
     * @ownLinks user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id|schema_id,\App\Models\Schema,id|transaction_id,\App\Models\Transaction,id
     * @mixin _IH_Invest_QB
     */
    class Invest extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property array $fields
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Kyc_QB onWriteConnection()
     * @method _IH_Kyc_QB newQuery()
     * @method static _IH_Kyc_QB on(null|string $connection = null)
     * @method static _IH_Kyc_QB query()
     * @method static _IH_Kyc_QB with(array|string $relations)
     * @method _IH_Kyc_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Kyc_C|Kyc[] all()
     * @mixin _IH_Kyc_QB
     */
    class Kyc extends Model {}

    /**
     * @property int $id
     * @property string|null $icon
     * @property string $title
     * @property string|null $description
     * @property string $type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_LandingContent_QB onWriteConnection()
     * @method _IH_LandingContent_QB newQuery()
     * @method static _IH_LandingContent_QB on(null|string $connection = null)
     * @method static _IH_LandingContent_QB query()
     * @method static _IH_LandingContent_QB with(array|string $relations)
     * @method _IH_LandingContent_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_LandingContent_C|LandingContent[] all()
     * @mixin _IH_LandingContent_QB
     */
    class LandingContent extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $code
     * @property string $data
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_LandingPage_QB onWriteConnection()
     * @method _IH_LandingPage_QB newQuery()
     * @method static _IH_LandingPage_QB on(null|string $connection = null)
     * @method static _IH_LandingPage_QB query()
     * @method static _IH_LandingPage_QB with(array|string $relations)
     * @method _IH_LandingPage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_LandingPage_C|LandingPage[] all()
     * @mixin _IH_LandingPage_QB
     */
    class LandingPage extends Model {}

    /**
     * @property int $id
     * @property string|null $flag
     * @property string $name
     * @property string $locale
     * @property bool $is_default
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Language_QB onWriteConnection()
     * @method _IH_Language_QB newQuery()
     * @method static _IH_Language_QB on(null|string $connection = null)
     * @method static _IH_Language_QB query()
     * @method static _IH_Language_QB with(array|string $relations)
     * @method _IH_Language_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Language_C|Language[] all()
     * @mixin _IH_Language_QB
     */
    class Language extends Model {}

    /**
     * @property Ticket1 $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @method static _IH_Message_QB onWriteConnection()
     * @method _IH_Message_QB newQuery()
     * @method static _IH_Message_QB on(null|string $connection = null)
     * @method static _IH_Message_QB query()
     * @method static _IH_Message_QB with(array|string $relations)
     * @method _IH_Message_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Message_C|Message[] all()
     * @mixin _IH_Message_QB
     */
    class Message extends Model {}

    /**
     * @property int $id
     * @property int|null $page_id
     * @property string $name
     * @property string $url
     * @property string $type
     * @property string|null $header_position
     * @property string|null $footer_position
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Page|null $page
     * @method BelongsTo|_IH_Page_QB page()
     * @method static _IH_Navigation_QB onWriteConnection()
     * @method _IH_Navigation_QB newQuery()
     * @method static _IH_Navigation_QB on(null|string $connection = null)
     * @method static _IH_Navigation_QB query()
     * @method static _IH_Navigation_QB with(array|string $relations)
     * @method _IH_Navigation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Navigation_C|Navigation[] all()
     * @ownLinks page_id,\App\Models\Page,id
     * @mixin _IH_Navigation_QB
     */
    class Navigation extends Model {}

    /**
     * @property int $id
     * @property string $url
     * @property string $title
     * @property string $code
     * @property string $data
     * @property string $type
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @foreignLinks id,\App\Models\Navigation,page_id
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}

    /**
     * @property int $id
     * @property string $key
     * @property string $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PageSetting_QB onWriteConnection()
     * @method _IH_PageSetting_QB newQuery()
     * @method static _IH_PageSetting_QB on(null|string $connection = null)
     * @method static _IH_PageSetting_QB query()
     * @method static _IH_PageSetting_QB with(array|string $relations)
     * @method _IH_PageSetting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PageSetting_C|PageSetting[] all()
     * @mixin _IH_PageSetting_QB
     */
    class PageSetting extends Model {}

    /**
     * @property int $id
     * @property string|null $icon
     * @property string $name
     * @property string $description
     * @property string $data
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Plugin_QB onWriteConnection()
     * @method _IH_Plugin_QB newQuery()
     * @method static _IH_Plugin_QB on(null|string $connection = null)
     * @method static _IH_Plugin_QB query()
     * @method static _IH_Plugin_QB with(array|string $relations)
     * @method _IH_Plugin_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Plugin_C|Plugin[] all()
     * @mixin _IH_Plugin_QB
     */
    class Plugin extends Model {}

    /**
     * @property int $id
     * @property string $icon
     * @property string $ranking
     * @property string $ranking_name
     * @property float $minimum_earnings
     * @property float $bonus
     * @property string $description
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Ranking_QB onWriteConnection()
     * @method _IH_Ranking_QB newQuery()
     * @method static _IH_Ranking_QB on(null|string $connection = null)
     * @method static _IH_Ranking_QB query()
     * @method static _IH_Ranking_QB with(array|string $relations)
     * @method _IH_Ranking_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ranking_C|Ranking[] all()
     * @foreignLinks id,\PragmaRX\Google2FALaravel\Tests\Support\User,ranking_id
     * @mixin _IH_Ranking_QB
     */
    class Ranking extends Model {}

    /**
     * @property int $id
     * @property int $referral_target_id
     * @property string $type
     * @property float $bounty
     * @property string|null $description
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ReferralTarget $target
     * @method BelongsTo|_IH_ReferralTarget_QB target()
     * @method static _IH_Referral_QB onWriteConnection()
     * @method _IH_Referral_QB newQuery()
     * @method static _IH_Referral_QB on(null|string $connection = null)
     * @method static _IH_Referral_QB query()
     * @method static _IH_Referral_QB with(array|string $relations)
     * @method _IH_Referral_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Referral_C|Referral[] all()
     * @ownLinks referral_target_id,\App\Models\ReferralTarget,id
     * @mixin _IH_Referral_QB
     */
    class Referral extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $referral_program_id
     * @property string $code
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $link attribute
     * @property ReferralProgram $program
     * @method BelongsTo|_IH_ReferralProgram_QB program()
     * @property _IH_ReferralRelationship_C|ReferralRelationship[] $relationships
     * @property-read int $relationships_count
     * @method HasMany|_IH_ReferralRelationship_QB relationships()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_ReferralLink_QB onWriteConnection()
     * @method _IH_ReferralLink_QB newQuery()
     * @method static _IH_ReferralLink_QB on(null|string $connection = null)
     * @method static _IH_ReferralLink_QB query()
     * @method static _IH_ReferralLink_QB with(array|string $relations)
     * @method _IH_ReferralLink_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReferralLink_C|ReferralLink[] all()
     * @ownLinks user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id|referral_program_id,\App\Models\ReferralProgram,id
     * @foreignLinks id,\App\Models\ReferralRelationship,referral_link_id
     * @mixin _IH_ReferralLink_QB
     */
    class ReferralLink extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $uri
     * @property int $lifetime_minutes
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ReferralProgram_QB onWriteConnection()
     * @method _IH_ReferralProgram_QB newQuery()
     * @method static _IH_ReferralProgram_QB on(null|string $connection = null)
     * @method static _IH_ReferralProgram_QB query()
     * @method static _IH_ReferralProgram_QB with(array|string $relations)
     * @method _IH_ReferralProgram_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReferralProgram_C|ReferralProgram[] all()
     * @foreignLinks id,\App\Models\ReferralLink,referral_program_id
     * @mixin _IH_ReferralProgram_QB
     */
    class ReferralProgram extends Model {}

    /**
     * @property int $id
     * @property int $referral_link_id
     * @property int $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ReferralRelationship_QB onWriteConnection()
     * @method _IH_ReferralRelationship_QB newQuery()
     * @method static _IH_ReferralRelationship_QB on(null|string $connection = null)
     * @method static _IH_ReferralRelationship_QB query()
     * @method static _IH_ReferralRelationship_QB with(array|string $relations)
     * @method _IH_ReferralRelationship_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReferralRelationship_C|ReferralRelationship[] all()
     * @ownLinks referral_link_id,\App\Models\ReferralLink,id|user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id
     * @mixin _IH_ReferralRelationship_QB
     */
    class ReferralRelationship extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ReferralTarget_QB onWriteConnection()
     * @method _IH_ReferralTarget_QB newQuery()
     * @method static _IH_ReferralTarget_QB on(null|string $connection = null)
     * @method static _IH_ReferralTarget_QB query()
     * @method static _IH_ReferralTarget_QB with(array|string $relations)
     * @method _IH_ReferralTarget_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReferralTarget_C|ReferralTarget[] all()
     * @foreignLinks id,\App\Models\Referral,referral_target_id
     * @mixin _IH_ReferralTarget_QB
     */
    class ReferralTarget extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $time
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Schedule_QB onWriteConnection()
     * @method _IH_Schedule_QB newQuery()
     * @method static _IH_Schedule_QB on(null|string $connection = null)
     * @method static _IH_Schedule_QB query()
     * @method static _IH_Schedule_QB with(array|string $relations)
     * @method _IH_Schedule_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Schedule_C|Schedule[] all()
     * @mixin _IH_Schedule_QB
     */
    class Schedule extends Model {}

    /**
     * @property int $id
     * @property string $icon
     * @property string $name
     * @property string $type
     * @property float $fixed_amount
     * @property float $min_amount
     * @property float $max_amount
     * @property bool $capital_back
     * @property string|null $badge
     * @property bool $featured
     * @property bool $status
     * @property string $interest_type
     * @property int $return_interest
     * @property int $return_period
     * @property string $return_type
     * @property int $number_of_period
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Schedule $schedule
     * @method HasOne|_IH_Schedule_QB schedule()
     * @method static _IH_Schema_QB onWriteConnection()
     * @method _IH_Schema_QB newQuery()
     * @method static _IH_Schema_QB on(null|string $connection = null)
     * @method static _IH_Schema_QB query()
     * @method static _IH_Schema_QB with(array|string $relations)
     * @method _IH_Schema_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Schema_C|Schema[] all()
     * @foreignLinks id,\App\Models\Invest,schema_id
     * @mixin _IH_Schema_QB
     */
    class Schema extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $val
     * @property string $type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Setting_QB onWriteConnection()
     * @method _IH_Setting_QB newQuery()
     * @method static _IH_Setting_QB on(null|string $connection = null)
     * @method static _IH_Setting_QB query()
     * @method static _IH_Setting_QB with(array|string $relations)
     * @method _IH_Setting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Setting_C|Setting[] all()
     * @mixin _IH_Setting_QB
     */
    class Setting extends Model {}

    /**
     * @property int $id
     * @property string $icon_name
     * @property string $class_name
     * @property string $url
     * @property int $position
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Social_QB onWriteConnection()
     * @method _IH_Social_QB newQuery()
     * @method static _IH_Social_QB on(null|string $connection = null)
     * @method static _IH_Social_QB query()
     * @method static _IH_Social_QB with(array|string $relations)
     * @method _IH_Social_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Social_C|Social[] all()
     * @mixin _IH_Social_QB
     */
    class Social extends Model {}

    /**
     * @property int $id
     * @property string $email
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Subscription_QB onWriteConnection()
     * @method _IH_Subscription_QB newQuery()
     * @method static _IH_Subscription_QB on(null|string $connection = null)
     * @method static _IH_Subscription_QB query()
     * @method static _IH_Subscription_QB with(array|string $relations)
     * @method _IH_Subscription_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscription_C|Subscription[] all()
     * @mixin _IH_Subscription_QB
     */
    class Subscription extends Model {}

    /**
     * @property int $id
     * @property string|null $uuid
     * @property int $user_id
     * @property string $title
     * @property string|null $message
     * @property string|null $attach
     * @property string $priority
     * @property string $status
     * @property bool $is_resolved
     * @property bool $is_locked
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property _IH_Label_C|Label[] $labels
     * @property-read int $labels_count
     * @method BelongsToMany|_IH_Label_QB labels()
     * @property _IH_Message_C1|Message1[] $messageAsUser
     * @property-read int $message_as_user_count
     * @method HasMany|_IH_Message_QB1 messageAsUser()
     * @property _IH_Message_C1|Message1[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_Message_QB1 messages()
     * @property _IH_Category_C|Category[] $syncCategories
     * @property-read int $sync_categories_count
     * @method BelongsToMany|_IH_Category_QB syncCategories()
     * @property _IH_Label_C|Label[] $syncLabels
     * @property-read int $sync_labels_count
     * @method BelongsToMany|_IH_Label_QB syncLabels()
     * @property User1 $user
     * @method BelongsTo|_IH_User_QB1 user()
     * @method static _IH_Ticket_QB1 onWriteConnection()
     * @method _IH_Ticket_QB1 newQuery()
     * @method static _IH_Ticket_QB1 on(null|string $connection = null)
     * @method static _IH_Ticket_QB1 query()
     * @method static _IH_Ticket_QB1 with(array|string $relations)
     * @method _IH_Ticket_QB1 newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ticket_C|Ticket[] all()
     * @ownLinks user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id
     * @mixin _IH_Ticket_QB1
     */
    class Ticket extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $from_user_id
     * @property string $from_model
     * @property int|null $target_id
     * @property string|null $target_type
     * @property string $tnx
     * @property string|null $description
     * @property string $amount
     * @property TxnType $type
     * @property string $charge
     * @property string $final_amount
     * @property string|null $account
     * @property string|null $pay_currency
     * @property string|null $pay_amount
     * @property string|null $manual_field_data
     * @property string|null $approval_cause
     * @property TxnStatus $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $day attribute
     * @property-read string $method attribute
     * @property Invest $invest
     * @method HasOne|_IH_Invest_QB invest()
     * @property _IH_Referral_C|Referral[] $referral
     * @property-read int $referral_count
     * @method HasMany|_IH_Referral_QB referral()
     * @property _IH_Referral_C|Referral[] $referrals
     * @property-read int $referrals_count
     * @method HasMany|_IH_Referral_QB referrals()
     * @property ReferralTarget|null $target
     * @method BelongsTo|_IH_ReferralTarget_QB target()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Transaction_QB onWriteConnection()
     * @method _IH_Transaction_QB newQuery()
     * @method static _IH_Transaction_QB on(null|string $connection = null)
     * @method static _IH_Transaction_QB query()
     * @method static _IH_Transaction_QB with(array|string $relations)
     * @method _IH_Transaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Transaction_C|Transaction[] all()
     * @ownLinks user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id
     * @foreignLinks id,\App\Models\Invest,transaction_id
     * @mixin _IH_Transaction_QB
     */
    class Transaction extends Model {}

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
     * @property-read string $full_name attribute
     * @property-read string $kyc_time attribute
     * @property-read string $kyc_type attribute
     * @property-read string $total_profit attribute
     * @property _IH_Message_C1|Message1[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_Message_QB1 messages()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property Ranking|null $rank
     * @method BelongsTo|_IH_Ranking_QB rank()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Ticket_C|Ticket[] $ticket
     * @property-read int $ticket_count
     * @method HasMany|_IH_Ticket_QB1 ticket()
     * @property _IH_Ticket_C1|Ticket1[] $tickets
     * @property-read int $tickets_count
     * @method HasMany|_IH_Ticket_QB tickets()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property _IH_Transaction_C|Transaction[] $totalDeposit
     * @property-read int $total_deposit_count
     * @method HasMany|_IH_Transaction_QB totalDeposit()
     * @property _IH_Transaction_C|Transaction[] $totalDepositBonus
     * @property-read int $total_deposit_bonus_count
     * @method HasMany|_IH_Transaction_QB totalDepositBonus()
     * @property _IH_Transaction_C|Transaction[] $totalInvestBonus
     * @property-read int $total_invest_bonus_count
     * @method HasMany|_IH_Transaction_QB totalInvestBonus()
     * @property _IH_Transaction_C|Transaction[] $totalInvestment
     * @property-read int $total_investment_count
     * @method HasMany|_IH_Transaction_QB totalInvestment()
     * @property _IH_Transaction_C|Transaction[] $totalProfit
     * @property-read int $total_profit_count
     * @method HasMany|_IH_Transaction_QB totalProfit()
     * @property _IH_Transaction_C|Transaction[] $totalReferralProfit
     * @property-read int $total_referral_profit_count
     * @method HasMany|_IH_Transaction_QB totalReferralProfit()
     * @property _IH_Transaction_C|Transaction[] $totalTransfer
     * @property-read int $total_transfer_count
     * @method HasMany|_IH_Transaction_QB totalTransfer()
     * @property _IH_Transaction_C|Transaction[] $totalWithdraw
     * @property-read int $total_withdraw_count
     * @method HasMany|_IH_Transaction_QB totalWithdraw()
     * @property _IH_Transaction_C|Transaction[] $transaction
     * @property-read int $transaction_count
     * @method HasMany|_IH_Transaction_QB transaction()
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
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $withdraw_method_id
     * @property string $method_name
     * @property string $credentials
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property WithdrawMethod $method
     * @method BelongsTo|_IH_WithdrawMethod_QB method()
     * @method static _IH_WithdrawAccount_QB onWriteConnection()
     * @method _IH_WithdrawAccount_QB newQuery()
     * @method static _IH_WithdrawAccount_QB on(null|string $connection = null)
     * @method static _IH_WithdrawAccount_QB query()
     * @method static _IH_WithdrawAccount_QB with(array|string $relations)
     * @method _IH_WithdrawAccount_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WithdrawAccount_C|WithdrawAccount[] all()
     * @ownLinks user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id|withdraw_method_id,\App\Models\WithdrawMethod,id
     * @mixin _IH_WithdrawAccount_QB
     */
    class WithdrawAccount extends Model {}

    /**
     * @property int $id
     * @property string $icon
     * @property string $name
     * @property string $currency
     * @property float $rate
     * @property string $required_time
     * @property string $required_time_format
     * @property float $charge
     * @property string $charge_type
     * @property string $min_withdraw
     * @property string $max_withdraw
     * @property string $fields
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_WithdrawMethod_QB onWriteConnection()
     * @method _IH_WithdrawMethod_QB newQuery()
     * @method static _IH_WithdrawMethod_QB on(null|string $connection = null)
     * @method static _IH_WithdrawMethod_QB query()
     * @method static _IH_WithdrawMethod_QB with(array|string $relations)
     * @method _IH_WithdrawMethod_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WithdrawMethod_C|WithdrawMethod[] all()
     * @foreignLinks id,\App\Models\WithdrawAccount,withdraw_method_id
     * @mixin _IH_WithdrawMethod_QB
     */
    class WithdrawMethod extends Model {}
}
