@extends('frontend::deposit.index')
@section('deposit_content')
    <div class="progress-steps-form">
        <form action="{{ route('user.deposit.now') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                 
                <div class="col-xl-6 col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('Payment Method:') }}</label>
                    <div class="input-group">
                        <select name="gateway_code" id="gatewaySelect" class="site-nice-select">
                            <option selected disabled>--{{ __('Select Gateway') }}--</option>
                            @foreach($gateways as $gateway)
                                <option value="{{ $gateway->gateway_code }}">{{ $gateway->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-info-text charge"></div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('Enter Amount:') }}</label>
                    <div class="input-group">
                        <input type="text" name="amount" class="form-control"
                               oninput="this.value = validateDouble(this.value)" aria-label="Amount" id="amount"
                               aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">{{ $currency }}</span>
                    </div>
                    
                    <div class="input-info-text min-max"></div>
                    
                </div>
               
            </div>
<button id="copyToClipboardBtn" class="btn btn-primary">Copy to Clipboard</button>
            <div class="row manual-row">

            </div>


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
    </div>
@endsection
@section('script')
    <script>

        var globalData;
        var currency = @json($currency)

        $("#gatewaySelect").on('change', function (e) {

            console.log('ok');

            "use strict"
            e.preventDefault();
            $('.manual-row').empty();
            var code = $(this).val()
            var url = '{{ route("user.deposit.gateway",":code") }}';
            url = url.replace(':code', code);
            $.get(url, function (data) {

                globalData = data;
                $('.charge').text('Charge ' + data.charge + ' ' + (data.charge_type === 'percentage' ? ' % ' : currency))
                $('.min-max').text('Minimum ' + data.minimum_deposit + ' ' + currency + ' and ' + 'Maximum ' + data.maximum_deposit + ' ' + currency)
                $('#logo').html(`<img class="payment-method" src='${document.location.origin + '/assets/' + data.gateway_logo}'>`);
                var amount = $('#amount').val()

                if (Number(amount) > 0) {
                    $('.amount').text((Number(amount)))
                    var charge = data.charge_type === 'percentage' ? calPercentage(amount, data.charge) : data.charge
                    $('.charge2').text(charge + ' ' + currency)
                    $('.total').text((Number(amount) + Number(charge)) + ' ' + currency)
                }

                if (data.credentials !== undefined) {
                    $('.manual-row').append(data.credentials)
                    imagePreview()
                }

            });

            $('#amount').on('keyup', function (e) {
                "use strict"
                var amount = $(this).val()
                $('.amount').text((Number(amount)))
                $('.currency').text(currency)

                var charge = globalData.charge_type === 'percentage' ? calPercentage(amount, globalData.charge) : globalData.charge
                $('.charge2').text(charge + ' ' + currency)
                $('.total').text((Number(amount) + Number(charge)) + ' ' + currency)
            })


        });
        
        function copyToClipboard(text) {
            // Create a temporary textarea element
            const textarea = document.createElement('textarea');
            textarea.value = text;

            // Append the textarea to the document
            document.body.appendChild(textarea);

            // Select the text in the textarea
            textarea.select();
            textarea.setSelectionRange(0, 99999); // For mobile devices

            // Copy the selected text to the clipboard
            document.execCommand('copy');

            // Remove the temporary textarea
            document.body.removeChild(textarea);
        }

        // Function to filter out exempted text
        function filterExemptedText(text) {
            // List of exempted texts
            const exemptedTexts = [
                "Pay to the address"
            ];

            // Exclude exempted texts from the original text
            return exemptedTexts.reduce((filteredText, exemptedText) => {
                return filteredText.replace(exemptedText, '');
            }, text);
        }

        // Function to attach click event listener for "Copy to Clipboard" button
        function attachCopyToClipboardListener() {
            $('#copyToClipboardBtn').on('click', function () {
                // Get the text content from the "manual-row" section
                const originalText = $('.manual-row p').text().trim();

                // Filter out exempted text
                const filteredText = filterExemptedText(originalText);

                if (filteredText !== '') {
                    // Copy the text content to the clipboard
                    copyToClipboard(filteredText);

                    // Optionally provide feedback to the user
                    alert('Copied to clipboard:\n' + filteredText);
                } else {
                    // Handle the case when there is no content to copy
                    alert('No content to copy.');
                }
            });
        }

        // Add a change event listener to the payment gateway dropdown
        $("#gatewaySelect").on('change', function (e) {
            // ... (existing code)

            // Update the "manual-row" content with the incoming data
            updateManualRowContent(data);
        });

        // Initially attach the click event listener
        attachCopyToClipboardListener();
    </script>
@endsection
