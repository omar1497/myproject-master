@extends('layouts.master')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{ url('produit') }}" method="post" >
            {{ csrf_field() }}

              <div class="form-group">
              <label for="">name</label>
              <input type="text" class="form-control" name="name" >
              </div>

              <div class="form-group">
              <label for="">prix</label>
              <input type="text" class="form-control" name="prix">
              </div>


              <div class="form-group">
              <label for="">image</label>
              <input type="file" class="form-control" name="image" >
            </div>
              <div class="form-group">
              <label for="">description</label>
              <textarea class="form-control"  name="description">  </textarea>
              </div>

              <div class="form-group">

              <input type="submit" class="form-control btn btn-primary" value="Enregister">
              </div>






    </form>




   </div>
  </div>
</div>



@endsection
