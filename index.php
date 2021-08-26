<?php

    if(isset($_POST['submit'])){
        $receiver_address = $_POST['receiver_address'];
        $subject = "HTML email along with pdf";

        $message = '
        <html>
            <strong><div>Mit freundlichen Gr&uuml;&szlig;en,</div></strong>
            <div>&nbsp;</div>
            <div>Hatice Seckin</div>
            <div>Executive Director</div>
            <div>&nbsp;</div>
            <div><img id="m_67792678833068841298d911947-06f8-477e-b91c-213d4cc183b7" class="CToWUd" src="https://numerologie24.com/mailer/unnamed.jpeg" alt="" data-image-whitelisted="" /></div>
            <div><strong><span>Hati &amp; Friends UG</span></strong></div>
            <div>Plantagenstr. 21</div>
            <div>12169 Berlin</div>
            <div>&nbsp;</div>
            <div>Telefon: +49 176 20874023</div>
            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +49 30 98571955</div>
            <div>&nbsp;</div>
            <div><a href="mailto:info@hatiandfriends.de" target="_blank">info@hatiandfriends.de</a></div>
            <div><a href="http://hatiandfriends.de/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://hatiandfriends.de&amp;source=gmail&amp;ust=1630049651147000&amp;usg=AFQjCNFF9sEInfM6zUszXJ5dGL5HoTrXSw">hatiandfriends.de</a></div>
        </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "Content-Type: application/pdf";
        $headers .= "Content-Disposition: attachment";
        $headers .= "Content-Transfer-Encoding: base64";
        $headers .= 'From: <taimoormughal304@gmail.com>' . "\r\n";
        $headers .= 'Cc: taimoormughal304@gmail.com' . "\r\n";

        if(mail($receiver_address,$subject,$message,$headers)){
            echo "mail Send successfully!";
        }else{
            echo "mail not sent!";
        }
        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");

            
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Send Email</h1>
  
</div>
  
<div class="container">
    <form action="index.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label>Receiver Email Address</label>
                <input type="email" class="form-control" name="receiver_address" required>
            </div>
            <div class="col-sm-4">
                <label>Pdf File</label>
                <input type="file" class="form-control" name="file">
                <br>
                <button type="submit" name="submit" class="btn btn-success">Send Email</button>

            </div>
        </div>
    </form> 
</div>

</body>
</html>
