<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produit extends Controller
{
    function afficher_produit(){

        $produits=DB::table('produits')
          ->select("*")
          ->get();
         
          return view("pages.produits",compact("produits"));
      }
}
