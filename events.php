<!DOCTYPE html>

<html>
<head>
	<title>Balaji Events</title>

	<!--materialise css-->
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--jQuery libraries--> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></script>

    <!--materialise JavaScript--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!-- Add icon library -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

    <!--stylesheet-->
      <link rel="stylesheet" href="event.css">

    <!--SEO meta tags-->
	  <meta charset="utf-8">
	  <meta type="description" content="This website is all about weddings, events, travel and stays.Our company provide best services and we make our full efforts to satisfy our clients.Days that you will planned with us we will make them memorable. ">
	  <meta type="keywords" content="WEDDINGS,weddings,Weddings,WEDDING,wedding,Wedding,EVENTS,events,Events,event,EVENT,Event,Travel,TRAVEL,travel,Stays,stay,Trip,trip,trips,farms,beautiful farms,resorts,amazing resorts, Royal palaces, royal palace, Royal Wedding, Wedding planner,wedding planner, event planner,pool parties, parties,Parties,Theme parties,theme parties,wedding photography,reception,wedding venue,wedding anniversary,wedding engagement,engagement,hotels,hotel,vacation,holiday,travel agency,vacation packages,holiday packages,destination,budget travel,event organiser,party planner,marketing events,corporate events,family functions">
	  <meta type="robot" content="selection">
	  <meta type="viewport" content="width=device-width,initial-scale=1.0">
</head>

<?php
require 'navbar.php';
?>

 

  <!--jquery-->

  <script type="text/javascript">
  	 $(document).ready(function(){

      //for slide nav//
        $('.sidenav').sidenav();

      //slideshow
       
       $('.slider').slider();

      //floating button
      $('.fixed-action-btn').floatingActionButton();
    
      //dropdown for large devices
      $(".dropdown-trigger").dropdown();
      
      //dropdown for small devices  
      $(".dropdown-slidetrigger").dropdown();

      //galllery//
      $('.materialboxed').materialbox();

      //modal
      $('.modal').modal();
         
  });
  
  </script>

  <!--heading-->
  <div class="container">
       <p class="center-align white-text" style="margin-top: 50px; margin-bottom: 40px;">What type of event are you looking to plan? Give us a call to schedule an appointment and see what we can do for you. We have years of experience planning different types of events, and we are more than happy to make your dream event a reality. Let us help you host the best one ever.
       </p>

  <!--cards-->
    <div class="row">

     <div class="col s12 m12 l6">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
           <img class="activator" src="img/PicsArt_08-29-02.56.16.jpg">
        </div>
        <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Cultural Event<i class="material-icons right">more_vert</i></span>
           <p><a href="gallery.php" class="amber-text text-accent-4 hoverable">View our Gallery</a></p>
        </div>
        <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Cultural Event<i class="material-icons right">close</i></span>
           <ul>
             <li>Occassional Parties</li>
             <li>Holi Parties</li>
             <li>Diwali Parties</li>
             <li>New Year's Eve</li>
             <li>Christmas Celebration</li>
             <li>Eid Mubarak</li>
             <li>All kind of cultural events</li>
           </ul>
           <p>-We can provide others services also as per the requirments.</p>
        </div>
      </div>
     </div>

     <?php
     require 'float.php';
     ?>
   
      <div class="col s12 m12 l6">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
           <img class="activator" src="img/PicsArt_08-29-02.55.12.jpg">
        </div>
        <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Institutional Events<i class="material-icons right">more_vert</i></span>
           <p><a href="gallery.php" class="amber-text text-accent-4 hoverable">View our Gallery</a></p>
        </div>
        <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Institutional Events<i class="material-icons right">close</i></span>
           <ul>
             <li>Annual Day Function</li>
             <li>Feast & Fairs</li>
             <li>Fashion show</li>
             <li>Cultural Events</li>
             <li>Technical Events</li>
             <li>Fresher's Party</li>
             <li>Farewell Party</li>
             <li>Alumni Meet</li>
             <li>College Trips</li>
           </ul>
           <p>-We can provide others services also as per the requirments.</p>
        </div>
      </div>
     </div>

    </div>

    <div class="row">

     <div class="col s12 m12 l6">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
           <img class="activator" src="img/PicsArt_08-29-03.02.34.jpg">
        </div>
        <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Corporate Events<i class="material-icons right">more_vert</i></span>
           <p><a href="gallery.php" class="amber-text text-accent-4 hoverable">View our Gallery</a></p>
        </div>
        <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Corporate Events<i class="material-icons right">close</i></span>
           <ul>
             <li>Annual Function</li>
             <li>Award Ceremonies</li>
             <li>Conferences & Seminars</li>
             <li>Corporate Dinners</li>
             <li>Workshop & Training</li>
           </ul>
           <p>-We can provide others services also as per the requirments.</p>
        </div>
      </div>
     </div>

     <div class="col s12 m12 l6">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
           <img class="activator" src="img/PicsArt_08-29-02.54.31.jpg">
        </div>
        <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Live Concerts and Events<i class="material-icons right">more_vert</i></span>
           <p><a href="gallery.php" class="amber-text text-accent-4 hoverable">View our Gallery</a></p>
        </div>
        <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Live Concerts and Events<i class="material-icons right">close</i></span>
           <ul>
             <li>Musical Nights</li>
             <li>Dance Competitons</li>
             <li>Rock Bands</li>
             <li>Orchestra</li>
             <li>DJ Nights</li>
             <li>Fashion Shows</li>
             <li>Celebrity Performances</li>
           </ul>
           <p>-We can provide others services also as per the requirments.</p>
        </div>
     </div>

    </div>

     <div class="row">

     <div class="col s12 m12 l6">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
           <img class="activator" src="img/PicsArt_08-29-03.11.54.jpg">
        </div>
        <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Parties<i class="material-icons right">more_vert</i></span>
           <p><a href="gallery.php" class="amber-text text-accent-4 hoverable">View our Gallery</a></p>
        </div>
        <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Parties<i class="material-icons right">close</i></span>
           <ul>
             <li>Birthday Parties</li>
             <li>Pool Parties</li>
             <li>Kitty Parties</li>
             <li>Occaisonal Functions</li>
             <li>Family Functons</li>
             <li>Get Together</li>
             <li>Cocktail Parties</li>
           </ul>
           <p>-We can provide others services also as per the requirments.</p>
        </div>
      </div>
     </div>

     <div class="col s12 m12 l6">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
           <img class="activator" src="img/PicsArt_08-29-03.14.19.jpg">
        </div>
        <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Theme Parties<i class="material-icons right">more_vert</i></span>
           <p><a href="gallery.php" class="amber-text text-accent-4 hoverable">View our Gallery</a></p>
        </div>
        <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Theme Parties<i class="material-icons right">close</i></span>
           <ul>
             <li>Traditional Theme</li>
             <li>Western Theme</li>
             <li>Bollywood Theme</li>
             <li>Hollywood Theme</li>
             <li>Casino Theme</li>
             <li>Circus Theme</li>
           </ul>
           <p>- We also provide customised Theme Parties as per your requirements.</p>
        </div>
     </div>

    </div>
  </div>
</div>
</div>
<!--footer-->

        <footer class="page-footer" id="colo">
          
            <div class="row">
              <div class="col l4 s12">
                <h3 class="white-text center-align" style="padding-top: 55px;">Balaji Events</h3>
                <h6 class="white-text center-align" >Plan your memories....</h6>
              </div>
              <div class="col l4 s12">
                <p class="white-text center-align" style="padding-top: 30px;">Dwarka Sector 1A, Nasirpur, New Delhi 110045</p>
                <p class="center-align"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7006.049848796404!2d77.08245092543909!3d28.599029079723866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b45c7aa437d%3A0xf546912caa744f!2sSector%201A%20Dwarka%2C%20Nasirpur%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1598984041503!5m2!1sen!2sin" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
              </div>
              <div class="col l4 s12">
                <h5 class="white-text center-align"style="padding-top: 30px;" >Follows Us</h5>
                <ul class="center-align" >
                  <li>Email :<a href="mailto:eventswithbalaji@gmail.com" target="_blank"> eventswithbalaji@gmail.com</a> </li>
                  <li>Contact Us :<a  href="tel:+919999712362"> +91 9999712362</a></li>
                  <li><a href="https://www.facebook.com/samskriti.tours" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/beventsss?r=nametag" class="fa fa-instagram"></a></li> 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container white-text center ">
             © 2020 Balaji Events
            </div>
          </div>
        </footer>
</html>

  


  
