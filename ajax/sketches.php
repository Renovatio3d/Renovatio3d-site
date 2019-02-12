<?php

if (isset($_GET["sketches"])){
	switch ($_GET["sketches"]){
		case "image1":
		include "sketch-image1.html";
		break;
		case "image2":
		include "sketch-image2.html";
		break;
		case "image3":
		include "sketch-image3.html";
		break;
		case "image4":
		include "sketch-image4.html";
		break;
		case "image5":
		include "sketch-image5.html";
		break;
		case "image6":
		include "sketch-image6.html";
		break;
		case "image7":
		include "sketch-image7.html";
		break;
		case "image8":
		include "sketch-image8.html";
		break;
		case "image9":
		include "sketch-image9.html";
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
<?php include "sketch-image1.html"; ?>
    
    <?php
}
?>
	
