<!DOCTYPE html>
<html>
<head>
    <title>Change password in php</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                 <h1><center>Edit Email</center></h1>
                <form action="edit-email.php" method="post" onsubmit="return validate();" id="form_submission_ajax">
                <table class="form-table">
             
                    <tr>
                        <td><label>Current Email *</label></td>
                        <td><input type="email" name="old_password" id="old_password" placeholder="Current Email" value="<?php echo $form_data['old_password']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="old_password_error" class="error"><?php echo $error['old_password_error']; ?></td>
                    </tr>
         
                    <tr>
                        <td><label>New Email:</label></td>
                        <td><input type="email" name="new_password" id="new_password" placeholder="New Email" value="<?php echo $form_data['new_password']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="new_password_error" class="error"><?php echo $error['new_password_error']; ?></td>
                    </tr>
         
                    <tr>
                        <td><label>Confirm Email</label></td>
                        <td><input type="email" name="confirm_password" id="confirm_password" placeholder="Re-Enter Email" value="<?php echo $form_data['confirm_password']; ?>"></td>
                    </tr>
         
                    <tr>
                        <td></td>
                        <td id="confirm_password_error" class="error"><?php echo $error['confirm_password_error']; ?></td>
                    </tr>
         
                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="user_id" id="user_id" value="1">
                            <input type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
            </div>
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