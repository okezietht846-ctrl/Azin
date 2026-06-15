<?php //f3fdfb827bf71cafa7671f3281278be4
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    /**
     * @method static $this onlyTrashed()
     * @method static int restore()
     * @method static $this withTrashed($withTrashed = true)
     * @method static $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignature($absolute = true)
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method static array validate(array $rules, ...$params)
     * @method static void validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Routing {

    /**
     * @method static $this permission($permissions = [])
     * @method static $this role($roles = [])
     */
    class Route {}
}

namespace Illuminate\Support {

    /**
     * @method static $this debug()
     */
    class Collection {}
}
