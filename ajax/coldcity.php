<?php

if (isset($_GET["cold"])){
	switch ($_GET["cold"]){
		case "image1":
		include "city-image1.html";
		break;
		case "image2":
		include "city-image2.html";
		break;
		case "image3":
		include "city-image3.html";
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
<?php include "city-image1.html"; ?>
    
    <?php
}
?>
	
