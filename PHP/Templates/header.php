<?php
  $currentPageAdd = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  include_once("Includes/address.php");
?>
<header>
  <!--Top Bar-->
  <div class="top-bar">
    <div class="row">
      <ul class="list-unstyled list-inline">
        <li class="email">
          <a href="mailto:ottosauto12@gmail.com?subject=Hello! I Have a Question...">
            <span><i class="fa fa-envelope-o icon-round" aria-hidden="true"></i>ottosauto12@gmail.com</span>
          </a>
        </li>
        <li class="hours">
          <span><i class="fa fa-clock-o icon-round" aria-hidden="true"></i>Mon–Fri: 8:00AM– 6:00PM</span>
        </li>
        <li class="phone-number">
          <a href="tel:15616864188"><span><i class="fa fa-phone icon-round" aria-hidden="true"></i>561-686-4188</span></a>
        </li>
      </ul>
    </div>
  </div>
  <!--Logo-->
  <div class="logo logo-header">
    <img src="<?php echo $logo; ?>" alt="Otto's Auto" />
    <h3>Otto's Auto</h3>
    <span>Repairing cars since 1949</span>
  </div>
  <!--nav menu-->
  <nav id="nav-menu" class="navbar navbar-default navbar-head">
    <div class="container-fluid flex">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li <?php if($currentPageAdd === $home) {echo "class = 'active'"; } ?>>
            <a href="<?php echo $home; ?>">
              Home
              <?php
                if($currentPageAdd === $home) {
                  echo "<span class='sr-only'>(current)</span>";
                }
              ?>
            </a>
          </li>
          <li <?php if($currentPageAdd === $about) {echo "class = 'active'"; } ?>>
            <a href="<?php echo $about; ?>">
              About Us
              <?php
                if($currentPageAdd === $about) {
                  echo "<span class='sr-only'>(current)</span>";
                }
              ?>
            </a>
          </li>
          <li <?php if($currentPageAdd === $contact) {echo "class = 'active'"; } ?>>
            <a href="<?php echo $contact; ?>">
              Contact
              <?php
                if($currentPageAdd === $contact) {
                  echo "<span class='sr-only'>(current)</span>";
                }
              ?>
            </a>
          </li>
          <!-- Visible above 767px -->
          <li id="services-li-d" class="dropdown <?php if($currentPageAdd === $services) {echo "active";} ?>">
            <a href="<?php echo $services; ?>" role="button" aria-haspopup="true" aria-expanded="false">
              Services <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
              <?php
                if($currentPageAdd === $services) {
                  echo "<span class='sr-only'>(current)</span>";
                }
              ?>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $services . "/#ac" ?>" data-tab="#ac">AC</a></li>
              <li><a href="<?php echo $services . "/#brakes" ?>" data-tab="#brakes">Brakes</a></li>
              <li><a href="<?php echo $services . "/#battery" ?>" data-tab="#battery">Battery</a></li>
              <li><a href="<?php echo $services . "/#engine" ?>" data-tab="#engine">Engine</a></li>
              <li><a href="<?php echo $services . "/#maintenance" ?>" data-tab="#maintenance">Maintenance</a></li>
              <li><a href="<?php echo $services . "/#tires" ?>" data-tab="#tires">Tires</a></li>
          </ul>
        </li>
        <!-- Visible below 767px -->
        <li id="services-li-m" class="dropdown <?php if($currentPageAdd === $services) {echo "active";} ?>">
          <a href="<?php echo $services; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Services <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
              <?php
                if($currentPageAdd === $services) {
                  echo "<span class='sr-only'>(current)</span>";
                }
              ?>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $services . "/#ac-collapse" ?>" data-tab="#ac-collapse">AC</a></li>
              <li><a href="<?php echo $services . "/#brakes-collapse" ?>" data-tab="#brakes-collapse">Brakes</a></li>
              <li><a href="<?php echo $services . "/#battery-collapse" ?>" data-tab="#battery-collapse">Battery</a></li>
              <li><a href="<?php echo $services . "/#engine-collapse" ?>" data-tab="#engine-collapse">Engine</a></li>
              <li><a href="<?php echo $services . "/#maintenance-collapse" ?>" data-tab="#maintenance-collapse">Maintenance</a></li>
              <li><a href="<?php echo $services . "/#tires-collapse" ?>" data-tab="#tires-collapse">Tires</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
