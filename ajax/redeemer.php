<?php

if (isset($_GET["christ"])){
	switch ($_GET["christ"]){
		case "image1":
		include "redeemer-image1.html";
		break;
		case "image2":
		include "redeemer-image2.html";
		break;
		case "image3":
		include "redeemer-image3.html";
		break;
		case "image4":
		include "redeemer-image4.html";
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
<?php include "redeemer-image1.html"; ?>
    
    <?php
}
?>
	
