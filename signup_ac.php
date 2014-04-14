<?php
include('config.php');
include('headerfooter.php');
// table name 
$tbl_name=temp_members_db;

// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$handle=$_POST['handle'];
$dob=$_POST['dob'];

// Insert data into database

$sql="INSERT INTO $tbl_name(confirm_code, name, email, password, handle, dob) VALUES ('$confirm_code', '$name', '$email', '$password', '$handle', '$dob')";
$result=mysqli_query($conn,$sql);

// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Your confirmation link here";

// From
$headers = 'From: gauravmittal1995@yahoo.com' . "\r\n" .
	    'Reply-To: gauravmittal1995@yahoo.com' . "\r\n" .
	        'X-Mailer: PHP/' . phpversion();

// Your message
$message="http://localhost/ChatWithMe/confirmation.php?passkey=$confirm_code";
$message = wordwrap($message, 70, "\r\n");


// send email
$sentmail = mail($to, $subject, $message, $headers);
}

// if not found 
else {
echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
echo "<div class='container'>Your Confirmation link Has Been Sent To Your Email Address. On clicking the confirmation link you will be directed to a profile contructor page. Fill in the details to set up your profile.</div>";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
?>
