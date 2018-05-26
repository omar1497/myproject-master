@extends('layouts.master')
@section('content')

<div class='container '>
  <div class="row">
    <h1>Liste produits </h1>
    <table class="table">
      <head>
        <tr>

          <th>id</th>
          <th>name</th>
          <th>prix</th>
          <th>description</th>
        </tr>
      </head>

      <body>
        @foreach($produits as $produit)
        <tr>
          <td>{{$produit->id}}</td>
          <td>{{$produit->name}}</td>
          <td>{{$produit->prix}}</td>
          <td>{{$produit->descirption}}</td>
        </tr>
        @endforeach
      </body>
    </table>
  </div>



</div>
@endsection
