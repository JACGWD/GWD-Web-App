<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/app/config.php");

# ######################################################################
#  DEFINE PATHS
# ######################################################################

// $graduatingStudentFolderName = NULL;
// This variable is deprecated and will be removed in future version


# ######################################################################
#  HEAD TAGS FOR SEO + SOCIAL
# ######################################################################

// https://moz.com/learn/seo/canonicalization
$canonical = $baseFolder ."comprehensive-assessment.php";;


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

$Highlight_Menu_item = "ca";


# ######################################################################
#  H1 TITLE AND ASIDE TAG
# ######################################################################

$h1 = "Comprehensive Assessment";
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

$thumbnails = array(
array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "advertising material",
'thumb_caption' => "Advertising Material",
'highres_link' => "/ca/advertising-material.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "advertising material 2",
'thumb_caption' => "Advertising Material 2",
'highres_link' => "/ca/advertising-material-2.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "advertising material 3",
'thumb_caption' => "Advertising Material 3",
'highres_link' => "/ca/advertising-material-3.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "animation",
'thumb_caption' => "Animation",
'highres_link' => "/ca/animation.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "before-and-after-retouching",
'thumb_caption' => "Before And After Retouching",
'highres_link' => "/ca/before-and-after-retouching.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "book chapter",
'thumb_caption' => "Book Chapter",
'highres_link' => "/ca/book-chapter.php"),


array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "brochure with complex alignments",
'thumb_caption' => "Brochure With Complex Alignments",
'highres_link' => "/ca/brochure-with-complex-alignments.php"),


array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "catalog",
'thumb_caption' => "Catalog",
'highres_link' => "/ca/catalog.php"),


array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "complete stationery set",
'thumb_caption' => "Complete Stationery Set",
'highres_link' => "/ca/complete-stationery-set.php"),


array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "This is good alt text",
'thumb_caption' => "creative-personal-web-site",
'highres_link' => "/ca/creative-personal-web-site.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "creative photography",
'thumb_caption' => "Creative Photography",
'highres_link' => "/ca/creative-photography.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "dust jacket",
'thumb_caption' => "Dust Jacket",
'highres_link' => "/ca/dust-jacket.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "ebook",
'thumb_caption' => "eBook",
'highres_link' => "/ca/ebook.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "facebook retail banner",
'thumb_caption' => "Facebook Retail Banner",
'highres_link' => "/ca/facebook-retail-banner.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Formatting a web page for optimized sharing",
'thumb_caption' => "Formatted Page For Sharing",
'highres_link' => "/ca/formatting-a-web-page-for-optimized-sharing.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "infographic",
'thumb_caption' => "Infographic",
'highres_link' => "/ca/infographic.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Logo Collage",
'thumb_caption' => "Logo Collage",
'highres_link' => "/ca/logo-collage.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Lookbook with Original Photography and Illustration",
'thumb_caption' => "Lookbook",
'highres_link' => "/ca/lookbook-with-original-photography-and-illustration.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Magazine Cover with Original Photography and or Illustration",
'thumb_caption' => "Magazine Cover",
'highres_link' => "/ca/magazine-cover-with-original-photography-and-or-illustration.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "magazine cover",
'thumb_caption' => "Magazine",
'highres_link' => "/ca/magazine.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Mockup Web Site Design",
'thumb_caption' => "Mockup Web Site Design",
'highres_link' => "/ca/mockup-web-site-design.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Newsletter",
'thumb_caption' => "Newsletter",
'highres_link' => "/ca/newsletter.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Packaging",
'thumb_caption' => "Packaging",
'highres_link' => "/ca/packaging.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Photo Retouching",
'thumb_caption' => "Photo Retouching",
'highres_link' => "/ca/photo-retouching.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Photo Retouching 2",
'thumb_caption' => "Photo Retouching 2",
'highres_link' => "/ca/photo-retouching-2.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Poster with Full Page Illustration Art",
'thumb_caption' => "Poster with Full Page Illustration Art",
'highres_link' => "/ca/poster-with-full-page-illustration-art.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Print Newsletter",
'thumb_caption' => "Print Newsletter",
'highres_link' => "/ca/print-newsletter.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Responsive Commercial Retail Website",
'thumb_caption' => "Responsive Commercial Retail Website",
'highres_link' => "/ca/responsive-commercial-retail-website.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Responsive Commercial Retail Website 2",
'thumb_caption' => "Responsive Commercial Retail Website 2",
'highres_link' => "/ca/responsive-commercial-retail-website-2.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Responsive Email",
'thumb_caption' => "Responsive Email",
'highres_link' => "/ca/responsive-email.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Web Form with Complex Alignments",
'thumb_caption' => "Web Form with Complex Alignments",
'highres_link' => "/ca/web-form-with-complex-alignments.php"),

array(
'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
'thumb_image_default' => "sample_400.png",
// Default is the same as 1x - but without the 400w.
'thumb_image_1x' => "sample_400.png 400w",
'thumb_image_1.5x' => "sample_600.png 600w",
'thumb_image_2x' => "sample_800.png 800w",
'thumb_image_3x' => "sample_1200.png 1200w",
'thumb_sizes' => NULL,
// Leave NULL to use default values from config.php
'thumb_custom_image_height' => NULL,
'thumb_custom_image_width' => NULL,
// the two values above are for the html attributes inside the img tag; leave blank for default from config file
'thumb_alt' => "Wordpress Front-end Design CSS",
'thumb_caption' => "Wordpress",
'highres_link' => "/ca/wordpress-front-end-design-css.php"),
);


# ######################################################################
#  CHOOSE TEMPLATE   ** THIS LINE MUST BE LAST **
# ######################################################################

require($abpath_templates_folder."thumbnails.php");
?>