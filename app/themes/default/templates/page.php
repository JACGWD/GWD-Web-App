<?php
# ######################################################################
#  GWD Web App version 0.84 Beta
# #######################################################################
?>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/app/config.php";

require($abpath_includes_folder. "header.php"); ?>

<h1><?php echo($h1); ?></h1>

<main<?php if (isset($MainClass)) {echo ' class="'. $MainClass .'"';} else {echo NULL;} ?>>
	<?php

	addslashes(require ($abpath_db_records.$mainContentFile));
	?>

</main>


<?php
$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {
	echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");}
	else
	require($abpath_includes_folder. "default-sidebar.php");


require($abpath_includes_folder. "footer.php");

?>
