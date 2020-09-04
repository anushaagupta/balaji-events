
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

 <!--slideshow-->

   <div class="slider"id="imgg">
    <ul class="slides ">
      <li>
        <img src="img/1.jpg" class="responsive-img" alt="wedding"> <!-- random image -->
        <div class="caption center-align">
          <h3>Memorable Day</h3>
          <h5 class="light grey-text text-lighten-3">Making Your Special Event Truly Unforgettable!!</h5>
        </div>
      </li>
      <li>
        <img src="img/PicsArt_08-27-07.05.14.jpg" class="responsive-img" alt="events and theme parties"> <!-- random image -->
        <div class="caption left-align">
          <h3>Astonishing Nights</h3>
          <h5 class="light grey-text text-lighten-3">Plan your memories..........</h5>
        </div>
      </li>
      <li>
        <img src="img/PicsArt_08-27-07.01.42.jpg" class="responsive-img" alt="parties,clubing and get together"> <!-- random image -->
        <div class="caption right-align">
          <h3>Joyfull Togetherness</h3>
          <h5 class="light grey-text text-lighten-3">The family who eats together, stays together.</h5>
        </div>
      </li>
      <li>
        <img src="img/PicsArt_08-27-07.07.18.jpg" class="responsive-img" alt="travel and stays"> <!-- random image -->
        <div class="caption left-align">
          <h3>Beautiful Destinations</h3>
          <h5 class="light white-text text-lighten-3">We plan, You pack!!!</h5>
        </div>
      </li>
    </ul>
  </div>

 <?php
  require 'float.php';
 ?>


 <!--about us-->
<div class="container white-text">
  
  <h3 class=" center-align">About Us</h3>
  <div class="row">

      <div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4"><hr></div>
  </div>
  <div class="row">
    <div class="col s12 m12 l6 ">
      <img src="img/pexels-natasha-fernandez-811572.jpg" class="responsive-img center-align">
    </div>
    <div class="col s12 m12 l6 white-text">
      <h5 class="carddt">Who are we??</h5>
      <h6>We are the Event and Wedding planners that think about need and budget of our clients and work accordingly.We take care of every possible thing like decor, food, stay nad all our services are best and we always take care abo...<!--ut the comfort of our client.--></h6>
      <a href="about.php" class="carddt center-align hoverable">Read More  ></a>
       
    </div>
  </div>
</div>


 <!--cards-->
  <div class="cardd">
    <div class="container white-text">
    <h3 class="center-align" style="padding-top: 40px; ">Our Services</h3>
     <div class="row">

         <div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4 "><hr></div>
      </div>
    

     <div class="row" style="padding-bottom: 40px;">
      <div class="col s12 m12 l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/PicsArt_09-01-04.18.17.jpg" >
            <span class="card-title white-text">Events and Parties</span>
          </div>
          <div class="card-content">
            <p class="black-text">We are here to make your event extra special. We work with the best vendors and venues in India, guaranteeing an unforgettable event.</p>
          </div>
          <div class="card-action">
            <a href="events.php" class="amber-text text-accent-4">Visit page</a>
          </div>
        </div>
    
      </div>

      <div class="col s12 m12 l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/IMG_20200827_203344_100.jpg" class="responsive-img" alt="wedding">
            <span class="card-title">Wedding</span>
          </div>
          <div class="card-content">
            <p class="black-text">We do our best to make your Wedding memorable. This service includes destination wedding, engagement, haldi,etc. View our page to know more.</p>
          </div>
          <div class="card-action">
            <a href="weddings.php" class="amber-text text-accent-4">Visit Page</a>
          </div>
        </div>
    
      </div>

      <div class="col s12 m12 l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/PicsArt_09-01-02.46.44.jpg" class="responsive-img" alt="travel and stays">
            <span class="card-title">Travel and Stays</span>
          </div>
          <div class="card-content">
            <p class="black-text">We are providing luxurious,royal and all kind of stays in this service and is specially designed by keeping in mind the comfort and coziness of our clients.</p>
          </div>
          <div class="card-action">
            <a href="travel.php" class="amber-text text-accent-4">Visit Page</a>
          </div>
        </div>
    
      </div>
     </div>
    </div>
  </div>

  <!--gallery-->
<div class="container white-text">
  <h3 class="center-align">Our Gallery</h3>
     <div class="row">

         <div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4"><hr></div>
      </div>
</div>
        <div id="gall">
      
          <img class="materialboxed responsive-img" width="250" src="img/PicsArt_09-01-02.47.40.jpg" alt="wedding events travel stays">
        
          <img src="img/PicsArt_09-01-02.47.17.jpg" class="materialboxed responsive-img" width="250" alt="wedding events travel stays">
        
          <img src="img/PicsArt_09-01-03.04.22.jpg" class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays" >
       
          <img src="img/IMG-20200807-WA0039.jpg" class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
        

      
          <img src="img/PicsArt_09-01-03.02.15-1.jpg"  class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
        
          <img src="img/PicsArt_09-01-02.52.19.jpg" class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
        
          <img src="img/IMG-20200818-WA0015.jpg"  class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
       
          <img src="img/PicsArt_09-01-03.00.00.jpg"  class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
        
          <img src="img/PicsArt_09-01-03.01.03.jpg" class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
        
          <img src="img/PicsArt_09-01-03.11.43.jpg" class="materialboxed" width="250" class="responsive-img" alt="wedding events travel stays">
      </div>
        

        <p class="center-align"><a href="gallery.php" class="carddt hoverable">View more</a></p>
        <p class="center-align"><a href="gallery.php" class="carddt hoverable"><i class="material-icons">expand_more</i></a></p>


<!--footer-->

        <footer class="page-footer" id="colo" style="padding-top: 30px;">
          
            <div class="row">
              <div class="col l4 s12">
                <h3 class="white-text center-align" style="padding-top: 30px;" >Balaji Events</h3>
                <h6 class="white-text center-align" >Plan your memories....</h6>
              </div>
              <div class="col l4 s12">
                <p class="white-text center-align">Dwarka Sector 1A, Nasirpur, New Delhi 110045</p>
                <p class="center-align"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7006.049848796404!2d77.08245092543909!3d28.599029079723866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b45c7aa437d%3A0xf546912caa744f!2sSector%201A%20Dwarka%2C%20Nasirpur%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1598984041503!5m2!1sen!2sin" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
              </div>
              <div class="col l4 s12">
                <h5 class="white-text center-align">Follows Us</h5>
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

</body>

  
</html>