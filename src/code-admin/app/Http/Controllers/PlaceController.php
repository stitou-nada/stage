<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $produit= DB::table('produits')
       ->select('*')
       ->join('categories','produits.id_categorie','=' ,'produits.id_categorie')
       ->get();
       return view('pages.tableau-endroit', compact('produit'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie =DB::table('categories')
        ->select('id_categorie','nom_categorie')
        ->get();
        return view('pages.inserte-endroit', compact('categorie'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom=$request->input('nom_produit');
        $description=$request->input('description_produit');
        $id_categorie=$request->input('id_categorie');
        if($request->hasfile('photo_produit'))
         {
             $file = $request->file('photo_produit');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('places', $filename);
            $photo = $filename;
         }
         $inserte = DB::insert('insert into places(nom_produit,photo_produit,description_produit,id_categorie) value(?,?,?,?,?)',[$nom,$photo,$description,$id_categorie]);
         if($inserte){
          return redirect('afficher-endroit');
          
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit=DB::table('produits')
      ->where('id_produit',$id)
      ->select('*')
      ->join("categories","produits.id_categorie","=",'categories.id_categorie')
      ->get();
      $produit = DB::table('categories')
        ->select("*")
        ->get();
      return view('pages.edit-endroit', compact('edit',"produit"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nom = $request->input('nom_produit');
        $id_categorie= $request->input('id_categorie');
        $description = $request->input('description_produit');
        

        if ( $request->hasFile('photo_produit')) {
            $file = $request->file('photo_produit');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('produits', $filename);
                $image = $filename;
             }
           else{
               $image= $request->input("img");
          }

       DB::table('produits')
       ->where('id_produit',$id)
       -> update(['nom_produit'=>$nom,'id_categorie'=>$id_categorie,'description_produit'=>$description,'photo_produit'=>$image]); 


       return redirect('afficher-endroit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $inserte=DB::table('produits')
      ->where('id_produit',$id)
      ->delete();
      if ($inserte) {
         return redirect('afficher-endroit');
      }
    }
}
