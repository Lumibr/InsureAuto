
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile1.css?ver=2">
    <link rel="stylesheet" href="parts/navv.css">
   
    <title>InsureAuto</title>
</head>
<style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: lightgrey;
            border: 2px solid #ccc;
            padding: 20px;
            z-index: 9999;
            border-radius: 15px;
        }
        
        .popup-content {
            text-align: center;
        }
        
        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
        }
        
        #button {
            color: #fff;
            font-size: 18px;
            outline: none;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            background: #3e2093;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        #button {
            background: #5029bc;
        }
    </style>
<body>

<div style='z-index;2:'>

<?php 
   include 'parts/background.php' ;
   ?>
   <div class="containerr">
      
      </div>
   
 <div id='nav'>
 <?php 
   include 'parts/Profilenavbar.php' ;
   ?>
     
   

            </div>
          

                </div>
            </div>
        </div>
    </nav>
  
</div>
<br><br><br><br><br>

<div id="popup" class="popup">
    <div class="popup-content">
        <h2 style="color: grey;">For security reasons, please enter your password:</h2>
        <div class="info">
            <label class="color: black;">Password</label>
            <div class="input-field">
                <i class="fas fa-/"></i>
                <input type="password" id="passwordInput" />
            </div>
            <br><br>
            <p id="errori" style="color:red;"></p>
            <br><br><br>
           
        </div> 
         <button type="button" onclick="closePopup()">Cancle</button>
        <button type="button" onclick="checkPassword()">Submit</button>
    </div>
</div>


<div id='divK'>
  
  

    <div class="divat">
    <div class="image-container">
  <img src="fotot/profilepic.jfif" alt="Your Image">
</div>
    </div>

    <div class="divat" >
        <div class="ngjyra">
       <center><h2 class="white">Info</h2></center>

       <div class="info"> 
        <label class="Lcolor">Name</label>
        <div class="input-field">
        <i class="fas fa-/"></i>
         <input type="text" value="Lum Ibrahimi" id="un" readonly />
        </div>
        </div>

        <div class="info"> 
        <label class="Lcolor">Email  </label>
        <div class="input-field">
        <i class="fas fa-/"></i>
         <input type="text" value="lumibrahimi@gmail.com" id="un" readonly />
        </div>
        </div>

        <div class="info"> 
        <label class="Lcolor">ID Nr. </label>
        <div class="input-field">
        <i class="fas fa-/"></i>
         <input type="Password" value="1274625374" id="un" readonly />
        </div>
        </div>

        <div class="info"> 
        <label class="Lcolor">Phone   </label>
        <div class="input-field">
        <i class="fas fa-/"></i>
         <input type="text" value="+383 49-967-793" id="un" readonly />
        </div>
        </div>

        <div class="info"> 
        <label class="Lcolor">Password  </label>
        <div class="input-field">
        <i class="fas fa-/"></i>
         <input type="Password" value="lumi1234" id="un" readonly />
        </div>
        
       
        <label class="Lcolor">Your payment method:  </label>

        <img class="paypal" src="fotot/paypal.jpg" alt="">
             
        </div>
        <center>
                <button id="CHB" onclick="showPopup()">Change Profile</button>
                <button id="scaveB" style="display:none;" onclick="save()">Save</button>
                <p style="color:white;" id="savetxt"></p>
            </center>
              
</div>

    </div>
 
 
</div>

 <br><br><center><h2 class="white">Your Cars</h2></center><br><br>

    <div id='divK2'>   
 

   
 <div class="divat1">

    <div class="card">            
               
        <h2 class="white2">Audi A4 2013</h2>
        <p style="float:right" class="white3">Days of insurance left: 241</p>
        <p style="color: white;"class="white2">▼ click to see details</p>
    

    <div class="card-inner">
        <div class="card-front">
        <img src="fotot/audiA4.png" class="makina1" alt="Audi A4 2003">
        </div>
        <div class="card-back">
            <center>
            <p><strong>Plates:</strong>07 590 CI</p>
            <p><strong>Engine:</strong> 2.0L I4</p>
            <p><strong>Horsepower:</strong> 130 hp</p>
            <p><strong>Fuel Type:</strong> Gasoline</p>
            <p><strong>Transmission:</strong> Automatic</p>
            <p><strong>Color:</strong> Black</p>
            <p><strong>Fuel Efficiency (City/Hwy):</strong> 20/30 mpg</p>
            <p><strong>Dimensions (L x W x H):</strong> 178.2 x 70.1 x 56.5 inches</p>
            <p><strong>Safety Features:</strong></p>
            <ul>
                <li>Anti-lock Braking System (ABS)</li>
                <li>Electronic Stability Control (ESC)</li>
                <li>Front and Side Airbags</li>
                <li>Anti-Theft Alarm System</li>
            </ul>
            <br>
            <h2>Additional Features:</h2>
            <ul>
                <li>Leather Seats</li>
                <li>Sunroof</li>
                <li>Climate Control</li>
                <li>Alloy Wheels</li>
                <li>Remote Keyless Entry</li>
            </ul>
            <br>
            <h2>Insurance Coverage:</h2>
            <ul>
                <li>Comprehensive Coverage</li>
                <li>Collision Coverage</li>
                <li>Liability Coverage</li>
                <li>Personal Injury Protection</li>
                <li>Uninsured/Underinsured Motorist Coverage</li>
            </ul></center>
           
    </div> 
    </div>
   
     </div>       
<br><br><br><br>
  
<script>
    function hello(){
        window.location.href = 'kalendari.php';
    }
</script>




</div>

<div class="divat1">
    <div class="card card2">            
    <h2 class="white2">BMW X3 2017</h2>
        <p style="float:right" class="white33">Days of insurance left: 8</p>
        <p style="color: white;"class="white2">▼ click to see details</p>

        <div class="card-inner">
            <div class="card-front">
                <img src="fotot/bmw.png" class="makina1" alt="BMW X3 2017">
            </div>
            <div class="card-back">
                <center>
                <p><strong>Plates:</strong>07 253 DU</p>
                    <p><strong>Engine:</strong>3.0L turbocharged inline-6</p>
                    <p><strong>Horsepower:</strong> 240 - 355 hp</p>
                    <p><strong>Fuel Type:</strong> Gasoline</p>
                    <p><strong>Transmission:</strong> 8-speed automatic</p>
                    <p><strong>Color:</strong> Various options available</p>
                    <p><strong>Fuel Efficiency (City/Hwy):</strong> 21-23 mpg city / 28-30 mpg highway</p>
                    <p><strong>Dimensions (L x W x H):</strong> Approximately 185.9 x 74.4 x 66.0 inches</p>
                    <p><strong>Safety Features:</strong></p>
                    <ul>
                        <li>Anti-lock Braking System (ABS)</li>
                        <li>Dynamic Stability Control (DSC)</li>
                        <li>Advanced airbag system</li>
                        <li>Adaptive LED headlights</li>
                        <li>Lane Departure Warning</li>
                        <li>Blind Spot Detection</li>
                    </ul>
                    <br>
                    <h2>Additional Features:</h2>
                    <ul>
                        <li>Leather upholstery</li>
                        <li>Panoramic moonroof</li>
                        <li>Navigation system</li>
                        <li>Premium audio system</li>
                        <li>Adaptive cruise control</li>
                    </ul>
                    <br>
                    <h2>Insurance Coverage:</h2>
                    <ul>
                        <li>Comprehensive Coverage</li>
                        <li>Collision Coverage</li>
                        <li>Liability Coverage</li>
                        <li>Personal Injury Protection</li>
                        <li>Uninsured/Underinsured Motorist Coverage</li>
                    </ul>
                </center>
            </div>
        </div><center>
                <button id="apointmen" onclick='hello()'>
                Book An Inspection
                </button>
            </cente
    </div>
    r>
</div>



    </div>
    </div>
   <br><br><br><br>
   
   
   <?php
         include 'parts/footer.php'
      ?> 

<script>
    function showPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    function checkPassword() {
        var passwordInput = document.getElementById('passwordInput').value;
        var storedPassword = "elmedina123"; 
        if (passwordInput === "") {
            document.getElementById('errori').innerText = "Please enter your password.";
        } else if (passwordInput === storedPassword) {
            document.getElementById('errori').innerText = "";
            var inputs = document.querySelectorAll('.input-field input');
            inputs.forEach(function(input) {
                input.removeAttribute('readonly');
            });
            document.getElementById('CHB').style.display = 'none';
            document.getElementById('scaveB').style.display = 'block';
            document.getElementById('savetxt').innerText = "Now you can change your information.";
            closePopup();
        } else {
            document.getElementById('errori').innerText = "Incorrect password. Please try again.";
        }
    }

    function save(){
        var inputs = document.querySelectorAll('.input-field input');
    inputs.forEach(function(input) {
        input.setAttribute('readonly', 'readonly');
    });
    document.getElementById('scaveB').style.display = 'none';
    document.getElementById('CHB').style.display = 'block';
    document.getElementById('savetxt').innerText = "";
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
      card.addEventListener('click', function() {
        this.classList.toggle('flipped');
        
        const cardBackContent = this.querySelector('.card-back .scrollable-content');
        if (this.classList.contains('flipped')) {
          cardBackContent.scrollTop = 0;
        }
      });
    });
  });
  </script>

</div>
</body>

</html>


