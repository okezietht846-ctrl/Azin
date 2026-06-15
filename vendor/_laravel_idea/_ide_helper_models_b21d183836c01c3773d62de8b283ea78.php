<?php //a7b5eaa12af81078d0cfc9d0a00ab63d
/** @noinspection all */

namespace JoeDixon\Translation {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\JoeDixon\Translation\_IH_Language_C;
    use LaravelIdea\Helper\JoeDixon\Translation\_IH_Language_QB;
    use LaravelIdea\Helper\JoeDixon\Translation\_IH_Translation_C;
    use LaravelIdea\Helper\JoeDixon\Translation\_IH_Translation_QB;

    /**
     * @property int $id
     * @property string|null $flag
     * @property string $name
     * @property string $locale
     * @property bool $is_default
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Translation_C|Translation[] $translations
     * @property-read int $translations_count
     * @method HasMany|_IH_Translation_QB translations()
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
     * @property Language $language
     * @method BelongsTo|_IH_Language_QB language()
     * @method static _IH_Translation_QB onWriteConnection()
     * @method _IH_Translation_QB newQuery()
     * @method static _IH_Translation_QB on(null|string $connection = null)
     * @method static _IH_Translation_QB query()
     * @method static _IH_Translation_QB with(array|string $relations)
     * @method _IH_Translation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Translation_C|Translation[] all()
     * @mixin _IH_Translation_QB
     */
    class Translation extends Model {}
}
