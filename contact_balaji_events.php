<?php
$con = mysqli_connect ("localhost", "dhruvsingh", "Deepesh@801", "events", "3308") or die (mysqli_error($con));

?>

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

 	 

 	 <!--form-->
	<center>
		<div class="container consty" style="margin-top: 20px; margin-bottom: 40px">
    	
    	<div class="row">
    		<div class="col s12 m12 l6 black" style="margin-top:20px;">
               
    			<form method="POST" action="contact_balaji_submit.php" class="white-text" style="padding: 20px 20px 20px 20px;">
    				<h3 class="carddt center-align ">Contact Us</h3>
    				<p class="center-align white-text">Dwarka Sector 1A, Nasirpur, New Delhi 110045</p>
    				<p class="center-align white-text">Contact:<a href="tel:+919999712362">+91 9999712362</a></p>
    				<div class="form-group">
    					<input type="text" class="form-control input-lg white-text" name="name" placeholder="Name">
    				</div>
    				<div class="form-group">
    					<input type="email" class="form-control input-lg white-text" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
    				</div>
    				
                    <div class="form-group">
    					<input type="text" class="form-control input-lg white-text" name="text" placeholder="Write your Query....">
    				</div>

    				
    				
    				<button type="submit"  class="amber-text text-accent-4" style="margin-top: 20px;cursor: pointer;">Submit</button>
    			</form>
      
          


    		</div>
        <div class="col s12 m12 l6" style="margin-top:20px;">
          <img src="img/PicsArt_09-03-05.22.18.jpg" class="responsive-img" width="435px">
        </div>
    	</div>

    </div>
   </center>
</div>  

   <?php
          require 'float.php';
          ?> 
 </body>

  <!--footer-->

        <footer class="page-footer" id="colo">
          
            <div class="row">
              <div class="col l4 s12">
                <h3 class="white-text center-align" style="padding-top: 55px;" >Balaji Events</h3>
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
