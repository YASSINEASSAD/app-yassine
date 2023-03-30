<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
 
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>
      </section><!-- End Top Bar -->
    
      <header id="header" class="header d-flex align-items-center">
    
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>SH-company<span>.</span></h1>
          </a>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('yourcampanies')}}">Your companies </a></li>
              <li><a href="{{route('addcampanie')}}">Add companie</a></li>
              <li class="dropdown" style="margin-left:40px;" ><a href="#" style="border:solid 1px rgb(255, 255, 255) ; border-radius:50px;padding-right:10px;padding-left:10px;">
                <span>
                   @if (isset(auth()->user()->file))
                    <img width="30" height="30" style="border-radius: 50px; margin:5px;"  src="{{asset('storage/logo/'.auth()->user()->file)}}" alt="">
                    
                    @else
                   <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/> </svg>
                       
                   @endif
                </span>{{auth()->user()->name ?? "sign up"}} <span></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul >
                  @if (auth()->check())
                  <li><a href="{{route('profilewhithoutinputs')}}">profile</a></li> 
                      <li><a href="{{route('logout')}}">logout</a></li> 
                  @else
                      <li><a href="{{route('login')}}">login</a></li>
                      <li><a href="{{route('registration')}}">registration</a></li>
                  @endif
                </ul>
              </li>
              
            </ul>
          </nav><!-- .navbar -->
    
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
        </div>
      </header><!-- End Header -->
      <!-- End Header -->
 
</body>
</html>