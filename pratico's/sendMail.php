<?php 
$to = "nah@loreentertainment"; 
$subject = ($_POST['name']); 
$message = ($_POST['message']); 
$message .= "\n\n---------------------------\n"; 
$message .= "E-mail inviata da: " . $_POST['theName'] . " <" . $_POST['theEmail'] . " <" . $_POST['theMessage'] ." >\n"; 
$headers = "From: " . $_POST['theName'] . " <" . $_POST['theEmail'] . " <" . $_POST['theMessage'] .">\n"; 
if(@mail($to, $subject, $message, $headers)) 
{ 
echo "answer=ok"; 
} 
else 
{ 
echo "answer=error"; 
} 
?> 