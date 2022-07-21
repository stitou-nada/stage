<?php
namespace App\Http\Controllers;

use App\Http\Middleware\session as MiddlewareSession;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use App\Models\ProduitModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produit extends Controller
{


  function userlogin(Request $request){
    $nom = $request->input();
    // $nom = $request->input("nom");
  //   $tele = $request->input("tele");
  //   $data= ["nom"=>$nom,
  //   'tele'=>$tele
  // ];
    Session::put("user",$nom);
    return view('pages.index');

  }

  function login(){

    return view('pages.login');
  }
    function afficher_produit(){
      $produits = ProduitModel::all();
      
          return view("pages.produit",compact("produits"));
      }
      function afficher_detail_produit($id){

       $detailProduit=ProduitModel::where('id_produit',$id)
      ->select("*")
      ->get();
      return view("pages.detailProduit",compact("detailProduit")); 
      }


      function message_wh(Request $request){
        // $nom =$request->input('nom');
        // $tele=$request->input('tele');
        // $produit=$request->input('produit');
        $text="hello".$nom."je veux ce produit s'il vous plait".$produit;
        // if ($request->input('tele')) {
            
            
            // header("Location: https://api.whatsapp.com/send/?phone=".$tele."&text=".$text."&type=phone_number&app_absent=0");
            
            if(!empty($request)){
            header("Location: https://api.whatsapp.com/send/?phone=2112122222&text=hellooo&type=phone_number&app_absent=0");
        // 
      }

      }
}
