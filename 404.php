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
$title = "Page Not Found";
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

$ExtraHeaderCode = '<style>
    html {
        color: #888;
        display: table;
        font-family: sans-serif;
        height: 100%;
        text-align: center;
        width: 100%;
    }

    body {
        display: table-cell;
        vertical-align: middle;
        margin: 2em auto;}

footer {text-align: left; margin-top: 4em;}

h1::before {
  background-image: url(//app/themes/default/css/style_images/shock.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  display: block;
  height: 200px;
  width: 200px;
  position: absolute;
  top: -22px;
  content: " ";
  left: calc(50% - 100px);
  margin-top: 50px;

  }

    h1 {
        color: #555;
        font-size: 2em;
        font-weight: 400;
  position: relative;
  overflow: visible;
  padding-top: 260px;
    }

    p {
        margin: 0 auto;
        width: 280px;
    }

    @media only screen and (min-width: 500px) {

        body, p {
            width: 95%;
        }

        h1 {
            font-size: 1.5em;
            margin: 0 0 2em 0;
        }

    }

</style>';


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

$h1 = "Page Not Found";
$raw_custom_sidebar = NULL;


# ######################################################################
#  FETCH MAIN CONTENT FILE
# ######################################################################

$mainContentFile = "404.html";


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

require ($abpath_templates_folder."page.php");
?>
