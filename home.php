<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
   
    <title>InsureAuto</title>
</head>
<body>

<div style='z-index;2:'>

<?php 
   include 'parts/background.php' ;
   ?>
   <div class="containerr">
      
      </div>
   
 <div id='nav'>
   <?php 
   include 'parts/nav.php' ;
   ?> 
</div>
<br><br><br><br>


<div id='divK'>
   <div id='div2'>




      <div id="divCar">
      <img id="car" src="fotot/car.png" alt="">
      </div>
      

      <?php 
            include 'parts/plates.php';
         ?>

   <br>
<br><br>

      <div class='cards'>
            <div class="card1">
            <p class='txt1' >Where peace of mind meets the open road</p>
            </div> 

            <div class='divCard2'>
            <div class="card2">
            <p><span class='txtget'>Get</span> <span class='txt15'>15%</span> off,</p>
            <p> for the first time with us.</p>
      
            <br>
                <center> <button class='exp'>
               <div class="svg-wrapper-1">
               </div>
               <span onclick="redi()">Explore opsions</span>
               <script>

                  function redi() {
                     document.getElementById("teksti").innerHTML = "Type in your plates to see the offers for your car!";
                  }
               </script>
               </button></center>
               <p id="teksti" style="color:red;"></p>
            </div> 
            </div>
      </div>

         </div> 
      </div>
   </div>
   

   <br><br><br><br>
   
   
   <?php
         include 'parts/footer.php'
      ?> 

</div>
</body>

</html>


