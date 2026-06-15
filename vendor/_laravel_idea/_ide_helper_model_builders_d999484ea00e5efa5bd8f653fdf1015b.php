<?php //95d43a2557e2d205f25515bca50f6887
/** @noinspection all */

namespace LaravelIdea\Helper\Coderflex\LaravelTicket\Models {

    use Coderflex\LaravelTicket\Models\Category;
    use Coderflex\LaravelTicket\Models\Label;
    use Coderflex\LaravelTicket\Models\Message;
    use Coderflex\LaravelTicket\Models\Ticket;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereName($value)
     * @method _IH_Category_QB whereSlug($value)
     * @method _IH_Category_QB whereIsVisible($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Category_QB hidden()
     * @method _IH_Category_QB visible()
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method Label|null getOrPut($key, $value)
     * @method Label|$this shift(int $count = 1)
     * @method Label|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Label|$this pop(int $count = 1)
     * @method Label|null pull($key, \Closure $default = null)
     * @method Label|null last(callable $callback = null, \Closure $default = null)
     * @method Label|$this random(callable|int|null $number = null)
     * @method Label|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Label|null get($key, \Closure $default = null)
     * @method Label|null first(callable $callback = null, \Closure $default = null)
     * @method Label|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Label|null find($key, $default = null)
     * @method Label[] all()
     */
    class _IH_Label_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Label[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Label_QB whereId($value)
     * @method _IH_Label_QB whereName($value)
     * @method _IH_Label_QB whereSlug($value)
     * @method _IH_Label_QB whereIsVisible($value)
     * @method _IH_Label_QB whereCreatedAt($value)
     * @method _IH_Label_QB whereUpdatedAt($value)
     * @method Label baseSole(array|string $columns = ['*'])
     * @method Label create(array $attributes = [])
     * @method _IH_Label_C|Label[] cursor()
     * @method Label|null|_IH_Label_C|Label[] find($id, array|string $columns = ['*'])
     * @method _IH_Label_C|Label[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Label|_IH_Label_C|Label[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Label|_IH_Label_C|Label[] findOrFail($id, array|string $columns = ['*'])
     * @method Label|_IH_Label_C|Label[] findOrNew($id, array|string $columns = ['*'])
     * @method Label first(array|string $columns = ['*'])
     * @method Label firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Label firstOrCreate(array $attributes = [], array $values = [])
     * @method Label firstOrFail(array|string $columns = ['*'])
     * @method Label firstOrNew(array $attributes = [], array $values = [])
     * @method Label firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Label forceCreate(array $attributes)
     * @method _IH_Label_C|Label[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Label_C|Label[] get(array|string $columns = ['*'])
     * @method Label getModel()
     * @method Label[] getModels(array|string $columns = ['*'])
     * @method _IH_Label_C|Label[] hydrate(array $items)
     * @method Label make(array $attributes = [])
     * @method Label newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Label[]|_IH_Label_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Label[]|_IH_Label_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Label sole(array|string $columns = ['*'])
     * @method Label updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Label_QB hidden()
     * @method _IH_Label_QB visible()
     */
    class _IH_Label_QB extends _BaseBuilder {}

    /**
     * @method Message|null getOrPut($key, $value)
     * @method Message|$this shift(int $count = 1)
     * @method Message|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Message|$this pop(int $count = 1)
     * @method Message|null pull($key, \Closure $default = null)
     * @method Message|null last(callable $callback = null, \Closure $default = null)
     * @method Message|$this random(callable|int|null $number = null)
     * @method Message|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Message|null get($key, \Closure $default = null)
     * @method Message|null first(callable $callback = null, \Closure $default = null)
     * @method Message|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Message|null find($key, $default = null)
     * @method Message[] all()
     */
    class _IH_Message_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Message[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Message baseSole(array|string $columns = ['*'])
     * @method Message create(array $attributes = [])
     * @method _IH_Message_C|Message[] cursor()
     * @method Message|null|_IH_Message_C|Message[] find($id, array|string $columns = ['*'])
     * @method _IH_Message_C|Message[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Message|_IH_Message_C|Message[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Message|_IH_Message_C|Message[] findOrFail($id, array|string $columns = ['*'])
     * @method Message|_IH_Message_C|Message[] findOrNew($id, array|string $columns = ['*'])
     * @method Message first(array|string $columns = ['*'])
     * @method Message firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Message firstOrCreate(array $attributes = [], array $values = [])
     * @method Message firstOrFail(array|string $columns = ['*'])
     * @method Message firstOrNew(array $attributes = [], array $values = [])
     * @method Message firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Message forceCreate(array $attributes)
     * @method _IH_Message_C|Message[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Message_C|Message[] get(array|string $columns = ['*'])
     * @method Message getModel()
     * @method Message[] getModels(array|string $columns = ['*'])
     * @method _IH_Message_C|Message[] hydrate(array $items)
     * @method Message make(array $attributes = [])
     * @method Message newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Message[]|_IH_Message_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Message[]|_IH_Message_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Message sole(array|string $columns = ['*'])
     * @method Message updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Message_QB extends _BaseBuilder {}

    /**
     * @method Ticket|null getOrPut($key, $value)
     * @method Ticket|$this shift(int $count = 1)
     * @method Ticket|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Ticket|$this pop(int $count = 1)
     * @method Ticket|null pull($key, \Closure $default = null)
     * @method Ticket|null last(callable $callback = null, \Closure $default = null)
     * @method Ticket|$this random(callable|int|null $number = null)
     * @method Ticket|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Ticket|null get($key, \Closure $default = null)
     * @method Ticket|null first(callable $callback = null, \Closure $default = null)
     * @method Ticket|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Ticket|null find($key, $default = null)
     * @method Ticket[] all()
     */
    class _IH_Ticket_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ticket[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Ticket_QB whereId($value)
     * @method _IH_Ticket_QB whereUuid($value)
     * @method _IH_Ticket_QB whereUserId($value)
     * @method _IH_Ticket_QB whereTitle($value)
     * @method _IH_Ticket_QB whereMessage($value)
     * @method _IH_Ticket_QB whereAttach($value)
     * @method _IH_Ticket_QB wherePriority($value)
     * @method _IH_Ticket_QB whereStatus($value)
     * @method _IH_Ticket_QB whereIsResolved($value)
     * @method _IH_Ticket_QB whereIsLocked($value)
     * @method _IH_Ticket_QB whereCreatedAt($value)
     * @method _IH_Ticket_QB whereUpdatedAt($value)
     * @method Ticket baseSole(array|string $columns = ['*'])
     * @method Ticket create(array $attributes = [])
     * @method _IH_Ticket_C|Ticket[] cursor()
     * @method Ticket|null|_IH_Ticket_C|Ticket[] find($id, array|string $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrFail($id, array|string $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrNew($id, array|string $columns = ['*'])
     * @method Ticket first(array|string $columns = ['*'])
     * @method Ticket firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ticket firstOrCreate(array $attributes = [], array $values = [])
     * @method Ticket firstOrFail(array|string $columns = ['*'])
     * @method Ticket firstOrNew(array $attributes = [], array $values = [])
     * @method Ticket firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ticket forceCreate(array $attributes)
     * @method _IH_Ticket_C|Ticket[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ticket_C|Ticket[] get(array|string $columns = ['*'])
     * @method Ticket getModel()
     * @method Ticket[] getModels(array|string $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] hydrate(array $items)
     * @method Ticket make(array $attributes = [])
     * @method Ticket newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ticket[]|_IH_Ticket_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ticket[]|_IH_Ticket_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ticket sole(array|string $columns = ['*'])
     * @method Ticket updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Ticket_QB closed()
     * @method _IH_Ticket_QB locked()
     * @method _IH_Ticket_QB opened()
     * @method _IH_Ticket_QB resolved()
     * @method _IH_Ticket_QB unlocked()
     * @method _IH_Ticket_QB unresolved()
     * @method _IH_Ticket_QB withHighPriority()
     * @method _IH_Ticket_QB withLowPriority()
     * @method _IH_Ticket_QB withNormalPriority()
     * @method _IH_Ticket_QB withPriority(string $priority)
     */
    class _IH_Ticket_QB extends _BaseBuilder {}
}
