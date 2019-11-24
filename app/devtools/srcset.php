<?php
require_once ($_SERVER['SERVER_NAME']."/app/config.php");

// Set Image Properties here
$default_highres_image = "al-sharif-al-hussein-bin-ali-mosque-sunrise-jordan-000032-447-2_600px";
// No JPG extension
$highres_alt ="Sunrise at the Al-Sharif Al Hussein Bin Ali Mosque in Aqaba, Jordan.";




$h1 = "srcset";
$custom_highres_sizes = NULL;

$string = $default_highres_image;
$pattern = '_600px';
$replacement = NULL;
$highres_image = str_replace($pattern, $replacement, $string);
// $customSize= (if (isset($custom_highres_sizes)) {echo $custom_highres_sizes;} else {echo $defaultSrcSetSizes;});

// $customSize = 	($custom_highres_sizes == true) ? $custom_highres_sizes:
//       			($defaultSrcSetSizes == true) ? $defaultSrcSetSizes:
//       			$defaultSrcSetSizes;

$customSize = 	($custom_highres_sizes == isset($custom_highres_sizes)) ? $custom_highres_sizes:
      			($defaultSrcSetSizes == true) ? $defaultSrcSetSizes:
     			$defaultSrcSetSizes;

$highres_image_3x = $highres_image."_1800px.jpg";
$highres_image_2x = $highres_image."_1200px.jpg";
$highres_image_1_5x = $highres_image."_900px.jpg";
$highres_image_1x = $highres_image."_600px.jpg";




// Unused Variables set here

$raw_main_content = NULL;
$raw_custom_sidebar = NULL;
$Highlight_Menu_item = NULL;
$TwitterCardType = NULL;
$title = NULL;
$description = NULL;
$keywords = NULL;


require($abpath_includes_folder. "header.php");

echo
"<main>".
"<h1>".$h1."</h1>"

."<pre><code>".


// echo
//  <img srcset="'.$highres_folder.$highres_image_3x.", "."\r\n",
//	 $highres_folder.$highres_image_2x.", "."\r\n",
//	 $highres_folder.$highres_image_1_5x.", "."\r\n",
//	 $highres_folder.$highres_image_1x."\""."\r\n",

//	 " src=\"".$highres_folder.$default_highres_image."\"",

//    " alt=\"".$highres_alt."\"" ." sizes=\"".$customSize."\"",
//    ' itemtype="http://schema.org/ImageObject">'//  ."\r\n",
//    ."\r\n"
//    ."\r\n";


// "&lt;img srcset=\"".$highres_folder.$highres_image_3x.", "."\r\n"
// 	 .$highres_folder.$highres_image_2x.", "."\r\n"
// 	 .$highres_folder.$highres_image_1_5x.", "."\r\n"
// 	 .$highres_folder.$highres_image_1x."\""."\r\n"
//
// 	 ." src=\"".$highres_folder.$default_highres_image."\""."\r\n"
//
//     ." alt=\"".$highres_alt."\"" ."\r\n"
//     ." sizes=\"".$customSize."\""."\r\n"
//     .' itemtype="http://schema.org/ImageObject"&gt;'
//     ."\r\n"
//     ."\r\n"
//     ."\r\n"
// ."</code></pre></main>";

"&lt;figure class=\"hires\"&gt;".
"&lt;img srcset=\"".$highres_folder.$highres_image_3x.", "."\r\n"
	 .$highres_folder.$highres_image_2x.", "."\r\n"
	 .$highres_folder.$highres_image_1_5x.", "."\r\n"
	 .$highres_folder.$highres_image_1x."\""."\r\n"

	 ." src=\"".$highres_folder.$default_highres_image."\""."\r\n"

    ." alt=\"".$highres_alt."\"" ."\r\n"
    ." sizes=\"".$customSize."\""."\r\n"
    .' itemtype="http://schema.org/ImageObject"&gt;'
."&lt;/figure&gt;"
."\r\n"
."\r\n"
."\r\n"
."</code></pre></main>";

$clean_custom_sidebar = addslashes($raw_custom_sidebar);
$custom_sidebar = stripslashes($clean_custom_sidebar);

if (isset($raw_custom_sidebar)) {echo ("<aside>"."\r\n".$custom_sidebar."\r\n"."</aside>"."\r\n"."\r\n");} else require($abpath_includes_folder. "default-sidebar.php");

require($abpath_includes_folder. "footer.php");

?>
