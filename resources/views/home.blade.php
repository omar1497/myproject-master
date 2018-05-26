@extends('layouts.master')

@section('content')
<div id="search">

<a href="#" class="searchBtn"></a>

<div class="search-form-wrapper">
<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
	<input type="text" name="s" value='Recherche' onBlur="if(this.value=='') this.value='Recherche'" onFocus="if(this.value =='Recherche' ) this.value=''">
	<a href="#" onClick="document.getElementById('search-form').submit()"></a>
</form>
</div>

</div>
</div>

</div>
</div>
<!--END HEADER-->
<div id="inner">

<div class="find_wrapper">

<div class="find_inner">
<div class="find">



<div class="txt3">Vous Recherchez un produit?</div>

<div class="line"></div>


<div class="find-form-wrapper clearfix">
  <form id="find-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form clearfix" >
    <input type="text" name="s" value='recherche' onBlur="if(this.value=='') this.value='recherche'" onFocus="if(this.value =='recherche' ) this.value=''">
    <a href="#" onClick="document.getElementById('find-form').submit()"></a>
  </form>
</div>


</div>
</div>

<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
			<div data-src="{{asset('images/slide10.jpg')}}"></div>
			<div data-src="{{asset('images/slide11.jpg')}}"></div>
			<div data-src="{{asset('images/slide12.jpg')}}"></div>

		</div>
	</div>
</div>
</div>

<div class="banners">
<div class="container">
<div class="row">
<div class="span4 banner banner1">
<div class="banner_inner">
<a href="#">
<div class="caption">
<div class="txt1">AVANTAGES</div>
<div class="txt2">Un prix moins, un délai de livraison cout et une qualité garantie</div>
<!--<div class="txt3">more</div>	-->
</div>
</a>
</div>
</div>
<div class="span4 banner banner2">
<div class="banner_inner">
<a href="#">
<div class="caption">
<div class="txt1">MISSION</div>
<div class="txt2">Vous rapprochez des outils de l'IT  </div>
<!--<div class="txt3">more</div>	-->
</div>
</a>
</div>
</div>
<div class="span4 banner banner3">
<div class="banner_inner">
<a href="#">
<div class="caption">
<div class="txt1">Vision</div>
<div class="txt2">Participer au développement du domaine économique au Maroc</div>
<!--<div class="txt3">more</div>	-->
</div>
</a>
</div>
</div>
</div>
</div>
</div>

<div id="slider3_wrapper">
<div class="container">

<div class="slider3_title"><span>Nouveaux Produits</span></div>

<div id="slider3">
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>
<div class="carousel-box row">
	<div class="inner span12">
		<div class="carousel main">
			<ul>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel01.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$570.000</div>
									<div class="txt4">Consulter</div>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel02.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">240,00MAD</div>
									<div class="txt4">Consulter</div>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel03.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">480,00MAD</div>
									<div class="txt4">Consulter</div>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel04.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$120.000</div>
									<div class="txt4">Consulter</div>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel05.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$730.000</div>
									<div class="txt4">Read More</div>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel06.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$470.000</div>
									<div class="txt4">Read More</div>
								</div>
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>

</div>
</div>

<div id="content">
<div class="container">
<!--<div class="row">
<div class="span9">

<h2><span>How it works</span></h2>

<div class="row">
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">a</div>
	<div class="txt2">Lorem ipsum<br>dolor sit</div>
</div>

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">b</div>
	<div class="txt2">Vestibulum ante<br>ipsum primis</div>
</div>

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">c</div>
	<div class="txt2">Cras dictum<br>odio</div>
</div>

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
</div>

</div>
<div class="span3">

<h2><span>Our Professional Management</span></h2>

<ul class="ul1">
	<li><a href="#">Adipisicing</a></li>
	<li><a href="#">Dolore magna aliqua</a></li>
	<li><a href="#">Eiusmod tempor</a></li>
	<li><a href="#">Elit sed do</a></li>
	<li><a href="#">Incididunt ut labore et</a></li>
	<li><a href="#">Lorem ipsum dolor</a></li>
	<li><a href="#">Sit amet conse ctetur</a></li>
	<li><a href="#">Ut enim ad minim</a></li>
</ul>

</div>
</div>
</div>
</div>
-->
<!--FOOTER-->
@endsection
