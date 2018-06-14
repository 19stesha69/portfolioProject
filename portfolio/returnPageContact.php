<!DOCTYPE HTML>

<!--
File Name: returnPageContact.php
Date: 5/15/18
Programmer: Stesha Norstrom
-->

<html>
    
<head>
    
<title>Stesha Norstrom | Web Design</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Stesha Norstrom">
    
<link href="https://fonts.googleapis.com/css?family=Tajawal:400,700" rel="stylesheet">   
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">  
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/navigation.css" rel="stylesheet" type="text/css">
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.1/less.min.js"></script>
    
    
</head>    
    
<body>

<main id="contactPageReturn">


<?php
    
    require 'connect.php';
    
    // ASSIGN DATA TO VARIABLES FOR EASIER HANDLING
    $users_name = $_POST['firstLastName'];
    $users_email = $_POST['email'];
    $users_phoneNumber = $_POST['phone'];
    $users_comments = $_POST['comments'];

    //escape vaiables for security
    $users_name = mysqli_real_escape_string($conn, $_POST['firstLastName']);
    $users_email = mysqli_real_escape_string($conn, $_POST['email']);
    $users_phoneNumber = mysqli_real_escape_string($conn, $_POST['phone']);
    $users_comments = mysqli_real_escape_string($conn, $_POST['comments']);
        
  // At this point, we've grabbed all of the data that we need. We now need
  // to update our SQL query. For example, instead of "John Smith", we'll
  // use $users_name. Below is our updated SQL command:
  $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `comments`) VALUES ('$users_name', '$users_email', '$users_phoneNumber', '$users_comments')";
    
  if ($conn->query($sql) === TRUE) {
      echo "<p>New record created successfully.</p>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }    
    
  $conn->close();    
    
    
    //Send Email
    date_default_timezone_set('America/Los_Angeles');
    //Load Composer's autoloader
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;                                //Create a new PHPMailer instance
    $mail->SMTPDebug = 0;                                 // Enable SMTP debugging
    $mail->isSMTP();                                      // Tell PHPMailer to use SMTP
    $mail->Debugoutput = 'html';                          //Ask for HTML-friendly debug output
    $mail->Host = 'mail.steshanorstrom.com';              // Set the hostname of the mail server
    $mail->SMTPAuth = true;                               // Whether to use SMTP authentication
    $mail->Username = 'phpmailer@steshanorstrom.com';     // Username to use for SMTP authentication
    $mail->Password = 'BBto29412g4e';                     // Password to use for SMTP authentication
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465;                                    //Set the SMTP port number - likely to be 25, 465, or 587
    
    //Recipients
    $mail->setFrom('phpmailer@steshanorstrom.com', 'Stesha');   //Set who the message is to be sent from
    $mail->addAddress('stesha.norstrom@pcc.edu', 'Stesha');     //Set who the message is to be sent to

    //Content
    $mail->Subject = 'Contact Information';                     //Set the subject line
    $mail->IsHTML(true);
    $mail->Body = 'Name: ' . $_POST['firstLastName'] . '<br>';
    $mail->Body .= 'Email: ' . $_POST['email'] . '<br>';
    $mail->Body .= 'Phone Number: ' . $_POST['phone'] . '<br>';
    $mail->Body .= 'Comments: ' . $_POST['comments'] . '<br>';

    
    //Send Message and Check for Errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "<p>Thank you for your interest. I will get in touch with you as soon as I'm able.</p><br><p><a href='http://steshanorstrom.com/portfolio/portfolioHomepage.php'>Return to home page</a></p>";
    }
    ?>
    
</main>
    
<?php include "includes/footer.php";?>
    
    <script src="scripts/jquery.js"></script>

</body>

</html>
    

   