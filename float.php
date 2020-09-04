<?php
$con = mysqli_connect ("localhost", "dhruvsingh", "Deepesh@801", "events", "3308") or die (mysqli_error($con));
?>

<html>
	
  <!--floating button-->
  <div class="fixed-action-btn">
  <a class="btn-floating btn-large red pulse">
    <i class="large material-icons">person</i>
  </a>
  <ul>
    <li><a href="mailto:eventswithbalaji@gmail.com" class="btn-floating red"><i class="material-icons">mail</i></a></li>
    <li><a href="#modal1" class="btn-floating yellow darken-1 modal-trigger"><i class="material-icons">mode_edit</i></a></li>
    <li><a href="tel:+919999712362" class="btn-floating green"><i class="material-icons">call</i></a></li>
    <li><a href="https://api.whatsapp.com/send?phone=919582671202&text=Welcome%20to%20Balaji%20events%20%20Please%20share%20your%20Event%20Type%20/%20Date%20/%20Gathering%20/%20Location%20Preferred%20/%20Budgets%20along%20with%20your%20Contact%20details.%20Our%20team%20member%20will%20get%20in%20touch%20with%20you%20shortly!"class="btn-floating blue"><i class="material-icons">message</i></a></li>
  </ul>
</div>

 <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet black">
    <div class="modal-content">
      <h5 class="carddt center-align">Please enter your contact no. & our team will respond shortly!!</h5>
      <form method="POST" action="float_submit.php">
        <div class="form-group">

              <input type="tel" class="form-control input-lg white-text" name="phone" placeholder="Contact" required="true" pattern="/^\+[0-9]{1,2}-[0-9]{3}-{0-9}{3}-[0-9]{4}$/">
        </div>
        <button type="submit" style="margin-top: 6px;" class=" hoverable center-align amber-text text-accent-4">Submit</button>
      </form>
    </div>
    
  </div>


</html>