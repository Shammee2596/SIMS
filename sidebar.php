<!DOCTYPE html>
<html>
  <head  lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="cssFile/home.css">
   <!--  <link rel="stylesheet" type="text/css" href="cssFile/systeamAdmin1.css">
    <link rel="stylesheet" type="text/css" href="cssFile/AddStudent.css"> -->
    <link rel="stylesheet" type="text/css" href="admin.css">
  </head>

  <body>
    
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="topnav" id="myTopnav">
            <div class="col-lg-1">
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php"> <span class="glyphicon glyphicon-home" >Home</span></a>
                <a href="AddStudent.php">Add New Student</a>
                <a href="AddBM.php">Add Board Member</a>
                <a href="display.php">View Student Details</a>
              </div>
              <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
              </div>
            </div>

            <div class="col-lg-1">
                <p id="sims"><i>SIMS</i></p>
            </div>

            <div class="col-lg-2" >
              <!-- <div class="dropdown">
                <button class="dropbtn">Add 
                  <span class="caret"></span>
                </button>
                <div class="dropdown-content">
                  <a href="#">Add New Student</a>
                  <a href="#">Add Board Member</a>
                </div>
              </div>
              <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Dropdown
      <i class="caret"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3">
              <form class="navbar-form navbar-left" id="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-1">
              <form class="form-inline" action= "Authentication/logoutTest.php" method="POST">
                <div class="form-group" id="logout">
                  <button type="submit" class="btn btn-default" name="logout">
                    <span class="glyphicon glyphicon-log-out"></span> Logout 
                  </button>
                </div>
              </form>
            </div>

          </div>

        </div>
        Hellooooooooooooo
        <!-- <div class="panel panel-default" id="div2">
          <div  class="panel-body" style="background-color: gray">Hellllllllllllllllllllllll</div>  
          
        </div> 
      </div>
    </div>

 -->
   
  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "200px";
      document.getElementById("main").style.marginLeft = "200px";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
  }
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
  // $('#div1').contents().appendTo('#div2')   
  </script>
       
  </body>
</html> 
