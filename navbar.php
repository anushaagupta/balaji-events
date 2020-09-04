
<body class="grey darken-3">

  <!-- Dropdown Structure 1 for large devices-->
<ul id="dropdown1" class="dropdown-content grey darken-4">
  <li><a href="events.php" class="amber-text text-accent-4">Events and Theme Parties</a></li>
  <li><a href="weddings.php" class="amber-text text-accent-4">Weddings</a></li>
  
  <li><a href="travel.php" class="amber-text text-accent-4">Travel and Stays</a></li>
</ul>


<!-- Dropdown Structure 2 for small devices-->
<ul id="dropdown2" class="dropdown-content grey darken-4">
  <li><a href="events.php"class="amber-text text-accent-4">Events and Theme Parties</a></li>
  <li><a href="weddings.php" class="amber-text text-accent-4">Weddings</a></li>
  
  <li><a href="travel.php" class="amber-text text-accent-4">Travel and Stays</a></li>
</ul>

   <!--navigation-->
  <div class="navbar-fixed">
     <nav>
    <div class="nav-wrapper" id="colo">
      <a href="index.php" ><img src="img/IMG-20200726-WA0000.jpg" width="55px"></a>
      <a href="index.php" class="brand-logo hoverable" id="navi">BalajiEvents</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" id="adjust">
        <li><a href="index.php" class="hoverable">Home</a></li>
        <li><a href="about.php" class="hoverable">About Us</a></li>
        <li><a href="contact_balaji_events.php" class=" hoverable">Contact Us</a></li>

        <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger hoverable" href="#!" data-target="dropdown1">Categories<i class="material-icons right white-text">arrow_drop_down</i></a></li>
        
        <li><a href="gallery.php" class="hoverable">Gallery</a></li>
      </ul>
    </div>
  </nav>
</div>

  <!--slide navigation for mobile-->

  <ul class="sidenav grey darken-4" id="mobile-demo">
  	<li><a href="index.php" class="white-text">Home</a></li>
    <li><div class="divider"></div></li>
    <li><a href="about.php" class="white-text">About Us</a></li>
    <li><div class="divider"></div></li>
    <li><a href="contact_balaji_events.php" class="white-text ">Contact Us</a></li>
    <li><div class="divider"></div></li>
    <li><a class="dropdown-slidetrigger white-text " href="#!" data-target="dropdown2">Categories<i class="material-icons right white-text">arrow_drop_down</i></a></li>
    <li><div class="divider"></div></li>   
    <li><a href="gallery.php" class="white-text">Gallery</a></li>
    
  </ul>
</body>