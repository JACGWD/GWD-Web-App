<?php
require_once ($_SERVER["DOCUMENT_ROOT"]."/app/config.php");

// ---- PATHS ------ //
$graduatingStudentFolderName = NULL;

// ----- HEAD TAGS FOR SEO + SOCIAL ---- //
$canonical = NULL;

// Old School SEO
$title = NULL;
$description = NULL;
$keywords = NULL;


// Schema.org
$itempropName = $title;
$itempropDescription = $description;
$itempropImageURL = NULL;

// Twitter Cards  metadata
$TwitterCardType = "summary";
$TwitterPageTitle = $title;
$TwitterPageDescription = $description;
$TwitterImageURL = NULL;

// Facebook OpenGraph metadata
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

$ExtraHeaderCode = NULL;



// ----- BODY HEADER ---- //
$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically
$customHeaderTitle = NULL;
$customHeaderSubtitle = NULL;

// ----- NAVIGATION ---- //
$Highlight_Menu_item = "about";


// ----- REST OF BODY ---- //
$h1 = NULL;
$BodyClass = NULL;
$MainClass = NULL;
$raw_custom_sidebar = NULL;


// $mainContentFile = HTML code that goes into the main tag
$mainContentFile = NULL;//

// ----- FOOTER ---- //
$ExtraFooterCode = NULL;

// ----- CHOOSE TEMPLATE ---- //
require ($rootTemplates_folder."page.php");
?>
