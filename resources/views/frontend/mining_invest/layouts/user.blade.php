<!DOCTYPE html>
<html lang="en">
    <style>
  /* Force desktop layout regardless of screen size */
  @media screen {
    html, body {
      min-width: 1200px !important;
      overflow-x: auto !important;
    }

    body {
      zoom: 1;
      -moz-transform: scale(1);
      -moz-transform-origin: 0 0;
    }

    /* Force desktop elements to show */
    .desktop-screen-show,
    .panel-layout,
    .page-container,
    .main-content,
    .section-gap,
    .container-fluid {
      display: block !important;
      width: 100% !important;
      max-width: none !important;
      min-width: 1000px !important;
    }

    /* Hide all mobile elements */
    .mobile-screen-show,
    [class*='mobile-'],
    .mob-shortcut-btn,
    .mobile-ref-url,
    .mobile-menu {
      display: none !important;
    }

    /* Ensure sidebar is visible */
    .sidebar {
      display: block !important;
      width: 50px !important;
      left: 0 !important;
      position: fixed !important;
      height: 100% !important;
    }

 

    /* Adjust header */
    .header {
      left: 250px !important;
      width: calc(100% - 250px) !important;
      position: fixed !important;
    }
  }
       
        
    
</style>


@include('frontend.default.include.__head')
<body class="{{ session()->get('site-color-mode') ?? 'dark-theme' }}">




@include('notify::components.notify')
<!--Full Layout-->
<div class="panel-layout">
    <!--Header-->
    @include('frontend::include.__user_header')
    <!--/Header-->



        @include('frontend::include.__user_side_nav')
    
 
    <div class="page-container">
        <div class="main-content">
            <div class="section-gap">
                <div class="container-fluid">
                    @if(setting('kyc_verification','permission'))
                        {{-- Kyc Info--}}
                        @include('frontend::user.include.__kyc_info')
                        @include('frontend::user.mobile_screen_include.kyc.__user_kyc_mobile')
                    @endif
                    <!--Page Content-->
                    @yield('content')
                    <!--Page Content-->
                </div>
            </div>
        </div>
    </div>


    <!-- Show in 575px in Mobile Screen -->
    
        @include('frontend::user.mobile_screen_include.__menu')
    

    <!-- Show in 575px in Mobile Screen End -->

    <!-- Automatic Popup -->
    @if(Session::get('signup_bonus'))
        @include('frontend::user.include.__signup_bonus')
    @endif

    <!-- /Automatic Popup End -->
</div>
<!--/Full Layout-->

<script>
  (function() {
    function forceDesktopView() {
      document.body.classList.remove('mobile-view');
      document.body.classList.add('desktop-view');

      var viewportMeta = document.querySelector('meta[name="viewport"]');
      if (viewportMeta) {
        viewportMeta.content = 'width=1200, initial-scale=1';
      } else {
        var newViewport = document.createElement('meta');
        newViewport.name = 'viewport';
        newViewport.content = 'width=1200, initial-scale=1';
        document.head.appendChild(newViewport);
      }

      document.querySelectorAll('.mobile-screen-show, [class*="mobile-"], .mob-shortcut-btn, .mobile-ref-url, .mobile-menu').forEach(function(el) {
        el.style.display = 'none';
      });

      document.querySelectorAll('.desktop-screen-show, .panel-layout, .page-container, .main-content, .section-gap, .container-fluid').forEach(function(el) {
        el.style.display = 'block';
      });
    }

    // Run on load
    forceDesktopView();

    // Run on resize
    window.addEventListener('resize', forceDesktopView);

    // Use a MutationObserver to watch for dynamically added elements
    var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.type === 'childList') {
          forceDesktopView();
        }
      });
    });

    observer.observe(document.body, { childList: true, subtree: true });
  })();
</script>
@include('frontend.default.include.__script')


</body>

</html>

