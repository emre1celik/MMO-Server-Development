<?php
   // Initialize the session
   if(!isset($_SESSION)) { 
      session_start(); 
   } 

   // Check if the user is already logged in, if yes then redirect him to welcome page
   if(!isset($_SESSION["loggedin"])){
      header("location: login.php");
      exit;
   }
   
   $ticket = $ticket_error = "";
    // Check if password doesnt match
    if(isset($_POST["rules"])){
      if(!empty($_POST["subject"])){
         $ticket = "Your ticket has been sent. We will contact you shortly.";
       } else {
         $ticket_error = "Please enter a subject.";
       }
    } else {
      $ticket_error = "Please accept the game rules and terms of service.";
    }
  
   include('header.php');
   ?>
<div class="dmn-content">
   <div class="dmn-page-login-box">
      <div class="dmn-page-title">
         <h1 style="color: white;font-family: Philosopher, sans-serif;">Contact us!</h1>
      </div>
      <div class="dmn-page-content">
         <div class="row" style="color: white;">
            <div class="col-12">
               <?php 
                  if(!empty($ticket)){
                        echo '<div class="alert alert-success">' . $ticket . '</div>';
                  }   
                  if(!empty($ticket_error)){
                        echo '<div class="alert alert-danger">' . $ticket_error . '</div>';
                  }    
               ?>
               <form method="post" class="registration_form" id="registration_form">
                  <div class="form-group">
                     <label for="exampleFormControlInput1">Subject</label>
                     <input type="subject" class="form-control" id="exampleFormControlInput1"  style="background: rgba(0,0,0,0.35); border: none;" placeholder="" name="subject">
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlSelect1">Select a category</label>
                     <select class="form-control" id="exampleFormControlSelect1" style="background: rgba(0,0,0,0.35); border: none;" name="category">
                        <option>Game, Account or Character issues</option>
                        <option>Suggestions</option>
                        <option>Bug report</option>
                        <option>Player report</option>
                        <option>Other</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Tell us more information</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="background: rgba(0,0,0,0.35); border: none;"></textarea>
                  </div>
                  <div class="form-group" style="color: #929292">
                     <input type="checkbox" name="rules" id="rules"/> I have read and agree to the <a href="" id="rules_dialog" style="color: #929292"><b>game rules.</b></a>
                  </div>
                  <div class="form-group mb-5">
                     <div class="d-flex justify-content-center align-items-center"><button type="submit" class="btn btn-primary">Submit</button></div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  
   include('footer.php');
   ?>