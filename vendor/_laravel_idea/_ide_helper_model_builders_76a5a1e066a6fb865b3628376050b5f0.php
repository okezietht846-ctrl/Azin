<?php //aac3fed7a5fbc2dfeb93d1b6b98d7041
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Admin;
    use App\Models\Blog;
    use App\Models\CustomCss;
    use App\Models\EmailTemplate;
    use App\Models\Gateway;
    use App\Models\Invest;
    use App\Models\Kyc;
    use App\Models\LandingContent;
    use App\Models\LandingPage;
    use App\Models\Language;
    use App\Models\Message;
    use App\Models\Navigation;
    use App\Models\Page;
    use App\Models\PageSetting;
    use App\Models\Plugin;
    use App\Models\Ranking;
    use App\Models\Referral;
    use App\Models\ReferralLink;
    use App\Models\ReferralProgram;
    use App\Models\ReferralRelationship;
    use App\Models\ReferralTarget;
    use App\Models\Schedule;
    use App\Models\Schema;
    use App\Models\Setting;
    use App\Models\Social;
    use App\Models\Subscription;
    use App\Models\Ticket;
    use App\Models\Transaction;
    use App\Models\User;
    use App\Models\WithdrawAccount;
    use App\Models\WithdrawMethod;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;

    /**
     * @method Admin|null getOrPut($key, $value)
     * @method Admin|$this shift(int $count = 1)
     * @method Admin|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Admin|$this pop(int $count = 1)
     * @method Admin|null pull($key, \Closure $default = null)
     * @method Admin|null last(callable $callback = null, \Closure $default = null)
     * @method Admin|$this random(callable|int|null $number = null)
     * @method Admin|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Admin|null get($key, \Closure $default = null)
     * @method Admin|null first(callable $callback = null, \Closure $default = null)
     * @method Admin|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Admin|null find($key, $default = null)
     * @method Admin[] all()
     */
    class _IH_Admin_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Admin[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Admin_QB whereId($value)
     * @method _IH_Admin_QB whereAvatar($value)
     * @method _IH_Admin_QB whereName($value)
     * @method _IH_Admin_QB whereEmail($value)
     * @method _IH_Admin_QB wherePhone($value)
     * @method _IH_Admin_QB wherePassword($value)
     * @method _IH_Admin_QB whereStatus($value)
     * @method _IH_Admin_QB whereCreatedAt($value)
     * @method _IH_Admin_QB whereUpdatedAt($value)
     * @method Admin baseSole(array|string $columns = ['*'])
     * @method Admin create(array $attributes = [])
     * @method _IH_Admin_C|Admin[] cursor()
     * @method Admin|null|_IH_Admin_C|Admin[] find($id, array|string $columns = ['*'])
     * @method _IH_Admin_C|Admin[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Admin|_IH_Admin_C|Admin[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Admin|_IH_Admin_C|Admin[] findOrFail($id, array|string $columns = ['*'])
     * @method Admin|_IH_Admin_C|Admin[] findOrNew($id, array|string $columns = ['*'])
     * @method Admin first(array|string $columns = ['*'])
     * @method Admin firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Admin firstOrCreate(array $attributes = [], array $values = [])
     * @method Admin firstOrFail(array|string $columns = ['*'])
     * @method Admin firstOrNew(array $attributes = [], array $values = [])
     * @method Admin firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Admin forceCreate(array $attributes)
     * @method _IH_Admin_C|Admin[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Admin_C|Admin[] get(array|string $columns = ['*'])
     * @method Admin getModel()
     * @method Admin[] getModels(array|string $columns = ['*'])
     * @method _IH_Admin_C|Admin[] hydrate(array $items)
     * @method Admin make(array $attributes = [])
     * @method Admin newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Admin[]|_IH_Admin_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Admin[]|_IH_Admin_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Admin sole(array|string $columns = ['*'])
     * @method Admin updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Admin_QB permission(array|Collection|int|Permission|string $permissions)
     * @method _IH_Admin_QB role(array|Collection|int|Role|string $roles, string $guard = null)
     */
    class _IH_Admin_QB extends _BaseBuilder {}

    /**
     * @method Blog|null getOrPut($key, $value)
     * @method Blog|$this shift(int $count = 1)
     * @method Blog|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|$this pop(int $count = 1)
     * @method Blog|null pull($key, \Closure $default = null)
     * @method Blog|null last(callable $callback = null, \Closure $default = null)
     * @method Blog|$this random(callable|int|null $number = null)
     * @method Blog|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|null get($key, \Closure $default = null)
     * @method Blog|null first(callable $callback = null, \Closure $default = null)
     * @method Blog|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Blog|null find($key, $default = null)
     * @method Blog[] all()
     */
    class _IH_Blog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Blog[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Blog_QB whereId($value)
     * @method _IH_Blog_QB whereCover($value)
     * @method _IH_Blog_QB whereTitle($value)
     * @method _IH_Blog_QB whereDetails($value)
     * @method _IH_Blog_QB whereCreatedAt($value)
     * @method _IH_Blog_QB whereUpdatedAt($value)
     * @method Blog baseSole(array|string $columns = ['*'])
     * @method Blog create(array $attributes = [])
     * @method _IH_Blog_C|Blog[] cursor()
     * @method Blog|null|_IH_Blog_C|Blog[] find($id, array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog|_IH_Blog_C|Blog[] findOrFail($id, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOrNew($id, array|string $columns = ['*'])
     * @method Blog first(array|string $columns = ['*'])
     * @method Blog firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog firstOrCreate(array $attributes = [], array $values = [])
     * @method Blog firstOrFail(array|string $columns = ['*'])
     * @method Blog firstOrNew(array $attributes = [], array $values = [])
     * @method Blog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Blog forceCreate(array $attributes)
     * @method _IH_Blog_C|Blog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Blog_C|Blog[] get(array|string $columns = ['*'])
     * @method Blog getModel()
     * @method Blog[] getModels(array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] hydrate(array $items)
     * @method Blog make(array $attributes = [])
     * @method Blog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Blog[]|_IH_Blog_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Blog[]|_IH_Blog_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Blog sole(array|string $columns = ['*'])
     * @method Blog updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Blog_QB extends _BaseBuilder {}

    /**
     * @method CustomCss|null getOrPut($key, $value)
     * @method CustomCss|$this shift(int $count = 1)
     * @method CustomCss|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CustomCss|$this pop(int $count = 1)
     * @method CustomCss|null pull($key, \Closure $default = null)
     * @method CustomCss|null last(callable $callback = null, \Closure $default = null)
     * @method CustomCss|$this random(callable|int|null $number = null)
     * @method CustomCss|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CustomCss|null get($key, \Closure $default = null)
     * @method CustomCss|null first(callable $callback = null, \Closure $default = null)
     * @method CustomCss|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CustomCss|null find($key, $default = null)
     * @method CustomCss[] all()
     */
    class _IH_CustomCss_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomCss[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CustomCss_QB whereId($value)
     * @method _IH_CustomCss_QB whereCss($value)
     * @method _IH_CustomCss_QB whereCreatedAt($value)
     * @method _IH_CustomCss_QB whereUpdatedAt($value)
     * @method CustomCss baseSole(array|string $columns = ['*'])
     * @method CustomCss create(array $attributes = [])
     * @method _IH_CustomCss_C|CustomCss[] cursor()
     * @method CustomCss|null|_IH_CustomCss_C|CustomCss[] find($id, array|string $columns = ['*'])
     * @method _IH_CustomCss_C|CustomCss[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CustomCss|_IH_CustomCss_C|CustomCss[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CustomCss|_IH_CustomCss_C|CustomCss[] findOrFail($id, array|string $columns = ['*'])
     * @method CustomCss|_IH_CustomCss_C|CustomCss[] findOrNew($id, array|string $columns = ['*'])
     * @method CustomCss first(array|string $columns = ['*'])
     * @method CustomCss firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CustomCss firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomCss firstOrFail(array|string $columns = ['*'])
     * @method CustomCss firstOrNew(array $attributes = [], array $values = [])
     * @method CustomCss firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomCss forceCreate(array $attributes)
     * @method _IH_CustomCss_C|CustomCss[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomCss_C|CustomCss[] get(array|string $columns = ['*'])
     * @method CustomCss getModel()
     * @method CustomCss[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomCss_C|CustomCss[] hydrate(array $items)
     * @method CustomCss make(array $attributes = [])
     * @method CustomCss newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomCss[]|_IH_CustomCss_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomCss[]|_IH_CustomCss_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomCss sole(array|string $columns = ['*'])
     * @method CustomCss updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomCss_QB extends _BaseBuilder {}

    /**
     * @method EmailTemplate|null getOrPut($key, $value)
     * @method EmailTemplate|$this shift(int $count = 1)
     * @method EmailTemplate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method EmailTemplate|$this pop(int $count = 1)
     * @method EmailTemplate|null pull($key, \Closure $default = null)
     * @method EmailTemplate|null last(callable $callback = null, \Closure $default = null)
     * @method EmailTemplate|$this random(callable|int|null $number = null)
     * @method EmailTemplate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method EmailTemplate|null get($key, \Closure $default = null)
     * @method EmailTemplate|null first(callable $callback = null, \Closure $default = null)
     * @method EmailTemplate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method EmailTemplate|null find($key, $default = null)
     * @method EmailTemplate[] all()
     */
    class _IH_EmailTemplate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return EmailTemplate[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_EmailTemplate_QB whereId($value)
     * @method _IH_EmailTemplate_QB whereName($value)
     * @method _IH_EmailTemplate_QB whereCode($value)
     * @method _IH_EmailTemplate_QB whereFor($value)
     * @method _IH_EmailTemplate_QB whereBanner($value)
     * @method _IH_EmailTemplate_QB whereTitle($value)
     * @method _IH_EmailTemplate_QB whereSubject($value)
     * @method _IH_EmailTemplate_QB whereSalutation($value)
     * @method _IH_EmailTemplate_QB whereMessageBody($value)
     * @method _IH_EmailTemplate_QB whereButtonLevel($value)
     * @method _IH_EmailTemplate_QB whereButtonLink($value)
     * @method _IH_EmailTemplate_QB whereFooterStatus($value)
     * @method _IH_EmailTemplate_QB whereFooterBody($value)
     * @method _IH_EmailTemplate_QB whereBottomStatus($value)
     * @method _IH_EmailTemplate_QB whereBottomTitle($value)
     * @method _IH_EmailTemplate_QB whereBottomBody($value)
     * @method _IH_EmailTemplate_QB whereShortCodes($value)
     * @method _IH_EmailTemplate_QB whereStatus($value)
     * @method _IH_EmailTemplate_QB whereCreatedAt($value)
     * @method _IH_EmailTemplate_QB whereUpdatedAt($value)
     * @method EmailTemplate baseSole(array|string $columns = ['*'])
     * @method EmailTemplate create(array $attributes = [])
     * @method _IH_EmailTemplate_C|EmailTemplate[] cursor()
     * @method EmailTemplate|null|_IH_EmailTemplate_C|EmailTemplate[] find($id, array|string $columns = ['*'])
     * @method _IH_EmailTemplate_C|EmailTemplate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method EmailTemplate|_IH_EmailTemplate_C|EmailTemplate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method EmailTemplate|_IH_EmailTemplate_C|EmailTemplate[] findOrFail($id, array|string $columns = ['*'])
     * @method EmailTemplate|_IH_EmailTemplate_C|EmailTemplate[] findOrNew($id, array|string $columns = ['*'])
     * @method EmailTemplate first(array|string $columns = ['*'])
     * @method EmailTemplate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method EmailTemplate firstOrCreate(array $attributes = [], array $values = [])
     * @method EmailTemplate firstOrFail(array|string $columns = ['*'])
     * @method EmailTemplate firstOrNew(array $attributes = [], array $values = [])
     * @method EmailTemplate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EmailTemplate forceCreate(array $attributes)
     * @method _IH_EmailTemplate_C|EmailTemplate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_EmailTemplate_C|EmailTemplate[] get(array|string $columns = ['*'])
     * @method EmailTemplate getModel()
     * @method EmailTemplate[] getModels(array|string $columns = ['*'])
     * @method _IH_EmailTemplate_C|EmailTemplate[] hydrate(array $items)
     * @method EmailTemplate make(array $attributes = [])
     * @method EmailTemplate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EmailTemplate[]|_IH_EmailTemplate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|EmailTemplate[]|_IH_EmailTemplate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EmailTemplate sole(array|string $columns = ['*'])
     * @method EmailTemplate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_EmailTemplate_QB extends _BaseBuilder {}

    /**
     * @method Gateway|null getOrPut($key, $value)
     * @method Gateway|$this shift(int $count = 1)
     * @method Gateway|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Gateway|$this pop(int $count = 1)
     * @method Gateway|null pull($key, \Closure $default = null)
     * @method Gateway|null last(callable $callback = null, \Closure $default = null)
     * @method Gateway|$this random(callable|int|null $number = null)
     * @method Gateway|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Gateway|null get($key, \Closure $default = null)
     * @method Gateway|null first(callable $callback = null, \Closure $default = null)
     * @method Gateway|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Gateway|null find($key, $default = null)
     * @method Gateway[] all()
     */
    class _IH_Gateway_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Gateway[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Gateway_QB whereId($value)
     * @method _IH_Gateway_QB whereLogo($value)
     * @method _IH_Gateway_QB whereName($value)
     * @method _IH_Gateway_QB whereType($value)
     * @method _IH_Gateway_QB whereGatewayCode($value)
     * @method _IH_Gateway_QB whereCharge($value)
     * @method _IH_Gateway_QB whereChargeType($value)
     * @method _IH_Gateway_QB whereMinimumDeposit($value)
     * @method _IH_Gateway_QB whereMaximumDeposit($value)
     * @method _IH_Gateway_QB whereRate($value)
     * @method _IH_Gateway_QB whereSupportedCurrencies($value)
     * @method _IH_Gateway_QB whereCurrency($value)
     * @method _IH_Gateway_QB whereCurrencySymbol($value)
     * @method _IH_Gateway_QB whereCredentials($value)
     * @method _IH_Gateway_QB wherePaymentDetails($value)
     * @method _IH_Gateway_QB whereStatus($value)
     * @method _IH_Gateway_QB whereCreatedAt($value)
     * @method _IH_Gateway_QB whereUpdatedAt($value)
     * @method Gateway baseSole(array|string $columns = ['*'])
     * @method Gateway create(array $attributes = [])
     * @method _IH_Gateway_C|Gateway[] cursor()
     * @method Gateway|null|_IH_Gateway_C|Gateway[] find($id, array|string $columns = ['*'])
     * @method _IH_Gateway_C|Gateway[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Gateway|_IH_Gateway_C|Gateway[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Gateway|_IH_Gateway_C|Gateway[] findOrFail($id, array|string $columns = ['*'])
     * @method Gateway|_IH_Gateway_C|Gateway[] findOrNew($id, array|string $columns = ['*'])
     * @method Gateway first(array|string $columns = ['*'])
     * @method Gateway firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Gateway firstOrCreate(array $attributes = [], array $values = [])
     * @method Gateway firstOrFail(array|string $columns = ['*'])
     * @method Gateway firstOrNew(array $attributes = [], array $values = [])
     * @method Gateway firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Gateway forceCreate(array $attributes)
     * @method _IH_Gateway_C|Gateway[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Gateway_C|Gateway[] get(array|string $columns = ['*'])
     * @method Gateway getModel()
     * @method Gateway[] getModels(array|string $columns = ['*'])
     * @method _IH_Gateway_C|Gateway[] hydrate(array $items)
     * @method Gateway make(array $attributes = [])
     * @method Gateway newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Gateway[]|_IH_Gateway_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Gateway[]|_IH_Gateway_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Gateway sole(array|string $columns = ['*'])
     * @method Gateway updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Gateway_QB code($code)
     */
    class _IH_Gateway_QB extends _BaseBuilder {}

    /**
     * @method Invest|null getOrPut($key, $value)
     * @method Invest|$this shift(int $count = 1)
     * @method Invest|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Invest|$this pop(int $count = 1)
     * @method Invest|null pull($key, \Closure $default = null)
     * @method Invest|null last(callable $callback = null, \Closure $default = null)
     * @method Invest|$this random(callable|int|null $number = null)
     * @method Invest|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Invest|null get($key, \Closure $default = null)
     * @method Invest|null first(callable $callback = null, \Closure $default = null)
     * @method Invest|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Invest|null find($key, $default = null)
     * @method Invest[] all()
     */
    class _IH_Invest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Invest[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Invest_QB whereId($value)
     * @method _IH_Invest_QB whereUserId($value)
     * @method _IH_Invest_QB whereSchemaId($value)
     * @method _IH_Invest_QB whereTransactionId($value)
     * @method _IH_Invest_QB whereInvestAmount($value)
     * @method _IH_Invest_QB whereAlreadyReturnProfit($value)
     * @method _IH_Invest_QB whereTotalProfitAmount($value)
     * @method _IH_Invest_QB whereLastProfitTime($value)
     * @method _IH_Invest_QB whereNextProfitTime($value)
     * @method _IH_Invest_QB whereCapitalBack($value)
     * @method _IH_Invest_QB whereInterest($value)
     * @method _IH_Invest_QB whereInterestType($value)
     * @method _IH_Invest_QB whereReturnType($value)
     * @method _IH_Invest_QB whereNumberOfPeriod($value)
     * @method _IH_Invest_QB wherePeriodHours($value)
     * @method _IH_Invest_QB whereWallet($value)
     * @method _IH_Invest_QB whereStatus($value)
     * @method _IH_Invest_QB whereCreatedAt($value)
     * @method _IH_Invest_QB whereUpdatedAt($value)
     * @method Invest baseSole(array|string $columns = ['*'])
     * @method Invest create(array $attributes = [])
     * @method _IH_Invest_C|Invest[] cursor()
     * @method Invest|null|_IH_Invest_C|Invest[] find($id, array|string $columns = ['*'])
     * @method _IH_Invest_C|Invest[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Invest|_IH_Invest_C|Invest[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Invest|_IH_Invest_C|Invest[] findOrFail($id, array|string $columns = ['*'])
     * @method Invest|_IH_Invest_C|Invest[] findOrNew($id, array|string $columns = ['*'])
     * @method Invest first(array|string $columns = ['*'])
     * @method Invest firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Invest firstOrCreate(array $attributes = [], array $values = [])
     * @method Invest firstOrFail(array|string $columns = ['*'])
     * @method Invest firstOrNew(array $attributes = [], array $values = [])
     * @method Invest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Invest forceCreate(array $attributes)
     * @method _IH_Invest_C|Invest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Invest_C|Invest[] get(array|string $columns = ['*'])
     * @method Invest getModel()
     * @method Invest[] getModels(array|string $columns = ['*'])
     * @method _IH_Invest_C|Invest[] hydrate(array $items)
     * @method Invest make(array $attributes = [])
     * @method Invest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Invest[]|_IH_Invest_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Invest[]|_IH_Invest_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Invest sole(array|string $columns = ['*'])
     * @method Invest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Invest_QB extends _BaseBuilder {}

    /**
     * @method Kyc|null getOrPut($key, $value)
     * @method Kyc|$this shift(int $count = 1)
     * @method Kyc|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Kyc|$this pop(int $count = 1)
     * @method Kyc|null pull($key, \Closure $default = null)
     * @method Kyc|null last(callable $callback = null, \Closure $default = null)
     * @method Kyc|$this random(callable|int|null $number = null)
     * @method Kyc|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Kyc|null get($key, \Closure $default = null)
     * @method Kyc|null first(callable $callback = null, \Closure $default = null)
     * @method Kyc|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Kyc|null find($key, $default = null)
     * @method Kyc[] all()
     */
    class _IH_Kyc_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Kyc[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Kyc_QB whereId($value)
     * @method _IH_Kyc_QB whereName($value)
     * @method _IH_Kyc_QB whereFields($value)
     * @method _IH_Kyc_QB whereStatus($value)
     * @method _IH_Kyc_QB whereCreatedAt($value)
     * @method _IH_Kyc_QB whereUpdatedAt($value)
     * @method Kyc baseSole(array|string $columns = ['*'])
     * @method Kyc create(array $attributes = [])
     * @method _IH_Kyc_C|Kyc[] cursor()
     * @method Kyc|null|_IH_Kyc_C|Kyc[] find($id, array|string $columns = ['*'])
     * @method _IH_Kyc_C|Kyc[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Kyc|_IH_Kyc_C|Kyc[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Kyc|_IH_Kyc_C|Kyc[] findOrFail($id, array|string $columns = ['*'])
     * @method Kyc|_IH_Kyc_C|Kyc[] findOrNew($id, array|string $columns = ['*'])
     * @method Kyc first(array|string $columns = ['*'])
     * @method Kyc firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Kyc firstOrCreate(array $attributes = [], array $values = [])
     * @method Kyc firstOrFail(array|string $columns = ['*'])
     * @method Kyc firstOrNew(array $attributes = [], array $values = [])
     * @method Kyc firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Kyc forceCreate(array $attributes)
     * @method _IH_Kyc_C|Kyc[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Kyc_C|Kyc[] get(array|string $columns = ['*'])
     * @method Kyc getModel()
     * @method Kyc[] getModels(array|string $columns = ['*'])
     * @method _IH_Kyc_C|Kyc[] hydrate(array $items)
     * @method Kyc make(array $attributes = [])
     * @method Kyc newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Kyc[]|_IH_Kyc_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Kyc[]|_IH_Kyc_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Kyc sole(array|string $columns = ['*'])
     * @method Kyc updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Kyc_QB extends _BaseBuilder {}

    /**
     * @method LandingContent|null getOrPut($key, $value)
     * @method LandingContent|$this shift(int $count = 1)
     * @method LandingContent|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method LandingContent|$this pop(int $count = 1)
     * @method LandingContent|null pull($key, \Closure $default = null)
     * @method LandingContent|null last(callable $callback = null, \Closure $default = null)
     * @method LandingContent|$this random(callable|int|null $number = null)
     * @method LandingContent|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method LandingContent|null get($key, \Closure $default = null)
     * @method LandingContent|null first(callable $callback = null, \Closure $default = null)
     * @method LandingContent|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method LandingContent|null find($key, $default = null)
     * @method LandingContent[] all()
     */
    class _IH_LandingContent_C extends _BaseCollection {
        /**
         * @param int $size
         * @return LandingContent[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_LandingContent_QB whereId($value)
     * @method _IH_LandingContent_QB whereIcon($value)
     * @method _IH_LandingContent_QB whereTitle($value)
     * @method _IH_LandingContent_QB whereDescription($value)
     * @method _IH_LandingContent_QB whereType($value)
     * @method _IH_LandingContent_QB whereCreatedAt($value)
     * @method _IH_LandingContent_QB whereUpdatedAt($value)
     * @method LandingContent baseSole(array|string $columns = ['*'])
     * @method LandingContent create(array $attributes = [])
     * @method _IH_LandingContent_C|LandingContent[] cursor()
     * @method LandingContent|null|_IH_LandingContent_C|LandingContent[] find($id, array|string $columns = ['*'])
     * @method _IH_LandingContent_C|LandingContent[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method LandingContent|_IH_LandingContent_C|LandingContent[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LandingContent|_IH_LandingContent_C|LandingContent[] findOrFail($id, array|string $columns = ['*'])
     * @method LandingContent|_IH_LandingContent_C|LandingContent[] findOrNew($id, array|string $columns = ['*'])
     * @method LandingContent first(array|string $columns = ['*'])
     * @method LandingContent firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LandingContent firstOrCreate(array $attributes = [], array $values = [])
     * @method LandingContent firstOrFail(array|string $columns = ['*'])
     * @method LandingContent firstOrNew(array $attributes = [], array $values = [])
     * @method LandingContent firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LandingContent forceCreate(array $attributes)
     * @method _IH_LandingContent_C|LandingContent[] fromQuery(string $query, array $bindings = [])
     * @method _IH_LandingContent_C|LandingContent[] get(array|string $columns = ['*'])
     * @method LandingContent getModel()
     * @method LandingContent[] getModels(array|string $columns = ['*'])
     * @method _IH_LandingContent_C|LandingContent[] hydrate(array $items)
     * @method LandingContent make(array $attributes = [])
     * @method LandingContent newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LandingContent[]|_IH_LandingContent_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LandingContent[]|_IH_LandingContent_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LandingContent sole(array|string $columns = ['*'])
     * @method LandingContent updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_LandingContent_QB extends _BaseBuilder {}

    /**
     * @method LandingPage|null getOrPut($key, $value)
     * @method LandingPage|$this shift(int $count = 1)
     * @method LandingPage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method LandingPage|$this pop(int $count = 1)
     * @method LandingPage|null pull($key, \Closure $default = null)
     * @method LandingPage|null last(callable $callback = null, \Closure $default = null)
     * @method LandingPage|$this random(callable|int|null $number = null)
     * @method LandingPage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method LandingPage|null get($key, \Closure $default = null)
     * @method LandingPage|null first(callable $callback = null, \Closure $default = null)
     * @method LandingPage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method LandingPage|null find($key, $default = null)
     * @method LandingPage[] all()
     */
    class _IH_LandingPage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return LandingPage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_LandingPage_QB whereId($value)
     * @method _IH_LandingPage_QB whereName($value)
     * @method _IH_LandingPage_QB whereCode($value)
     * @method _IH_LandingPage_QB whereData($value)
     * @method _IH_LandingPage_QB whereStatus($value)
     * @method _IH_LandingPage_QB whereCreatedAt($value)
     * @method _IH_LandingPage_QB whereUpdatedAt($value)
     * @method LandingPage baseSole(array|string $columns = ['*'])
     * @method LandingPage create(array $attributes = [])
     * @method _IH_LandingPage_C|LandingPage[] cursor()
     * @method LandingPage|null|_IH_LandingPage_C|LandingPage[] find($id, array|string $columns = ['*'])
     * @method _IH_LandingPage_C|LandingPage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method LandingPage|_IH_LandingPage_C|LandingPage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LandingPage|_IH_LandingPage_C|LandingPage[] findOrFail($id, array|string $columns = ['*'])
     * @method LandingPage|_IH_LandingPage_C|LandingPage[] findOrNew($id, array|string $columns = ['*'])
     * @method LandingPage first(array|string $columns = ['*'])
     * @method LandingPage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LandingPage firstOrCreate(array $attributes = [], array $values = [])
     * @method LandingPage firstOrFail(array|string $columns = ['*'])
     * @method LandingPage firstOrNew(array $attributes = [], array $values = [])
     * @method LandingPage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LandingPage forceCreate(array $attributes)
     * @method _IH_LandingPage_C|LandingPage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_LandingPage_C|LandingPage[] get(array|string $columns = ['*'])
     * @method LandingPage getModel()
     * @method LandingPage[] getModels(array|string $columns = ['*'])
     * @method _IH_LandingPage_C|LandingPage[] hydrate(array $items)
     * @method LandingPage make(array $attributes = [])
     * @method LandingPage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LandingPage[]|_IH_LandingPage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LandingPage[]|_IH_LandingPage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LandingPage sole(array|string $columns = ['*'])
     * @method LandingPage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_LandingPage_QB extends _BaseBuilder {}

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
     * @method Navigation|null getOrPut($key, $value)
     * @method Navigation|$this shift(int $count = 1)
     * @method Navigation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Navigation|$this pop(int $count = 1)
     * @method Navigation|null pull($key, \Closure $default = null)
     * @method Navigation|null last(callable $callback = null, \Closure $default = null)
     * @method Navigation|$this random(callable|int|null $number = null)
     * @method Navigation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Navigation|null get($key, \Closure $default = null)
     * @method Navigation|null first(callable $callback = null, \Closure $default = null)
     * @method Navigation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Navigation|null find($key, $default = null)
     * @method Navigation[] all()
     */
    class _IH_Navigation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Navigation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Navigation_QB whereId($value)
     * @method _IH_Navigation_QB wherePageId($value)
     * @method _IH_Navigation_QB whereName($value)
     * @method _IH_Navigation_QB whereUrl($value)
     * @method _IH_Navigation_QB whereType($value)
     * @method _IH_Navigation_QB whereHeaderPosition($value)
     * @method _IH_Navigation_QB whereFooterPosition($value)
     * @method _IH_Navigation_QB whereStatus($value)
     * @method _IH_Navigation_QB whereCreatedAt($value)
     * @method _IH_Navigation_QB whereUpdatedAt($value)
     * @method Navigation baseSole(array|string $columns = ['*'])
     * @method Navigation create(array $attributes = [])
     * @method _IH_Navigation_C|Navigation[] cursor()
     * @method Navigation|null|_IH_Navigation_C|Navigation[] find($id, array|string $columns = ['*'])
     * @method _IH_Navigation_C|Navigation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Navigation|_IH_Navigation_C|Navigation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Navigation|_IH_Navigation_C|Navigation[] findOrFail($id, array|string $columns = ['*'])
     * @method Navigation|_IH_Navigation_C|Navigation[] findOrNew($id, array|string $columns = ['*'])
     * @method Navigation first(array|string $columns = ['*'])
     * @method Navigation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Navigation firstOrCreate(array $attributes = [], array $values = [])
     * @method Navigation firstOrFail(array|string $columns = ['*'])
     * @method Navigation firstOrNew(array $attributes = [], array $values = [])
     * @method Navigation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Navigation forceCreate(array $attributes)
     * @method _IH_Navigation_C|Navigation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Navigation_C|Navigation[] get(array|string $columns = ['*'])
     * @method Navigation getModel()
     * @method Navigation[] getModels(array|string $columns = ['*'])
     * @method _IH_Navigation_C|Navigation[] hydrate(array $items)
     * @method Navigation make(array $attributes = [])
     * @method Navigation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Navigation[]|_IH_Navigation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Navigation[]|_IH_Navigation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Navigation sole(array|string $columns = ['*'])
     * @method Navigation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Navigation_QB extends _BaseBuilder {}

    /**
     * @method PageSetting|null getOrPut($key, $value)
     * @method PageSetting|$this shift(int $count = 1)
     * @method PageSetting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PageSetting|$this pop(int $count = 1)
     * @method PageSetting|null pull($key, \Closure $default = null)
     * @method PageSetting|null last(callable $callback = null, \Closure $default = null)
     * @method PageSetting|$this random(callable|int|null $number = null)
     * @method PageSetting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PageSetting|null get($key, \Closure $default = null)
     * @method PageSetting|null first(callable $callback = null, \Closure $default = null)
     * @method PageSetting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PageSetting|null find($key, $default = null)
     * @method PageSetting[] all()
     */
    class _IH_PageSetting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PageSetting[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PageSetting_QB whereId($value)
     * @method _IH_PageSetting_QB whereValue($value)
     * @method _IH_PageSetting_QB whereCreatedAt($value)
     * @method _IH_PageSetting_QB whereUpdatedAt($value)
     * @method PageSetting baseSole(array|string $columns = ['*'])
     * @method PageSetting create(array $attributes = [])
     * @method _IH_PageSetting_C|PageSetting[] cursor()
     * @method PageSetting|null|_IH_PageSetting_C|PageSetting[] find($id, array|string $columns = ['*'])
     * @method _IH_PageSetting_C|PageSetting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PageSetting|_IH_PageSetting_C|PageSetting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageSetting|_IH_PageSetting_C|PageSetting[] findOrFail($id, array|string $columns = ['*'])
     * @method PageSetting|_IH_PageSetting_C|PageSetting[] findOrNew($id, array|string $columns = ['*'])
     * @method PageSetting first(array|string $columns = ['*'])
     * @method PageSetting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageSetting firstOrCreate(array $attributes = [], array $values = [])
     * @method PageSetting firstOrFail(array|string $columns = ['*'])
     * @method PageSetting firstOrNew(array $attributes = [], array $values = [])
     * @method PageSetting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PageSetting forceCreate(array $attributes)
     * @method _IH_PageSetting_C|PageSetting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PageSetting_C|PageSetting[] get(array|string $columns = ['*'])
     * @method PageSetting getModel()
     * @method PageSetting[] getModels(array|string $columns = ['*'])
     * @method _IH_PageSetting_C|PageSetting[] hydrate(array $items)
     * @method PageSetting make(array $attributes = [])
     * @method PageSetting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PageSetting[]|_IH_PageSetting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PageSetting[]|_IH_PageSetting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PageSetting sole(array|string $columns = ['*'])
     * @method PageSetting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PageSetting_QB extends _BaseBuilder {}

    /**
     * @method Page|null getOrPut($key, $value)
     * @method Page|$this shift(int $count = 1)
     * @method Page|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Page|$this pop(int $count = 1)
     * @method Page|null pull($key, \Closure $default = null)
     * @method Page|null last(callable $callback = null, \Closure $default = null)
     * @method Page|$this random(callable|int|null $number = null)
     * @method Page|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Page|null get($key, \Closure $default = null)
     * @method Page|null first(callable $callback = null, \Closure $default = null)
     * @method Page|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Page|null find($key, $default = null)
     * @method Page[] all()
     */
    class _IH_Page_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Page[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Page_QB whereId($value)
     * @method _IH_Page_QB whereUrl($value)
     * @method _IH_Page_QB whereTitle($value)
     * @method _IH_Page_QB whereCode($value)
     * @method _IH_Page_QB whereData($value)
     * @method _IH_Page_QB whereType($value)
     * @method _IH_Page_QB whereStatus($value)
     * @method _IH_Page_QB whereCreatedAt($value)
     * @method _IH_Page_QB whereUpdatedAt($value)
     * @method Page baseSole(array|string $columns = ['*'])
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array|string $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes = [], array $values = [])
     * @method Page firstOrFail(array|string $columns = ['*'])
     * @method Page firstOrNew(array $attributes = [], array $values = [])
     * @method Page firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Page forceCreate(array $attributes)
     * @method _IH_Page_C|Page[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Page_C|Page[] get(array|string $columns = ['*'])
     * @method Page getModel()
     * @method Page[] getModels(array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] hydrate(array $items)
     * @method Page make(array $attributes = [])
     * @method Page newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page sole(array|string $columns = ['*'])
     * @method Page updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Page_QB extends _BaseBuilder {}

    /**
     * @method Plugin|null getOrPut($key, $value)
     * @method Plugin|$this shift(int $count = 1)
     * @method Plugin|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Plugin|$this pop(int $count = 1)
     * @method Plugin|null pull($key, \Closure $default = null)
     * @method Plugin|null last(callable $callback = null, \Closure $default = null)
     * @method Plugin|$this random(callable|int|null $number = null)
     * @method Plugin|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Plugin|null get($key, \Closure $default = null)
     * @method Plugin|null first(callable $callback = null, \Closure $default = null)
     * @method Plugin|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Plugin|null find($key, $default = null)
     * @method Plugin[] all()
     */
    class _IH_Plugin_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Plugin[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Plugin_QB whereId($value)
     * @method _IH_Plugin_QB whereIcon($value)
     * @method _IH_Plugin_QB whereName($value)
     * @method _IH_Plugin_QB whereDescription($value)
     * @method _IH_Plugin_QB whereData($value)
     * @method _IH_Plugin_QB whereStatus($value)
     * @method _IH_Plugin_QB whereCreatedAt($value)
     * @method _IH_Plugin_QB whereUpdatedAt($value)
     * @method Plugin baseSole(array|string $columns = ['*'])
     * @method Plugin create(array $attributes = [])
     * @method _IH_Plugin_C|Plugin[] cursor()
     * @method Plugin|null|_IH_Plugin_C|Plugin[] find($id, array|string $columns = ['*'])
     * @method _IH_Plugin_C|Plugin[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Plugin|_IH_Plugin_C|Plugin[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Plugin|_IH_Plugin_C|Plugin[] findOrFail($id, array|string $columns = ['*'])
     * @method Plugin|_IH_Plugin_C|Plugin[] findOrNew($id, array|string $columns = ['*'])
     * @method Plugin first(array|string $columns = ['*'])
     * @method Plugin firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Plugin firstOrCreate(array $attributes = [], array $values = [])
     * @method Plugin firstOrFail(array|string $columns = ['*'])
     * @method Plugin firstOrNew(array $attributes = [], array $values = [])
     * @method Plugin firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Plugin forceCreate(array $attributes)
     * @method _IH_Plugin_C|Plugin[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Plugin_C|Plugin[] get(array|string $columns = ['*'])
     * @method Plugin getModel()
     * @method Plugin[] getModels(array|string $columns = ['*'])
     * @method _IH_Plugin_C|Plugin[] hydrate(array $items)
     * @method Plugin make(array $attributes = [])
     * @method Plugin newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Plugin[]|_IH_Plugin_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Plugin[]|_IH_Plugin_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Plugin sole(array|string $columns = ['*'])
     * @method Plugin updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Plugin_QB extends _BaseBuilder {}

    /**
     * @method Ranking|null getOrPut($key, $value)
     * @method Ranking|$this shift(int $count = 1)
     * @method Ranking|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Ranking|$this pop(int $count = 1)
     * @method Ranking|null pull($key, \Closure $default = null)
     * @method Ranking|null last(callable $callback = null, \Closure $default = null)
     * @method Ranking|$this random(callable|int|null $number = null)
     * @method Ranking|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Ranking|null get($key, \Closure $default = null)
     * @method Ranking|null first(callable $callback = null, \Closure $default = null)
     * @method Ranking|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Ranking|null find($key, $default = null)
     * @method Ranking[] all()
     */
    class _IH_Ranking_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ranking[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Ranking_QB whereId($value)
     * @method _IH_Ranking_QB whereIcon($value)
     * @method _IH_Ranking_QB whereRanking($value)
     * @method _IH_Ranking_QB whereRankingName($value)
     * @method _IH_Ranking_QB whereMinimumEarnings($value)
     * @method _IH_Ranking_QB whereBonus($value)
     * @method _IH_Ranking_QB whereDescription($value)
     * @method _IH_Ranking_QB whereStatus($value)
     * @method _IH_Ranking_QB whereCreatedAt($value)
     * @method _IH_Ranking_QB whereUpdatedAt($value)
     * @method Ranking baseSole(array|string $columns = ['*'])
     * @method Ranking create(array $attributes = [])
     * @method _IH_Ranking_C|Ranking[] cursor()
     * @method Ranking|null|_IH_Ranking_C|Ranking[] find($id, array|string $columns = ['*'])
     * @method _IH_Ranking_C|Ranking[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Ranking|_IH_Ranking_C|Ranking[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ranking|_IH_Ranking_C|Ranking[] findOrFail($id, array|string $columns = ['*'])
     * @method Ranking|_IH_Ranking_C|Ranking[] findOrNew($id, array|string $columns = ['*'])
     * @method Ranking first(array|string $columns = ['*'])
     * @method Ranking firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ranking firstOrCreate(array $attributes = [], array $values = [])
     * @method Ranking firstOrFail(array|string $columns = ['*'])
     * @method Ranking firstOrNew(array $attributes = [], array $values = [])
     * @method Ranking firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ranking forceCreate(array $attributes)
     * @method _IH_Ranking_C|Ranking[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ranking_C|Ranking[] get(array|string $columns = ['*'])
     * @method Ranking getModel()
     * @method Ranking[] getModels(array|string $columns = ['*'])
     * @method _IH_Ranking_C|Ranking[] hydrate(array $items)
     * @method Ranking make(array $attributes = [])
     * @method Ranking newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ranking[]|_IH_Ranking_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ranking[]|_IH_Ranking_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ranking sole(array|string $columns = ['*'])
     * @method Ranking updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Ranking_QB extends _BaseBuilder {}

    /**
     * @method ReferralLink|null getOrPut($key, $value)
     * @method ReferralLink|$this shift(int $count = 1)
     * @method ReferralLink|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralLink|$this pop(int $count = 1)
     * @method ReferralLink|null pull($key, \Closure $default = null)
     * @method ReferralLink|null last(callable $callback = null, \Closure $default = null)
     * @method ReferralLink|$this random(callable|int|null $number = null)
     * @method ReferralLink|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralLink|null get($key, \Closure $default = null)
     * @method ReferralLink|null first(callable $callback = null, \Closure $default = null)
     * @method ReferralLink|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReferralLink|null find($key, $default = null)
     * @method ReferralLink[] all()
     */
    class _IH_ReferralLink_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ReferralLink[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ReferralLink_QB whereId($value)
     * @method _IH_ReferralLink_QB whereUserId($value)
     * @method _IH_ReferralLink_QB whereReferralProgramId($value)
     * @method _IH_ReferralLink_QB whereCode($value)
     * @method _IH_ReferralLink_QB whereCreatedAt($value)
     * @method _IH_ReferralLink_QB whereUpdatedAt($value)
     * @method ReferralLink baseSole(array|string $columns = ['*'])
     * @method ReferralLink create(array $attributes = [])
     * @method _IH_ReferralLink_C|ReferralLink[] cursor()
     * @method ReferralLink|null|_IH_ReferralLink_C|ReferralLink[] find($id, array|string $columns = ['*'])
     * @method _IH_ReferralLink_C|ReferralLink[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReferralLink|_IH_ReferralLink_C|ReferralLink[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralLink|_IH_ReferralLink_C|ReferralLink[] findOrFail($id, array|string $columns = ['*'])
     * @method ReferralLink|_IH_ReferralLink_C|ReferralLink[] findOrNew($id, array|string $columns = ['*'])
     * @method ReferralLink first(array|string $columns = ['*'])
     * @method ReferralLink firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralLink firstOrCreate(array $attributes = [], array $values = [])
     * @method ReferralLink firstOrFail(array|string $columns = ['*'])
     * @method ReferralLink firstOrNew(array $attributes = [], array $values = [])
     * @method ReferralLink firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReferralLink forceCreate(array $attributes)
     * @method _IH_ReferralLink_C|ReferralLink[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReferralLink_C|ReferralLink[] get(array|string $columns = ['*'])
     * @method ReferralLink getModel()
     * @method ReferralLink[] getModels(array|string $columns = ['*'])
     * @method _IH_ReferralLink_C|ReferralLink[] hydrate(array $items)
     * @method ReferralLink make(array $attributes = [])
     * @method ReferralLink newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReferralLink[]|_IH_ReferralLink_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ReferralLink[]|_IH_ReferralLink_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReferralLink sole(array|string $columns = ['*'])
     * @method ReferralLink updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReferralLink_QB extends _BaseBuilder {}

    /**
     * @method ReferralProgram|null getOrPut($key, $value)
     * @method ReferralProgram|$this shift(int $count = 1)
     * @method ReferralProgram|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralProgram|$this pop(int $count = 1)
     * @method ReferralProgram|null pull($key, \Closure $default = null)
     * @method ReferralProgram|null last(callable $callback = null, \Closure $default = null)
     * @method ReferralProgram|$this random(callable|int|null $number = null)
     * @method ReferralProgram|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralProgram|null get($key, \Closure $default = null)
     * @method ReferralProgram|null first(callable $callback = null, \Closure $default = null)
     * @method ReferralProgram|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReferralProgram|null find($key, $default = null)
     * @method ReferralProgram[] all()
     */
    class _IH_ReferralProgram_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ReferralProgram[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ReferralProgram_QB whereId($value)
     * @method _IH_ReferralProgram_QB whereName($value)
     * @method _IH_ReferralProgram_QB whereUri($value)
     * @method _IH_ReferralProgram_QB whereLifetimeMinutes($value)
     * @method _IH_ReferralProgram_QB whereCreatedAt($value)
     * @method _IH_ReferralProgram_QB whereUpdatedAt($value)
     * @method ReferralProgram baseSole(array|string $columns = ['*'])
     * @method ReferralProgram create(array $attributes = [])
     * @method _IH_ReferralProgram_C|ReferralProgram[] cursor()
     * @method ReferralProgram|null|_IH_ReferralProgram_C|ReferralProgram[] find($id, array|string $columns = ['*'])
     * @method _IH_ReferralProgram_C|ReferralProgram[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReferralProgram|_IH_ReferralProgram_C|ReferralProgram[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralProgram|_IH_ReferralProgram_C|ReferralProgram[] findOrFail($id, array|string $columns = ['*'])
     * @method ReferralProgram|_IH_ReferralProgram_C|ReferralProgram[] findOrNew($id, array|string $columns = ['*'])
     * @method ReferralProgram first(array|string $columns = ['*'])
     * @method ReferralProgram firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralProgram firstOrCreate(array $attributes = [], array $values = [])
     * @method ReferralProgram firstOrFail(array|string $columns = ['*'])
     * @method ReferralProgram firstOrNew(array $attributes = [], array $values = [])
     * @method ReferralProgram firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReferralProgram forceCreate(array $attributes)
     * @method _IH_ReferralProgram_C|ReferralProgram[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReferralProgram_C|ReferralProgram[] get(array|string $columns = ['*'])
     * @method ReferralProgram getModel()
     * @method ReferralProgram[] getModels(array|string $columns = ['*'])
     * @method _IH_ReferralProgram_C|ReferralProgram[] hydrate(array $items)
     * @method ReferralProgram make(array $attributes = [])
     * @method ReferralProgram newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReferralProgram[]|_IH_ReferralProgram_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ReferralProgram[]|_IH_ReferralProgram_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReferralProgram sole(array|string $columns = ['*'])
     * @method ReferralProgram updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReferralProgram_QB extends _BaseBuilder {}

    /**
     * @method ReferralRelationship|null getOrPut($key, $value)
     * @method ReferralRelationship|$this shift(int $count = 1)
     * @method ReferralRelationship|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralRelationship|$this pop(int $count = 1)
     * @method ReferralRelationship|null pull($key, \Closure $default = null)
     * @method ReferralRelationship|null last(callable $callback = null, \Closure $default = null)
     * @method ReferralRelationship|$this random(callable|int|null $number = null)
     * @method ReferralRelationship|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralRelationship|null get($key, \Closure $default = null)
     * @method ReferralRelationship|null first(callable $callback = null, \Closure $default = null)
     * @method ReferralRelationship|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReferralRelationship|null find($key, $default = null)
     * @method ReferralRelationship[] all()
     */
    class _IH_ReferralRelationship_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ReferralRelationship[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ReferralRelationship_QB whereId($value)
     * @method _IH_ReferralRelationship_QB whereReferralLinkId($value)
     * @method _IH_ReferralRelationship_QB whereUserId($value)
     * @method _IH_ReferralRelationship_QB whereCreatedAt($value)
     * @method _IH_ReferralRelationship_QB whereUpdatedAt($value)
     * @method ReferralRelationship baseSole(array|string $columns = ['*'])
     * @method ReferralRelationship create(array $attributes = [])
     * @method _IH_ReferralRelationship_C|ReferralRelationship[] cursor()
     * @method ReferralRelationship|null|_IH_ReferralRelationship_C|ReferralRelationship[] find($id, array|string $columns = ['*'])
     * @method _IH_ReferralRelationship_C|ReferralRelationship[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReferralRelationship|_IH_ReferralRelationship_C|ReferralRelationship[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralRelationship|_IH_ReferralRelationship_C|ReferralRelationship[] findOrFail($id, array|string $columns = ['*'])
     * @method ReferralRelationship|_IH_ReferralRelationship_C|ReferralRelationship[] findOrNew($id, array|string $columns = ['*'])
     * @method ReferralRelationship first(array|string $columns = ['*'])
     * @method ReferralRelationship firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralRelationship firstOrCreate(array $attributes = [], array $values = [])
     * @method ReferralRelationship firstOrFail(array|string $columns = ['*'])
     * @method ReferralRelationship firstOrNew(array $attributes = [], array $values = [])
     * @method ReferralRelationship firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReferralRelationship forceCreate(array $attributes)
     * @method _IH_ReferralRelationship_C|ReferralRelationship[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReferralRelationship_C|ReferralRelationship[] get(array|string $columns = ['*'])
     * @method ReferralRelationship getModel()
     * @method ReferralRelationship[] getModels(array|string $columns = ['*'])
     * @method _IH_ReferralRelationship_C|ReferralRelationship[] hydrate(array $items)
     * @method ReferralRelationship make(array $attributes = [])
     * @method ReferralRelationship newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReferralRelationship[]|_IH_ReferralRelationship_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ReferralRelationship[]|_IH_ReferralRelationship_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReferralRelationship sole(array|string $columns = ['*'])
     * @method ReferralRelationship updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReferralRelationship_QB extends _BaseBuilder {}

    /**
     * @method ReferralTarget|null getOrPut($key, $value)
     * @method ReferralTarget|$this shift(int $count = 1)
     * @method ReferralTarget|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralTarget|$this pop(int $count = 1)
     * @method ReferralTarget|null pull($key, \Closure $default = null)
     * @method ReferralTarget|null last(callable $callback = null, \Closure $default = null)
     * @method ReferralTarget|$this random(callable|int|null $number = null)
     * @method ReferralTarget|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ReferralTarget|null get($key, \Closure $default = null)
     * @method ReferralTarget|null first(callable $callback = null, \Closure $default = null)
     * @method ReferralTarget|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReferralTarget|null find($key, $default = null)
     * @method ReferralTarget[] all()
     */
    class _IH_ReferralTarget_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ReferralTarget[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ReferralTarget_QB whereId($value)
     * @method _IH_ReferralTarget_QB whereName($value)
     * @method _IH_ReferralTarget_QB whereCreatedAt($value)
     * @method _IH_ReferralTarget_QB whereUpdatedAt($value)
     * @method ReferralTarget baseSole(array|string $columns = ['*'])
     * @method ReferralTarget create(array $attributes = [])
     * @method _IH_ReferralTarget_C|ReferralTarget[] cursor()
     * @method ReferralTarget|null|_IH_ReferralTarget_C|ReferralTarget[] find($id, array|string $columns = ['*'])
     * @method _IH_ReferralTarget_C|ReferralTarget[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReferralTarget|_IH_ReferralTarget_C|ReferralTarget[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralTarget|_IH_ReferralTarget_C|ReferralTarget[] findOrFail($id, array|string $columns = ['*'])
     * @method ReferralTarget|_IH_ReferralTarget_C|ReferralTarget[] findOrNew($id, array|string $columns = ['*'])
     * @method ReferralTarget first(array|string $columns = ['*'])
     * @method ReferralTarget firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReferralTarget firstOrCreate(array $attributes = [], array $values = [])
     * @method ReferralTarget firstOrFail(array|string $columns = ['*'])
     * @method ReferralTarget firstOrNew(array $attributes = [], array $values = [])
     * @method ReferralTarget firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReferralTarget forceCreate(array $attributes)
     * @method _IH_ReferralTarget_C|ReferralTarget[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReferralTarget_C|ReferralTarget[] get(array|string $columns = ['*'])
     * @method ReferralTarget getModel()
     * @method ReferralTarget[] getModels(array|string $columns = ['*'])
     * @method _IH_ReferralTarget_C|ReferralTarget[] hydrate(array $items)
     * @method ReferralTarget make(array $attributes = [])
     * @method ReferralTarget newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReferralTarget[]|_IH_ReferralTarget_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ReferralTarget[]|_IH_ReferralTarget_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReferralTarget sole(array|string $columns = ['*'])
     * @method ReferralTarget updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReferralTarget_QB extends _BaseBuilder {}

    /**
     * @method Referral|null getOrPut($key, $value)
     * @method Referral|$this shift(int $count = 1)
     * @method Referral|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Referral|$this pop(int $count = 1)
     * @method Referral|null pull($key, \Closure $default = null)
     * @method Referral|null last(callable $callback = null, \Closure $default = null)
     * @method Referral|$this random(callable|int|null $number = null)
     * @method Referral|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Referral|null get($key, \Closure $default = null)
     * @method Referral|null first(callable $callback = null, \Closure $default = null)
     * @method Referral|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Referral|null find($key, $default = null)
     * @method Referral[] all()
     */
    class _IH_Referral_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Referral[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Referral_QB whereId($value)
     * @method _IH_Referral_QB whereReferralTargetId($value)
     * @method _IH_Referral_QB whereType($value)
     * @method _IH_Referral_QB whereBounty($value)
     * @method _IH_Referral_QB whereDescription($value)
     * @method _IH_Referral_QB whereStatus($value)
     * @method _IH_Referral_QB whereCreatedAt($value)
     * @method _IH_Referral_QB whereUpdatedAt($value)
     * @method Referral baseSole(array|string $columns = ['*'])
     * @method Referral create(array $attributes = [])
     * @method _IH_Referral_C|Referral[] cursor()
     * @method Referral|null|_IH_Referral_C|Referral[] find($id, array|string $columns = ['*'])
     * @method _IH_Referral_C|Referral[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Referral|_IH_Referral_C|Referral[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Referral|_IH_Referral_C|Referral[] findOrFail($id, array|string $columns = ['*'])
     * @method Referral|_IH_Referral_C|Referral[] findOrNew($id, array|string $columns = ['*'])
     * @method Referral first(array|string $columns = ['*'])
     * @method Referral firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Referral firstOrCreate(array $attributes = [], array $values = [])
     * @method Referral firstOrFail(array|string $columns = ['*'])
     * @method Referral firstOrNew(array $attributes = [], array $values = [])
     * @method Referral firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Referral forceCreate(array $attributes)
     * @method _IH_Referral_C|Referral[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Referral_C|Referral[] get(array|string $columns = ['*'])
     * @method Referral getModel()
     * @method Referral[] getModels(array|string $columns = ['*'])
     * @method _IH_Referral_C|Referral[] hydrate(array $items)
     * @method Referral make(array $attributes = [])
     * @method Referral newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Referral[]|_IH_Referral_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Referral[]|_IH_Referral_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Referral sole(array|string $columns = ['*'])
     * @method Referral updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Referral_QB type($type)
     */
    class _IH_Referral_QB extends _BaseBuilder {}

    /**
     * @method Schedule|null getOrPut($key, $value)
     * @method Schedule|$this shift(int $count = 1)
     * @method Schedule|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Schedule|$this pop(int $count = 1)
     * @method Schedule|null pull($key, \Closure $default = null)
     * @method Schedule|null last(callable $callback = null, \Closure $default = null)
     * @method Schedule|$this random(callable|int|null $number = null)
     * @method Schedule|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Schedule|null get($key, \Closure $default = null)
     * @method Schedule|null first(callable $callback = null, \Closure $default = null)
     * @method Schedule|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Schedule|null find($key, $default = null)
     * @method Schedule[] all()
     */
    class _IH_Schedule_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Schedule[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Schedule_QB whereId($value)
     * @method _IH_Schedule_QB whereName($value)
     * @method _IH_Schedule_QB whereCreatedAt($value)
     * @method _IH_Schedule_QB whereUpdatedAt($value)
     * @method Schedule baseSole(array|string $columns = ['*'])
     * @method Schedule create(array $attributes = [])
     * @method _IH_Schedule_C|Schedule[] cursor()
     * @method Schedule|null|_IH_Schedule_C|Schedule[] find($id, array|string $columns = ['*'])
     * @method _IH_Schedule_C|Schedule[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Schedule|_IH_Schedule_C|Schedule[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Schedule|_IH_Schedule_C|Schedule[] findOrFail($id, array|string $columns = ['*'])
     * @method Schedule|_IH_Schedule_C|Schedule[] findOrNew($id, array|string $columns = ['*'])
     * @method Schedule first(array|string $columns = ['*'])
     * @method Schedule firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Schedule firstOrCreate(array $attributes = [], array $values = [])
     * @method Schedule firstOrFail(array|string $columns = ['*'])
     * @method Schedule firstOrNew(array $attributes = [], array $values = [])
     * @method Schedule firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Schedule forceCreate(array $attributes)
     * @method _IH_Schedule_C|Schedule[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Schedule_C|Schedule[] get(array|string $columns = ['*'])
     * @method Schedule getModel()
     * @method Schedule[] getModels(array|string $columns = ['*'])
     * @method _IH_Schedule_C|Schedule[] hydrate(array $items)
     * @method Schedule make(array $attributes = [])
     * @method Schedule newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Schedule[]|_IH_Schedule_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Schedule[]|_IH_Schedule_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Schedule sole(array|string $columns = ['*'])
     * @method Schedule updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Schedule_QB extends _BaseBuilder {}

    /**
     * @method Schema|null getOrPut($key, $value)
     * @method Schema|$this shift(int $count = 1)
     * @method Schema|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Schema|$this pop(int $count = 1)
     * @method Schema|null pull($key, \Closure $default = null)
     * @method Schema|null last(callable $callback = null, \Closure $default = null)
     * @method Schema|$this random(callable|int|null $number = null)
     * @method Schema|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Schema|null get($key, \Closure $default = null)
     * @method Schema|null first(callable $callback = null, \Closure $default = null)
     * @method Schema|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Schema|null find($key, $default = null)
     * @method Schema[] all()
     */
    class _IH_Schema_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Schema[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Schema_QB whereId($value)
     * @method _IH_Schema_QB whereIcon($value)
     * @method _IH_Schema_QB whereName($value)
     * @method _IH_Schema_QB whereType($value)
     * @method _IH_Schema_QB whereFixedAmount($value)
     * @method _IH_Schema_QB whereMinAmount($value)
     * @method _IH_Schema_QB whereMaxAmount($value)
     * @method _IH_Schema_QB whereCapitalBack($value)
     * @method _IH_Schema_QB whereBadge($value)
     * @method _IH_Schema_QB whereFeatured($value)
     * @method _IH_Schema_QB whereStatus($value)
     * @method _IH_Schema_QB whereInterestType($value)
     * @method _IH_Schema_QB whereReturnInterest($value)
     * @method _IH_Schema_QB whereReturnPeriod($value)
     * @method _IH_Schema_QB whereReturnType($value)
     * @method _IH_Schema_QB whereNumberOfPeriod($value)
     * @method _IH_Schema_QB whereCreatedAt($value)
     * @method _IH_Schema_QB whereUpdatedAt($value)
     * @method Schema baseSole(array|string $columns = ['*'])
     * @method Schema create(array $attributes = [])
     * @method _IH_Schema_C|Schema[] cursor()
     * @method Schema|null|_IH_Schema_C|Schema[] find($id, array|string $columns = ['*'])
     * @method _IH_Schema_C|Schema[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Schema|_IH_Schema_C|Schema[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Schema|_IH_Schema_C|Schema[] findOrFail($id, array|string $columns = ['*'])
     * @method Schema|_IH_Schema_C|Schema[] findOrNew($id, array|string $columns = ['*'])
     * @method Schema first(array|string $columns = ['*'])
     * @method Schema firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Schema firstOrCreate(array $attributes = [], array $values = [])
     * @method Schema firstOrFail(array|string $columns = ['*'])
     * @method Schema firstOrNew(array $attributes = [], array $values = [])
     * @method Schema firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Schema forceCreate(array $attributes)
     * @method _IH_Schema_C|Schema[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Schema_C|Schema[] get(array|string $columns = ['*'])
     * @method Schema getModel()
     * @method Schema[] getModels(array|string $columns = ['*'])
     * @method _IH_Schema_C|Schema[] hydrate(array $items)
     * @method Schema make(array $attributes = [])
     * @method Schema newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Schema[]|_IH_Schema_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Schema[]|_IH_Schema_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Schema sole(array|string $columns = ['*'])
     * @method Schema updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Schema_QB extends _BaseBuilder {}

    /**
     * @method Setting|null getOrPut($key, $value)
     * @method Setting|$this shift(int $count = 1)
     * @method Setting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Setting|$this pop(int $count = 1)
     * @method Setting|null pull($key, \Closure $default = null)
     * @method Setting|null last(callable $callback = null, \Closure $default = null)
     * @method Setting|$this random(callable|int|null $number = null)
     * @method Setting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Setting|null get($key, \Closure $default = null)
     * @method Setting|null first(callable $callback = null, \Closure $default = null)
     * @method Setting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Setting|null find($key, $default = null)
     * @method Setting[] all()
     */
    class _IH_Setting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Setting[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Setting_QB whereId($value)
     * @method _IH_Setting_QB whereName($value)
     * @method _IH_Setting_QB whereVal($value)
     * @method _IH_Setting_QB whereType($value)
     * @method _IH_Setting_QB whereCreatedAt($value)
     * @method _IH_Setting_QB whereUpdatedAt($value)
     * @method Setting baseSole(array|string $columns = ['*'])
     * @method Setting create(array $attributes = [])
     * @method _IH_Setting_C|Setting[] cursor()
     * @method Setting|null|_IH_Setting_C|Setting[] find($id, array|string $columns = ['*'])
     * @method _IH_Setting_C|Setting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Setting|_IH_Setting_C|Setting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Setting|_IH_Setting_C|Setting[] findOrFail($id, array|string $columns = ['*'])
     * @method Setting|_IH_Setting_C|Setting[] findOrNew($id, array|string $columns = ['*'])
     * @method Setting first(array|string $columns = ['*'])
     * @method Setting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Setting firstOrCreate(array $attributes = [], array $values = [])
     * @method Setting firstOrFail(array|string $columns = ['*'])
     * @method Setting firstOrNew(array $attributes = [], array $values = [])
     * @method Setting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Setting forceCreate(array $attributes)
     * @method _IH_Setting_C|Setting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Setting_C|Setting[] get(array|string $columns = ['*'])
     * @method Setting getModel()
     * @method Setting[] getModels(array|string $columns = ['*'])
     * @method _IH_Setting_C|Setting[] hydrate(array $items)
     * @method Setting make(array $attributes = [])
     * @method Setting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Setting[]|_IH_Setting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Setting[]|_IH_Setting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Setting sole(array|string $columns = ['*'])
     * @method Setting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Setting_QB extends _BaseBuilder {}

    /**
     * @method Social|null getOrPut($key, $value)
     * @method Social|$this shift(int $count = 1)
     * @method Social|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Social|$this pop(int $count = 1)
     * @method Social|null pull($key, \Closure $default = null)
     * @method Social|null last(callable $callback = null, \Closure $default = null)
     * @method Social|$this random(callable|int|null $number = null)
     * @method Social|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Social|null get($key, \Closure $default = null)
     * @method Social|null first(callable $callback = null, \Closure $default = null)
     * @method Social|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Social|null find($key, $default = null)
     * @method Social[] all()
     */
    class _IH_Social_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Social[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Social_QB whereId($value)
     * @method _IH_Social_QB whereIconName($value)
     * @method _IH_Social_QB whereClassName($value)
     * @method _IH_Social_QB whereUrl($value)
     * @method _IH_Social_QB wherePosition($value)
     * @method _IH_Social_QB whereCreatedAt($value)
     * @method _IH_Social_QB whereUpdatedAt($value)
     * @method Social baseSole(array|string $columns = ['*'])
     * @method Social create(array $attributes = [])
     * @method _IH_Social_C|Social[] cursor()
     * @method Social|null|_IH_Social_C|Social[] find($id, array|string $columns = ['*'])
     * @method _IH_Social_C|Social[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Social|_IH_Social_C|Social[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Social|_IH_Social_C|Social[] findOrFail($id, array|string $columns = ['*'])
     * @method Social|_IH_Social_C|Social[] findOrNew($id, array|string $columns = ['*'])
     * @method Social first(array|string $columns = ['*'])
     * @method Social firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Social firstOrCreate(array $attributes = [], array $values = [])
     * @method Social firstOrFail(array|string $columns = ['*'])
     * @method Social firstOrNew(array $attributes = [], array $values = [])
     * @method Social firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Social forceCreate(array $attributes)
     * @method _IH_Social_C|Social[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Social_C|Social[] get(array|string $columns = ['*'])
     * @method Social getModel()
     * @method Social[] getModels(array|string $columns = ['*'])
     * @method _IH_Social_C|Social[] hydrate(array $items)
     * @method Social make(array $attributes = [])
     * @method Social newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Social[]|_IH_Social_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Social[]|_IH_Social_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Social sole(array|string $columns = ['*'])
     * @method Social updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Social_QB extends _BaseBuilder {}

    /**
     * @method Subscription|null getOrPut($key, $value)
     * @method Subscription|$this shift(int $count = 1)
     * @method Subscription|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Subscription|$this pop(int $count = 1)
     * @method Subscription|null pull($key, \Closure $default = null)
     * @method Subscription|null last(callable $callback = null, \Closure $default = null)
     * @method Subscription|$this random(callable|int|null $number = null)
     * @method Subscription|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Subscription|null get($key, \Closure $default = null)
     * @method Subscription|null first(callable $callback = null, \Closure $default = null)
     * @method Subscription|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Subscription|null find($key, $default = null)
     * @method Subscription[] all()
     */
    class _IH_Subscription_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Subscription[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Subscription_QB whereId($value)
     * @method _IH_Subscription_QB whereEmail($value)
     * @method _IH_Subscription_QB whereCreatedAt($value)
     * @method _IH_Subscription_QB whereUpdatedAt($value)
     * @method Subscription baseSole(array|string $columns = ['*'])
     * @method Subscription create(array $attributes = [])
     * @method _IH_Subscription_C|Subscription[] cursor()
     * @method Subscription|null|_IH_Subscription_C|Subscription[] find($id, array|string $columns = ['*'])
     * @method _IH_Subscription_C|Subscription[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Subscription|_IH_Subscription_C|Subscription[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscription|_IH_Subscription_C|Subscription[] findOrFail($id, array|string $columns = ['*'])
     * @method Subscription|_IH_Subscription_C|Subscription[] findOrNew($id, array|string $columns = ['*'])
     * @method Subscription first(array|string $columns = ['*'])
     * @method Subscription firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscription firstOrCreate(array $attributes = [], array $values = [])
     * @method Subscription firstOrFail(array|string $columns = ['*'])
     * @method Subscription firstOrNew(array $attributes = [], array $values = [])
     * @method Subscription firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Subscription forceCreate(array $attributes)
     * @method _IH_Subscription_C|Subscription[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Subscription_C|Subscription[] get(array|string $columns = ['*'])
     * @method Subscription getModel()
     * @method Subscription[] getModels(array|string $columns = ['*'])
     * @method _IH_Subscription_C|Subscription[] hydrate(array $items)
     * @method Subscription make(array $attributes = [])
     * @method Subscription newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Subscription[]|_IH_Subscription_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Subscription[]|_IH_Subscription_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Subscription sole(array|string $columns = ['*'])
     * @method Subscription updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Subscription_QB extends _BaseBuilder {}

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
     * @method _IH_Ticket_QB uuid($uuid)
     * @method _IH_Ticket_QB withHighPriority()
     * @method _IH_Ticket_QB withLowPriority()
     * @method _IH_Ticket_QB withNormalPriority()
     * @method _IH_Ticket_QB withPriority(string $priority)
     */
    class _IH_Ticket_QB extends _BaseBuilder {}

    /**
     * @method Transaction|null getOrPut($key, $value)
     * @method Transaction|$this shift(int $count = 1)
     * @method Transaction|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Transaction|$this pop(int $count = 1)
     * @method Transaction|null pull($key, \Closure $default = null)
     * @method Transaction|null last(callable $callback = null, \Closure $default = null)
     * @method Transaction|$this random(callable|int|null $number = null)
     * @method Transaction|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Transaction|null get($key, \Closure $default = null)
     * @method Transaction|null first(callable $callback = null, \Closure $default = null)
     * @method Transaction|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Transaction|null find($key, $default = null)
     * @method Transaction[] all()
     */
    class _IH_Transaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Transaction[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Transaction_QB whereId($value)
     * @method _IH_Transaction_QB whereUserId($value)
     * @method _IH_Transaction_QB whereFromUserId($value)
     * @method _IH_Transaction_QB whereFromModel($value)
     * @method _IH_Transaction_QB whereTargetId($value)
     * @method _IH_Transaction_QB whereTargetType($value)
     * @method _IH_Transaction_QB whereTnx($value)
     * @method _IH_Transaction_QB whereDescription($value)
     * @method _IH_Transaction_QB whereAmount($value)
     * @method _IH_Transaction_QB whereType($value)
     * @method _IH_Transaction_QB whereCharge($value)
     * @method _IH_Transaction_QB whereFinalAmount($value)
     * @method _IH_Transaction_QB whereAccount($value)
     * @method _IH_Transaction_QB wherePayCurrency($value)
     * @method _IH_Transaction_QB wherePayAmount($value)
     * @method _IH_Transaction_QB whereManualFieldData($value)
     * @method _IH_Transaction_QB whereApprovalCause($value)
     * @method _IH_Transaction_QB whereStatus($value)
     * @method _IH_Transaction_QB whereCreatedAt($value)
     * @method _IH_Transaction_QB whereUpdatedAt($value)
     * @method Transaction baseSole(array|string $columns = ['*'])
     * @method Transaction create(array $attributes = [])
     * @method _IH_Transaction_C|Transaction[] cursor()
     * @method Transaction|null|_IH_Transaction_C|Transaction[] find($id, array|string $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrFail($id, array|string $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrNew($id, array|string $columns = ['*'])
     * @method Transaction first(array|string $columns = ['*'])
     * @method Transaction firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Transaction firstOrCreate(array $attributes = [], array $values = [])
     * @method Transaction firstOrFail(array|string $columns = ['*'])
     * @method Transaction firstOrNew(array $attributes = [], array $values = [])
     * @method Transaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Transaction forceCreate(array $attributes)
     * @method _IH_Transaction_C|Transaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Transaction_C|Transaction[] get(array|string $columns = ['*'])
     * @method Transaction getModel()
     * @method Transaction[] getModels(array|string $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] hydrate(array $items)
     * @method Transaction make(array $attributes = [])
     * @method Transaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Transaction[]|_IH_Transaction_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Transaction[]|_IH_Transaction_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Transaction sole(array|string $columns = ['*'])
     * @method Transaction updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Transaction_QB tnx($tnx)
     */
    class _IH_Transaction_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereRankingId($value)
     * @method _IH_User_QB whereRankings($value)
     * @method _IH_User_QB whereAvatar($value)
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereLastName($value)
     * @method _IH_User_QB whereCountry($value)
     * @method _IH_User_QB wherePhone($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereGender($value)
     * @method _IH_User_QB whereDateOfBirth($value)
     * @method _IH_User_QB whereCity($value)
     * @method _IH_User_QB whereZipCode($value)
     * @method _IH_User_QB whereAddress($value)
     * @method _IH_User_QB whereBalance($value)
     * @method _IH_User_QB whereProfitBalance($value)
     * @method _IH_User_QB whereStatus($value)
     * @method _IH_User_QB whereKyc($value)
     * @method _IH_User_QB whereKycCredential($value)
     * @method _IH_User_QB whereGoogle2faSecret($value)
     * @method _IH_User_QB whereTwoFa($value)
     * @method _IH_User_QB whereDepositStatus($value)
     * @method _IH_User_QB whereWithdrawStatus($value)
     * @method _IH_User_QB whereTransferStatus($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}

    /**
     * @method WithdrawAccount|null getOrPut($key, $value)
     * @method WithdrawAccount|$this shift(int $count = 1)
     * @method WithdrawAccount|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WithdrawAccount|$this pop(int $count = 1)
     * @method WithdrawAccount|null pull($key, \Closure $default = null)
     * @method WithdrawAccount|null last(callable $callback = null, \Closure $default = null)
     * @method WithdrawAccount|$this random(callable|int|null $number = null)
     * @method WithdrawAccount|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WithdrawAccount|null get($key, \Closure $default = null)
     * @method WithdrawAccount|null first(callable $callback = null, \Closure $default = null)
     * @method WithdrawAccount|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WithdrawAccount|null find($key, $default = null)
     * @method WithdrawAccount[] all()
     */
    class _IH_WithdrawAccount_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WithdrawAccount[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_WithdrawAccount_QB whereId($value)
     * @method _IH_WithdrawAccount_QB whereUserId($value)
     * @method _IH_WithdrawAccount_QB whereWithdrawMethodId($value)
     * @method _IH_WithdrawAccount_QB whereMethodName($value)
     * @method _IH_WithdrawAccount_QB whereCredentials($value)
     * @method _IH_WithdrawAccount_QB whereCreatedAt($value)
     * @method _IH_WithdrawAccount_QB whereUpdatedAt($value)
     * @method WithdrawAccount baseSole(array|string $columns = ['*'])
     * @method WithdrawAccount create(array $attributes = [])
     * @method _IH_WithdrawAccount_C|WithdrawAccount[] cursor()
     * @method WithdrawAccount|null|_IH_WithdrawAccount_C|WithdrawAccount[] find($id, array|string $columns = ['*'])
     * @method _IH_WithdrawAccount_C|WithdrawAccount[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WithdrawAccount|_IH_WithdrawAccount_C|WithdrawAccount[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WithdrawAccount|_IH_WithdrawAccount_C|WithdrawAccount[] findOrFail($id, array|string $columns = ['*'])
     * @method WithdrawAccount|_IH_WithdrawAccount_C|WithdrawAccount[] findOrNew($id, array|string $columns = ['*'])
     * @method WithdrawAccount first(array|string $columns = ['*'])
     * @method WithdrawAccount firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WithdrawAccount firstOrCreate(array $attributes = [], array $values = [])
     * @method WithdrawAccount firstOrFail(array|string $columns = ['*'])
     * @method WithdrawAccount firstOrNew(array $attributes = [], array $values = [])
     * @method WithdrawAccount firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WithdrawAccount forceCreate(array $attributes)
     * @method _IH_WithdrawAccount_C|WithdrawAccount[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WithdrawAccount_C|WithdrawAccount[] get(array|string $columns = ['*'])
     * @method WithdrawAccount getModel()
     * @method WithdrawAccount[] getModels(array|string $columns = ['*'])
     * @method _IH_WithdrawAccount_C|WithdrawAccount[] hydrate(array $items)
     * @method WithdrawAccount make(array $attributes = [])
     * @method WithdrawAccount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WithdrawAccount[]|_IH_WithdrawAccount_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|WithdrawAccount[]|_IH_WithdrawAccount_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WithdrawAccount sole(array|string $columns = ['*'])
     * @method WithdrawAccount updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WithdrawAccount_QB extends _BaseBuilder {}

    /**
     * @method WithdrawMethod|null getOrPut($key, $value)
     * @method WithdrawMethod|$this shift(int $count = 1)
     * @method WithdrawMethod|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WithdrawMethod|$this pop(int $count = 1)
     * @method WithdrawMethod|null pull($key, \Closure $default = null)
     * @method WithdrawMethod|null last(callable $callback = null, \Closure $default = null)
     * @method WithdrawMethod|$this random(callable|int|null $number = null)
     * @method WithdrawMethod|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WithdrawMethod|null get($key, \Closure $default = null)
     * @method WithdrawMethod|null first(callable $callback = null, \Closure $default = null)
     * @method WithdrawMethod|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WithdrawMethod|null find($key, $default = null)
     * @method WithdrawMethod[] all()
     */
    class _IH_WithdrawMethod_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WithdrawMethod[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_WithdrawMethod_QB whereId($value)
     * @method _IH_WithdrawMethod_QB whereIcon($value)
     * @method _IH_WithdrawMethod_QB whereName($value)
     * @method _IH_WithdrawMethod_QB whereCurrency($value)
     * @method _IH_WithdrawMethod_QB whereRate($value)
     * @method _IH_WithdrawMethod_QB whereRequiredTime($value)
     * @method _IH_WithdrawMethod_QB whereRequiredTimeFormat($value)
     * @method _IH_WithdrawMethod_QB whereCharge($value)
     * @method _IH_WithdrawMethod_QB whereChargeType($value)
     * @method _IH_WithdrawMethod_QB whereMinWithdraw($value)
     * @method _IH_WithdrawMethod_QB whereMaxWithdraw($value)
     * @method _IH_WithdrawMethod_QB whereFields($value)
     * @method _IH_WithdrawMethod_QB whereStatus($value)
     * @method _IH_WithdrawMethod_QB whereCreatedAt($value)
     * @method _IH_WithdrawMethod_QB whereUpdatedAt($value)
     * @method WithdrawMethod baseSole(array|string $columns = ['*'])
     * @method WithdrawMethod create(array $attributes = [])
     * @method _IH_WithdrawMethod_C|WithdrawMethod[] cursor()
     * @method WithdrawMethod|null|_IH_WithdrawMethod_C|WithdrawMethod[] find($id, array|string $columns = ['*'])
     * @method _IH_WithdrawMethod_C|WithdrawMethod[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WithdrawMethod|_IH_WithdrawMethod_C|WithdrawMethod[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WithdrawMethod|_IH_WithdrawMethod_C|WithdrawMethod[] findOrFail($id, array|string $columns = ['*'])
     * @method WithdrawMethod|_IH_WithdrawMethod_C|WithdrawMethod[] findOrNew($id, array|string $columns = ['*'])
     * @method WithdrawMethod first(array|string $columns = ['*'])
     * @method WithdrawMethod firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WithdrawMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method WithdrawMethod firstOrFail(array|string $columns = ['*'])
     * @method WithdrawMethod firstOrNew(array $attributes = [], array $values = [])
     * @method WithdrawMethod firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WithdrawMethod forceCreate(array $attributes)
     * @method _IH_WithdrawMethod_C|WithdrawMethod[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WithdrawMethod_C|WithdrawMethod[] get(array|string $columns = ['*'])
     * @method WithdrawMethod getModel()
     * @method WithdrawMethod[] getModels(array|string $columns = ['*'])
     * @method _IH_WithdrawMethod_C|WithdrawMethod[] hydrate(array $items)
     * @method WithdrawMethod make(array $attributes = [])
     * @method WithdrawMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WithdrawMethod[]|_IH_WithdrawMethod_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|WithdrawMethod[]|_IH_WithdrawMethod_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WithdrawMethod sole(array|string $columns = ['*'])
     * @method WithdrawMethod updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WithdrawMethod_QB extends _BaseBuilder {}
}
