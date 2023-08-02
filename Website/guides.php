<?php
   // Initialize the session
   if(!isset($_SESSION)) { 
      session_start(); 
   } 
   include('header.php');
   ?>
<div class="dmn-content">
   <div class="dmn-page-box">
      <div class="dmn-page-title">
         <h1 style="font-family: Philosopher, sans-serif;color:white;">Guides & Information</h1>
      </div>
      <div class="dmn-page-content">
         <div class="row">
            <div class="col-12">
               <div class="alert alert-info" role="alert" style="font-family: Philosopher, sans-serif;font-weight:bold;">This page is currrently under maintenance.</div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>		
<?php  
   include('footer.php');
   ?>