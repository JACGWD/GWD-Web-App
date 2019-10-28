<?php
require_once  ($_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php");


# ######################################################################
#  HEAD TAGS FOR SEO + SOCIAL
# ######################################################################

// https://moz.com/learn/seo/canonicalization
$canonical = $baseFolder ."print-portfolio.php";


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
#  CUSTOMIZE HTML CONTENT ** ABOVE THE THUMBNAILS **
# ######################################################################

$raw_top_main_content = NULL;


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
#  CUSTOMIZE HTML CONTENT ** BELOW THE THUMBNAILS **
# ######################################################################

$raw_bottom_main_content = NULL;


# ######################################################################
#  ADD EXTRA CODE TO BE PLACED AT THE BOTTOM OF THE PAGE
# ######################################################################

$ExtraFooterCode = NULL;


# ######################################################################
#  CUSTOMIZE SIDEBAR CONTENT ** WITH HTML CONTENT **
# ######################################################################

$custom_sidebar = NULL;


# ######################################################################
#  VARIABLES REQUIRED BY THE THUMBNAILS TEMPLATE

# Each array defines one image thumbnail with multiple images resolutions, a link to a page and Alt text.
# Repeat one array for each image you need.
# Beware the last array must end with ), );
# ######################################################################

$thumbnails = array
  (
array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.png",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.png 400w",
		'thumb_image_1.5x' => "sample_600.png 600w",
		'thumb_image_2x' => "sample_800.png 800w",
		'thumb_image_3x' => "sample_1200.png 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/current-grads/billy-poppins/print-portfolio/sample.php"),


array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.png",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.png 400w",
		'thumb_image_1.5x' => "sample_600.png 600w",
		'thumb_image_2x' => "sample_800.png 800w",
		'thumb_image_3x' => "sample_1200.png 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/current-grads/billy-poppins/print-portfolio/sample.php"),

array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.png",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.png 400w",
		'thumb_image_1.5x' => "sample_600.png 600w",
		'thumb_image_2x' => "sample_800.png 800w",
		'thumb_image_3x' => "sample_1200.png 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/current-grads/billy-poppins/print-portfolio/sample.php"),

array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.png",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.png 400w",
		'thumb_image_1.5x' => "sample_600.png 600w",
		'thumb_image_2x' => "sample_800.png 800w",
		'thumb_image_3x' => "sample_1200.png 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/current-grads/billy-poppins/print-portfolio/sample.php"),
		);


# ######################################################################
#  CHOOSE TEMPLATE   ** THIS LINE MUST BE LAST **
# ######################################################################

require ($rootTemplates_folder."thumbnails.php");
?>
