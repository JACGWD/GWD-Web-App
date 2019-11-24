<?php
# ######################################################################
#  GWD Web App version 0.84 Beta
# ######################################################################
?>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/app/config.php";

require ($abpath_includes_folder. "header.php"); ?>


<h1><?php echo($h1); ?></h1>

<main<?php if (isset($MainClass)) {echo ' class="'. $MainClass .'"';} else {echo NULL;} ?>>


<figure class="multi highres<?php if (isset($multiHiResClass)) {echo ' '. $multiHiResClass;} else {echo NULL;} ?>">
<div class="images">
<?php foreach ( $multiHighRes as $hiResImageSetPart ) {

  echo "<img srcset=\"" .$img_folder. $hiResImageSetPart['multiHiRes_image_1x'].", ". "\r\n".
							   $img_folder. $hiResImageSetPart['multiHiRes_image_1.5x'].", ". "\r\n".
							   $img_folder. $hiResImageSetPart['multiHiRes_image_2x'].", ". "\r\n".
							   $img_folder. $hiResImageSetPart['multiHiRes_image_3x']. "\"". "\r\n\r\n".
							  'sizes="';
							  if (isset($hiResImageSetPart['multi_sizes'])) {echo " " . $hiResImageSetPart['multi_sizes'];} else {echo $defaultMultiSrcSetSizes;}
							  echo "\"". "\r\n\r\n";
							  echo
							   "src=\"" .$img_folder. $hiResImageSetPart['multiHiRes_image_default']. "\"".  "\r\n\r\n".
                 "width=" .$hiResImageSetPart['multiHiRes_highres_width']. "\"".  "\r\n\r\n".
                 "height=" .$hiResImageSetPart['multiHiRes_highres_height']. "\"".  "\r\n\r\n".
                 "alt=\"" .$hiResImageSetPart['multiHiRes_alt'] . "\"" . "/>"."\r\n";
echo "\r\n";
};
echo "</div>"."\r\n";
echo "<figcaption class=\"multihires-caption\">"."\r\n";


	echo "   " . $multi_highres_figcaption ."\r\n";

	echo "  </figcaption>"."\r\n";

    echo "</figure>"."\r\n";

    echo "\r\n";
?>

<div class="pagination">
	<?php if (isset($previous)) {echo '<a href="'. $previous.'">'.'Previous</a>';} else {echo NULL;} ?>


	<?php if (isset($next)) {echo '<a href="'. $next.'">'.'Next</a>';} else {echo NULL;} ?>
</div>

</main>

<?php
$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");} else require($abpath_includes_folder. "default-sidebar.php");

require($abpath_includes_folder. "footer.php");

?>
