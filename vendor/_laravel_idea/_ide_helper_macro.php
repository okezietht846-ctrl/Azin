<?php //b71588291eb7f9fc4a079f6b56e62fda
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    /**
     * @method $this onlyTrashed()
     * @method int restore()
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignature($absolute = true)
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method array validate(array $rules, ...$params)
     * @method void validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Routing {

    /**
     * @method $this permission($permissions = [])
     * @method $this role($roles = [])
     */
    class Route {}
}

namespace Illuminate\Support {

    /**
     * @method $this debug()
     */
    class Collection {}
}
