<?php //4567b4af2b582ecc2c4f4177999fddb4
/** @noinspection all */

namespace LaravelIdea\Helper\JoeDixon\Translation {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use JoeDixon\Translation\Language;
    use JoeDixon\Translation\Translation;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Language|null getOrPut($key, $value)
     * @method Language|$this shift(int $count = 1)
     * @method Language|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Language|$this pop(int $count = 1)
     * @method Language|null pull($key, \Closure $default = null)
     * @method Language|null last(callable $callback = null, \Closure $default = null)
     * @method Language|$this random(callable|int|null $number = null)
     * @method Language|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Language|null get($key, \Closure $default = null)
     * @method Language|null first(callable $callback = null, \Closure $default = null)
     * @method Language|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Language|null find($key, $default = null)
     * @method Language[] all()
     */
    class _IH_Language_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Language[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Language_QB whereId($value)
     * @method _IH_Language_QB whereFlag($value)
     * @method _IH_Language_QB whereName($value)
     * @method _IH_Language_QB whereLocale($value)
     * @method _IH_Language_QB whereIsDefault($value)
     * @method _IH_Language_QB whereStatus($value)
     * @method _IH_Language_QB whereCreatedAt($value)
     * @method _IH_Language_QB whereUpdatedAt($value)
     * @method Language baseSole(array|string $columns = ['*'])
     * @method Language create(array $attributes = [])
     * @method _IH_Language_C|Language[] cursor()
     * @method Language|null|_IH_Language_C|Language[] find($id, array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Language|_IH_Language_C|Language[] findOrFail($id, array|string $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrNew($id, array|string $columns = ['*'])
     * @method Language first(array|string $columns = ['*'])
     * @method Language firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Language firstOrCreate(array $attributes = [], array $values = [])
     * @method Language firstOrFail(array|string $columns = ['*'])
     * @method Language firstOrNew(array $attributes = [], array $values = [])
     * @method Language firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Language forceCreate(array $attributes)
     * @method _IH_Language_C|Language[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Language_C|Language[] get(array|string $columns = ['*'])
     * @method Language getModel()
     * @method Language[] getModels(array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] hydrate(array $items)
     * @method Language make(array $attributes = [])
     * @method Language newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Language[]|_IH_Language_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Language[]|_IH_Language_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Language sole(array|string $columns = ['*'])
     * @method Language updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Language_QB extends _BaseBuilder {}

    /**
     * @method Translation|null getOrPut($key, $value)
     * @method Translation|$this shift(int $count = 1)
     * @method Translation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Translation|$this pop(int $count = 1)
     * @method Translation|null pull($key, \Closure $default = null)
     * @method Translation|null last(callable $callback = null, \Closure $default = null)
     * @method Translation|$this random(callable|int|null $number = null)
     * @method Translation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Translation|null get($key, \Closure $default = null)
     * @method Translation|null first(callable $callback = null, \Closure $default = null)
     * @method Translation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Translation|null find($key, $default = null)
     * @method Translation[] all()
     */
    class _IH_Translation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Translation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Translation baseSole(array|string $columns = ['*'])
     * @method Translation create(array $attributes = [])
     * @method _IH_Translation_C|Translation[] cursor()
     * @method Translation|null|_IH_Translation_C|Translation[] find($id, array|string $columns = ['*'])
     * @method _IH_Translation_C|Translation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Translation|_IH_Translation_C|Translation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Translation|_IH_Translation_C|Translation[] findOrFail($id, array|string $columns = ['*'])
     * @method Translation|_IH_Translation_C|Translation[] findOrNew($id, array|string $columns = ['*'])
     * @method Translation first(array|string $columns = ['*'])
     * @method Translation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Translation firstOrCreate(array $attributes = [], array $values = [])
     * @method Translation firstOrFail(array|string $columns = ['*'])
     * @method Translation firstOrNew(array $attributes = [], array $values = [])
     * @method Translation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Translation forceCreate(array $attributes)
     * @method _IH_Translation_C|Translation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Translation_C|Translation[] get(array|string $columns = ['*'])
     * @method Translation getModel()
     * @method Translation[] getModels(array|string $columns = ['*'])
     * @method _IH_Translation_C|Translation[] hydrate(array $items)
     * @method Translation make(array $attributes = [])
     * @method Translation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Translation[]|_IH_Translation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Translation[]|_IH_Translation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Translation sole(array|string $columns = ['*'])
     * @method Translation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Translation_QB extends _BaseBuilder {}
}
