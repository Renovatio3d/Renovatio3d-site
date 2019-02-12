<style type="text/css">
body,td,th {
	color: #303;
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #FFF;
}
</style>
<body bgcolor="#000000">
Thank you,for your interest in <strong>Phill Pratico Jr. Fine Jewelry Since 1952,</strong> your email will be answered very soon.
<?php

/*Email Varibles*/

$emailSubject = ' Pratico.com ';
$webMaster = ' info@pratico.com ';

/*Data Variable*/

$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<EOD
  
<br><hr><br>
*Subject: $subject <br>
*Name: $name <br>
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
<meta http-equiv="refresh" content="3; URL=http://philPraticoJewelry/aboutUs.html">
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
<div align ="center">Thank you,for your interest in Phill Pratico Jr. Fine Jewelry Since 1952, your email will be answered very soon.</div> 

  </body>
  </html>

EOD;
echo  "$theResults";
?>



