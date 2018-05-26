<!--<title>Offres</title> -->
@extends('layouts.master')

@section('content')

<script>
$(document).ready(function() {
	//






}); //
$(window).load(function() {
	//
	// isotop
	var $container = $('#isotope-items'),
		$optionSet = $('#isotope-options'),
	    $optionSets = $('#isotope-filters'),
	    $optionLinks = $optionSets.find('a');
    $container.isotope({
        filter: '*',
        layoutMode: 'fitRows'
    });
   	$optionLinks.click(function(){
   		var $this = $(this);
    	// don't proceed if already selected
		if ( $this.hasClass('selected') ) {
			return false;
		}
   		$optionSet.find('.selected').removeClass('selected');
   		$this.addClass('selected');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
      	return false;
    });
	$(window).on("resize", function( event ) {
		$container.isotope('reLayout');
	});

	// touchTouch
	$('.thumb-isotope .thumbnail a').touchTouch();

}); //
</script>
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
	<![endif]-->

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->

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

<h1>Offres</h1>



</div>
</div>
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span12">

<h2><span>Parce que nous pensons à vous</span></h2>

<div id="isotope-options">
    <ul id="isotope-filters" class="clearfix">
        <li><a href="#" class="selected" data-filter="*">Tout montrer</a></li>
        <li><a href="#" data-filter=".isotope-filter1">-20%</a></li>
        <li><a href="#" data-filter=".isotope-filter2">Dernière chance</a></li>
        <li><a href="#" data-filter=".isotope-filter3">Cadeaux</a></li>
    </ul>
</div>

<ul class="thumbnails" id="isotope-items">
    <li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery01.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter2">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery02.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter3">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery03.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery04.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter2">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery05.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter3">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery06.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery07.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter2">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery08.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter3">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="images/blank.png">
					<figure>
						<img src="images/gallery09.jpg" alt=""><em></em>
					</figure>
					<div class="caption">
						Lorem ipsum dolor sit amet conse ctetur
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
<!--FOOTER-->
@endsection
