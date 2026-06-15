@extends('frontend::deposit.index')
@section('deposit_content')
<div class="progress-steps-form">
    <form action="{{ route('user.deposit.now') }}" method="post" enctype="multipart/form-data" id="depositForm">
        @csrf
        <div class="row">
            <div class="col-xl-6 col-md-12 mb-3">
                <label for="gatewaySelect" class="form-label">{{ __('Payment Method:') }}</label>
                <div class="input-group">
                    <select name="gateway_code" id="gatewaySelect" class="site-nice-select" required>
                        <option selected disabled>--{{ __('Select Gateway') }}--</option>
                        @foreach($gateways as $gateway)
                            <option value="{{ $gateway->gateway_code }}">{{ $gateway->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-info-text charge"></div>
            </div>
            <div class="col-xl-6 col-md-12">
                <label for="amount" class="form-label">{{ __('Enter Amount:') }}</label>
                <div class="input-group">
                    <input type="text" name="amount" class="form-control" oninput="this.value = validateDouble(this.value)" 
                           aria-label="Amount" id="amount" aria-describedby="basic-addon1" required>
                    <span class="input-group-text" id="basic-addon1">{{ auth()->user()->currency_symbol  }}</span>
                </div>
                <div class="input-info-text min-max"></div>
            </div>
        </div>
<button id="copyCredentialsBtn" class="site-btn blue-btn" style="display:none;">
        {{ __('Copy Wallet') }}
    </button>
        <div class="row manual-row"></div>
        

        <div class="transaction-list table-responsive">
            <div class="user-panel-title">
                <h3>{{ __('Review Details:') }}</h3>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>{{ __('Amount') }}</strong></td>
                        <td><span class="amount"></span> <span class="currency"></span></td>
                    </tr>
                    <tr>
                        <td><strong>{{ __('Charge') }}</strong></td>
                        <td class="charge2"></td>
                    </tr>
                    <tr>
                        <td><strong>{{ __('Payment Method') }}</strong></td>
                        <td id="logo"><img src="" class="payment-method" alt=""></td>
                    </tr>
                    <tr>
                        <td><strong>{{ __('Total') }}</strong></td>
                        <td class="total"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="buttons">
            <button type="submit" class="site-btn blue-btn">
                {{ __('Proceed to Payment') }}<i class="anticon anticon-double-right"></i>
            </button>
        </div>
    </form>

    

    <div class="loading-spinner" style="display:none;">Loading...</div>
</div>
@endsection

@section('script')
<script>
    var globalData;
    var currency = @json($currency);

    $("#gatewaySelect").on('change', function (e) {
        e.preventDefault();
        $('.manual-row').empty();

        // Show loading spinner
        $('.loading-spinner').show();

        var code = $(this).val();
        var url = '{{ route("user.deposit.gateway",":code") }}'.replace(':code', code);

        $.get(url)
            .done(function (data) {
                // Hide loading spinner
                $('.loading-spinner').hide();

                globalData = data;
                $('.charge').text('Charge ' + data.charge + ' ' + (data.charge_type === 'percentage' ? ' % ' : currency));
                $('.min-max').text('Minimum ' + data.minimum_deposit + ' ' + currency + ' and Maximum ' + data.maximum_deposit + ' ' + currency);
                $('#logo').html(`<img class="payment-method" src='${document.location.origin + '/assets/' + data.gateway_logo}'>`);

                updateReviewDetails();

                if (data.credentials !== undefined) {
                    $('.manual-row').append(data.credentials);
                    $('#copyCredentialsBtn').show(); // Show the copy button
                    imagePreview();
                }
            })
            .fail(function() {
                // Hide loading spinner and show error message
                $('.loading-spinner').hide();
                alert('Failed to load data. Please try again.');
            });
    });

    $('#amount').on('keyup', function () {
        updateReviewDetails();
    });
    
$('#copyCredentialsBtn').on('click', function() {
    // Select the first <p> in the frontend-editor-data, which contains the wallet address
    const walletAddress = $('.manual-row .frontend-editor-data p:first-child span').text().trim();

    if (walletAddress) {
        navigator.clipboard.writeText(walletAddress).then(function() {
            alert('Wallet address copied to clipboard!'); // Notify the user
        }).catch(function(err) {
            console.error('Could not copy text: ', err);
        });
    } else {
        alert('No wallet address found to copy.'); // Handle case where no address is available
    }
});



    function updateReviewDetails() {
        var amount = $('#amount').val();
        $('.amount').text(Number(amount));
        $('.currency').text(currency);

        if (globalData) {
            var charge = globalData.charge_type === 'percentage' ? calPercentage(amount, globalData.charge) : globalData.charge;
            $('.charge2').text(charge + ' ' + currency);
            $('.total').text((Number(amount) + Number(charge)) + ' ' + currency);
        }
    }

    function validateDouble(value) {
        return value.replace(/[^0-9.]/g, '');
    }
</script>
@endsection
