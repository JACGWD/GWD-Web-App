<?php
require_once  ($_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php");


# ######################################################################
#  DEFINE PATHS
# ######################################################################

// $graduatingStudentFolderName = NULL;
// This variable is deprecated and will be removed in future version


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

$Highlight_Menu_item = "contact";


# ######################################################################
#  H1 TITLE AND ASIDE TAG
# ######################################################################

$h1 = NULL;
$raw_custom_sidebar = NULL;


# ######################################################################
#  FETCH MAIN CONTENT FILE
# ######################################################################

$mainContentFile = "contact.html";


# ######################################################################
#  ADD EXTRA CODE TO BE PLACED AT THE BOTTOM OF THE PAGE
# ######################################################################

$ExtraFooterCode = NULL;


# ######################################################################
#  CUSTOMIZE SIDEBAR CONTENT ** WITH HTML CONTENT **
# ######################################################################

$raw_custom_sidebar = NULL;



# ######################################################################
#  CHOOSE TEMPLATE   ** THIS LINE MUST BE LAST **
# ######################################################################

require ($rootTemplates_folder."page.php");
?>
