@extends('frontend::layouts.user')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')
 <div class="mobile-screen-show">
 
<div id="ytWidget"></div>
            @include('frontend::include.__user_side_nav')
        </div>

        <div class="desktop-screen-show">
           

            {{-- User Card--}}
            @include('frontend::user.include.__user_card')
            
            
            
            
            
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
  {
  "width": "1160",
  "height": "980",
  "symbol": "COINBASE:BTCUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "backgroundColor": "rgba(56, 3, 110, 1)",
  "withdateranges": true,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "details": true,
  "hotlist": true,
  "calendar": false,
  "support_host": "https://www.tradingview.com"
}
  </script>
</div>
<!-- TradingView Widget END -->
            
            

            {{--Recent Transactions--}}
            @include('frontend::user.include.__recent_transaction')
            
             
            {{--Referral and Ranking --}}
            @include('frontend::user.include.__referral_ranking')

        </div>

         {{--for mobile--}}
        <div class="mobile-screen-show">
             <div class="mobile-screen-show">
            @include('frontend::include.__user_side_nav')
        </div>
            {{--Referral and Ranking --}}
            @include('frontend::user.include.__referral_ranking')

            {{-- User Card--}}
            @include('frontend::user.include.__user_card')

            {{--Recent Transactions--}}
            @include('frontend::user.include.__recent_transaction')
        </div>


@endsection
@section('script')

    <script>
        function copyRef() {
            /* Get the text field */
            var textToCopy = $('#refLink').val();
            // Create a temporary input element
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();
            // Copy the text from the temporary input
            document.execCommand('copy');
            // Remove the temporary input element
            tempInput.remove();
            $('#copy').text('Copied'); var copyApi = document.getElementById("refLink");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text('Copied')

        }

        // Load More
        $('.moreless-button').click(function () {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });

        $('.moreless-button-2').click(function () {
            $('.moretext-2').slideToggle();
            if ($('.moreless-button-2').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });
    </script>
@endsection
