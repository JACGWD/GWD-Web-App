<?php
# ######################################################################
#  GWD Web App version 0.84 Beta
# #######################################################################
?>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/app/config.php";

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
#  VARIABLES REQUIRED BY THE HIGH RES PORTFOLIO IMAGE TEMPLATE
# ######################################################################

$default_highres_image = "sample_400.png";
// "logo-collage.png"
// File name of the default jpg, gif or png file (standard resolution)

$default_highres_width = "400";
$default_highres_height = "260";
// Default 1x size of the image in the web page layout

$highres_image_3x = "sample_1200.png 1200w";
$highres_image_2x = "sample_800.png 800w";
$highres_image_1_5x = "sample_600.png 600w";
$highres_image_1x = "sample_400.png 400w";


$highres_alt = NULL;
// ALT text for the image
// "Logo for fictional Montreal resto bar "Chez George", designed by GWD graduate Billy Poppins"

$highres_figcaption = NULL;
// Caption text to be added underneath the image.
// Similar to Alt Text, but in paragraph form

$custom_highres_sizes = NULL;
// Custom SRCSET sizes to be used on this page if the default doesn't work
// See config file for default


# ######################################################################
#  PAGINATION LINKS
# ######################################################################

$previous = NULL;
// Link to previous page

$next = NULL;
// Link to next page

// For example, if current page is "2.php"
// previous is "1.php" and next is "3.php"
// use absolute path: "//ca/ebook.php"


# ######################################################################
#  CUSTOMIZE SIDEBAR CONTENT ** WITH HTML CONTENT **
# ######################################################################

$custom_sidebar = NULL;


# ######################################################################
#  CHOOSE TEMPLATE   ** THIS LINE MUST BE LAST **
# ######################################################################

require ($abpath_templates_folder."portfolio-item.php");
?>
