<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Calendar</title>
  <link rel="stylesheet" href="kalendari1.css">
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
  </style>  
</head>
<body>



<div id="popup" class="popup">
  <div class="popup-content">
    <h2>You are all set!</h2>
    <p>You will receive an email with more information about the appointment.</p>
    <button class="submitBtn"  onclick="closePopup()">Close</button>
  </div>
</div>


<b><p class="minitxt">Pick an appointement for your car inspection:</p></b>
<b><p class="minitxt1">Then pick the time lower :</p></b>
<b><p class="minitxt">June 2024</p></b>
<div class="kalendari">
<ul>
<li><time class="tejdukshem" datetime="2022-02-01">1 Mon</time></li>
    <li><time class="tejdukshem" datetime="2022-02-02">2 Tue</time></li>
    <li><time class="tejdukshem" datetime="2022-02-03">3 Wed</time></li>
    <li class="today yes"><time datetime="2022-02-04">4 Thu</time></li>
    <li><time class="tejdukshem" datetime="2022-02-05">5 Fri</time></li>
    <li><time class="tejdukshem" datetime="2022-02-06">6 Sat</time></li>
    <li class="today yes"><time datetime="2022-02-07">7 Sun</time></li>
    <li class="today yes"><time datetime="2022-02-08">8 Mon</time></li>
    <li class="today yes"><time datetime="2022-02-09">9 Tue</time></li>
    <li><time class="tejdukshem" datetime="2022-02-10">10 Wed</time></li>
    <li class="today yes"><time datetime="2022-02-11">11 Thu</time></li>
    <li class="today yes"><time datetime="2022-02-12">12 Fri</time></li>
    <li class="today yes"><time datetime="2022-02-13">13 Sat</time></li>
    <li><time class="tejdukshem" datetime="2022-02-14">14 Sun</time></li>
    <li><time class="tejdukshem" datetime="2022-02-15">15 Mon</time></li>
    <li class="today yes"><time datetime="2022-02-16">16 Tue</time></li>
    <li class="today yes"><time datetime="2022-02-17">17 Wed</time></li>
    <li><time class="tejdukshem" datetime="2022-02-18">18 Thu</time></li>
    <li class="today yes"><time datetime="2022-02-19">19 Fri</time></li>
    <li><time class="tejdukshem" datetime="2022-02-20">20 Sat</time></li>
    <li class="today yes"><time datetime="2022-02-21">21 Sun</time></li>
    <li><time class="tejdukshem" datetime="2022-02-22">22 Mon</time></li>
    <li class="today yes"><time datetime="2022-02-23">23 Tue</time></li>
    <li><time class="tejdukshem" datetime="2022-02-24">24 Wed</time></li>
    <li><time class="tejdukshem" datetime="2022-02-25">25 Thu</time></li>
    <li><time class="tejdukshem" datetime="2022-02-26">26 Fri</time></li>
    <li class="today yes"><time datetime="2022-02-27">27 Sat</time></li>
    <li><time class="tejdukshem" datetime="2022-02-28">28 Sun</time></li>
    <li><time class="tejdukshem" datetime="2022-02-28">29 Mon</time></li>
    <li><time class="tejdukshem" datetime="2022-02-28">30 Tue</time></li>
</ul>
</div>
<br><br>
<script>
 const listItems = document.querySelectorAll('.yes');


listItems.forEach(item => {
  item.addEventListener('click', () => {
    listItems.forEach(li => li.style.backgroundColor = '');
    item.style.backgroundColor = 'rgba(144, 238, 144, 0.5)';
    
  });
});


</script>

<b><p class="minitxt">Choose Time:</p></b>

<div class="container">
  <center>
    <form>
      <label>
        <input type="radio" name="radio" checked="">
        <span>09:00</span>
      </label>
      <label>
        <input type="radio" name="radio">
        <span>11:00</span>
      </label>
      <label>
        <input type="radio" name="radio">
        <span>13:00</span>
      </label>
      <label>
        <input type="radio" name="radio">
        <span>15:00</span>
      </label>
      <label>
        <input type="radio" id="qajo" name="radio">
        <span>17:00</span>
      </label>
      <div class="submitBtn" onclick="showPopup()">Submit</div>
    </form>
  </center>
  
</div>
   
<script>


  function showPopup() {
    console.log("Show popup clicked!");
    document.getElementById('popup').style.display = 'block';
  }

  function closePopup() {
    console.log("Close popup clicked!");
    document.getElementById('popup').style.display = 'none';  
    window.location.href = 'profile.php';
  }
</script>
</script>


  
</body>
</html>
