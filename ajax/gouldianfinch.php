<?php

if (isset($_GET["Gouldian"])){
	switch ($_GET["Gouldian"]){
		case "image1":
		include "finch-image1.html";
		break;
		case "image2":
		include "finch-image2.html";
		break;
		case "image3":
		include "finch-image3.html";
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
<?php include "finch-image1.html"; ?>
    
    <?php
}
?>
	
