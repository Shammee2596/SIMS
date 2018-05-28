<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-1.11.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../cssFile/changePassword.css">
</head>
<body>
 
<?php 
session_start();
     
$error = [
"old_password_error" => '',
"new_password_error" => '',
"confirm_password_error" => ''
];
 
$form_data = [
"old_password" => '',
"new_password" => '',
"confirm_password" => ''
];
 
if(!empty($_SESSION['error']))
{
    $error = $_SESSION['error'];
}
 
if(!empty($_SESSION['form_data']))
{
    $form_data = $_SESSION['form_data'];
}
 
?>
 <div class="container">
    <div class="col-lg-4"></div>
    <div class="col-lg-4" id="form">
        <h1 style="color: white;"><center>Change Password</center></h1>
        <form action="change-Password.php" method="post" onsubmit="return validate();" id="form_submission_ajax">
            <div class="form-controls">
                <div>
                    <label>Current password:</label><br>
                    <input type="password" name="old_password" id="old_password" placeholder="Enter Current Password" value="<?php echo $form_data['old_password']; ?>">
                </div>
                <div>
                     <p id="old_password_error" class="error"><?php echo $error['old_password_error']; ?></p>
                 </div>
                 <div>
                     <label>New Password:</label><br>
                     <input type="password" name="new_password" id="new_password" placeholder="Enter New Password" value="<?php echo $form_data['new_password']; ?>">
                 </div>
                 <div>
                     <p id="new_password_error" class="error"><?php echo $error['new_password_error']; ?></p>
                 </div>
                 <div>
                     <label>Confirm Password:</label><br>
                     <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" value="<?php echo $form_data['confirm_password']; ?>">
                 </div>
                 <div>
                     <p id="confirm_password_error" class="error"><?php echo $error['confirm_password_error']; ?></p>
                 </div>
                 <div>
                    <input type="hidden" name="user_id" id="user_id" value="1">
                    <input type="submit" name="submit" value="Submit">
                 </div>
            </div> 
        </form>
    </div>
         
 </div>

</body>
 
<script type="text/javascript">
function validate()
{
    var valid = true;
    var old_password = $('#old_password').val();
    var new_password = $('#new_password').val();
    var confirm_password = $('#confirm_password').val();
 
    if(old_password=='' || old_password==null)
    {
        valid=false;
        $('#old_password_error').html("* This field is required.");
    }
    else
    {
        $('#old_password_error').html("");  
    }
 
    if(new_password=='' || new_password==null)
    {
        valid=false;
        $('#new_password_error').html("* This field is required.");
    }
    else
    {
        $('#new_password_error').html("");
    }
 
    if(confirm_password=='' || confirm_password==null)
    {
        valid=false;
        $('#confirm_password_error').html("* This field is required.");
    }
    else
    {
        $('#confirm_password_error').html("");
    }
 
    if(new_password != '' && confirm_password != '')
    {
        if(new_password != confirm_password)
        {
            valid = false;
            $('#confirm_password_error').html("* Confirm password is same as new password.");
        }
 
        if(new_password == confirm_password)
        {
            $('#confirm_password_error').html("");          
        }
    }
 
    if(valid==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
</script>
</html>   
 
<?php 
$_SESSION['error'] = "";
$_SESSION['form_data'] = "";
?>