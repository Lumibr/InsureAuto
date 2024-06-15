<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Contact Us Form  | CodingLab </title>
    <link rel="stylesheet" href="support.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

   </head>
<body>


   
<div id='nav'>
   <?php 
   include 'parts/nav.php' ;
   ?> <br><br><br><br>
<br><br>
</div>

<div id="popup" class="popup">
  <div class="popup-content">
    <h2>Thank you for your feedback.</h2>
    <p>We will reach out to you as soon as possible.</p>
    <button id="button"  onclick="closePopup()">Close</button>
  </div>
</div>

 <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one"><span class="black">123 Insurance St, Prishtin</span></div>
          <div class="text-two"><span class="black">Kosovo</span></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one"><span class="black">+38349538545</span></div>
          <div class="text-two"><span class="black">+38349967793</span></div>
          <div class="text-three"><span class="black">+38343802607</span></div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one "><span class="black" >info@insureauto.com</span></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>At InsureAuto, we're here to help you every step of the way. If you have any questions, run into any problems, or need assistance with your car insurance, don't hesitate to reach out to us.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
        <textarea name="" id=""placeholder="Write a message.."></textarea> 
        </div>
        <div class="button">
          <input type="button" onclick="showPopup()" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div> 


   <br><br><br><br><br><br><br><br>
   
   
   <?php
         include 'parts/footer.php'
      ?> 

<script>
 function showPopup() {
    console.log("Show popup clicked!");
    document.getElementById('popup').style.display = 'block';
    document.getElementById('body').style.opacity = '0.5';
  }

  function closePopup() {
    console.log("Close popup clicked!");
    document.getElementById('popup').style.display = 'none';  
    
  }


</script>

</body>

</html>