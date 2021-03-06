  
     @extends('pages.principal')
     @section('content')
         
    

    <!-- Start Breadcrumb 
    ============================================= -->
  
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/header2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1></h1>
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

    <!-- Start Team
    ============================================= -->
    <div class="portfolio-area circle-icon default-padding bottom-less">
        <div class="container">
            <div class="row">
    <div class="row masonary">
        <div id="portfolio-grid" class="portfolio-items col-3">
            <div class="portfolio-items">
                
                @forelse ($produits as $value)
                
                <div class="pf-item metarials renovation">
                    <!-- Single Item -->
                    {{-- <div class="col-md-4 single-item"> --}}
                        <div class="item">
                            <div class="effect-up">
                                <img src="{{asset('assets/produits')}}/{{$value->photo_produit}}" alt="Thumb">
                                <div class="social">
                                    
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>{{$value->nom_produit}}</h4>
                                    <p>{{$value->prix_produit}}</p>
                                  <a href="detailProduit/{{$value->id_produit}}"><span>Ajouter</span></a>
                                </div>
                                
                            </div>
                        {{-- </div> --}}
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                   
                </div>
                @empty
    
                @endforelse
            </div>
        </div>
    </div>
    <!-- End Team -->

            </div>
        </div></div>
    
@endsection