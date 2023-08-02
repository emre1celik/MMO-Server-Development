<?php
// Initialize the session
if(!isset($_SESSION)) { 
   session_start(); 
} 

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"])){
   header("location: account.php");
   exit;
}

// Include config file
require_once "login/config.php";
 
include('header.php');

// Define variables and initialize with empty values
$username = $password = $email = "";
$username_err = $password_err = $login_err = $email_err = $terms_err = $server_err = $login_succ = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter an username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Check if password doesnt match
    if($_POST["password"] != $_POST["rpassword"]){
      $password_err = "Your passwords do not match.";
    }
  
    // Check if password doesnt match
    if(empty($_POST["email"])){
      $email_err = "Please enter an email address.";
    } else {
      $email = $_POST["email"];
    }
  
    // Check if password doesnt match
    if(!isset($_POST["rules"])){
      $terms_err = "Please read and accept the terms and game rules.";
    }
  
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT account FROM accounts WHERE account = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){  
                  // Username doesn't exist, display a generic error message
                  $login_err = "Username already exists. Please try again.";
                } else{
                     $password_hashed = hash('sha256', $_POST["username"].':'.$_POST["password"]);
                     $sql_insert_new_user_info= "INSERT INTO accounts (security_code,account,password,email) VALUES ('devemu','$username','$password_hashed','$email')";

                     if ($link->query($sql_insert_new_user_info) === TRUE) {
                        $login_succ = "Your account has been created. Click <a href='./login.php' style='color:green;font-weight:bold;'>here</a> to login.";
                     } else {
                        $login_err = "Something went wrong. Try again.";
                     }
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<div class="dmn-content">
   <div class="dmn-page-login-box">
      <div class="dmn-page-title">
         <h1 style="color: white;font-family: Philosopher, sans-serif;">Registration</h1>
      </div>
      <div class="dmn-page-content">
         <div class="row">
            <div class="col-12">
               <h2 class="title" style="color: #FFFFFF;">Create your account in just few clicks</h2>
            </div>
         </div>
         <div class="row" style="color: white;">
            <div class="col-12">
               <?php 
                  if(!empty($username_err)){
                        echo '<div class="alert alert-danger">' . $username_err . '</div>';
                  }       
                  else if(!empty($password_err)){
                        echo '<div class="alert alert-danger">' . $password_err . '</div>';
                  }          
                  else if(!empty($email_err)){
                        echo '<div class="alert alert-danger">' . $email_err . '</div>';
                  }          
                  else if(!empty($terms_err)){
                        echo '<div class="alert alert-danger">' . $terms_err . '</div>';
                  }           
                  else if(!empty($login_succ)){
                        echo '<div class="alert alert-success">' . $login_succ . '</div>';
                  }   
                  else if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                  }      
                  ?>
               <form method="post" class="registration_form" id="registration_form">
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">Server</label>
                     <div>
                        <select name="server" id="server" class="form-control" style="background: rgba(0,0,0,0.35); border: none;">
                           <option value="0">GrandMU Season 18</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">Username</label>
                     <input type="text" class="form-control" minlength="3" maxlength="10" style="background: rgba(0,0,0,0.35); border: none;" name="username" id="username" value="">
                  </div>
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">Email</label>
                     <input type="email" class="form-control" style="background: rgba(0,0,0,0.35); border: none;" name="email" id="email" value="">
                  </div>
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">Password</label>
                     <input type="password" class="form-control" minlength="3" style="background: rgba(0,0,0,0.35); border: none;" name="password" id="password" value="">
                  </div>
                  <div class="form-group">
                     <label class="control-label" style="color: #FFFFFF">Repeat Password</label>
                     <input type="password" class="form-control" minlength="3" style="background: rgba(0,0,0,0.35); border: none;" name="rpassword" id="rpassword" value="">
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
         <div class="row">
            <div class="col-12">
               <div class="list-group mb-4 additional-links" style="color: white;">
                  <a href="./login.php" style="color: white;">Already have an account?</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  
   include('footer.php');
   ?>