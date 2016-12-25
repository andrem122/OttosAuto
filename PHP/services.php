<?php
  //address
  include_once("Includes/address.php");
  //paths
  //stylesheets
  $ServicesCssPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Stylesheets/CSS/Services_CSS/services.css";
  //javascript
  $ServicesJsPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/services.js";
  //javascript plugins
  $waypointJs = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/Plugins/jquery.waypoints.min.js";
  $tabCollapse = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/Plugins/bootstrap-tabcollapse.js";
  //address of current page
  $currentAdd = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  //images
  //logos
  $logo = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Logo/otto's-autos.png";
  //White Logo
  $logoW = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Assets/Images/Logo/otto's-autos-w.png";
  //Service Images
  include_once("Includes/service-imgs.php");

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
    <title>Services</title>
    <!--Fontawesome Icons-->
    <script src="https://use.fontawesome.com/19800b7eca.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" />
    <!--Main Stylesheet-->
    <link rel="stylesheet" href="<?php echo $ServicesCssPath; ?>" />
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
    <!-- Tab Collapse -->
    <script src="<?php echo $tabCollapse; ?>" defer></script>
    <!-- My Javascript -->
    <script src="<?php echo $ServicesJsPath; ?>" defer></script>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php require_once($header); ?>
      <section id="parallax">
        <div class="flex">
          <h2>Services</h2>
        </div>
      </section>
      <section id="services" class="section container-88">
        <div class="title">
          <h2>Our Services</h2>
          <hr>
        </div>
        <ul id="service-tab" class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#ac"><i class="fa fa-snowflake-o" aria-hidden="true"></i>AC Service</a></li>
          <li><a data-toggle="tab" href="#brakes"><i class="fa fa-chain-broken" aria-hidden="true"></i>Brakes</a></li>
          <li><a data-toggle="tab" href="#battery"><i class="fa fa-battery-full" aria-hidden="true"></i>Battery</a></li>
          <li><a data-toggle="tab" href="#engine"><i class="fa fa-car" aria-hidden="true"></i>Engine</a></li>
          <li><a data-toggle="tab" href="#maintenance"><i class="fa fa-wrench" aria-hidden="true"></i>Maintenance</a></li>
          <li><a data-toggle="tab" href="#tires"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Tires</a></li>
        </ul>

        <div class="tab-content">
          <div id="ac" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-6">
                <img src="<?php echo $AC; ?>" />
                <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Get Service</a>
              </div>
              <div class="col-md-6">
                <h2>Your AC</h2>
                <p>
                  The air conditioning system in your vehicle can be one of the most troubling parts if it fails.
                  But don't fret, at Otto's Auto, all air conditioning repair and AC services are handled professionally and quickly.
                  With our extensive experience and background, you can bet that your vehicle's AC will be up in no time.
                  We'll even will thoroughly examine your vehicle's AC system to see if any leaks may be present, and we'll
                  stop them before any trouble can arise. Come by Otto's Auto today, and let us assist you in getting your AC
                  back up and running.
                </p>
                <h2>AC Tips</h2>
                <ul class="list-unstyled">
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Run your AC at least once a week for about 10 minutes</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Use your air conditioner in winter</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Refresh the cooling system with gas and lubricant</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Get a full air conditioning service every 2 years</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Run defrost mode for about 5 to 10 minutes</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="brakes" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-6">
                <h2>Your Brakes</h2>
                <p>
                  Brakes are an integral part of your vehicle, so it's important
                  to regularly maintain them and keep them in shape to deal with
                  the daily wear and tear of driving your vehicle. How often brakes
                  need to be changed depends on a variety of factors, including driving
                  style and the type of vehicle. If you notice any change in your brakes
                  or haven't had your brakes inspected by a mechanic in 12,000 miles,
                  its best to have them checked to ensure safety
                  of you and your vehicle.
                </p>
                <h2>Brake Services</h2>
                <p>
                  At Otto's Auto, we offer a multitude of brakes services, ranging from
                  replacing brakes pads, drum brakes, disc brakes, calipers, rotors, shoes, pads
                  and performing brake inspections. If you ever suspect problems with your brakes,
                  it's easy to get them fixed here at Otto's Auto, we'll quickly diagnose the
                  problem and fix it, so you can get on with your day.
                </p>
              </div>
              <div class="col-md-6">
                <img src="<?php echo $brakes; ?>" />
                <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Get Service</a>
              </div>
            </div>
          </div>
          <div id="battery" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-6">
                <h2>Your Battery</h2>
                <p>
                  Car batteries give your car life, literally. As soon as your key enters
                  ignition, the battery allows the crank to start your engine, enabling your
                  vehicle's engine to start. So, as one could guess, it's quite important to regularly
                  service and maintain your vehicle's battery to allow optimal performance of your
                  vehicle and to keep your it going. Typically, one will need to service his or her
                  battery every 3 to 5 years, but this can vary due to a variety of elements.
                </p>
                <h2>Battery Services</h2>
                <p class="m-bottom">
                  As you guessed it, Otto's Auto offers battery services as well. We can replace, service, and
                  inspect your vehicle's battery. No need to fear because Otto's Auto is here. Our expert technicians,
                  will quickly identify potential and current problems with your vehicle's battery, and get them fixed in a jiffy.
                </p>
                <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Get Service</a>
              </div>
              <div class="col-md-6">
                <div class="reasons">
                  <div class="title-left-sub">
                    <h2>Advantages</h2>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="reason-block">
                        <div class="reason-icon">
                          <i class="fa fa-fighter-jet" aria-hidden="true"></i>
                        </div>
                        <div class="reason-text">
                          <h3>Speed</h3>
                          <p>
                            Since we have extensive knowledge
                            about car batteries, we're able to
                            quickly identify you car battery
                            issues and solve them in jiffy!
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="reason-block">
                        <div class="reason-icon">
                          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <div class="reason-text">
                          <h3>Reliability</h3>
                          <p>
                            When we make a repair or service
                            your car battery, you can bet that
                            it will last since we use the highest
                            quality batteries available.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="reason-block">
                        <div class="reason-icon">
                          <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="reason-text">
                          <h3>Cost</h3>
                          <p>
                            Since we are a local business,
                            we obtain some of the best pricing
                            available from our suppliers. This
                            allows us to offer a lower price than
                            our competitors.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="reason-block">
                        <div class="reason-icon">
                          <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <div class="reason-text">
                          <h3>Honesty</h3>
                          <p>
                            Honesty is our policy at Otto's
                            Auto. We will make sure to let you
                            know exactly what's wrong with your
                            battery without all the fluff most
                            auto shops give to customers.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="engine" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-6">
                <img src="<?php echo $engine; ?>" />
                <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Get Service</a>
              </div>
              <div class="col-md-6">
                <h2>Your Engine</h2>
                <p>
                  The engine is often considered the "heart" of your vehicle, without it
                  you wouldn't have much of a car. The engine allows your car to convert gas
                  into energy to move your car. Engines need to be maintained and inspected periodically
                  to ensure your car can keep running for the long haul without any potential or current problems.
                  Luckily, Otto's Auto offers services to ensure your engine runs at peak performance, including
                  filter replacements, standard tune-ups, and engine maintenance.
                </p>
                <h2>Engine Tips</h2>
                <ul class="list-unstyled">
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Check your oil level periodically</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Schedule emission tests every year</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Replace spark plugs every 10,000 to 20,000 miles</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Have your timing belt checked regularly</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="maintenance" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-6">
                <img src="<?php echo $maintenance; ?>" />
                <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Get Service</a>
              </div>
              <div class="col-md-6">
                <h2>Maintenance of Your Vehicle</h2>
                <p>
                  What's the secret to a long and happy vehicle life? That's right.
                  It's maintenance. Regular maintenance such as oil changes, fluid checks,
                  and lubrication of moving parts ensures that your car won't have any costly major
                  problems, like an engine failure. Regular maintenance is one of the most important
                  things you can ever do for your vehicle: It will save you time, money, and emotional
                  stress if you remember to have it performed regularly.
                </p>
                <h2>Essential Maintenance</h2>
                <p>
                  To keep your vehicle in tip-top shape and to avoid major problems, it's
                  important to regularly schedule maintenance and checkups. We recommend
                  that you perform the following services yearly to ensure optimal performance
                  of your vehicle.
                </p>
                <ul class="list-unstyled">
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Change out transmission and differential oils</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Flush your cooling system, and change the coolant once a year</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Have moving parts lubricated often</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Check and change engine oil</p>
                  </li>
                  <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <p>Inspect, clean, and repack wheel bearings</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="tires" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-6">
                <img src="<?php echo $tires; ?>" />
                <a class="btn btn-dft" href="<?php echo $contact; ?>" role="button">Get Service</a>
              </div>
              <div class="col-md-6">
                <h2>Your Tires</h2>
                <p>
                  Tires are a vital component to every vehicle. Tires, when properly cared for,
                  ensure that the vehicle has adequate traction with the road, thereby preventing
                  loss of control of the vehicle. Servicing tires is just as important as servicing
                  any other part of your vehicle. It's essential to rotate tires, check and correct
                  tire pressure, and inspect tire tread depth regularly to ensure vehicle safety
                  and optimal tire performance.
                </p>
                <h2>Tire Services</h2>
                <p>
                  Many tire services are offered here at Otto's Autos. We can align, inspect,
                  and inflate tires. Let us help you maintain your tires for longer life, and when
                  it's time, let us help you choose the right tire that fits your vehicle's needs.
                  Stop by our shop today, and get the tire services you vehicle needs!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer -->
      <?php require_once($footer); ?>
    </div>
  </body>
</html>
