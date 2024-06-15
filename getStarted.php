<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="getStarted.css">
    <title>Get Started</title>
</head>

<style>
    
    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color:lightgrey ;
      border: 2px solid #ccc;
      padding: 20px;
      z-index: 9999;
      border-radius:15px;

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
    #button{
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
#button{
  background: #5029bc;
}
  </style>  
<body>

    <?php
      include 'parts/background.php' ;

    ?>






    <div class="containerr"> </div>
      <br><br>

      <div id="popup" class="popup">
  <div class="popup-content">
  <h2 style="color:green;">Logeed in succefelly!</h2>
  <h3>150$ are about to charged from your account , you will recive your recipte on your email.</h3><br>
  <h3>Do you want to continue this trasaction?</h3>
   
    <button id="button"  onclick="closePopup2()">Go Back</button>
    <button id="button"  onclick="closePopup()">Yes</button>
  </div>
</div>


    <center>
    <h1 class="qajseni">Let's Get Started</h1>
</center>
<br>
<h2 class="qajseni2">Choose your payment method:</h2>
<br>    
     
        <div class="divlogo">
            

                <div class="card" >
                <div class="card-inner">
                    <div class="card-front">
                    <img class="logot" onclick="flipCard(event)" src="fotot/paypal.jpg" alt="">
                    </div>
                    <div class="card-back">

                 
                    <h1  onclick="flipCard(event)" style="color:black;cursor: pointer;">🢀</h1>
                <form method="post">

                <input placeholder="Email" class="input" name="text" type="email">

                <input placeholder="Password" class="input" name="text" type="password">
                

                <div class="submitBtn" type="submit" onclick="showPopup()">Submit</div>
                


                </form>
                
                            </div>
                        </div>
                    </div>

    
                    <div class="card" >
                <div class="card-inner">
                    <div class="card-front">
                    <img class="logot" onclick="flipCard(event)" src="fotot/visa.png" alt="">
                    </div>
                    <div class="card-back">

                 
                    <h1  onclick="flipCard(event)" style="color:black;cursor: pointer;">🢀</h1>
                <form method="post">

                <input placeholder="Email" class="input" name="text" type="email">

                <input placeholder="Password" class="input" name="text" type="password">
                

                <div class="submitBtn" onclick="showPopup()">Submit</div>
                


                </form>
                
                            </div>
                        </div>
                    </div>

                    <div class="card" >
                <div class="card-inner">
                    <div class="card-front">
                    <img class="logot" onclick="flipCard(event)" src="fotot/mastercard.png" alt="">
                    </div>
                    <div class="card-back">

                 
                    <h1  onclick="flipCard(event)" style="color:black;cursor: pointer;">🢀</h1>
                <form method="post">

                <input placeholder="User ID" class="input" name="text" type="email">

                <input placeholder="Password" class="input" name="text" type="password">
                

                <div class="submitBtn" onclick="showPopup()">Submit</div>>

                


                </form>
                
                            </div>
                        </div>
                    </div>

    

                    <div class="card" >
                <div class="card-inner">
                    <div class="card-front">
                    <img class="logot" onclick="flipCard(event)" src="fotot/bitcoin.png" alt="">
                    </div>
                    <div class="card-back">

                 
                    <h1  onclick="flipCard(event)" style="color:black;cursor: pointer;">🢀</h1>
                <form method="post">

                <input placeholder="Email" class="input" name="text" type="email">

                <input placeholder="Password" class="input" name="text" type="password">
                

                <div class="submitBtn" onclick="showPopup()">Submit</div>

                


                </form>
                
                            </div>
                        </div>
                    </div>

    

    

        </div>

       

    <script>
       function flipCard(event) {
            const clickedElement = event.target;
            const cardElement = clickedElement.closest('.card');
            cardElement.classList.toggle('flipped');
        }
    </script>

<script>


function showPopup() {
  console.log("Show popup clicked!");
  document.getElementById('popup').style.display = 'block';
}

function closePopup() {
  console.log("Close popup clicked!");
  window.location.href = 'kalendari.php';
}
function closePopup2() {
  console.log("Close popup clicked!");
  document.getElementById('popup').style.display = 'none';  
}
</script>
</body>
</html>