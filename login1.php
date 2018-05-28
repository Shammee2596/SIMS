<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="../cssFile/authentication.css">
  </head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" id="form">
          
          <h2 style="text-align: center;">Login Form</h2>

          
          <form name="loginForm" onsubmit ="return validateLoginForm()" action="signin.php" method="POST" id="cancel">
            <div class="imgcontainer">
              <img src="../icon/av.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label><br>
              <input type="text" placeholder="Enter Username" name="username"><br>
              <p id="username-alert" style="color: red; font-size: 14px"></p>

              <label for="psw"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="password"><br>
              <p id="password-alert" style="color: red; font-size: 14px"></p>   
              
              <button type="submit" name="login">Login</button><br>
              
              <!-- <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label> -->
            </div>

            <div class="container" style="background-color:#f1f1f1 width:300px;">
              <button type="button" class="cancelbtn" onclick="myFunction()">Cancel</button>
              <span class="psw">Forgot <a href="forgetPassword.php" style="color: red">password?</a></span>
            </div>
          </form>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    
<script type="text/javascript">
  function myFunction() {
    document.getElementById("cancel").reset();
}
</script>



</body>
</html>
