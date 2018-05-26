

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

<h1>Liste de vos Clients</h1>




</div>
</div>
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span12">

<h2><span>Client list</span></h2>

<div class="row">
	      @foreach($clients as $client)
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<div class="caption">
			<div class="txt1">{{$client->nom}}</div>
      <div class="txt1">{{$client->telephone}}</div>
		    <div class="txt3">{{$client->email}}</div>
		      <div class="txt2">{{$client->message}}</div>
		</div>
	</div>
</div>
</div>
  @endforeach

</div>













</div>
</div>


</div>
</div>
<!--FOOTER-->
@endsection
