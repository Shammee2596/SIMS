<?php 
session_start();
$username = $_SESSION['u_id'];
$valid = true;
$error = [];
$form_data = [];
 
if(!empty($_POST['old_password']))
{
    $old_password = $_POST['old_password'];
    $old_password_data = array("old_password" => $old_password);
    $form_data = array_merge($form_data, $old_password_data);
    $old_password_error = array("old_password_error" => "");
    $error = array_merge($error, $old_password_error);
}
else
{
    $valid = false;
    $old_password = "";
    $old_password_data = array("old_password" => $old_password);
    $form_data = array_merge($form_data, $old_password_data);
    $old_password_error = array("old_password_error" => "* Old password is required.");
    $error = array_merge($error, $old_password_error);
}
 
if(!empty($_POST['new_password']))
{
    $new_password = $_POST['new_password'];
    $new_password_data = array("new_password" => $new_password);
    $form_data = array_merge($form_data, $new_password_data);
    $new_password_error = array("new_password_error" => "");
    $error = array_merge($error, $new_password_error);
}
else
{
    $valid = false;
    $new_password = "";
    $new_password_data = array("new_password" => $new_password);
    $form_data = array_merge($form_data, $new_password_data);
    $new_password_error = array("new_password_error" => "* New password is required.");
    $error = array_merge($error, $new_password_error);
}
 
if(!empty($_POST['confirm_password']))
{
    $confirm_password = $_POST['confirm_password'];
    $confirm_password_data = array("confirm_password" => $confirm_password);
    $form_data = array_merge($form_data, $confirm_password_data);
    $confirm_password_error = array("confirm_password_error" => "");
    $error = array_merge($error, $confirm_password_error);
}
else
{
    $valid = false;
    $confirm_password = "";
    $confirm_password_data = array("confirm_password" => $confirm_password);
    $form_data = array_merge($form_data, $confirm_password_data);
    $confirm_password_error = array("confirm_password_error" => "* Confirm password is required.");
    $error = array_merge($error, $confirm_password_error);
}
 
if($new_password != '' && $confirm_password != '')
{
    if($new_password != $confirm_password)
    {
        $valid = false;
        $confirm_password_error = array("confirm_password_error" => "* Confirm password is same as new password.");
        $error = array_merge($error, $confirm_password_error);
    }
 
    if($new_password == $confirm_password)
    {
        $confirm_password_error = array("confirm_password_error" => "");
        $error = array_merge($error, $confirm_password_error);
    }
}
 
if($valid==true)
{
    include_once 'dbh.db.php';
    //mysqli_select_db($conn, $db_name);
    $check_data = "SELECT * FROM user WHERE username = '$username';";
    $check_query = mysqli_query($conn, $check_data);
    $numRows = mysqli_num_rows($check_query);
    $user_data = mysqli_fetch_assoc($check_query);
 
    if($numRows == 1)
    {
        $check_old_password =$user_data['email'];
        if($check_old_password)
        {
            //$new_password_encrypt = password_hash($new_password,PASSWORD_DEFAULT);
            $user_id = $user_data['username'];
            $sql = "UPDATE user SET email = '$new_password' WHERE username = '$username' ";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_affected_rows($conn);
            
            if($user_data['user_type']=='board_member'){
                $sql = "UPDATE board_member_information SET email = '$new_password' WHERE username = '$username' ";
                $query = mysqli_query($conn, $sql); 
            }else{
            if($row ==1)
            {
                echo "Your Email was successfully changed.";
                //die;
            }
            else{
                 echo "Your Email Could not be changed.";
            }
        }
        }
        else
        {
            echo "Opps, We can not find your data. Please try again.";
            die;
        }
    }
    else
    {
        echo "No database record matched with your data.";
        die;
    }
}
else
{
    $_SESSION['error'] = $error;
    $_SESSION['form_data'] = $form_data;
    header('Location:changePassword.php');
}
?>