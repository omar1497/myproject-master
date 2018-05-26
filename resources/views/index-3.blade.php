
<!--<title>sales</title> -->

<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
	<![endif]-->

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
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
<div id="inner">

<div class="top2_wrapper">
<div class="bg1"><img src="images/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">

<h1>Produits</h1>




</div>
</div>
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span12">

<h2><span>Selling List</span></h2>

<div class="row">
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales01.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$570.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales02.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$140.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales03.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$220.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales04.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$800.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
</div>

<div class="row">
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales05.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$410.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales06.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$570.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales07.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$650.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="images/sales08.jpg" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$290.000</div>
			<a href="#" class="button2">Read More</a>
		</div>
	</div>
</div>
</div>
</div>












</div>
</div>


</div>
</div>
<!--FOOTER-->
@endsection
