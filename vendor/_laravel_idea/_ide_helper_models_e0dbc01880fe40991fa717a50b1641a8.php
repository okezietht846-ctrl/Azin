<?php //e78586b426d464530c6edbd974658895
/** @noinspection all */

namespace Shakurov\Coinbase\Models {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\Shakurov\Coinbase\Models\_IH_CoinbaseWebhookCall_C;
    use LaravelIdea\Helper\Shakurov\Coinbase\Models\_IH_CoinbaseWebhookCall_QB;

    /**
     * @method static _IH_CoinbaseWebhookCall_QB onWriteConnection()
     * @method _IH_CoinbaseWebhookCall_QB newQuery()
     * @method static _IH_CoinbaseWebhookCall_QB on(null|string $connection = null)
     * @method static _IH_CoinbaseWebhookCall_QB query()
     * @method static _IH_CoinbaseWebhookCall_QB with(array|string $relations)
     * @method _IH_CoinbaseWebhookCall_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] all()
     * @mixin _IH_CoinbaseWebhookCall_QB
     */
    class CoinbaseWebhookCall extends Model {}
}
