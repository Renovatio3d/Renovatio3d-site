<style type="text/css">
body,td,th {
	color: #999;
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #FFF;
}
</style>
<body bgcolor="#000000">
<strong>Thank you,</strong> for your interest in Renovatio3d your email will be answered very soon.
<?php

/*Email Varibles*/

$emailSubject = ' renovatio3d ';
$webMaster = ' renovatio3d@gmail.com ';

/*Data Variable*/

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<EOD
  
<br><hr><br>
*Name: $name <br>
*Company: $company <br>
*Email: $email <br>
*Message: $message <br>
EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/*Result*/

$theResults = <<<EOD
<html>
<head>
<title>
<title>sent message</title>
<meta http-equiv="refresh" content="3; URL=http://renovatio3d.com/aboutUs.html">
<style type ="text/css">
<!--
body{
	 background-color:#FFFFFF;
	 font-family: Arial, Helvetica, sans-serif;
	 font-style: normal;
	 font-weight: normal;
	 line-height: normal;
	 color: #000;
	 font-size: 18px;
	 text-decoration: none;
	 padding-top: 300px;
	 margin-left: 400;
	 width: 300px;	 
}
-->
<style>
</head>
<div align ="center">Thank you for your interest in Renovatio3d.com Your email will be answered very soon</div> 

  </body>
  </html>

EOD;
echo  "$theResults";
?>



