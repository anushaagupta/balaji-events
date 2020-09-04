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

      //tabs
      $('.collapsible').collapsible();
         
  });
  
  </script>

<div class="container press" style="margin-top: 25px;">

<!--prtfolio gallery filter-->
      <ul class="collapsible ">
    <li>
      <div class="collapsible-header black white-text">What are you looking for<i class="material-icons right">arrow_drop_down</i></div>
      <div class="collapsible-body black">
    

       <button class="btngal btn active" data-filter="all">Show All</button>
       <button class="btngal btn" data-filter="cultural">Cultural Events</button>
       <button class="btngal btn" data-filter="institutional">Institutional Events</button>
       <button class="btngal btn" data-filter="corporate">Corporate Events</button>
       <button class="btngal btn" data-filter="live">Live concerts and Events</button>
       <button class="btngal btn" data-filter="parties">Parties</button>
       <button class="btngal btn" data-filter="theme">Theme Parties</button>
       <button class="btngal btn" data-filter="decor">Decor</button>
       <button class="btngal btn" data-filter="royal">Destination Wedding</button>
       <button class="btngal btn" data-filter="rituals">Wedding Rituals</button>
       <button class="btngal btn" data-filter="catering">Exclusive Catering</button>
       <button class="btngal btn" data-filter="entertainment">Entertainment</button>
       <button class="btngal btn" data-filter="anniversary">Wedding Anniversaries</button>
       <button class="btngal btn" data-filter="photo">Wedding Photography</button>
       <button class="btngal btn" data-filter="bachelors">Bachelor's party</button>
       <button class="btngal btn" data-filter="royal">Royal Palaces</button>
       <button class="btngal btn" data-filter="farms">Farms & Cottages </button>
       <button class="btngal btn" data-filter="resorts">Private Resorts</button>
      </div>
    </li>
  </ul>

<div>
</div>
</div>


  <div class="imgbox" style="margin-bottom: 20px;">
      
    <img src="img/IMG-20200801-WA0002.jpg" class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/IMG-20200807-WA0039.jpg" class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/IMG-20200807-WA0042.jpg" class="materialboxed responsive-img image-filter resorts move" width="310px">

    <?php
    require 'float.php';
    ?>

    <img src="img/PicsArt_08-27-07.06.32.jpg" class="materialboxed responsive-img image-filter theme move" width="310px">
    <img src="img/IMG-20200818-WA0009.jpg" class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/pexels-🇮🇳amol-nandiwadekar-1707402.jpg" class="materialboxed responsive-img image-filter cultural move" width="310px"> 
    <img src="img/pexels-ary-shutter-805367.jpg" class="materialboxed responsive-img image-filter photo move" width="310px">
    <img src="img/pexels-designecologist-2526105.jpg" class="materialboxed responsive-img image-filter cultural move" width="310px">
    <img src="img/pexels-fu-zhichao-587741.jpg" class="materialboxed responsive-img image-filter theme move" width="310px">
    <img src="img/pexels-mikky-koopac-625644.jpg"  class="materialboxed responsive-img image-filter live move" width="310px">
    <img src="img/pexels-yogendra-singh-3447333.jpg"  class="materialboxed responsive-img image-filter cultural move" width="310px">
    <img src="img/pexels-pixabay-50675.jpg" class="materialboxed responsive-img image-filter corporate nove" width="310px">
    <img src="img/pexels-qazi-ikram-ul-haq-1229414.jpg" class="materialboxed responsive-img image-filter photo move" width="310px">
    <img src="img/pexels-nishant-aneja-2477361.jpg"  class="materialboxed responsive-img image-filter live move" width="310px">
    <img src="img/pexels-wendy-wei-1190298.jpg" class="materialboxed responsive-img image-filter institutional move" width="310px" >
    <img src="img/pexels-wendy-wei-1190297.jpg" class="materialboxed responsive-img image-filter live move" width="310px">
    <img src="img/pexels-wallace-chuck-2820898.jpg"  class="materialboxed responsive-img image-filter live move" width="310px">
    <img src="img/PicsArt_09-01-02.43.28.jpg"  class="materialboxed responsive-img image-filter resorts move" width="310px">
    <img src="img/PicsArt_09-01-02.43.51.jpg" class="materialboxed responsive-img image-filter resorts nove" width="310px" >
    <img src="img/PicsArt_09-01-02.44.16.jpg" class="materialboxed responsive-img image-filter resorts nove" width="310px">
    <img src="img/PicsArt_09-01-02.45.15.jpg"  class="materialboxed responsive-img image-filter resorts move" width="310px">
    <img src="img/PicsArt_09-01-02.45.32.jpg" class="materialboxed responsive-img image-filter royal move" width="310px" >
    <img src="img/PicsArt_09-01-02.45.46.jpg" class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.46.07.jpg"  class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.46.26.jpg"  class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.46.44.jpg" class="materialboxed responsive-img image-filter farms move" width="310px" >
    <img src="img/PicsArt_09-01-02.47.40.jpg" class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.48.22.jpg"  class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.48.40.jpg" class="materialboxed responsive-img image-filter royal move" width="310px" >
    <img src="img/PicsArt_09-01-02.49.00.jpg" class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.51.29.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-02.51.48.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-02.49.23.jpg" class="materialboxed responsive-img image-filter royal move" width="310px" >
    <img src="img/PicsArt_09-01-02.49.50.jpg" class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.50.34.jpg"  class="materialboxed responsive-img image-filter royal move" width="310px">
    <img src="img/PicsArt_09-01-02.52.19.jpg" class="materialboxed responsive-img image-filter decor move" width="310px" >
    <img src="img/PicsArt_09-01-02.52.49.jpg" class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-02.53.05.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-02.53.35.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-02.54.05.jpg" class="materialboxed responsive-img image-filter decor nove" width="310px" >
    <img src="img/PicsArt_09-01-02.54.26.jpg" class="materialboxed responsive-img image-filter decor nove" width="310px">
    <img src="img/PicsArt_09-01-02.54.46.jpg"  class="materialboxed responsive-img image-filter decor nove" width="310px">
    <img src="img/PicsArt_09-01-02.57.46.jpg" class="materialboxed responsive-img image-filter parties move" width="310px" >
    <img src="img/PicsArt_09-01-02.58.17.jpg" class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-02.59.14.jpg"  class="materialboxed responsive-img image-filter rituals move" width="310px">
    <img src="img/PicsArt_09-01-03.00.00.jpg"  class="materialboxed responsive-img image-filter rituals nove" width="310px">
    <img src="img/PicsArt_09-01-03.00.37.jpg" class="materialboxed responsive-img image-filter parties nove" width="310px" >
    <img src="img/PicsArt_09-01-03.01.03.jpg" class="materialboxed responsive-img image-filter decor nove" width="310px">
    <img src="img/PicsArt_09-01-03.01.35.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-03.02.15-1.jpg" class="materialboxed responsive-img image-filter rituals move" width="310px" >
    <img src="img/PicsArt_09-01-03.03.01.jpg" class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-03.04.22.jpg"  class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.04.49.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-03.05.18.jpg" class="materialboxed responsive-img image-filter farms move" width="310px" >
    <img src="img/PicsArt_09-01-03.05.50.jpg" class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.06.12.jpg"  class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.06.43.jpg" class="materialboxed responsive-img image-filter farms move" width="310px" >
    <img src="img/PicsArt_09-01-03.07.13.jpg" class="materialboxed responsive-img image-filter resorts move" width="310px">
    <img src="img/PicsArt_09-01-03.07.36.jpg"  class="materialboxed responsive-img image-filter resorts move" width="310px">
    <img src="img/PicsArt_09-01-03.08.04.jpg"  class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-03.08.23.jpg" class="materialboxed responsive-img image-filter decor move" width="310px" >
    <img src="img/PicsArt_09-01-03.09.14.jpg" class="materialboxed responsive-img image-filter decor move" width="310px">
    <img src="img/PicsArt_09-01-03.09.46.jpg"  class="materialboxed responsive-img image-filter farms nove" width="310px">
    <img src="img/PicsArt_09-01-03.10.11.jpg" class="materialboxed responsive-img image-filter royal nove" width="310px" >
    <img src="img/PicsArt_09-01-03.10.34.jpg" class="materialboxed responsive-img image-filter theme nove" width="310px">
    <img src="img/PicsArt_09-01-03.11.04.jpg"  class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.11.43.jpg"  class="materialboxed responsive-img image-filter resorts nove" width="310px">
    <img src="img/PicsArt_09-01-03.12.08.jpg" class="materialboxed responsive-img image-filter royal nove" width="310px" >
    <img src="img/PicsArt_09-01-03.12.31.jpg" class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.13.52.jpg"  class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.14.16.jpg" class="materialboxed responsive-img image-filter resorts move" width="310px" >
    <img src="img/PicsArt_09-01-03.18.15.jpg" class="materialboxed responsive-img image-filter theme move" width="310px">
    <img src="img/PicsArt_09-01-03.14.49.jpg"  class="materialboxed responsive-img image-filter farms nove" width="310px">
    <img src="img/PicsArt_09-01-03.15.28.jpg"  class="materialboxed responsive-img image-filter farms nove" width="310px">
    <img src="img/PicsArt_09-01-03.16.06.jpg" class="materialboxed responsive-img image-filter rituals nove" width="310px" >
    <img src="img/PicsArt_09-01-03.17.33.jpg" class="materialboxed responsive-img image-filter farms move" width="310px">
    <img src="img/PicsArt_09-01-03.26.49.jpg"  class="materialboxed responsive-img image-filter cultural move" width="310px">
    <img src="img/PicsArt_09-01-03.53.28.jpg" class="materialboxed responsive-img image-filter institutional move" width="310px" >
    <img src="img/PicsArt_09-01-03.57.43.jpg" class="materialboxed responsive-img image-filter parties nove" width="310px">
    <img src="img/PicsArt_09-01-03.58.20.jpg"  class="materialboxed responsive-img image-filter live nove" width="310px">
    <img src="img/PicsArt_09-01-04.00.09.jpg"  class="materialboxed responsive-img image-filter institutional nove" width="310px">
    <img src="img/PicsArt_09-01-04.01.06.jpg" class="materialboxed responsive-img image-filter cultural move" width="310px" >
     <img src="img/PicsArt_09-01-04.03.28.jpg" class="materialboxed responsive-img image-filter corporate move" width="310px">
    <img src="img/PicsArt_09-01-04.07.26.jpg"  class="materialboxed responsive-img image-filter live move" width="310px">
    <img src="img/PicsArt_09-01-04.08.30.jpg" class="materialboxed responsive-img image-filter photo nove" width="310px" >
    <img src="img/PicsArt_09-01-04.10.51.jpg" class="materialboxed responsive-img image-filter photo nove" width="310px">
    <img src="img/PicsArt_09-01-04.11.51.jpg"  class="materialboxed responsive-img image-filter catering nove" width="310px">
    <img src="img/PicsArt_09-01-04.12.13.jpg"  class="materialboxed responsive-img image-filter catering move" width="310px">
    <img src="img/PicsArt_09-01-04.14.49.jpg" class="materialboxed responsive-img image-filter corporate move"  width="310px" >
    <img src="img/PicsArt_09-01-04.18.17.jpg" class="materialboxed responsive-img image-filter cultural move" width="310px">
    <img src="img/PicsArt_09-03-05.14.03.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/PicsArt_09-03-05.15.27-1.jpg" class="materialboxed responsive-img image-filter rituals move" width="310px">
    <img src="img/PicsArt_09-03-05.19.23.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/PicsArt_09-03-05.23.28.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/PicsArt_09-03-05.20.53.jpg" class="materialboxed responsive-img image-filter bachelors move" width="310px">
    <img src="img/PicsArt_09-03-05.21.51.jpg" class="materialboxed responsive-img image-filter bachelors move" width="310px">
    <img src="img/PicsArt_09-03-05.23.58.jpg" class="materialboxed responsive-img image-filter photo move" width="310px">
    <img src="img/PicsArt_09-03-05.24.27.jpg" class="materialboxed responsive-img image-filter photo move" width="310px">
    <img src="img/PicsArt_09-01-04.08.58.jpg" class="materialboxed responsive-img image-filter photo move" width="310px">

    <img src="img/PicsArt_09-01-04.09.49.jpg" class="materialboxed responsive-img image-filter photo move" width="310px">
    <img src="img/pexels-cleyder-duque-3653946.jpg" class="materialboxed responsive-img image-filter parties move" width="310px">
    <img src="img/pexels-craig-adderley-1543762.jpg" class="materialboxed responsive-img image-filter parties move" width="310px">
    <img src="img/pexels-fu-zhichao-587741.jpg" class="materialboxed responsive-img image-filter parties move" width="310px">
    <img src="img/pexels-mat-brown-1395964.jpg" class="materialboxed responsive-img image-filter catering move" width="310px">
    <img src="img/PicsArt_09-01-04.12.55.jpg" class="materialboxed responsive-img image-filter catering move" width="310px">
    <img src="img/PicsArt_09-01-04.13.48.jpg" class="materialboxed responsive-img image-filter catering move" width="310px">
    <img src="img/PicsArt_09-01-04.13.20.jpg" class="materialboxed responsive-img image-filter catering move" width="310px">
    <img src="img/victoria-priessnitz--JZFAKFaF7M-unsplash.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/PicsArt_09-03-05.18.56.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/PicsArt_09-03-05.19.52.jpg" class="materialboxed responsive-img image-filter entertainment move" width="310px">
    <img src="img/pranav-kumar-jain-irtl0uKQUaQ-unsplash.jpg" class="materialboxed responsive-img image-filter rituals move" width="310px">
    <img src="img/micheile-henderson-gnm2op0m2pw-unsplash.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/pranav-kumar-jain-tbUfQt4mrBY-unsplash.jpg" class="materialboxed responsive-img image-filter entertainment move" width="310px">
    <img src="img/victoria-priessnitz-R0B0AnOw0Kg-unsplash.jpg" class="materialboxed responsive-img image-filter entertainment move" width="310px">
    <img src="img/anna1991anna-P_1soiSbkuU-unsplash.jpg" class="materialboxed responsive-img image-filter entertainment move" width="310px">
    <img src="img/antoine-julien-A_0C42zmz1Q-unsplash.jpg" class="materialboxed responsive-img image-filter bachelors move" width="310px">
    <img src="img/fernanda-prado-ertF_USpDL0-unsplash.jpg" class="materialboxed responsive-img image-filter bachelors move" width="310px">
    <img src="img/maxime-lebrun-l8h1hXBvzkQ-unsplash-1.jpg" class="materialboxed responsive-img image-filter live move" width="310px">
    <img src="img/alasdair-elmes-ULHxWq8reao-unsplash.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/abby-savage-zNsSwsuyP3A-unsplash-1.jpg" class="materialboxed responsive-img image-filter anniversary move" width="310px">
    <img src="img/pranav-kumar-jain-JZgpnwhdI68-unsplash.jpg" class="materialboxed responsive-img image-filter entertainment move" width="310px">
    <img src="img/pranav-kumar-jain-KJxETTtHAlw-unsplash.jpg" class="materialboxed responsive-img image-filter bachelors move" width="310px">
    <img src="img/naganath-chiluveru-Uzl-KYPAH44-unsplash.jpg" class="materialboxed responsive-img image-filter entertainment move" width="310px">
    
</div>
    
</div>

    <script type="text/javascript">
      $(document).ready(function(){
         $(".btngal").click(function(){
           var value = $(this).attr("data-filter");

           if(value=="all"){

            $(".image-filter").show(1000);

           }

           else{
              
              $(".image-filter").not("."+value).hide(1000);
              $(".image-filter").filter("."+value).show(1000);

           }


         });

      });
    </script>
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
