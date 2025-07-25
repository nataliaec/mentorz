<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mentorz | Login & Signup</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
  <style>
    .logo {
  width: 200px;
  height: auto;
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html, body {
      display: grid;
      height: 100%;
      width: 100%;
      place-items: center;
      background: linear-gradient(to right, #175d69, #2c8193, #3aa4c2, #47b2e4);
    }

    ::selection {
      background: #3a8ddb;
      color: #fff;
    }

    .center {
      display: block;
      margin: 20px auto;
      width: 120px;
    }

    .wrapper {
      overflow: hidden;
      max-width: 390px;
      background: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
    }

    .wrapper .title-text {
      display: flex;
      width: 200%;
    }

    .wrapper .title {
      width: 50%;
      font-size: 35px;
      font-weight: 600;
      text-align: center;
      transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }

    .slide-controls {
      position: relative;
      display: flex;
      height: 50px;
      width: 100%;
      overflow: hidden;
      margin: 30px 0 10px 0;
      justify-content: space-between;
      border: 1px solid lightgrey;
      border-radius: 5px;
    }

    .slide-controls .slide {
      height: 100%;
      width: 100%;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      text-align: center;
      line-height: 48px;
      cursor: pointer;
      z-index: 1;
      transition: all 0.6s ease;
    }

    .slide-controls label.signup {
      color: #000;
    }

    .slider-tab {
      position: absolute;
      height: 100%;
      width: 50%;
      left: 0;
      z-index: 0;
      border-radius: 5px;
      background: linear-gradient(to right, #175d69, #2c8193, #3aa4c2, #47b2e4);
      transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }

    input[type="radio"] {
      display: none;
    }

    #signup:checked ~ .slider-tab {
      left: 50%;
    }

#signup:checked ~ label.signup,
#login:checked ~ label.login {
  color: #fff;
}

#signup:checked ~ label.login,
#login:checked ~ label.signup {
  color: #175d69;
}


    .form-container {
      width: 100%;
      overflow: hidden;
    }

    .form-inner {
      display: flex;
      width: 200%;
    }

    .form-inner form {
      width: 50%;
      transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }

    .form-inner form .field {
      height: 50px;
      width: 100%;
      margin-top: 20px;
    }

    .form-inner form .field input {
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 15px;
      border-radius: 5px;
      border: 1px solid lightgrey;
      border-bottom-width: 2px;
      font-size: 17px;
      transition: all 0.3s ease;
    }

    .form-inner form .field input:focus {
      border-color: #3a8ddb;
    }

    .form-inner form .field input::placeholder {
      color: #999;
      transition: all 0.3s ease;
    }

    .form-inner form .pass-link {
      margin-top: 5px;
    }

    .form-inner form .signup-link {
      text-align: center;
      margin-top: 30px;
    }

.form-inner form .pass-link a,
.form-inner form .signup-link a {
  color: #2c8193;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover {
  color: #175d69;
}


    .btn {
      height: 50px;
      width: 100%;
      border-radius: 5px;
      position: relative;
      overflow: hidden;
    }

    .btn-layer {
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: linear-gradient(to right, #175d69, #2c8193, #3aa4c2, #47b2e4);
  border-radius: 5px;
  transition: all 0.4s ease;
}


    .btn:hover .btn-layer {
      left: 0;
    }

    .btn input[type="submit"] {
      height: 100%;
      width: 100%;
      z-index: 1;
      position: relative;
      background: none;
      border: none;
      color: #fff;
      padding-left: 0;
      border-radius: 5px;
      font-size: 20px;
      font-weight: 500;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Logo -->
  <img src="logo.png" alt="Mentorz logo" class="logo">

  <!-- Login & Signup Wrapper -->
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form class="login" action="login.inc.php">
          <div class="field">
            <input type="text" placeholder="Display Name" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">
            Not a member? <a href="#">Signup now</a>
          </div>
        </form>
<form class="signup" action="signup.inc.php" method="POST">
  <div class="field">
    <input type="text" name="username" placeholder="Username" required>
  </div>
  <div class="field">
    <input type="email" name="email" placeholder="Email Address" required>
  </div>
  <div class="field">
    <input type="password" name="password" placeholder="Password" required>
  </div>
  <div class="field">
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
  </div>
  <div class="field btn">
    <div class="btn-layer"></div>
    <input type="submit" value="Signup">
  </div>
</form>

      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");

    signupBtn.onclick = () => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    };
    loginBtn.onclick = () => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    };
    signupLink.onclick = () => {
      signupBtn.click();
      return false;
    };

  </script>

</body>
</html>
