<?php //19f1b236a42e8fb551b08f7b1a6684d8
/** @noinspection all */

namespace LaravelIdea\Helper\Shakurov\Coinbase\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

    /**
     * @method CoinbaseWebhookCall|null getOrPut($key, $value)
     * @method CoinbaseWebhookCall|$this shift(int $count = 1)
     * @method CoinbaseWebhookCall|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CoinbaseWebhookCall|$this pop(int $count = 1)
     * @method CoinbaseWebhookCall|null pull($key, \Closure $default = null)
     * @method CoinbaseWebhookCall|null last(callable $callback = null, \Closure $default = null)
     * @method CoinbaseWebhookCall|$this random(callable|int|null $number = null)
     * @method CoinbaseWebhookCall|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CoinbaseWebhookCall|null get($key, \Closure $default = null)
     * @method CoinbaseWebhookCall|null first(callable $callback = null, \Closure $default = null)
     * @method CoinbaseWebhookCall|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CoinbaseWebhookCall|null find($key, $default = null)
     * @method CoinbaseWebhookCall[] all()
     */
    class _IH_CoinbaseWebhookCall_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CoinbaseWebhookCall[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CoinbaseWebhookCall baseSole(array|string $columns = ['*'])
     * @method CoinbaseWebhookCall create(array $attributes = [])
     * @method _IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] cursor()
     * @method CoinbaseWebhookCall|null|_IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] find($id, array|string $columns = ['*'])
     * @method _IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CoinbaseWebhookCall|_IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CoinbaseWebhookCall|_IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] findOrFail($id, array|string $columns = ['*'])
     * @method CoinbaseWebhookCall|_IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] findOrNew($id, array|string $columns = ['*'])
     * @method CoinbaseWebhookCall first(array|string $columns = ['*'])
     * @method CoinbaseWebhookCall firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CoinbaseWebhookCall firstOrCreate(array $attributes = [], array $values = [])
     * @method CoinbaseWebhookCall firstOrFail(array|string $columns = ['*'])
     * @method CoinbaseWebhookCall firstOrNew(array $attributes = [], array $values = [])
     * @method CoinbaseWebhookCall firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CoinbaseWebhookCall forceCreate(array $attributes)
     * @method _IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] get(array|string $columns = ['*'])
     * @method CoinbaseWebhookCall getModel()
     * @method CoinbaseWebhookCall[] getModels(array|string $columns = ['*'])
     * @method _IH_CoinbaseWebhookCall_C|CoinbaseWebhookCall[] hydrate(array $items)
     * @method CoinbaseWebhookCall make(array $attributes = [])
     * @method CoinbaseWebhookCall newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CoinbaseWebhookCall[]|_IH_CoinbaseWebhookCall_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CoinbaseWebhookCall[]|_IH_CoinbaseWebhookCall_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CoinbaseWebhookCall sole(array|string $columns = ['*'])
     * @method CoinbaseWebhookCall updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CoinbaseWebhookCall_QB extends _BaseBuilder {}
}
