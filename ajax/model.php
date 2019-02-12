<?php

if (isset($_GET["trollmodel"])){
	switch ($_GET["trollmodel"]){
		case "image1":
		include "troll-image1.html";
		break;
		case "image2":
		include "troll-image2.html";
		break;
		case "image3":
		include "troll-image3.html";
		break;
		case "image4":
		include "troll-image4.html";
		break;
		case "image5":
		include "troll-image5.html";
		break;
		case "image6":
		include "troll-image6.html";
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
<?php include "troll-image1.html"; ?>
    
    <?php
}
?>
	
