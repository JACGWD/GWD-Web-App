
<!doctype html>
<html>
<head>
<title>Web App variables</title>
<style>p {font-family: monospace;}</style>
</head>

<body>

<?php
	require_once ($_SERVER["DOCUMENT_ROOT"])."/current-grads/billy-poppins/app/config.php";
	// $_SERVER["DOCUMENT_ROOT"] does not add the trailing slash, we add it here first
	// the PHP command $_SERVER["DOCUMENT_ROOT"] returns the server name, such as https://www.graphicandwebdesign.ca

echo "<h1>Student &amp; Theme Names</h1>";
echo "<p><strong>\$theme: </strong>". $theme  . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentName: </strong>". $graduatingStudentName  . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentFolderName: </strong>". $graduatingStudentFolderName  . "</p>"."\r\n";
echo "<p><strong>\$DefaultHeaderTitle: </strong>". $DefaultHeaderTitle . "</p>"."\r\n";
echo "<p><strong>\$DefaultHeaderSubtitle: </strong>".  $DefaultHeaderSubtitle . "</p>"."\r\n";


echo "<h1>CSS &amp; Javascript</h1>";
if ($Enable_Normalize == True) {echo "<p><strong>\$Enable_Normalize: </strong> True";} else {echo "<p><strong>\$Enable_Normalize: </strong> False";} "</p>"."\r\n";

if ($Enable_ModernCSS_Reset == True) {echo "<p><strong>\$Enable_ModernCSS_Reset: </strong> True";} else {echo "<p><strong>\$Enable_ModernCSS_Reset: </strong> False";} "</p>"."\r\n";

if ($Enable_ModernCSS_Reset == FALSE AND $Enable_Normalize == FALSE) {echo "<p><strong>Simple CSS Reset: </strong> is Enabled";} else {echo "<p><strong>Simple CSS Reset: </strong> is Disabled";}"</p>"."\r\n";

if ($Enable_JQueryPlugins == True) {echo "<p><strong>\$Enable_JQueryPlugins: </strong> True";} else {echo "<p><strong>\$Enable_JQueryPlugins: </strong> False";} "</p>"."\r\n";
// if ($a > $b) {echo "a is greater than b"; } else {echo "a is NOT greater than b";}

echo "<h1>Absolute Paths (for includes or require)</h1>";
echo "<p><strong>\$rootTemplates_folder: </strong>". $rootTemplates_folder . "</p>"."\r\n";
echo "<p><strong>\$rootIncludes_folder: </strong>". $rootIncludes_folder . "</p>"."\r\n";
echo "<p><strong>\$rootHTMLFolder: </strong>". $rootHTMLFolder . "</p>"."\r\n";
echo "<p><strong>\$rootImgFolder: </strong>". $rootImgFolder . "</p>"."\r\n";


echo "<h1>HTTP-relative Paths</h1>";
echo "<p><strong>\$baseFolder: </strong>". $baseFolder . "</p>"."\r\n";
echo "<p><strong>\$currentGradsFolder: </strong>". $currentGradsFolder . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentNamePortfolio: </strong>". $graduatingStudentNamePortfolio . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentNameHTMLFolder: </strong>". $graduatingStudentNameHTMLFolder . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentNameImgFolder: </strong>". $graduatingStudentNameImgFolder . "</p>"."\r\n";


echo "<h1>Contact Form Paths</h1>";
echo "<p><strong>\$formurl: </strong>". $formurl . "</p>"."\r\n";
echo "<p><strong>\$thankyouurl: </strong>". $thankyouurl  . "</p>"."\r\n";
echo "<p><strong>\$errorurl: </strong>". $errorurl . "</p>"."\r\n";


echo "<h1>PHP Server Variables</h1>";
echo "<p><strong>SERVER[\"\$_SERVER['HTTP_HOST']\"]: </strong>". $_SERVER['HTTP_HOST'] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"DOCUMENT_ROOT\"]: </strong>". $_SERVER["DOCUMENT_ROOT"] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER['PHP_SELF']\"]: </strong>". $_SERVER['PHP_SELF'] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER['SERVER_NAME']\"]: </strong>". $_SERVER['SERVER_NAME'] . "</p>"."\r\n";


?>
</body>
</html>
