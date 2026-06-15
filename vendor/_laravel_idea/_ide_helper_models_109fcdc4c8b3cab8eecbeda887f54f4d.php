<?php //fb93221976f03e883371e5e03b67d9b7
/** @noinspection all */

namespace Coderflex\LaravelTicket\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Category_C;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Category_QB;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Label_C;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Label_QB;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Message_C;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Message_QB;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Ticket_C;
    use LaravelIdea\Helper\Coderflex\LaravelTicket\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\Illuminate\Foundation\Auth\_IH_User_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property bool $is_visible
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Ticket_C|Ticket[] $tickets
     * @property-read int $tickets_count
     * @method BelongsToMany|_IH_Ticket_QB tickets()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property bool $is_visible
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Ticket_C|Ticket[] $tickets
     * @property-read int $tickets_count
     * @method BelongsToMany|_IH_Ticket_QB tickets()
     * @method static _IH_Label_QB onWriteConnection()
     * @method _IH_Label_QB newQuery()
     * @method static _IH_Label_QB on(null|string $connection = null)
     * @method static _IH_Label_QB query()
     * @method static _IH_Label_QB with(array|string $relations)
     * @method _IH_Label_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Label_C|Label[] all()
     * @mixin _IH_Label_QB
     */
    class Label extends Model {}

    /**
     * @property Ticket $ticket
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
     * @property _IH_Message_C|Message[] $messageAsUser
     * @property-read int $message_as_user_count
     * @method HasMany|_IH_Message_QB messageAsUser()
     * @property _IH_Message_C|Message[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_Message_QB messages()
     * @property _IH_Category_C|Category[] $syncCategories
     * @property-read int $sync_categories_count
     * @method BelongsToMany|_IH_Category_QB syncCategories()
     * @property _IH_Label_C|Label[] $syncLabels
     * @property-read int $sync_labels_count
     * @method BelongsToMany|_IH_Label_QB syncLabels()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Ticket_QB onWriteConnection()
     * @method _IH_Ticket_QB newQuery()
     * @method static _IH_Ticket_QB on(null|string $connection = null)
     * @method static _IH_Ticket_QB query()
     * @method static _IH_Ticket_QB with(array|string $relations)
     * @method _IH_Ticket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ticket_C|Ticket[] all()
     * @ownLinks user_id,\PragmaRX\Google2FALaravel\Tests\Support\User,id
     * @mixin _IH_Ticket_QB
     */
    class Ticket extends Model {}
}
