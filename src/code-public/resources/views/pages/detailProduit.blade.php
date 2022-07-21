  
     @extends('pages.principal')
     @section('content')
         
    

   
  
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/header2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Team Members</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Accuiel</a></li>

                        <li><a href="#">Acheter</a></li>
                        <li class="active">produits</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 


  

    <!-- End Breadcrumb -->


    <!-- Start Team-->

    
      
    <div class="about-area default-padding inc-more">
        <div class="container">
            <div class="row">
                @forelse ($detailProduit as $value)
                    
                
                <div class="col-md-6 thumb">
                    <img src="{{asset('assets/produits')}}/{{$value->photo_produit}}" alt="Thumb">
                </div>
                <div class="col-md-6 info-content">
                    <h1><strong>{{$value->nom_produit}}</strong></h1>
                    <p>
                        {{$value->description_produit}}
                    </p>
                    <p>
                        {{$value->prix_produit}}  
                    </p>
                @php
                    $produit=$value->nom_produit;
                    $session= session("user");
                   $nom= $session["nom"];
                   $tele= $session["tele"];

                   $text="hello".$nom." je veux ce produit s'il vous plait ".$produit;

                @endphp   
                
                    

                    <form method="post" action="">
                        {{-- https://api.whatsapp.com/send/?phone=2112122222&text=hellooo&type=phone_number&app_absent=0 --}}
                       
                        <input type="hidden" name="produit" value="{{$value->nom_produit}}" class="form-control">
                        
                        <a  href="{{route('login')}}" class="btn btn-dark border btn-md" data-animation="animated slideInUp">Acheter</a>
                    </form>
                   
                </div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </div>
    <!-- End Our About -->
    <!-- End Team -->

    
@endsection