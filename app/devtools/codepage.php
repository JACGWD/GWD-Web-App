<?php require_once ($abpath_includes_folder. "header.php"); ?>

<h1><?php echo($h1); ?></h1>

<main<?php if (isset($MainClass)) {echo ' class="'. $MainClass .'"';} else {echo NULL;} ?>>
	<?php

	$clean_main_content = addslashes($raw_main_content);
	$main_content = stripslashes($clean_main_content);

	echo($main_content); ?>

</main>


<?php
$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");} else require($abpath_includes_folder. "default-sidebar.php");

require($abpath_includes_folder. "footer.php");

?>
