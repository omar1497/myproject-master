<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
  // Liste des produit
  public function index(){
$Listprod=Produit::all();
return view('index-produit',['produits' =>$Listprod]);

  }
  // formulaire insertion de produit
  public function create(){
    return view('create-produit');
    }
    // modifier le produit
  public function update(){


  }
  // recuperer d' un produit
  public function edit(){


  }
  // enregistrer un produit
  public function store(Request $request){
    $produit=new Produit();
  $produit->name=$request->input('name');
    $produit->prix=$request->input('prix');
      $produit->descirption=$request->input('description');
  $produit->image=$request->input('image');
   $produit->save();
     return view('index-produit');

  }
  // supp produit
  public function destroy(){


  }
}
