<?php
  //page addresses
  include_once("Includes/address.php");
  //paths
  //stylesheets
  $AboutCssPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Stylesheets/CSS/About_CSS/about.css";
  //javascript
  $AboutJsPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/about.js";
  //javascript plugins
  $waypointJs = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/Plugins/jquery.waypoints.min.js";
  //address of current page
  $currentAdd = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  //images
  //logos
  $logo = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Logo/otto's-autos.png";
  //White Logo
  $logoW = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Logo/otto's-autos-w.png";

  $aboutImage =   $service = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/About/about.jpg";

  //templates
  //header
  $header = "Templates/header.php";
  //footer
  $footer = "Templates/footer.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us</title>
    <!--Fontawesome Icons-->
    <script src="https://use.fontawesome.com/342aa590f3.js" async></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" />
    <!--Main Stylesheet-->
    <link rel="stylesheet" href="<?php echo $AboutCssPath; ?>" />
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
    <!-- My Javascript -->
    <script src="<?php echo $AboutJsPath ?>" defer></script>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php require_once($header); ?>
      <section id="parallax">
        <div class="flex">
          <h2>About Us</h2>
        </div>
      </section>
      <section id="about-us" class="container-88 section">
        <div class="row">
          <div class="col-md-4">
            <div class="about-block">
              <div class="title">
                <h2>Our Story</h2>
                <hr>
              </div>
              <img src="http://static.livedemo00.template-help.com/wt_59050/images/about-us-01-451x304.jpg" alt="About Us" />
              <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Contact Us</a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="about-us-desc">
              <h3>The Journey</h3>
              <p>
                Otto started out as a young student in his home country
                of Honduras. There, he was offered some of the finest education
                by the Honduras government for mechanic schools. He learned well,
                accelerated well beyond his peers, and eventually graduated. From that
                point on was history. Otto set his sights for Florida, and created his business, Otto's Auto.
                Throughout his career as an auto mechanic, he has literally repaired
                hundreds of vehicles, and seen just about anything that could go wrong
                with them.
              </p>
              <h3>What We Can Offer</h3>
              <p>
                Here at Otto's Auto, we offer so much more than what traditional auto
                repair shops can. Not only do we offer service and repair for your vehicle,
                but we also offer our wisdom, experience, and advice to ensure that you get
                the very best service you deserve. We enjoy helping customers make the best
                possible decisions for themselves and for their vehicles, and we strive to leave
                them satisfied in every possible respect.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="offer" class="section">
        <div class="overlay">
        </div>
        <div class="row container-88">
          <div class="col-md-6">
            <ul class="advantages list-unstyled">
              <h2>Advantages</h2>
              <li class="reason">
                <div class="icon-wrap">
                  <i class="fa fa-space-shuttle" aria-hidden="true"></i>
                </div>
                <div class="text-wrap">
                  <h3>Speed</h3>
                  <p>We understand that you have things to do, which is why we work quickly to complete your service.</p>
                </div>
              </li>
              <li class="reason">
                <div class="icon-wrap">
                  <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="text-wrap">
                  <h3>Affordability</h3>
                  <p>Because we are a small local company, we're able to offer competitive prices</p>
                </div>
              </li>
              <li class="reason">
                <div class="icon-wrap">
                  <i class="fa fa-car" aria-hidden="true"></i>
                </div>
                <div class="text-wrap">
                  <h3>Experience</h3>
                  <p>
                    With our extensive background and experience, you can bet that we'll
                    be able to identify and solve your problem.
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="skills">
              <h2>Our Skills</h2>
              <p>
                We have many skill-sets here at Otto's Auto including,
                but not limited to, the following:
              </p>
              <ul class="skills-ul list-unstyled">
                <li>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  Excellent problem-solving and diagnostic skills
                </li>
                <li>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  Phenomenal technical aptitude
                </li>
                <li>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  Certified auto mechanic
                </li>
                <li>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  Quick and reliable service
                </li>
                <li>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  Proficiency with multiple tools
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="staff" class="section container-88">
        <div class="title">
          <h2>Meet the Team</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="staff-block">
              <img src="http://livedemo00.template-help.com/wt_59050/images/users/user-mark-johnson-270x270.jpg" alt="Otto Hernandez" />
              <h3>Otto Hernandez</h3>
              <span>Owner —</span>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis
              scelerisque lorem, in sodales turpis rutrum sed. Mauris fringilla dignissim
              nisl. Mauris vitae iaculis dui. Vivamus non turpis in nisl convallis vulputate
              id sed lorem. In ut ultrices massa.
            </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="staff-block">
              <img src="http://livedemo00.template-help.com/wt_59050/images/users/user-eva-pool-270x270.jpg" width="270" height="270" alt="Lourdes Hernandez" />
              <h3>Lourdes Hernandez</h3>
              <span>Owner —</span>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis
              scelerisque lorem, in sodales turpis rutrum sed. Mauris fringilla dignissim
              nisl. Mauris vitae iaculis dui. Vivamus non turpis in nisl convallis vulputate
              id sed lorem. In ut ultrices massa.
            </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="staff-block">
              <img src="http://livedemo00.template-help.com/wt_59050/images/users/user-sam-kromstain-270x270.jpg" alt="" />
              <h3>Bob Hernandez</h3>
              <span>Technician —</span>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis
              scelerisque lorem, in sodales turpis rutrum sed. Mauris fringilla dignissim
              nisl. Mauris vitae iaculis dui. Vivamus non turpis in nisl convallis vulputate
              id sed lorem. In ut ultrices massa.
            </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="staff-block">
              <img src="http://livedemo00.template-help.com/wt_59050/images/users/user-cristal-smith-270x270.jpg" alt="" />
              <h3>Chu Chu Hernandez</h3>
              <span>Flower Helper —</span>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis
              scelerisque lorem, in sodales turpis rutrum sed. Mauris fringilla dignissim
              nisl. Mauris vitae iaculis dui. Vivamus non turpis in nisl convallis vulputate
              id sed lorem. In ut ultrices massa.
            </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer -->
      <?php require_once($footer); ?>
    </div>
  </body>
</html>
