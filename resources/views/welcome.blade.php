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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
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
                        <li class="active"><a href="./">Home</a></li>
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
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Share your aventure with us</span>
            <h1 class="heading">A Best Place To share</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section bg-light pb-0">
      <div class="container">
          <div class="row check-availabilty" id="next">
              <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
                  <form action="#">
                      <div class="row">
                          <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                              <label for="checkin_date" class="font-weight-bold text-black">Destination name</label>
                              <div class="field-icon-wrap">
                                  <div class="icon"><span class="icon-calendar"></span></div>
                                  <select name="dest" class="form-control">
                                      @foreach($destinations as $destination)
                                          <option value="{{$destination->id}}">{{$destination->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-3 align-self-end">
                              <button id="filterAventures" class="btn btn-primary btn-block text-white">Check Availabilty</button>
                          </div>

                          <div class="col-md-2 col-lg-2 align-self-end">
                                <label for="sortOption" class="font-weight-bold text-black">Sort Option</label>
                                <select id="sortOption" name="sort" class="form-control">
                                    <option value="asc">Ascending</option>
                                    <option value="desc">Descending</option>
                                </select>
                          </div>
                        </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
  
  <section class="section" id="aventureList">
      <div class="container">
          <div class="row justify-content-center text-center mb-5">
              <div class="col-md-7">
                  <h2 class="heading" data-aos="fade-up">Aventures</h2>
                  <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
          </div>
          <div class="row p-2">
              @foreach($aventures as $aventure)
                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-destination="{{ $aventure->destination_id }}">
                      <a href="#" class="room">
                          <figure class="img-wrap">
                              <img src="/images/storage/{{ $aventure->images[0]->image }}" alt="Free website template" class="img-fluid mb-3">
                          </figure>
                          <div class="p-3 text-center room-info">
                              <h2>{{ $aventure->name }}</h2>
                              <p>{{ $aventure->created_at }}</p>
                              <a href="{{ route('adventures.show', ['id' => $aventure->id]) }}">View Details</a>
                          </div>
                      </a>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
    
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="images/food-1.jpg" alt="Image" class="img-fluid">
            </figure>
            <img src="images/image1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Our numbers</h2>
            <p class="mb-4">Number of adventures: {{ $aventureCount }}</p>
            <p class="mb-4">Number of destinations: {{ $destinationCount }}</p>
           
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"></span>
          </div>
          
        </div>
      </div>
    </section>
    
    <!-- END section -->
    




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
    <script>
      // $(document).ready(function () {
      //     $('#filterAventures').on('click', function (e) {
      //         e.preventDefault();
  
      //         var selectedDestinationId = $('select[name="dest"]').val();
  
      //         if (selectedDestinationId) {
      //             $('[data-destination]').hide(); 
  
      //             $('[data-destination="' + selectedDestinationId + '"]').show();
                  
      //             if ($('[data-destination="' + selectedDestinationId + '"]').length === 0) {
      //                 $('#aventureList').html('<p>No adventures found for the selected destination.</p>');
      //             }
      //         } else {
      //             $('[data-destination]').show();
      //         }
      //     });
      // });
  </script>
  
  </body>
</html>