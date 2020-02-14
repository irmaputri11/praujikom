<!DOCTYPE html>
<html lang="en">
  <head>
    <title>karl - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/karl/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/karl/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/karl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/karl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/karl/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/karl/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/karl/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/karl/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/karl/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('assets/karl/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/karl/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/karl/css/style.css')}}">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="i/"><span class="flaticon-lotus"></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="pricing" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/karl/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Contact us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate bg-light p-4">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Contact Information</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Address:</span> bandung, Indonesia</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone:</span> <a href="tel://1234567920">+6289 9759 5534</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:irmaputri419@gmail.com">irmaputri419.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>

          <!-- <section class="page-content container-fluid"> -->
          <div class="col-md-6 ftco-animate">
            	<div class="row">
              <div class="card-body">
                                <form action="{{route('pengguna.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">id pengguna</label>
                                        <input class="form-control
                                        @error('id_pengguna') is-invalid @enderror" type="text"
                                        name="id_pengguna" id="" required>
                                        @error('id_pengguna')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">username</label><br>
                                        <input class="form-control
                                        @error('username') is-invalid @enderror" type="text"
                                        name="username" id="" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">email</label><br>
                                        <input class="form-control
                                        @error('email') is-invalid @enderror" type="text"
                                        name="email" id="" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">alamat</label>
                                        <input class="form-control
                                        @error('alamat') is-invalid @enderror" type="text"
                                        name="alamat" id="" required>
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <input class="form-control
                                        @error('deskripsi') is-invalid @enderror" type="text"
                                        name="deskripsi" id="" required>
                                        @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
              </div>
            </form>
          </div>
          <!-- </section> -->



    <div id="map" class="map"></div>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">karl</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Popular Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Aromatheraphy</a></li>
                <li><a href="#">Skin Care</a></li>
                <li><a href="#">Herbal Spa</a></li>
                <li><a href="#">Body Massage</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">Our Spa</a></li>
                <li><a href="#">Treatments</a></li>
                <li><a href="#">Specialists</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assets/karl/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/aos.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/karl/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assets/karl/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets/karl/js/google-map.js')}}"></script>
  <script src="{{asset('assets/karl/js/main.js')}}"></script>

  </body>
</html>
