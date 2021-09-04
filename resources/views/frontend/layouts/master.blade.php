<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend.layouts.head')	
</head>
<body class="home-page home-01 ">
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>	

	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main')
	
	@include('frontend.layouts.footer')

</body>
</html>