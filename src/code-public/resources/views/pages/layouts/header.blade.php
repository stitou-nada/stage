 <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-border bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span>Address</span> Complexe ikhlas Lot 84, 2éme Etage Appt 13 -Tanger
                                </div> 
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> fibrotrav15@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +212539364393 / +212539364394
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default active-border attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>


                        @if (session('user') !=null)
                    
                
                        @php
                        
                          $session = session('user');
               
               
                          
                          
                        @endphp
               
     

               <li class="dropdown">
                <a href="" class="dropdown-toggle active" data-toggle="dropdown" >{{$session['nom']}}</a>
                <ul class="dropdown-menu">
                    <li><a href='{{route('logout')}}'>déconnexion</a></li>
                 
                </ul>
              @else
               
               <li class="btn"><a href="{{route('login')}}">Connexion</a></li>
               @endif
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/LOGO FIBROTRAV.png" style="width:200px;" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown active">
                            <a href="#"  data-toggle="dropdown" >Accuiel</a>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#"  data-toggle="dropdown" >Services</a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Acheter</a>
                            <ul class="dropdown-menu">
                                <li><a href='produit'>produit</a></li>
                                <li><a href="team-3.html">login</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

