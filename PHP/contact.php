<?php
  //php mailer
  require_once("PHP Mailer/form-c.php");
  //paths
  //stylesheets
  $ContactCssPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Stylesheets/CSS/Contact_CSS/contact.css";
  //javascript
  $ContactJsPath = "http://" . $_SERVER["HTTP_HOST"] . "/Otto%27s%20Autos/Javascript/contact.js";
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
    <title>Contact Us</title>
    <!--Fontawesome Icons-->
    <script src="https://use.fontawesome.com/342aa590f3.js" async></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" />
    <!--Main Stylesheet-->
    <link rel="stylesheet" href="<?php echo $ContactCssPath; ?>" />
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
    <script src="<?php echo $ContactJsPath; ?>" defer></script>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php require_once($header); ?>
      <section id="google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.113616423176!2d-80.11089548435508!3d26.708817075266506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d929dd4f681977%3A0xe6040fbe85b2be13!2s4365+Okeechobee+Blvd%2C+West+Palm+Beach%2C+FL+33409!5e0!3m2!1sen!2sus!4v1479844053945"
          width="100%"
          height="400"
          frameborder="0"
          style="border:0" allowfullscreen>
        </iframe>
      </section>
      <section id="contact" class="section container-88">
        <div class="title">
          <h2>Contact Us</h2>
          <hr>
        </div>
        <p>
          If you have a question or would like to get in touch
          with us, you can visit our office, or simply fill out the form below,
          and we'll get back to you as soon as possible.
        </p>
        <div class="contact-hours-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="contact-h-block">
                <div class="title-wrap">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i><h2>Contact</h2>
                  <hr>
                </div>
                <div class="contact-info">
                  <p>
                    Email:
                    <a href="mailto:ottosauto12@gmail.com?subject=Hello! I Have a Question..." class="pull-right"><strong>ottosauto12@gmail.com</strong></a>
                  </p>
                  <p>
                    Telephone:
                    <a href="tel:15616864188" class="pull-right"><strong>561-686-4188</strong></a>
                  </p>
                </div>
              </div>
              <div class="contact-h-block">
                <div class="title-wrap">
                  <i class="fa fa-clock-o" aria-hidden="true"></i><h2>Hours</h2>
                  <hr>
                </div>
                <div class="hours">
                  <p>
                    Monday – Friday
                    <span class="pull-right"><strong>9am – 5:30pm</strong></span>
                  </p>
                  <p>
                    Saturday
                    <span class="pull-right"><strong>Closed</strong></span>
                  </p>
                  <p>
                    Sunday
                    <span class="pull-right"><strong>Closed</strong></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-wrapper">
                <div id="form-messages"></div>
                <form id="ajax-contact" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="sr-only" for="firstName">Name</label>
                        <input type="text" class="form-control" id="firstName" name="name" placeholder="Name" pattern='[A-Za-z" "]{1,}' required />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="message">Message</label>
                    <textarea id="message" rows="5" cols="50" name="query" placeholder="Message" required /></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-dft" name="submit">Send</button>
                  </div>
                </form>
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
