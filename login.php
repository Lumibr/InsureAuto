<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login1.css" />
    <title>Sign in & Sign up Form</title>
    <style>
        #error-message {
            color: red; 
            background-color:black;
            display: none;
           
        }
    </style>
  </head>
  <body>

 

    
          
          
    <div class="container">
        
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="zindex sign-in-form">
            <h2 class="title ">Sign in</h2>
           
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" id="un" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="pass"  type="password" placeholder="Password" />
              
            </div>
            <input type="submit" value="Login"  class="btn solid" />
             <div id="error-message" style="background-color:black;">*Incorrect username or password</div>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Full name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-id-card"></i>
              <input type="text" class="id" placeholder="ID Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" />
            </div>
            <p style="color:white">Upload your ID so we know its you:</p>
            <input type="file" id="avatar" />
            <input type="submit" class="btn" onclick="simulateLogin()" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="zindex">
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
        </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign up to create an account!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              
            </p>
            <button  class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login.js">
    </script>

  <script>

document.querySelector('.sign-in-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const username = document.querySelector('.sign-in-form input[type="text"]').value;
  const password = document.querySelector('.sign-in-form input[type="password"]').value;
  const message = document.createElement('p');
  message.className = 'error-message';

  const previousMessage = document.querySelector('.sign-in-form .error-message');
  if (previousMessage) {
    previousMessage.remove();
  }

  if (!username || !password) {
    message.style.color = 'red';
    message.style.backgroundColor = 'darkgrey';
    message.style.borderRadius ='15px';
    message.style.padding = '5px'; 
    message.textContent = 'Please enter both username and password!';
  } else {
if (username === 'elmedinamurturi8@gmail.com' && password === 'elmedina123') {
      message.style.color = 'green';
      message.style.borderRadius ='15px';
      message.style.backgroundColor = 'darkgrey';
      message.style.padding = '5px';
      message.textContent = 'Login successful!';
      window.location.href = 'home.php';
    } else {
      message.style.color = 'red';
      message.style.backgroundColor = 'darkgrey';
      message.style.borderRadius ='15px';
      message.style.padding = '5px';
      message.textContent = 'Invalid username or password!';
    }
  }

  this.appendChild(message);
});


document.querySelector('.sign-up-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const username = document.querySelector('.sign-up-form input[type="text"]').value;
  const email = document.querySelector('.sign-up-form input[type="email"]').value;
  const password = document.querySelector('.sign-up-form input[type="password"]').value;
  const confirmPassword = document.querySelector('.sign-up-form input[type="password"][placeholder="Confirm Password"]').value;
  const message = document.createElement('p');
  message.className = 'error-message';

  const previousMessage = document.querySelector('.sign-up-form .error-message');
  if (previousMessage) {
    previousMessage.remove();
  }

  if (!username || !email || !password || !confirmPassword) {
    message.style.color = 'red';
    message.style.backgroundColor = 'darkgrey'; 
    message.style.borderRadius ='15px';
    message.style.padding = '5px';
    message.textContent = 'Please fill in all fields!';
  } else if (password !== confirmPassword) {
    message.style.color = 'red';
    message.style.borderRadius ='15px';
    message.style.padding = '5px';
    message.style.backgroundColor = 'darkgrey';
    message.textContent = 'Passwords do not match!';
  } else {
    // Dummy success message for demonstration
    message.style.color = 'green';
    message.style.backgroundColor = 'darkgrey';
    message.style.borderRadius ='15px';
    message.style.padding = '5px';
   
    message.textContent = 'Account created successfully!';
    window.location.href = 'login.php';
  }

  this.appendChild(message);
});


  </script>

  </body>
</html>