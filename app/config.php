<?php
#  --------  CONFIG FILE VERSION 8.31 Beta -------------------- #



# ######################################################################
#  IMPORTANT *** DELETE BEFORE GOING LIVE *** ON GWD.CA
# ######################################################################

error_reporting(E_ALL);
	ini_set('display_errors', 1);
	// DELETE ABOVE TWO LINES WHEN THE WEB SITE IS FINISHED
	// Also delete the no cache section at the bottom of .htaccess before uplaoding to gwd.ca


# ######################################################################
#   WILL THIS SITE BE USED IN A SUBFOLDER? (ex: /current-grads/yourname/)
# ######################################################################

$SwitchRoot = TRUE;
// Automatically adds /current-grads/ & $graduatingStudentFolderName to all paths
// Set to TRUE


# ######################################################################
#   START PERSONAL CONFIGURABLE SECTION
# ######################################################################

$graduatingStudentFolderName = "billy-poppins/";
// firstname-lastname (all lowercase), ** with trailing slash: john-smith/ **

$graduatingStudentName = "Billy Poppins";
// When we need to print your name on a page, such as in the footer

$author = $graduatingStudentName;
// Who is the author of this web site?
// Default is same name as $graduatingStudentName;


# ######################################################################
#   HEADER TYPOGRAPHY CONTENTS
# ######################################################################

$DefaultHeaderTitle = "Billy Poppins";
$DefaultHeaderSubtitle = "Montreal Graphic &amp; Web Designer";
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

$OgURL = getCurrentUrl();
// DO NOT EDIT

$OgSiteName = 'GWD '. date("Y") .' graduate eportfolio | Work by '. $graduatingStudentName;
// Do Not Edit
// $OgSiteName = 'GWD 2019 graduate eportfolio | Work by '. $graduatingStudentName;


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
#   SET THE BASE PATH  // DO NOT EDIT
# ######################################################################

if ($SwitchRoot) {$baseFolder = getCurrentServer() ."current-grads/" . $graduatingStudentFolderName;} else {
	$baseFolder = getCurrentServer();}


# ######################################################################
#   ABSOLUTE PATHS FOR ROOT-LEVEL INCLUDES & REQUIRES  // DO NOT EDIT
# ######################################################################

if ($SwitchRoot) {$rootTemplates_folder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."app/themes/". $theme . "/templates/";} else {
	$rootTemplates_folder = $_SERVER["DOCUMENT_ROOT"] ."/app/themes/". $theme . "/templates/";}


if ($SwitchRoot) {$rootIncludes_folder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."app/themes/". $theme . "/inc/";} else {
$rootIncludes_folder = $_SERVER["DOCUMENT_ROOT"] ."/app/themes/". $theme . "/inc/";}


# ######################################################################
#   ABSOLUTE PATHS FOR ROOT-LEVEL CONTENT FOLDERS  // DO NOT EDIT
# ######################################################################

if ($SwitchRoot) {$rootAudioFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/audio/";} else {
	$rootAudioFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/audio/";}

if ($SwitchRoot) {$rootHTMLFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/db-records/";} else {
$rootHTMLFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/db-records/";}

if ($SwitchRoot) {$rootImgFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/img/";} else {
	$rootImgFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/img/";}

if ($SwitchRoot) {$rootPDFFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/pdf/";} else {
	$rootPDFFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/pdf/";}

if ($SwitchRoot) {$rootSocialFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/social/";} else {
$rootSocialFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/social/";}

if ($SwitchRoot) {$rootSWFFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/swf/";} else {
$rootSWFFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/swf/";}

if ($SwitchRoot) {$rootVideoFolder = $_SERVER["DOCUMENT_ROOT"] ."/current-grads/" . $graduatingStudentFolderName ."content/video/";} else {
$rootVideoFolder = $_SERVER["DOCUMENT_ROOT"] ."/content/video/";}


# ######################################################################
#   RELATIVE PATHS FOR HTML PATHS  // DO NOT EDIT
# ######################################################################

if ($SwitchRoot) {$portfolioImgFolder = getCurrentServer() ."current-grads/" . $graduatingStudentFolderName ."content/img/";} else {$portfolioImgFolder = getCurrentServer() ."content/img/";}

// Include / Require paths cannot use http: ie getCurrentServer();
// $_SERVER["DOCUMENT_ROOT"] does not add the trailing slash, we add it here first
// the PHP command $_SERVER["DOCUMENT_ROOT"] returns the server path to the document root

// $portfolioImgFolder = getCurrentServer() . "content/img/";

$currentGradsFolder = $baseFolder . "current-grads/";
// $currentGradsFolder = $_SERVER["DOCUMENT_ROOT"]."/current-grads/";

$graduatingStudentNamePortfolio = $currentGradsFolder . $graduatingStudentFolderName;
$graduatingStudentNameHTMLFolder = $graduatingStudentNamePortfolio ."content/db-records/";
$graduatingStudentNameImgFolder = $graduatingStudentNamePortfolio ."content/img/";

// CONSTANT FORM VALUES
$formAction = $baseFolder . "contact/sendmail.php";
$formurl = $baseFolder . "contact.php" ;
$thankyouurl = $baseFolder . "contact/thank-you.php" ;
$errorurl = $baseFolder . "contact/error.php" ;


# ######################################################################
#   SWITCH AUTOMATICALLY BETWEEN LOCALHOST AND LIVE SERVER NAMES AND PORTS  // DO NOT EDIT
# ######################################################################

/**
     * Get the current URL taking into account https and port number
     * @link http://css-tricks.com/snippets/php/get-current-page-url/
     * @version Refactored by @AlexParraSilva
*/
    function getCurrentUrl() {
        $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
        $url .= '://' . $_SERVER['SERVER_NAME'];
        $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
        $url .= $_SERVER['REQUEST_URI'];
        return $url;
    }


function getCurrentServer() {
			if(isset($_SERVER['HTTPS']))
			{$http_type = 'https://' . $_SERVER['HTTP_HOST'] . "/";}
			{$http_type = 'http://'. $_SERVER['HTTP_HOST'] . "/";}
			return $http_type
			;}

	$CurrentServer = getCurrentServer();
?>
