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
         <h1 style="font-family: Philosopher, sans-serif;color:white;">Game Client</h1>
      </div>
      <div class="dmn-page-content">
         <div class="row">
            <div class="col-12">
               <h2 style="font-family: Philosopher, sans-serif;color:white;">Choose a download link</h2>
               <div class="card-group">
                  <div class="card ml-1 mr-1"><a href="https://drive.google.com/file/d/1APkN39IuK9elRzPgHdpHPsI1nc38Nr5e/view?usp=share_link" target="_blank" class="btn btn-primary dmn-download-button"  style="font-family: Philosopher, sans-serif;border: none;" role="button"><img src="./images/drive.png"> Google Drive</a></div>
                  <div class="card ml-1 mr-1"><a href="https://mega.nz/file/J7JkWBCL#4mUv0AM6oq0ipGOiPD0llKs_xI0bHDrqBTu8LUsWKCk" target="_blank" class="btn btn-primary dmn-download-button"  style="font-family: Philosopher, sans-serif;border: none;" role="button"><img src="./images/mega.png"> MEGA.nz</a></div>
               </div>
               <div class="mb-5 mt-3">
                  <h2 style="font-family: Philosopher, sans-serif;color:white;">System Requirements</h2>
                  <div class="card-group">
                     <div class="card ml-1">
                        <ul class="list-group list-group-flush" style="font-family: Philosopher, sans-serif;">
                           <li class="list-group-item" style="background: rgb(137 137 137);height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span style="font-weight: bold;">MINIMUM</span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>Windows 7</span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>CPU: Pentium 3 700 Mhz<br></span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>RAM: 512 MB<br></span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>GPU: 3D graphics processor, 32 MB<br></span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>DX: DirectX 8.1a<br></span></li>
                        </ul>
                     </div>
                     <div class="card mr-1" style="height: 100%;background: #b5b5b5;font-family: Philosopher, sans-serif;">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item" style="background: rgb(137 137 137);height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span style="font-weight: bold;">RECOMMENDED</span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>Windows 7</span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>CPU: Pentium 4 – 2.0 Ghz or higher<br></span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>RAM: 1 GB or higher</span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>GPU: 3D graphics processor, 128 MB or higher<br></span></li>
                           <li class="list-group-item" style="background: #b5b5b5;height: 100%;width: 100%;padding-top: 25px;padding-bottom: 25px;"><span>DX: DirectX 9.0c or higher<br></span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  
   include('footer.php');
   ?>