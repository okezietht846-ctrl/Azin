<!DOCTYPE html>
<html lang="en">

@include('frontend::include.__head')

<body>

<div id="ytWidget"></div>
<x:notify-messages/>
<!--Header Area-->
@include('frontend::include.__header')
<!--/Header Area End-->

@yield('content')

<!--Footer Area-->
@include('frontend::include.__footer')
<!--Footer Area End-->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-a248de60-6489-4294-83f3-8bff456d2678" data-elfsight-app-lazy></div>
@include('frontend::cookie.gdpr_cookie')

@include('frontend::include.__script')


</body>
</html>

