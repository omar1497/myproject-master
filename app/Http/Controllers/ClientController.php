<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
  public function index(){
$ListClient=Client::all();
return view('index-client',['clients' =>$ListClient]);

  }
  // formulaire insertion de clt
  public function create(){
    return view('ContactUs');
    }
    // modifier le clt
  public function update(){


  }
  // recuperer d' un clt
  public function edit(){


  }
  // enregistrer un clt
  public function store(Request $request){
    $clt=new Client();
  $clt->nom=$request->input('nom');
    $clt->email=$request->input('email');
      $clt->telephone=$request->input('telephone');
  $clt->message=$request->input('message');
   $clt->save();
     return view('index');

  }
  // supp clt
  public function destroy(){


  }
}
