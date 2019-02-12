<?php

if (isset($_GET["renovatio"])){
	switch ($_GET["renovatio"]){
		case "image1":
		include "renovatio-image1.html";
		break;
		case "image2":
		include "renovatio-image2.html";
		break;
		case "image3":
		include "renovatio-image3.html";
		break;
		case "image4":
		include "renovatio-image4.html";
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
<?php include "renovatio-image1.html"; ?>
    
    <?php
}
?>
	
