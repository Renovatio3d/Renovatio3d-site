<?php

if (isset($_GET["webtrend"])){
	switch ($_GET["webtrend"]){
		case "image1":
		include "interactive-image1.html";
		break;
		case "image2":
		include "interactive-image2.html";
		break;
		case "image3":
		include "interactive-image3.html";
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
<?php include "interactive-image1.html"; ?>
    
    <?php
}
?>
	
