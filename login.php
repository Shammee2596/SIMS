<!DOCTYPE HTML>
<html>
    <head>
        <title> Login and Registration Form Design</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssFile/home.css">
        <link rel="stylesheet" href="cssFile/style.css">
        <script src="javascript.js"></script>
    </head>
    <body>
        <header class="header">
         <div class="container-fluid">
            <p class="title">STUDENT INFORMATION MANAGEMENT SYSTEM </p>
            <p class="title"> IN RESIDENTIAL INSTITUTE</p>
        </div>
    </header>

   <div class="navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1">
                    <button type="button" name="login" class="btn btn-info btn-lg">
                        <a href="index.php">
                            <span class="glyphicon glyphicon-home" >Home</span>
                        </a>    
                    </button>
                </div>
            </div>  
        </div>
    </div>

        <div class="login-page">
            <div class="form">
                <form class="registration-form" name="registration"  action = "Authentication/database/authentication.db.php" method="POST">
                    <label>Full name</label>
                    <input type="text" name="name" placeholder="Name">
                    <label>Registration Number</label>
                    <input type="text" name="regNumber" placeholder="Registration Number">
                    <label>Department</label>
                    <select name="department">
                        <option value="Genetic Engineering"> Genetic Engineering</option>
                        <option value="Software Engineering">Software Engineering </option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Electrical and Electronic Engineering">Electrical and Electronic Engineering</option>
                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                    </select>
                    <label>Recovery Email</label>
                    <input type="text" name="email" placeholder="Recovery Email">
                    <label>Username</label>
                    <input type="text" name="userid" placeholder="Username">

                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password">
                    <input type="submit" name="CreateAccount" class="submit">
                    <p class="message">Already Registered?<a href="#"> Login </a></p>
                </form>

                <form class="login-form" action= "Authentication/signin.php" method="POST">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name = "password" placeholder="password">
                    <button name="login">Log in</button>
                    <p class="message"> <a href="forgotpassword.html">Forgot password?</a><p>
                    <p class="message">Not Registered?<a href="#"> Register</a></p>
                </form>
                               
            
            </div>
        </div>

        
        <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
        
        <script> $('.message a').click(function(){
                $('form').animate({height:"toggle", opacity:"toggle"}, "slow");
            });
        
        </script>
    </body>
</html>