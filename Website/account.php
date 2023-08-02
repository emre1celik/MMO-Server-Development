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
   
   ?>
<div class="dmn-content">
   <div class="dmn-page-login-box">
      <div class="dmn-page-title">
         <h1 style="color: white;font-family: Philosopher, sans-serif;">Account Panel</h1>
      </div>
      <div class="dmn-page-content">
         <div class="row">
            <div class="col-12">
               <div class="alert alert-info" role="alert" style="font-family: Philosopher, sans-serif;font-weight:bold;">You are logged in succsesfully.</div>
            </div>
         </div>
      </div>
      <div class="row" style="color: white;">
         <div class="col-12">
            <form method="post" class="registration_form" action="./change_password.php" id="registration_form">
               <div class="form-group">
                  <label class="control-label" style="color: #FFFFFF">Server</label>
                  <div>
                     <select name="server" id="server" class="form-control" style="background: rgba(0,0,0,0.35); border: none;">
                        <option value="">GrandMU Season 18</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label" style="color: #FFFFFF">Username</label>
                  <input type="text" class="form-control" style="background: rgba(0,0,0,0.35); border: none;" name="user" id="user" value="<?php echo $_SESSION["username"] ?>" readonly>
               </div>
               <div class="form-group">
                  <label class="control-label" style="color: #FFFFFF">Email</label>
                  <input type="email" class="form-control" style="background: rgba(0,0,0,0.35); border: none;" name="email" id="email" value="<?php echo $_SESSION["email"] ?>" readonly>
               </div>
            </form>
            <div class="d-flex justify-content-center align-items-center"><a href="./change_password.php" class="btn btn-primary">Change Password</a></div>
            <hr>
            <div class="d-flex justify-content-center align-items-center"><a href="./logout.php" class="btn btn-primary">Logout</a></div>
         </div>
      </div>
   </div>
</div>
</div>		
<?php  
   include('footer.php');
   ?>