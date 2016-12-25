<?php
  //page addresses
  include_once("Includes/address.php");
  //php mailer
  require_once("PHP Mailer/form-h.php");
  //paths

  //stylesheets
  $homeCssPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Stylesheets/CSS/Home_CSS/home.css";

  //javascript
  $homeJsPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/home.js";

  //javascript plugins
  $waypointJs = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/Plugins/jquery.waypoints.min.js";
  $counterJs = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/Plugins/jquery.counterup.min.js";
  $mask = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/Plugins/jquery.mask.min.js";

  //navigation
  //address of current page
  $currentAdd = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  //images
  //jumbotron background image
  $jumboBi = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Jumbotron/ottos-autos.jpg";
  $jumboTemp = "http://static.livedemo00.template-help.com/wt_59050/images/backgrounds/bg-01-1920x660.jpg";
  //logo
  $logo = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Logo/otto's-autos.png";
  //White Logo
  $logoW = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Logo/otto's-autos-w.png";
  //Service Images
  include_once("Includes/service-imgs.php");
  //google map
  $map = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Misc/map.png";

  //Long text I dont want to have to write out many times - Home
  //testimonial
  $testimonial = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
  in metus quis velit tincidunt eleifend. Aliquam felis augue, mollis
  at efficitur in, semper eget massa. Cras venenatis nunc feugiat
  mauris fermentum, nec tincidunt nisl rutrum.";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Otto's Auto</title>
    <!--Fontawesome Icons-->
    <script src="https://use.fontawesome.com/342aa590f3.js" async></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" />
    <!--Main Stylesheet-->
    <link rel="stylesheet" href="<?php echo $homeCssPath; ?>" />
    <!--JQuery-->
    <script
			  src="http://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous" defer></script>
    <!-- Latest compiled and minified JavaScript for Bootstrap -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous" defer></script>
    <!-- Waypoints -->
    <script src="<?php echo $waypointJs; ?>" defer></script>
    <!-- Counter Up -->
    <script src="<?php echo $counterJs; ?>" defer></script>
    <!-- Mask -->
    <script src="<?php echo $mask; ?>" defer></script>
    <!-- Main Javascript -->
    <script src="<?php echo $homeJsPath ?>" defer></script>
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once($header); ?>
      <!--jumbotron-->
      <section class="jumbotron" style="background-image:<?php echo "url('" . $jumboTemp . "')"; ?>">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-wrapper">
              <div class="form-desc">
                <h2>Get Estimate</h2>
                <p>
                  If you'd like to get in touch with us,
                  simply fill out the form below or call us
                  at 561-686-4188.
                </p>
              </div>
              <span id="form-messages"></span>
              <form id="ajax-contact" action="<?php echo $home; ?>" method="POST">
                <div class="form-group">
                  <label class="sr-only" for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="John Smith" pattern='[A-Za-z" "]{1,}' required />
                </div>
                <div class="form-group">
                  <label class="sr-only" for="number">Number</label>
                  <input type="tel" class="form-control" id="number" name="number" placeholder="555-555-5555" data-mask="(000) 000-0000"  required />
                </div>
                <div class="form-group">
                  <label class="sr-only" for="query">Describe Your Problem</label>
                  <textarea id="query" rows="5" cols="50" name="query" placeholder="Describe your problem here..." required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-jn" name="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="jumbtron-desc">
              <h1>Superior Service</h1>
              <p>
                At Otto's Autos, we are committed to providing superior services.
                We'll make sure every nook and crannie of your car is taken care of.
              </p>
              <a href="<?php echo $about ?>" class="btn btn-default btn-lg btn-jn" role="button">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <!--Why Us?-->
      <section class="why-us container-88 section">
        <div class="row">
          <div class="title">
            <h2>Why Choose Us?</h2>
            <hr>
          </div>
          <div class="col-sm-4">
            <div class="reason">
              <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
              <h3>Honesty</h3>
              <p>
                Honesty is our number one priority here
                at Otto's Auto. We want to make sure you
                are fully informed of your situation, and that
                you receive honest assessments for the work
                to be performed on your vehicle.
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="reason">
              <i class="fa fa-money" aria-hidden="true"></i>
              <h3>Affordability</h3>
              <p>
                Because we're a local company, we are able
                to receive some of the best pricing from our
                suppliers. This, in turn, allows us to offer
                you some of the lowest prices available on
                vehicle parts and accessories.
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="reason">
              <i class="fa fa-car" aria-hidden="true"></i>
              <h3>Experience</h3>
              <p>
                With a vast experience of over 20 years
                servicing and repairing a multitude of vehicles,
                you can be assured that your vehicle will receive
                the best and proper care it needs here at Otto's Auto.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--Counter-->
      <section class="counter-c">
        <div class="row">
          <div class="col-sm-4">
            <div class="counter-wrap">
              <span id="counter-1" class="counter" data-start="0" data-end="250" data-speed="800">0</span>
              <span class="counter-desc">Happy Customers</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="counter-wrap">
              <span id="counter-2" class="counter" data-start="0" data-end="10" data-speed="800">0</span>
              <span class="counter-desc">Awards</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="counter-wrap">
              <span id="counter-3" class="counter" data-start="0" data-end="30" data-speed="800">0</span>
              <span class="counter-desc">Locations</span>
            </div>
          </div>
        </div>
      </section>
      <!--Services-->
      <section class="services container-88 section">
        <div class="title">
          <h2>Services</h2>
          <hr>
          <p>
            Here at Otto's Autos, we offer a variety of
            services ranging from a simple checkup to
            a tire change.
          </p>
        </div>
        <div class="service-cloud">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <a href="<?php echo $services . "/#ac" ?>">
                <figure class="thumbnail-figure" style="background-image: url('<?php echo $AC ?>')">
                  <figcaption class="thumbnail-caption">
                    <span>
                    </span>
                    <h6>AC Unit</h6>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="<?php echo $services . "/#brakes" ?>">
                <figure class="thumbnail-figure" style="background-image: url('<?php echo $brakes ?>')">
                  <figcaption class="thumbnail-caption">
                    <span>
                    </span>
                    <h6>Brakes</h6>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="<?php echo $services . "/#battery" ?>">
                <figure class="thumbnail-figure" style="background-image: url('<?php echo $battery ?>')">
                  <figcaption class="thumbnail-caption">
                    <span>
                    </span>
                    <h6>Battery</h6>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="<?php echo $services . "/#engine" ?>">
                <figure class="thumbnail-figure" style="background-image: url('<?php echo $engine ?>')">
                  <figcaption class="thumbnail-caption">
                    <span>
                    </span>
                    <h6>Engine</h6>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="<?php echo $services . "/#maintenance" ?>">
                <figure class="thumbnail-figure" style="background-image: url('<?php echo $maintenance ?>')">
                  <figcaption class="thumbnail-caption">
                    <span>
                    </span>
                    <h6>Maintenance</h6>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="<?php echo $services . "/#tires" ?>">
                <figure class="thumbnail-figure" style="background-image: url('<?php echo $tires ?>')">
                  <figcaption class="thumbnail-caption">
                    <span>
                    </span>
                    <h6>Tires</h6>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <a class="btn btn-dft" href="<?php echo $services; ?>" role="button">See All Services</a>
      </section>
      <!--Testimonials-->
      <section class="testimonials section">
        <div class="title" id="testm-title">
          <h2>Testimonials</h2>
          <hr>
        </div>
        <div id="testimonials-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#testimonials-slider" data-slide-to="0" class="active"></li>
            <li data-target="#testimonials-slider" data-slide-to="1"></li>
            <li data-target="#testimonials-slider" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="content">
                <p class="triangle-border">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  I absolutely loved how quick and dirt cheap Otto's services were!
                  Anybody looking for car servicing should definitely check out Otto's Auto.
                  You can thank me later!
                </p>
              </div>
            </div>
            <div class="item">
              <div class="content">
                <p class="triangle-border">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <?php echo $testimonial; ?>
                </p>
              </div>
            </div>
            <div class="item">
              <div class="content">
                <p class="triangle-border">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <?php echo $testimonial; ?>
                </p>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#testimonials-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#testimonials-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <!--Find Us-->
      <section class="find-us">
        <div class="title">
          <h2>Find Us</h2>
          <hr>
        </div>
        <div class="flex">
          <div class="contact-info">
            <ul class="list-unstyled list-inline">
              <li class="email">
                <div class="table">
                  <div class="icon-table-wrap">
                    <i class="fa fa-map-marker icon-round" aria-hidden="true"></i>
                  </div>
                  <span>4365 Okeechobee Blvd</span>
                </div>
              </li>
              <li class="hours">
                <div class="table">
                  <div class="icon-table-wrap">
                    <i class="fa fa-clock-o icon-round" aria-hidden="true"></i>
                  </div>
                  <span>Mon–Fri: 8:00AM– 6:00PM</span>
                </div>
              </li>
              <li class="phone-number">
                <div class="table">
                  <div class="icon-table-wrap">
                    <i class="fa fa-phone icon-round" aria-hidden="true"></i>
                  </div>
                  <span>(561) 686-4188</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="social-media">
          <div class="container-88">
            <div class="row">
              <div class="col-md-3">
                <div class="social-block">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <span>Join Us on Social Media!</span>
                </div>
              </div>
              <div class="col-md-6">
                <p>
                  Find and follow us on any of your favorite social media platforms, such as Facebook, Twitter, and Google+.
                  We will keep you updated on the latest promotions, services, and events going on at Otto's Auto,
                  so make sure to connect with us! We are also available to answer any of your questions.
                </p>
              </div>
              <div class="col-md-3">
                <div class="social-icons">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="google-map" style="background-image: url('<?php echo $map; ?>')">
          <a class="btn btn-dft" href="https://www.google.com/maps/dir//26.7088123,-80.1087068/@26.708812,-80.108707,16z?hl=en-US" target="_blank" role="button">Get Directions</a>
        </div>
      </section>
      <!--Footer-->
      <?php include_once($footer); ?>
    </div>
  </body>
</html>
