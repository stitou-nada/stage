  
     @extends('pages.principal')
     @section('content')
         
    

    <!-- Start Breadcrumb 
    ============================================= -->
    @forelse ($produits as $value)
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

    <!-- Start Team
    ============================================= -->
    
    <div class="team-area default-padding bottom-less">
        <div class="container">
            @forelse ($produits as $value)
            <div class="row">
                
                <div class="team-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('assets/produits')}}/{{$value->photo_produit}}" alt="Thumb">
                                <div class="social">
                                    
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>{{$value->nom_produit}}</h4>
                                    <p>{{$value->nom_prix}}</p>
                                    <span>Ajouter</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                   
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
    <!-- End Team -->

    
@endsection