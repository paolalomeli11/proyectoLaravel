<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Gallery | All Works</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/img/favicons/apple-touch-icon.png')}}"> 
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{url('assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('vendors/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('assets/css/user.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="cursor-outer d-none d-md-block"></div>
      <nav class="navbar navbar-light py-3 px-0 overflow-hidden">
        <div class="container px-md-5">
          <div class="row w-100 g-0 justify-content-between">
            <div class="col-8">
              <div class="d-inline-block"><a class="navbar-brand pt-0 fs-3 text-black d-flex align-items-center" href="/"><img width="80"class="img-fluid" src="{{url('assets/img/icons/logo2.png')}}" alt="" /></a></div>
              <div class="mt-4 d-none d-lg-block">
                <h1 id="studio-title1" class="text-uppercase fs-lg-7 fs-5 fw-bolder text-300 lh-1 position-relative z-index-0">PIINK</h1>
                <h1 id="studio-title2" class="d-none d-md-block fw-bolder text-outlined fs-7 text-white lh-1 mt-n4 position-relative z-index--1">Tattoo Studio</h1>
              </div>
            </div>
            <div class="col-4 d-lg-none text-end pe-0">
              <button class="btn p-0 shadow-none text-black fs-2 d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle offcanvas navigation"><span class="menu-bar"></span></button>
            </div>
            <div class="offcanvas offcanvas-end px-0" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasTitle" aria-hidden="true">
              <div class="offcanvas-header justify-content-end">
                <h5 class="visually-hidden offcanvas-title" id="navbarOffcanvasTitle">Menu</h5>
                <button class="btn p-0 shadow-none text-black fs-2 d-inline text-end" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="menu-close-bar"></span></button>
              </div>
              <div class="offcanvas-body px-0">
                <div class="d-lg-flex flex-center-start gap-3 overflow-hidden">
                  <ul class="navbar-nav ms-auto fs-4 ps-6">
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 active" aria-current="page" href="/gallery">Gallery</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-none d-lg-flex justify-content-end position-relative z-index-1">
                <div class="position-absolute absolute-centered z-index--1">
                  <h1 class="ms-2 fw-bolder text-outlined text-uppercase text-white pe-none display-1">Gallery</h1>
                </div>
                <div class="d-flex gap-3 align-items-start"><a class="mb-0 ms-auto text-warning fs-0 fw-bold text-uppercase" href="">Contactame</a>
                  <ul id="nav-active" class="navbar-nav navbar-fotogency ms-auto text-end">
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 active" aria-current="page" href="/gallery">Gallery</a></li>
                    <br><br><br><br><br>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 mt-4 d-lg-none">
            <h1 id="studio-title1" class="text-uppercase ps-0 fs-lg-7 fs-5 fw-bolder text-300 lh-1 position-relative z-index-0">PIINK</h1>
            <h1 id="studio-title2" class="fw-bolder text-outlined ps-0 fs-lg-7 fs-sm-6 fs-5 text-white lh-1 mt-sm-n4 mt-n3 position-relative z-index--1">Gallery</h1>
          </div>
        </div>
      </nav>
      <section class="pt-3 pb-9 position-relative">
        <div class="container px-md-5">
          <div class="position-md-absolute start-0 ms-2 mt-3 mb-4">
            <ul class="nav gallery-tab d-flex gap-3" data-filter-nav="data-filter-nav">
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav active" href="#!" data-filter="*">Todos</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".anime">Anime/Caricatura</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".simbolismo">Simbolismos</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".otro">Otro</a></li>
            </ul>
          </div>
          <div class="row g-3" data-isotope='{"layoutMode":"packery"}'>
            <div class="col-lg-3 col-sm-6 col-12 anime gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/1.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-3 col-sm-6 col-12 anime gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/2.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-6 col-12 otro gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/3.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-6 col-12 simbolismo gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/4.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-3 col-sm-6 col-12 simbolismo gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/5.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-3 col-sm-6 col-12 simbolismo gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/6.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-3 col-sm-6 col-12 otro gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/7.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-3 col-sm-6 col-12 anime gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/8.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
            <div class="col-lg-6 col-12 otro gallery-item isotope-item"><img class="img-fluid w-100" src="{{url('assets/img/gallery/9.png')}}" alt="" data-glightbox="title: Echale un vistazo a mi instagram; description: @piinktatu" /></div>
          </div>
        </div>
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <footer class="bg-footer-black" id="footer">
      <div class="container py-7 px-md-5">
        <div class="row g-0">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="mb-4 d-inline-block"><a class="navbar-brand pt-0 fs-3 text-white d-flex align-items-center" href="/"><img class="img-fluid" src="{{url('assets/img/icons/logo.png')}}" alt="" width="100" /></a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-map-marker-alt"></i><a class="nav-link text-300 d-inline" href="https://www.google.com/maps/place/2109+WS+09+Oxford+Rd+%23127+ParkVilla+Hills,+">2109 WS 09 Oxford Rd #127 ParkVilla Hills, MI 48334</a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-phone"></i><a class="nav-link text-300 d-inline" href="tel:+8801976476893">+88 019 76456893</a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-envelope"></i><a class="nav-link text-300 d-inline" href="mailto:scrscrumbledegg@gmail.com">scrumbledegg@gmail.com</a></div>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </footer>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-black py-0" id="CopyInfo">

      <div class="container px-md-5">
        <div class="row g-0 justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-light text-100">All rights Reserved &copy; Your Company, 2022</p>
          </div>
          <div class="col-12 col-sm-8 col-md-6">
            <p class="fs--1 fw-light my-2 text-center text-md-end text-100"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="fw-bold text-warning" href="https://themewagon.com/" target="_blank">ThemeWagon</a>
            </p>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/popper/popper.min.js') }}" defer></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}" defer></script>
    <script src="{{ asset('vendors/is/is.min.js') }}" defer></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.js') }}" defer></script>
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}" defer> </script>
    <script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}" defer> </script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}" defer></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }} " defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }} defer"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

  </body>

</html>