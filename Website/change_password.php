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

include('header.php');

// Include config file
require_once "login/config.php";
 
// Define variables and initialize with empty values
$username = $password = $email = $rpassword = "";
$username_err = $password_err = $login_err = $email_err = $terms_err = $server_err = $password_succ = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a new password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["rpassword"]))){
        $password_err = "Please confirm your new password.";
    } else{
        $rpassword = trim($_POST["rpassword"]);
    }

    // Check if password doesnt match
    if($_POST["password"] != $_POST["rpassword"]){
      $password_err = "Your passwords do not match.";
    }
  
    // Validate credentials
    if(empty($password_err)){
        // Prepare a select statement
        $password_hashed = hash('sha256', $_SESSION["username"].':'.$_POST["password"]);
        $username = $_SESSION["username"];
        $sql_insert_new_user_info= "UPDATE accounts SET password = '$password_hashed' WHERE account = '$username'";

        if ($link->query($sql_insert_new_user_info) === TRUE) {
           $password_succ = "Your password has been updated.";
        } else {
           $password_err = "Something went wrong. Please try again.";
        }

    }
    
    // Close connection
    mysqli_close($link);
}
?>
<div class="dmn-content">
   <div class="dmn-page-login-box">
      <div class="dmn-page-title">
         <h1 style="color: white;font-family: Philosopher, sans-serif;">Change Password</h1>
      </div>
      <div class="dmn-page-content">
         <div class="row" style="color: white;">
            <div class="col-12">
               <?php 
                  if(!empty($password_err)){
                        echo '<div class="alert alert-danger">' . $password_err . '</div>';
                  }
                  else if(!empty($password_succ)){
                     echo '<div class="alert alert-success">' . $password_succ . '</div>';
                  }   
                  ?>
               <form method="post" class="registration_form" action="./change_password.php" id="registration_form">
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">New Password</label>
                     <input type="password" class="form-control" style="background: rgba(0,0,0,0.35); border: none;" name="password" id="password" value="">
                  </div>
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">Repeat New Password</label>
                     <input type="password" class="form-control" style="background: rgba(0,0,0,0.35); border: none;" name="rpassword" id="rpassword" value="">
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