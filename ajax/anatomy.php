<?php

if (isset($_GET["anatomy"])){
	switch ($_GET["anatomy"]){
		case "image1":
		include "female-image1.html";
		break;
		case "image2":
		include "female-image2.html";
		break;
		case "image3":
		include "female-image3.html";
		break;
		case "image4":
		include "female-image4.html";
		break;
		case "image5":
		include "female-image5.html";
		break;
		case "image6":
		include "female-image6.html";
		break;
		case "image7":
		include "female-image7.html";
		break;
		case "image8":
		include "female-image8.html";
		break;
		
		default:
?>
<p>Doesn't exit.</p>
<?php
break;
	}
} else{
	?>
<p>Click a image thumbnail to view.</p>
<?php include "female-image1.html"; ?>
<?php
}
?>
