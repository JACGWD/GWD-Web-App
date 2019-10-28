<?php require_once $_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php";



require ($rootIncludes_folder. "header.php"); ?>

<h1><?php echo($h1); ?></h1>

<main<?php if (isset($MainClass)) {echo ' class="'. $MainClass .'"';} else {echo NULL;} ?>>

<?php

$clean_top_main_content = addslashes($raw_top_main_content);
$top_main_content = stripslashes($clean_top_main_content);

echo($top_main_content);


foreach ( $thumbnails as $single_thumb ) {

    echo '<figure class="thumbnail';

	if (isset($ThumbFigureClass)) {echo " ". $ThumbFigureClass;} else {echo NULL;};

	if (isset($single_thumb['thumb_css_class'])) {echo " " . $single_thumb['thumb_css_class'];} else {echo NULL;};

	echo '">'."\r\n";

    echo "  <a href=\"".$single_thumb['highres_link']."\">"."\r\n";

    echo "     <img srcset=\"" .$portfolioImgFolder. $single_thumb['thumb_image_1x'].", ". "\r\n".
							   $portfolioImgFolder. $single_thumb['thumb_image_1.5x'].", ". "\r\n".
							   $portfolioImgFolder. $single_thumb['thumb_image_2x'].", ". "\r\n".
							   $portfolioImgFolder. $single_thumb['thumb_image_3x']. "\"". "\r\n".
							  'sizes="';
							  if (isset($single_thumb['thumb_sizes'])) {echo " " . $single_thumb['thumb_sizes'];} else {echo $defaultSrcSetSizes;}
							  echo "\"". "\r\n";
							  echo
							   "src=\"" .$portfolioImgFolder. $single_thumb['thumb_image_default']. "\"".  "\r\n". "
							   alt=\"" .$single_thumb['thumb_alt'] . "\"" . ">"."\r\n";

    echo "  </a>"."\r\n"."\r\n";

    echo "  <figcaption class=\"thumb-caption\">"."\r\n";

    echo "  <a href=\"" . $single_thumb['highres_link'] . "\">"."\r\n";

	echo "   " . $single_thumb['thumb_caption'] . "</a>"."\r\n";

	echo "  </figcaption>"."\r\n";

    echo "</figure>"."\r\n";

    echo "\r\n";

}

   $clean_bottom_main_content = addslashes($raw_bottom_main_content);
   $bottom_main_content = stripslashes($clean_bottom_main_content);

   echo($bottom_main_content);

?>

</main>

<?php
$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");} else require($rootIncludes_folder. "default-sidebar.php");

require($rootIncludes_folder. "footer.php");
?>
