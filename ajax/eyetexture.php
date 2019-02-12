<?php

if (isset($_GET["eye"])){
	switch ($_GET["eye"]){
		case "image1":
		include "eye-image1.html";
		break;
		case "image2":
		include "eye-image2.html";
		break;
		case "image3":
		include "eye-image3.html";
		break;
		case "image4":
		include "eye-image4.html";
		break;
		case "image5":
		include "eye-image5.html";
		break;

		default:
?>
<p> Doesn't exit.</p>
<?php
break;
	}
} else{
	?>
    <p> Click a image thumbnail to view.</p>
<?php include "eye-image1.html"; ?>
    
    <?php
}
?>
	
