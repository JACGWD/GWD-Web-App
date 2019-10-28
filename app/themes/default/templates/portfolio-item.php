<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php";

require ($rootIncludes_folder. "header.php"); ?>


<h1><?php echo($h1); ?></h1>

<main<?php if (isset($MainClass)) {echo ' class="'. $MainClass .'"';} else {echo NULL;} ?>>

<figure class="highres<?php if (isset($HighResFigureClass)) {echo ' '. $HighResFigureClass;} else {echo NULL;} ?>">

	<img srcset="<?php
	echo ($portfolioImgFolder.$highres_image_3x).", "."\r\n";
	echo ($portfolioImgFolder.$highres_image_2x).", "."\r\n";
	echo ($portfolioImgFolder.$highres_image_1_5x).", "."\r\n";
	echo ($portfolioImgFolder.$highres_image_1x)."\""."\r\n";

	echo (" src=\"".$portfolioImgFolder.$default_highres_image."\"");
	?>


    alt="<?php echo($highres_alt); ?>"
    sizes="<?php if (isset($custom_highres_sizes)) {echo $custom_highres_sizes;} else {echo $defaultSrcSetSizes;} ?>" itemtype="http://schema.org/ImageObject">

	<figcaption class="highres-caption">
	<?php
	$clean_highres_figcaption = addslashes($highres_figcaption);
	$custom_highres_figcaption = stripslashes($clean_highres_figcaption);

	echo($custom_highres_figcaption); ?>
	</figcaption>
</figure>

<div class="pagination">
	<?php if (isset($previous)) {echo '<a href="'. $previous.'">'.'Previous</a>';} else {echo NULL;} ?>


	<?php if (isset($next)) {echo '<a href="'. $next.'">'.'Next</a>';} else {echo NULL;} ?>
</div>

</main>

<?php
$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");} else require($rootIncludes_folder. "default-sidebar.php");

require($rootIncludes_folder. "footer.php");

?>
