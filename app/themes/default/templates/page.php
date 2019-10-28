<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php";

require($rootIncludes_folder. "header.php"); ?>

<h1><?php echo($h1); ?></h1>

<main<?php if (isset($MainClass)) {echo ' class="'. $MainClass .'"';} else {echo NULL;} ?>>
	<?php

	addslashes(require ($rootHTMLFolder.$mainContentFile));
	?>

</main>


<?php
$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {
	echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");}
	else
	require($rootIncludes_folder. "default-sidebar.php");


require($rootIncludes_folder. "footer.php");

?>
