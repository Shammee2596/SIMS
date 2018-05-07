<?php

    require 'PHPMailer-master/PHPMailerAutoload.php';

    $fromEmail = 'sumayashammee@gmail.com';
    $fromName = 'Demo contact form';

    $sendToEmail = 'sumayashammee@yahoo.com';
    $sendToName = 'Demo contact form';

    $subject = 'New message from contact form';

    // smtp credentials and server
    $smtpHost = 'smtp.domain.com';
    $smtpUsername = 'sumayashammee@gmail.com';
    $smtpPassword = 'fatimaFarhana1992';

    $fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

    $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
    $errorMessage = 'There was an error while submitting the form. Please try again later';

    //LET'S DO THE SENDING
    error_reporting(E_ALL & ~E_NOTICE);// if not debugging and don't need error reporting, turn this off by error_reporting(0);

    try
    {
    
        if(count($_POST) == 0) throw new \Exception('Form is empty');
        
        $emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
        $emailTextHtml .= "<table>";
    
        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) { // If the field exists in the $fields array, include it in the email
                $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
            }
        }
        $emailTextHtml .= "</table><hr>";
        $emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";
    
         $mail = new PHPMailer;
    
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($sendToEmail, $sendToName);
    
        $mail->addReplyTo($from);
        $mail->isHTML(true);
    
        $mail->Subject = $subject;
        $mail->Body    = $emailTextHtml;
        $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
    
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
    
        $mail->Host = gethostbyname($smtpHost);
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;//Whether to use SMTP authentication
    
        $mail->Username = $smtpHost;
        $mail->Password = $smtpPassword;
    
        if(!$mail->send()) {
            throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
         }
    
         $responseArray = array('type' => 'success', 'message' => $okMessage);
    }catch (\Exception $e){
        $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
    }

    // if requested by AJAX request return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        
        header('Content-Type: application/json');
        
        echo $encoded;
    }
    // else just display the message
    else {
        echo $responseArray['message'];
    }