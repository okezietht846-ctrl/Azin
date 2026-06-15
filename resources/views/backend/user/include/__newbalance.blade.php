<div
    class="modal fade"
    id="newAddSubBalance"
    tabindex="-1"
    aria-labelledby="addSubBalanceLabel"
    aria-modal="true"
    role="dialog"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubBalanceLabel">
                    {{ __('Bonus Add or Subtract') }}
                </h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.user.newbalance-update', $user->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="transactionType">{{ __('Transaction Type') }}</label>
                        <div id="transactionType" class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input
                                    type="radio"
                                    name="type"
                                    id="addMoney"
                                    value="add"
                                    autocomplete="off"
                                    checked
                                > {{ __('Add') }}
                            </label>
                            <label class="btn btn-secondary">
                                <input
                                    type="radio"
                                    name="type"
                                    id="subtractMoney"
                                    value="subtract"
                                    autocomplete="off"
                                > {{ __('Subtract') }}
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="walletType">{{ __('Select Wallet') }}</label>
                        <select id="walletType" class="form-control" name="wallet">
                            @foreach(['depositbonus', 'investmentbonus'] as $type)
                                <option value="{{ $type }}">
                                    {{ ucwords($type) . ' ' . __('Wallet') }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">{{ __('Amount') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ setting('site_currency', 'global') }}</span>
                            </div>
                            <input
                                type="text"
                                id="amount"
                                name="amount"
                                oninput="this.value = validateDouble(this.value)"
                                class="form-control"
                                aria-label="Amount"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Apply Now') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
