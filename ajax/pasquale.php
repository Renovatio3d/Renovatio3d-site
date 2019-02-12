<?php

if (isset($_GET["pasquale"])){
	switch ($_GET["pasquale"]){
		case "image1":
		include "felice-image1.html";
		break;
		case "image2":
		include "felice-image2.html";
		break;
		case "image3":
		include "felice-image3.html";
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
<?php include "felice-image1.html"; ?>
<?php
}
?>
