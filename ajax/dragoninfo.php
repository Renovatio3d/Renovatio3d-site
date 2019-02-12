<?php

if (isset($_GET["info"])){
	switch ($_GET["info"]){
		case "info1":
		include "dragon1_info.php";
		break;
		case "info2":
		include "dragon2_info.php";
		break;
		default:
?>
<p> Doesn't exit.</p>
<?php
break;
	}
} 
?>
	
