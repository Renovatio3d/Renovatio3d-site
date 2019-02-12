<?php

if (isset($_GET["store"])){
	switch ($_GET["store"]){
		case "image1":
		include "pratico-image1.html";
		break;
		case "image2":
		include "pratico-image2.html";
		break;
		case "image3":
		include "pratico-image3.html";
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
<?php include "pratico-image1.html"; ?>
<?php
}
?>
