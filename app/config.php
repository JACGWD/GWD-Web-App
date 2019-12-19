<?php

# ######################################################################
#  GWD Web App version 0.84 Beta
# ######################################################################




# ######################################################################
#  IMPORTANT *** DELETE BEFORE GOING LIVE *** ON GWD.CA
# ######################################################################

error_reporting(E_ALL);
	ini_set('display_errors', 1);
	// DELETE ABOVE TWO LINES WHEN THE WEB SITE IS FINISHED
	// **** Also delete the no cache section at the bottom of .htaccess before uplaoding to gwd.ca  **** //


# ######################################################################
#   WILL THIS SITE BE USED IN A SUBFOLDER? (ex: /current-grads/yourname/)
# ######################################################################

$SwitchRoot = FALSE;
// Automatically adds /current-grads/ & studentlastname-studentfirstname/ to all paths
// Set to FALSE for building the site at root LEVEL
// Set to TRUE for building the site at the /current-grads/student-name/ level


# ######################################################################
#   START PERSONAL CONFIGURABLE SECTION
# ######################################################################

$student_folder_name = "billy-poppins/";
// firstname-lastname (all lowercase), ** with trailing slash: john-smith/ **

$student_name = "Billy Poppins";
// When we need to print your name on a page, such as in the footer

$author = $student_name;
// Who is the author of this web site?
// Default is same name as $student_name;


# ######################################################################
#   HEADER TYPOGRAPHY CONTENTS
# ######################################################################

$default_header_title = "Billy Poppins";
$default_header_subtitle = "Montreal Graphic &amp; Web Designer";
// Set the DEFAULT subtitle text inside the <header> tag. You can customize per page on each page.
// Set the DEFAULT text inside the <header> tag to your name. You can customize per page on each page. Add text inside quotation marks.


# ######################################################################
#   EMAIL FORM  SECTION
# ######################################################################

$mailto = 'billy.poppins@johnabbottcollege.net' ;
// Your email address

$subject = "Comment from eportfolio Visitor" ;
// Title of the email you will receive


# ######################################################################
#   STUDENT SOCIAL MEDIA ACCOUNTS & SEO INFO
# ######################################################################

// Social Media Profiles and Pages

$FacebookProfile = NULL;
// Add the username of your personal Facebook profile
// ie janesmith3

$FacebookID = NULL;
// Add the ID number of your personal Facebook account
// Use: http://findmyfacebookid.com/

$FacebookPage = NULL;
// Add the title of your Facebook PAGE
// ie fancypantsmedia

$TwitterHandle = NULL;
// Add your Twitter name
// ie @jacgwd

$OgURL = get_act_url();
// DO NOT EDIT

$OgSiteName = 'GWD '. date("Y") .' graduate eportfolio | Work by '. $student_name;
// Do Not Edit
// $OgSiteName = 'GWD 2019 graduate eportfolio | Work by '. $student_name;


# ######################################################################
#   CSS STYLESHEETS
# ######################################################################

//$theme = "default";
$theme = "default";
// Set the folder name of your theme from app/theme/. Call it whatever you like.
// set your student folder & name above

$Enable_Normalize = FALSE;
$Enable_ModernCSS_Reset = TRUE;
	// By default, we use my simple-css-reset.css when both alternative resets are FALSE
	// (based on Eric Meyer's reset v2.0: https://meyerweb.com/eric/tools/css/reset/).

	// If you want to use Nicolas Gallagher's normalize.css (an industry standard, but less beginner-friendly) set the $Enable_Normalize variable to TRUE.
	// http://nicolasgallagher.com/about-normalize-css/

	// If you want to use Andy Bell's ("Hank Chizljaw") modern-css-reset.css (more experimental, but very useful) set the $Enable_ModernCSS_Reset variable to TRUE.
	// https://hankchizljaw.com/wrote/a-modern-css-reset/


# ######################################################################
#   USING JQUERY PLUGINS?
# ######################################################################

$Enable_JQueryPlugins = FALSE;
// If using JQuery plugins set to TRUE
// Add JQuery plugin code to /app/themes/{your theme name}/js/plugins.js


# ######################################################################
#   RESPONSIVE IMAGES
# ######################################################################

$defaultSrcSetSizes = "(max-width: 48em) 100vw, (min-width: 48.00001em) 45vw, (min-width: 64em) 30vw";
// Set the DEFAULT size of your THUMBNAILS here.
// Smaller than 48em = 768px == full screen images (single column)
// Wider than 48em = 768px == half-width screen images (dual column)
// Wider than 64em = 1024px == third-width screen images (three columns)
// 23.4375em = 375px
// 48em = 768px
// 64em = 1024px
// 90em = 1440px
// 100em == 1600px
// 120em == 1920px
// 160em == 2560px
// The srcset sizes attribute uses media queries and "vm" units (percentages of the width of the viewport, ie entire screen).
// Adjust values according to your mockup.

# Set the DEFAULT size of your HIGH RES images here.
$custom_highres_sizes = "(max-width: 48em) 100vw, (min-width: 64em) 80vw, (min-width: 90em) 70vw, (min-width: 120em) 60vw";

# Set the DEFAULT size of your MULTIPLE HIGH RES IMAGES ON ONE PAGE here.
$defaultMultiSrcSetSizes = "(max-width: 48em) 100vw, (min-width: 64em) 40vw, (min-width: 90em) 35vw, (min-width: 120em) 30vw";


# ######################################################################
#   SWITCH AUTOMATICALLY BETWEEN LOCALHOST AND LIVE SERVER NAMES AND PORTS  // DO NOT EDIT
# ######################################################################

/**
     * Get the current URL taking into account https and port number
     * @link http://css-tricks.com/snippets/php/get-current-page-url/
     * @version Refactored by Peter
*/
function get_act_url() {
		    $act_url  = ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ) ? 'https' : 'http';
		    $act_url .= '://' . $_SERVER['SERVER_NAME'];
		    $act_url .= in_array( $_SERVER['SERVER_PORT'], array( '80', '443' ) ) ? '' : ":" . $_SERVER['SERVER_PORT'];
		    return $act_url;
}


# ######################################################################
#   SET THE BASE PATH  // DO NOT EDIT
# ######################################################################

if ($SwitchRoot) {$baseFolder = get_act_url() ."/current-grads/" . $student_folder_name;} else {
	$baseFolder = get_act_url()."/";}


# ######################################################################
#   ABSOLUTE PATHS FOR ROOT-LEVEL INCLUDES & REQUIRES  // DO NOT EDIT
# ######################################################################

if ($SwitchRoot) {$abpath_templates_folder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $student_folder_name ."app/themes/". $theme . "/templates/";} else {
	$abpath_templates_folder = $_SERVER["DOCUMENT_ROOT"] ."/app/themes/". $theme . "/templates/";}


if ($SwitchRoot) {$abpath_includes_folder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $student_folder_name ."app/themes/". $theme . "/inc/";} else {
$abpath_includes_folder = $_SERVER["DOCUMENT_ROOT"] ."/app/themes/". $theme . "/inc/";}


if ($SwitchRoot) {$abpath_db_records = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $student_folder_name ."content/db-records/";} else {
$abpath_db_records = $_SERVER["DOCUMENT_ROOT"] . "/content/db-records/";}

// Include / Require paths cannot use relative paths: ie $baseFolder or getCurrentServer();
// $_SERVER["DOCUMENT_ROOT"] returns an absolute path

// $_SERVER["DOCUMENT_ROOT"] does not automatically add the trailing slash, so we add it here first


# ######################################################################
#   RELATIVE PATHS FOR CONTENT FOLDERS  // DO NOT EDIT
# ######################################################################

$audio_folder = $baseFolder ."content/audio/";
$db_records_folder = $baseFolder ."content/db-records/";
$img_folder = $baseFolder ."content/img/";
$PDF_folder = $baseFolder ."content/pdf/";
$social_folder = $baseFolder ."content/social/";
$SWF_folder = $baseFolder ."content/swf/";
$video_folder = $baseFolder ."content/video/";


$current_grads_folder = get_act_url()."current-grads/";
$current_grads_and_student_name = $current_grads_folder . $student_folder_name;


// CONSTANT FORM VALUES
$formAction = $baseFolder . "contact/sendmail.php";
$formurl = $baseFolder . "contact.php" ;
$thankyouurl = $baseFolder . "contact/thank-you.php" ;
$errorurl = $baseFolder . "contact/error.php" ;

?>
