<?php

if (isset($_GET["sorcerer"])){
	switch ($_GET["sorcerer"]){
		case "image1":
		include "sorcerer-image1.html";
		break;
		case "image2":
		include "sorcerer-image2.html";
		break;
		case "image3":
		include "sorcerer-image3.html";
		break;
		case "image4":
		include "sorcerer-image4.html";
		break;
		case "image5":
		include "sorcerer-image5.html";
		break;
		case "image6":
		include "sorcerer-image6.html";
		break;
		case "image7":
		include "sorcerer-image7.html";
		break;
		case "image8":
		include "sorcerer-image8.html";
		break;
		case "image9":
		include "sorcerer-image9.html";
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
<?php include "sorcerer-image1.html"; ?>
    
    <?php
}
?>
	
