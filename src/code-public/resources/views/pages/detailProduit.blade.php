  
     @extends('pages.principal')
     @section('content')
         
    

    <!-- Start Breadcrumb 
    ============================================= -->
  
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
 
    @php
     
     if(isset($_GET['submit'])){

        
        $nom = $_GET['nom'];
     header("https://www.w3schools.com");
        

        die();
        }


    @endphp

    <!-- End Breadcrumb -->


    <!-- Start Team

i
    ============================================= -->
    
      <!-- Start Our About
    ============================================= -->
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
                   
                    <form method="GET" >
                       
                        <input type="text"  name="nom" class="form-control">
                        <input type="text" name="tele" class="form-control">
                        <input type="hidden" name="produit" class="form-control">
                        <input type="submit"  name="submit" value="ddddhhh">
                        <a  class="btn btn-dark border btn-md" data-animation="animated slideInUp">Acheter</a>
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