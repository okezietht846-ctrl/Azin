<?php //6ea38b71ad35ba019728e7ed58c6ddc4
/** @noinspection all */

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static void dispatchNow(array $data)
     * @method static void dispatchSync(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     * @method static void dispatchSync(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace JoeDixon\Translation\Events {

    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(string $language, string $group, string $key, string $value)
     * @method static PendingBroadcast broadcast(string $language, string $group, string $key, string $value)
     */
    class TranslationAdded {}
}

namespace PragmaRX\Google2FALaravel\Events {

    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch($user)
     * @method static PendingBroadcast broadcast($user)
     */
    class LoggedOut {}

    /**
     * @method static void dispatch($user)
     * @method static PendingBroadcast broadcast($user)
     */
    class LoginFailed {}

    /**
     * @method static void dispatch($user)
     * @method static PendingBroadcast broadcast($user)
     */
    class LoginSucceeded {}

    /**
     * @method static void dispatch($user)
     * @method static PendingBroadcast broadcast($user)
     */
    class OneTimePasswordExpired {}

    /**
     * @method static void dispatch($user)
     * @method static PendingBroadcast broadcast($user)
     */
    class OneTimePasswordRequested {}

    /**
     * @method static void dispatch($user)
     * @method static PendingBroadcast broadcast($user)
     */
    class OneTimePasswordRequested53 {}
}
