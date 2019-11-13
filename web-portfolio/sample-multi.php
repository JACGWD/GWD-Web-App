<?php
require_once  ($_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php");

# ######################################################################
#  HEAD TAGS FOR SEO + SOCIAL
# ######################################################################

// https://moz.com/learn/seo/canonicalization
$canonical = NULL;


// Old School SEO
// https://support.google.com/webmasters/answer/7451184?hl=en#understand_your_content
$title = NULL;
$description = NULL;
$keywords = NULL;


// Schema.org
// https://www.searchenginejournal.com/schema-101-improve-seo-results/204858/
$itempropName = $title;
$itempropDescription = $description;
$itempropImageURL = NULL;


// Twitter Cards  metadata
// https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/abouts-cards
$TwitterCardType = "summary";
$TwitterPageTitle = $title;
$TwitterPageDescription = $description;
$TwitterImageURL = NULL;


// Facebook OpenGraph metadata
// https://ogp.me/
// https://neilpatel.com/blog/open-graph-meta-tags/
$OgTitle = $title;
$OgType = 'website';
$OgImage = NULL;
$OgDescription = $description;
$OgSiteName = "John Abbott College Graphic & Web Design department";
$OgSection = NULL;
$OgArticleTag0 = NULL;
$OgArticleTag1 = NULL;
$OgArticleTag2 = NULL;
$OgArticleTag3 = NULL;


# ######################################################################
#  EXTRA CODE TO BE ADDED TO THE <HEAD> OF THE PAGE
# ######################################################################

$ExtraHeaderCode = NULL;


# ######################################################################
#  ADD CLASSES TO BODY, HEADER & MAIN TAGS
# ######################################################################

$BodyClass = NULL;
$HeaderClass = NULL;
$MainClass = NULL;
// Add class names you want added to the <body/header/main> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically


# ######################################################################
#  CUSTOMIZE BRANDING TEXT IN HEADER
# ######################################################################

$customHeaderTitle = NULL;
$customHeaderSubtitle = NULL;


# ######################################################################
#  HIGHLIGHT NAVIGATION ITEM FOR CURRENT PAGE
# ######################################################################

$Highlight_Menu_item = NULL;


# ######################################################################
#  H1 TITLE AND ASIDE TAG
# ######################################################################

$h1 = NULL;
$raw_custom_sidebar = NULL;


# ######################################################################
#  ADD EXTRA CODE TO BE PLACED AT THE BOTTOM OF THE PAGE
# ######################################################################

$ExtraFooterCode = NULL;


# ######################################################################
#  VARIABLES REQUIRED BY THE MULTIPLE HIGH RES IMAGES PORTFOLIO  TEMPLATE
# ######################################################################

$HighResFigureClass = NULL;
// ex: "large"
// Class name to be added to <figure class="large">
// Multi image figure tag is already has class="multi highres" (two classes) by default

$multiHighRes = array
  (
array (
		'multiHiRes_image_default' => "sample_400.png",
		// Default is the same as 1x - but without the 400w.
		'multiHiRes_image_1x' => "sample_400.png 400w",
		'multiHiRes_image_1.5x' => "sample_600.png 600w",
		'multiHiRes_image_2x' => "sample_800.png 800w",
		'multiHiRes_image_3x' => "sample_1200.png 1200w",
		'multi_sizes' => NULL,
		// Leave NULL to use default values from config.php
  	'multiHiRes_alt' => "This is good alt text"),


array (
  'multiHiRes_image_default' => "sample_400.png",
  // Default is the same as 1x - but without the 400w.
  'multiHiRes_image_1x' => "sample_400.png 400w",
  'multiHiRes_image_1.5x' => "sample_600.png 600w",
  'multiHiRes_image_2x' => "sample_800.png 800w",
  'multiHiRes_image_3x' => "sample_1200.png 1200w",
  'multi_sizes' => NULL,
  // Leave NULL to use default values from config.php
  'multiHiRes_alt' => "This is good alt text"),
  );

$multi_highres_figcaption = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum accusantium recusandae officiis consequatur, consequuntur distinctio et inventore! Sit, impedit, perspiciatis dolor eveniet sed hic repellendus veritatis. Quia harum, fuga voluptas.";
// Caption text to be added underneath the image.
// Similar to Alt Text, but in paragraph form



# ######################################################################
#  PAGINATION LINKS
# ######################################################################

$previous = NULL;
// Link to previous page

$next = NULL;
// Link to next page

// For example, if current page is "2.php"
// previous is "1.php" and next is "3.php"
// use absolute path: "/current-grads/billy-poppins/ca/ebook.php"


# ######################################################################
#  CUSTOMIZE SIDEBAR CONTENT ** WITH HTML CONTENT **
# ######################################################################

$custom_sidebar = NULL;


# ######################################################################
#  CHOOSE TEMPLATE   ** THIS LINE MUST BE LAST **
# ######################################################################

require ($rootTemplates_folder."portfolio-multi-item.php");
?>
