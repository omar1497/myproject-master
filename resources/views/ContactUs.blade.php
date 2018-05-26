<!--<title>contacts</title>-->
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

</form>
</div>

</div>
</div>

</div>
</div>

<div id="inner">

<div class="top2_wrapper">
<div class="bg1"><img src="/images/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">

<h1>Contactez Nous </h1>


</div>
</div>
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span9">















</div>

</div>

<div class="row">
<div class="span12">

<h2 class="center"><span>Envoyez nous un Message</span></h2>

<div id="note"></div>
<div id="fields">
	<form id="ajax-contact-form" class="form-horizontal" action="{{ url('home') }}" method="post">
		  {{ csrf_field() }}
		<div class="row">
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputName">Nom Complet:</label>
				    <div class="controls">
				      <input class="span4" type="text" id="inputName" name="nom" value="Nom Complet:" onBlur="if(this.value=='') this.value='Nom Complet:'" onFocus="if(this.value =='Nom Complet:' ) this.value=''">
				    </div>
				</div>
			</div>
			<div class="span4">
				<div class="control-group">
						<label class="control-label" for="inputEmail">Adresse email:</label>
						<div class="controls">
							<input class="span4" type="text" id="inputEmail" name="email" value="Adresse email:" onBlur="if(this.value=='') this.value='Adresse email:'" onFocus="if(this.value =='Adresse email:' ) this.value=''">
						</div>
				</div>
			</div>
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputPhone">phone:</label>
				    <div class="controls">
				      <input class="span4" type="text" id="inputPhone" name="telephone"  value="Telephone" onBlur="if(this.value=='') this.value='Telephone'" onFocus="if(this.value =='Telephone' ) this.value=''">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">
				      <textarea class="span12" id="inputMessage" name="message"  onBlur="if(this.value=='') this.value='message:'"
                        onFocus="if(this.value =='message:' ) this.value=''">message:</textarea>
				    </div>
				</div>
			</div>
		</div>
		<button type="submit" class="submit">Envoyer</button>

	</form>
</div>





</div>
</div>





</div>
</div>
<!--FOOTER-->
@endsection
@
