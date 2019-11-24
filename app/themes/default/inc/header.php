<?php
# ######################################################################
#  GWD Web App version 0.84 Beta
# #######################################################################
?>
<!doctype html>
<html itemscope itemtype="http://schema.org/Article" lang="en" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js">

<head>
<meta charset="utf-8">

<?php
// Adds a canonical link tag if you have defined one
// Helps prevent duplicate content issues
// Link to the "primary version" of the web site content

if (isset($canonical)) {echo '<link rel="canonical" href="'. $canonical .'">' ."\r\n";} else {echo NULL;} '/>' ?>




<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo $keywords ?>">

<link rel="manifest" href="<?php echo $baseFolder ?>site.webmanifest">
<link rel="apple-touch-icon" href="<?php echo $baseFolder ?>icon.png">
<!-- Place favicon.ico in the root directory -->

<meta name="theme-color" content="#000000">
<?php // set the browser's toolbar color ?>


<?php if ($Enable_Normalize == TRUE) {
// Select your default CSS reset
// Either GWD's (based on Eric Meyer's 2.0) or Normalize or modern
// See VERSION-0.81-Beta.md for more details

echo '<link rel="stylesheet" href="'. $baseFolder . 'app/themes/'.$theme .'/css/normalize.css" media="all" />';
}
elseif ($Enable_ModernCSS_Reset == TRUE)
{echo '<link rel="stylesheet" href="' . $baseFolder . 'app/themes/'. $theme .'/css/modern-css-reset.css" media="all" />';}

else {
echo '<link rel="stylesheet" href="' . $baseFolder . 'app/themes/'. $theme .'/css/simple-css-reset.css" media="all" />';}
?>



<link rel="stylesheet" href="<?php echo $baseFolder ?>app/themes/<?php echo $theme ?>/css/style.css?v=2" media="all" />
<?php // load theme stylesheet ?>

<meta name="robots" content="noodp, noydir" />

<meta property="author" content="<?php echo $author ?>">


<?php
echo "\r\n" . "<!-- Google -->" ."\r\n";

if (isset($itempropName)) {echo '<meta itemprop="name" content="'. $itempropName .'">' ."\r\n";} else {echo NULL;}

if (isset($itempropDescription)) {echo '<meta itemprop="description" content="'. $itempropDescription .'">' ."\r\n";} else {echo NULL;}

if (isset($itempropImageURL)) {echo '<meta itemprop="image" content="' . $itempropImageURL .'">' ."\r\n";} else {echo NULL;}

echo "\r\n" . "<!-- Twitter -->" ."\r\n";

// echo '<meta name="twitter:site" content="@jacgwd">' ."\r\n";

if (isset($TwitterCardType)) {echo '<meta name="twitter:card" content="'. $TwitterCardType  .'"/>' ."\r\n";} else {echo '<meta name="twitter:card" content="summary" />'."\r\n";}

if ($TwitterCardType == "gallery") {echo
'<meta name="twitter:image0" content="'.$TwitterGalleryImage0.'">' ."\r\n".
'<meta name="twitter:image1" content="'.$TwitterGalleryImage1.'">' ."\r\n".
'<meta name="twitter:image2" content="'.$TwitterGalleryImage2.'">' ."\r\n".
'<meta name="twitter:image3" content="'.$TwitterGalleryImage3.'">' ."\r\n"
."\r\n";} else {echo NULL;}


if (isset( $TwitterPageTitle)) {echo '<meta name="twitter:title" content="' . $TwitterPageTitle  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($TwitterPageDescription)) {echo '<meta name="twitter:description" content="'. $TwitterPageDescription  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($TwitterHandle)) {echo '<meta name="twitter:creator" content="'. $TwitterHandle  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($TwitterImageURL)) {echo '<meta name="twitter:image:src" content="'. $TwitterImageURL  .'"/>' ."\r\n";} else {echo NULL;}

echo "\r\n". "<!-- Facebook / OpenGraph -->" ."\r\n";

echo '<meta property="og:locale" content="en_US" />' ."\r\n";

if (isset($FacebookPage)) {echo '<meta property="article:publisher" content="https://www.facebook.com/' .$FacebookPage .'"/>' ."\r\n";} else {echo NULL;}

if (isset($FacebookProfile)) {echo '<meta property="article:author" content="https://www.facebook.com/' .$FacebookProfile .'"/>' ."\r\n";} else {echo NULL;}

if (isset($FacebookID)) {echo '<meta property="fb:admins" content="'.$FacebookID.'">' ."\r\n";} else {echo NULL;}

if (isset($OgTitle)) {echo '<meta property="og:title" content="'. $OgTitle  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($OgType)) {echo '<meta property="og:type" content="'. $OgType  .'"/>' ."\r\n";} else {echo '<meta property="og:type" content="article" />'."\r\n";}

if (isset($OgURL)) {echo '<meta property="og:url" content="'. $OgURL  .'"/>' ."\r\n";} else {echo '<meta property="og:url" content="'. getCurrentUrl()  .'" />' ."\r\n";}

if (isset($OgImage)) {echo '<meta property="og:image" content="'. $OgImage  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($OgDescription)) {echo '<meta property="og:description" content="'. $OgDescription  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($OgSiteName)) {echo '<meta property="og:site_name" content="'. $OgSiteName  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($OgSection)) {echo '<meta property="article:section" content="'. $OgSection  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($OgArticleTag0)) {echo '<meta property="article:tag" content="'. $OgArticleTag0 .'"/>' ."\r\n";} else {echo NULL;}
if (isset($OgArticleTag1)) {echo '<meta property="article:tag" content="'. $OgArticleTag1  .'"/>' ."\r\n";} else {echo NULL;}
if (isset($OgArticleTag2)) {echo '<meta property="article:tag" content="'. $OgArticleTag2  .'"/>' ."\r\n";} else {echo NULL;}
if (isset($OgArticleTag3)) {echo '<meta property="article:tag" content="'. $OgArticleTag3  .'"/>' ."\r\n";} else {echo NULL;}

echo "\r\n". "<!-- Previous and Next links for pagination -->" ."\r\n";
if (isset($previous)) {echo '<link rel="prev" href="'. $previous  .'"/>' ."\r\n";} else {echo NULL;}
if (isset($next)) {echo '<link rel="next" href="'. $next  .'"/>' ."\r\n";} else {echo NULL;}

if (isset($ExtraHeaderCode)) {echo $ExtraHeaderCode ."\r\n";} else {echo NULL;}

?>
</head>

<body<?php if (isset($BodyClass)) {echo ' class="'. $BodyClass .'"';} else {echo NULL;} ?>>

<!--[if IE]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php require($abpath_includes_folder. "nav.php"); ?>

<header<?php if (isset($HeaderClass)) {echo ' class="'. $HeaderClass .'"';} else {echo NULL;} ?>>
<p class="headerTitle"><?php if (isset($customHeaderTitle)) {echo $customHeaderTitle;} else {echo $default_header_title;} ?></p>
<p class="headerSubtitle"><?php if (isset($customHeaderSubtitle)) {echo $customHeaderSubtitle;} else {echo $default_header_subtitle;} ?></p>
</header>
