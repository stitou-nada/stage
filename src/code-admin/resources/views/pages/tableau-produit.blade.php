@extends('pages.principal')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Gestions des produits</h1>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{route('afficher-produit.create')}}">Ajouter produit</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>PHOTO</th>
                        <th>NAME</th>
                        <th>PRIX</th>
                        <th>CATEGORIE</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($produit as $value)
                        
                  
                    <tr>
                        <td style="width: 20%"><div class="uImg"><img src="{{asset('produits')}}/{{$value ->photo_produit}}" alt="" style="width: 100px"></div></td>
                        <td>{{$value->nom_produit}}</td>
                        <td>{{$value->prix_produit}}</td>
                        <td>{{$value->nom_categorie}}</td>
                        <td>{{$value->description_produit}}</td>
                       
                        <td>                        
                            {{-- <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                    data-target="#labelModal"></i></a> --}}
                            <a href="{{route('afficher-produit.edit',$value->id_produit)}}"><i class="item-action fa fa-edit" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            
                                    <form action="{{route('afficher-produit.destroy',$value->id_produit)}}" method="POST">
                                        @csrf
                                  @method("DELETE")
                                  <button> <i class="item-action fa fa-trash" data-toggle="modal"
                                          data-target="#deleteItemModal"></i></button>
                              
                                      </form>
                    </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection