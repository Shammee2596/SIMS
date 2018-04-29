<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius:5px;
    /*box-shadow: 1px 1px ;*/
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 300px;
    border-radius: 5px;
    /*box-shadow: 1px 1px;*/
    font-size: 18px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 100px;
    padding: 8px 15px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: none;
    padding-top: 16px;
    padding-left: 20px;
}

/* Change styles for span and cancel button on extra small screens */
/*@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}*/
</style>
</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <h2 style="text-align: center;">Login Form</h2>
          <form action="/action_page.php">
            <div class="imgcontainer">
              <img src="icon/av.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label><br>
              <input type="text" placeholder="Enter Username" name="uname" required><br>

              <label for="psw"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="psw" required><br>
                  
              <button type="submit">Login</button><br>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1 width:300px;">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>




</body>
</html>
