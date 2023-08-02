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
         <h1 style="font-family: Philosopher, sans-serif;color:white;">Highscores - Mastery</h1>
      </div>
      <div class="dmn-page-content">
         <div class ="row">
            <div class="col-12 d-flex justify-content-center">
               <label class="control-label" style="font-family: Philosopher, sans-serif;color:white;">Please select a category:</label>
            </div>
         </div>
         <div class ="row">
            <div class="col-12">
               <br>
               <div class="d-flex justify-content-center" style="font-family: Philosopher, sans-serif;color:white;font-weight:bold;">
                  <a href="./highscore.php" class="btn btn-primary"><img src="./images/reset.png" style="width: 35px; height 35px;">&nbsp;&nbsp;Resets</a>&nbsp;&nbsp;
                  <a href="./highscore-master.php" class="btn btn-primary" style="font-weight:bold;box-shadow: 0px 0px 5px #fff;"><img src="./images/master.png" style="width: 35px; height 35px;">&nbsp;Mastery</a>&nbsp;&nbsp;
                  <a href="./highscore-ruud.php" class="btn btn-primary"><img src="./images/ruud.png" style="width: 35px; height 35px;">&nbsp;Ruud</a>&nbsp;&nbsp;
                  <a href="./highscore-goblinpoints.php" class="btn btn-primary"><img src="./images/goblinpoints.png" style="width: 35px; height 35px;">&nbsp;Goblin Points</a>
               </div>
               <br>
               <div class="d-flex justify-content-center" style="font-family: Philosopher, sans-serif;color:white;">
                  <a href="./highscore-bc.php" class="btn btn-primary"><img src="./images/bc.png" style="width: 35px; height 35px;">&nbsp;&nbsp;Blood Castle</a>&nbsp;&nbsp;
                  <a href="./highscore-ds.php" class="btn btn-primary"><img src="./images/ds.png" style="width: 35px; height 35px;">&nbsp;&nbsp;Devil Square</a>&nbsp;&nbsp;
                  <a href="./highscore-cc.php" class="btn btn-primary"><img src="./images/cc.png" style="width: 35px; height 35px;">&nbsp;&nbsp;Chaos Castle</a>&nbsp;&nbsp;
                  <a href="./highscore-dg.php" class="btn btn-primary"><img src="./images/dg.png" style="width: 35px; height 35px;">&nbsp;&nbsp;Doppelganger</a>
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
         <table class="table table-hover table-secondary table-sm" style="font-family: Philosopher, sans-serif;">
         <thead class="table-light">
            <tr>
               <th scope="col">Rank</th>
               <th scope="col">Class</th>
               <th scope="col">Character name</th>
               <th scope="col">Total Level</th>
            </tr>
         </thead>
         <tbody>
         <?php
         // Include config file
         require_once "login/config_characters.php";
         try {
            $sql = "SELECT race, name, level, level_master, level_majestic FROM characters.character_info ORDER BY level_majestic+level_master+level DESC LIMIT 50";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) {
               // output data of each row
               $nr = 1;
               while($row = mysqli_fetch_assoc($result)) {
                  $classname = "";
                  switch ($row["race"]) {case 0:$classname = "Dark Wizard";break;case 1:$classname = "Soul Master";break;case 2:$classname = "Grand Master";break;case 16:$classname = "Dark Knight";break;case 17:$classname = "Blade Knight";break;case 18:$classname = "Blade Master";break;case 32:$classname = "Elf";break;case 33:$classname = "Muse Elf";break;case 34:$classname = "High Elf";break;case 48:$classname = "Magic Gladiator";break;case 49:$classname = "Magic Gladiator";break;case 50:$classname = "Dual Master";break;case 64:case 65:$classname = "Dark Lord";break;case 66:$classname = "Lord Emperor";break;case 80:$classname = "Summoner";break;case 81:$classname = "Bloody Summoner";break;case 82:$classname = "Dimension Master";break;case 96:case 97:$classname = "Rage Fighter";break;case 98:$classname = "Fist Master";break;case 112:case 113:$classname = "Grow Lancer";break;case 114:$classname = "Mirage Lancer";break;case 128:$classname = "Rune Wizard";break;case 129:$classname = "Rune Spellmaster";break;case 130:$classname = "Rune Grandmaster";break;case 144:$classname = "Slayer";break;case 145:$classname = "Royal Slayer";break;case 146:$classname = "Master Slayer";break;case 160:$classname = "Guncrusher";break;case 161:$classname = "Gunbreaker";break;case 162:$classname = "Master Gunbreaker";break;case 176:$classname = "White Mage: Kundun";break;case 177:$classname = "Light Master";break;case 178:$classname = "Shine Wizard";break;case 192:$classname = "Mage: Lemuria";break;case 193:$classname = "Wo Mage";break;case 194:$classname = "Arch Mage";break;case 208:$classname = "Illusion Knight";break;case 209:$classname = "Mirage Knight";break;case 210:$classname = "Illusion Master";break;default:$classname= "";
                  }
                  if ($nr == 1) {
                     echo "<tr><td><img src='./images/gold-cup.png' style='width:30px; height:30px;'></td><td><img src='./images/classes/icon/".$row["race"].".png' style='width:30px; height:30px;'> ".$classname."</td><td>".$row["name"]."</td><td>".$row["level_master"]+$row["level_majestic"]+$row["level"]."</td></tr>";
                 
                  } else if ($nr == 2) {
                     echo "<tr><td><img src='./images/silver-cup.png' style='width:30px; height:30px;'></td><td><img src='./images/classes/icon/".$row["race"].".png' style='width:30px; height:30px;'> ".$classname."</td><td>".$row["name"]."</td><td>".$row["level_master"]+$row["level_majestic"]+$row["level"]."</td></tr>";
                 
                  } else if ($nr == 3) {
                     echo "<tr><td><img src='./images/bronze-cup.png' style='width:30px; height:30px;'></td><td><img src='./images/classes/icon/".$row["race"].".png' style='width:30px; height:30px;'> ".$classname."</td><td>".$row["name"]."</td><td>".$row["level_master"]+$row["level_majestic"]+$row["level"]."</td></tr>";

                  } else {
                  echo "<tr><td>#".$nr."</td><td><img src='./images/classes/icon/".$row["race"].".png' style='width:30px; height:30px;'> ".$classname."</td><td>".$row["name"]."</td><td>".$row["level_master"]+$row["level_majestic"]+$row["level"]."</td></tr>";
                  }
                  $nr++;
               }
            } else {
               echo "No results.";
            }
            
            mysqli_close($link);
         } catch (Exception $e) {
            return 'Connection Error';
         }
         ?>
         </tbody>
         </table>
         </div>
      </div>
   </div>
</div>
</div>		
<?php  
   include('footer.php');
   ?>