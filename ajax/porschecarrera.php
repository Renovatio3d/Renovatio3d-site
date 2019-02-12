<?php

if (isset($_GET["porsche"])){
	switch ($_GET["porsche"]){
		case "image1":
		include "carrera-image1.html";
		break;
		case "image2":
		include "carrera-image2.html";
		break;
		case "image3":
		include "carrera-image3.html";
		break;
		case "image4":
		include "carrera-image4.html";
		break;
		case "image5":
		include "carrera-image5.html";
		break;
		case "image6":
		include "carrera-image6.html";
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
<?php include "carrera-image1.html"; ?>
    
    <?php
}
?>
	
