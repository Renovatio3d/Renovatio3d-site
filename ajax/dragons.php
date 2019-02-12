<?php

if (isset($_GET["dragon"])){
	switch ($_GET["dragon"]){
		case "image1":
		include "dragon-image1.html";
		break;
		case "image2":
		include "dragon-image2.html";
		break;
		case "image3":
		include "dragon-image3.html";
		break;
		case "image4":
		include "dragon-image4.html";
		break;
		case "image5":
		include "dragon-image5.html";
		break;
		case "image6":
		include "dragon-image6.html";
		break;
		case "image7":
		include "dragon-image7.html";
		break;
		case "image8":
		include "dragon-image8.html";
		break;
		case "image9":
		include "dragon-image9.html";
		break;
		case "image10":
		include "dragon-image10.html";
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
    
<?php include "dragon-image1.html"; ?>

    
    <?php
}
?>
	
