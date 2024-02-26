<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Discover World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">



    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">
  </head>
  <body>
    
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/">Discover World</a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="../welcome">Home</a></li>
                        <li><a href="/addAdv">Creer votre aventure</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>






    <section>
      <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="images p-3">
                              <div class="text-center p-4"> <img id="main-image" src="/images/storage/{{ $aventure->images[0]->image }}" width="250" /> </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                           <div class="product p-4">
                              <div class="d-flex justify-content-between align-items-center">
                              </div>
                              <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{ $aventure->destination->name }}</span>
                                <h5 class="text-uppercase">{{ $aventure->name }}</h5>
                              </div>
                              <p class="about">{{ $aventure->description }}</p>
                           </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    </section>


    <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
  
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
              <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
              <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span></p>
              <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+1) 435 3533</span></p>
              <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> info@domain.com</span></p>
            </div>
            
            
          </div>
          <div><span>Created by Ismail Ouali</span>	&copy;</div>
        </div>
      </footer>
      
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      
      
      <script src="js/aos.js"></script>
      
      <script src="js/bootstrap-datepicker.js"></script> 
      <script src="js/jquery.timepicker.min.js"></script> 
  
      
  
      <script src="js/main.js"></script>
      
  
      <script src="js/main.js"></script>
      
    </body>
  </html>