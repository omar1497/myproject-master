index-3<!DOCTYPE html>
<html lang="en">
<head>
<title>AmEShop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/camera.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/isotope.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/jquery.caroufredsel.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/bootstrap-responsive.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/camera.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="screen">


<link rel="stylesheet" href="{{asset('css/camera.css')}}" type="text/css" media="screen">

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/superfish.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.ui.totop.js')}}"></script>

<script type="text/javascript" src="{{asset('js/camera.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.caroufredsel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>


<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>


<script>
$(document).ready(function() {
	//
	//	carouFredSel team
  $('#camera_wrap').camera({
		//thumbnails: true
		//alignment			: 'centerRight',
		autoAdvance			: true,
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '48%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});
  $('#slider3 .carousel.main ul').carouFredSel({
    auto: {
      timeoutDuration: 8000
    },
    responsive: true,
    prev: '.prev3',
    next: '.next3',
    width: '100%',
    scroll: {
      items: 1,
      duration: 1000,
      easing: "easeOutExpo"
    },
    items: {
          width: '330',
      height: 'variable',	//	optionally resize item-height
      visible: {
        min: 1,
        max: 4
      }
    },
    mousewheel: false,
    swipe: {
      onMouse: true,
      onTouch: true
      }
  });
	$('#slider4 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 8000
		},
		responsive: true,
		prev: '.prev4',
		next: '.next4',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},
		items: {
        	width: '180',
			height: 'variable',	//	optionally resize item-height
			visible: {
				min: 2,
				max: 6
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	});

	//	carouFredSel team
	$('#slider5 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 9000
		},
		responsive: true,
		direction:	"left",
		//prev: '.prev1',
		//next: '.next1',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo",
			fx: "fade"
		},
		items: {
        	width: '1000',
			height: 'variable',	//	optionally resize item-height
			visible: {
				min: 1,
				max: 1
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			},
		pagination  : ".pagination5"


	});




	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){
		$('#slider4 .carousel.main ul').trigger("updateSizes");
    	$('#slider3 .carousel.main ul').trigger("updateSizes");
		$('#slider5 .carousel.main ul').trigger("updateSizes");
	}
	updateSizes_vat();




}); //
$(window).load(function() {
	//

}); //
</script>
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
	<![endif]-->

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="not-front">
<div id="main">

<div class="top1_wrapper">
<div class="top1 clearfix">

<header><div class="logo_wrapper"><a href="index" class="logo"><img src="{{asset('images/logolol.png')}}" alt=""></a></div></header>

<div class="menu_wrapper clearfix">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
<li><a href="index">home</a></li>


<li class="active"><a href="index-1">A propos de nous</a></li>

@if (Auth::guest())
    <li><a href="{{ url('ContactUs') }}">Contactez-nous</a></li>
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
    <li><a href="index-client">Client</a></li>
      <li><a href="create-produit">Add Produit</a></li>
@endif
<li><a href="{{ url('ContactUs') }}">Contactez-nous</a></li>
<li class="sub-menu sub-menu-1"><a href="index-produit">Produits</a>	</li>


	</ul>
</li>

    </ul>
		</div>
	</div>
</div>

   @yield('content')


   <div class="bot1_wrapper">
   <div class="container">
   <div class="bot1 clearfix">
   <div class="row">
   <div class="span3">

   <div class="bot1_title"></div>

   <div class="logo2_wrapper"><a href="index" class="logo2"><img src="{{asset('images/logolol.png')}}" alt=""></a></div>

   <footer><div class="copyright"><br></div></footer>

   </div>
   <div class="span5">

   <div class="bot1_title">Nous veillons à garantir la meilleur expérience d'achat à nos clients, à travers notre qualité distinguée et nos services après vente. Votre satisfaction est notre premier objectif.</div>


   </div>
   <div class="span3 offset1">

   <div class="bot1_title">Suivez-Nous</div>

   <div class="social_wrapper">
   	<ul class="social clearfix">
       <li><a href="https://www.facebook.com/ensat.csc/"><img src="{{asset('images/social_ic1.png')}}"></a></li>
       <li><a href="#"><img src="{{asset('images/social_ic2.png')}}"></a></li>
       <li><a href="#"><img src="{{asset('images/social_ic3.png')}}"></a></li>
       <li><a href="#"><img src="{{asset('images/social_ic5.png')}}"></a></li>
   	</ul>
   </div>

   </div>
   </div>
   </div>
   </div>
   </div>

   </div>
   </div>
   <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
   <!--END FOOTER-->
   </body>
   </html>
