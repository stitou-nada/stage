<!DOCTYPE html>
<html lang="en">

@include('pages.layouts.head')

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    <!-- start Header -->

@include('pages.layouts.header') 

 <!-- End Header -->
@yield('content')

    <!-- Start Footer 
    ============================================= -->
    @include('pages.layouts.footer')
</body>
</html>