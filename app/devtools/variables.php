<?php
# ######################################################################
#  GWD Web App version 0.85 Beta
# #######################################################################
?>
<!doctype html>
<html>
<head>
<title>Web App variables</title>
<style>
	p {font-family: monospace; margin: 0 0 0.5em 2em; font-size: 1.25em;}
	h2 {margin: 2em 0 0.5em 0; font-family: Helvetica, Arial, sans-serif;}
	body {width: 70%; margin: 0 auto; padding: 0 0 3em 0;}
	strong {color: #82043b;}
</style>
</head>

<body>

<?php
	require_once ($_SERVER["DOCUMENT_ROOT"])."/app/config.php";
	// $_SERVER["DOCUMENT_ROOT"] does not add the trailing slash, we add it here first
	// the PHP command $_SERVER["DOCUMENT_ROOT"] returns the server name, such as https://www.graphicandwebdesign.ca

	echo "<h2>Config</h2>";
	if ($SwitchRoot == True) {echo "<p><strong>\$SwitchRoot: </strong> True";} else {echo "<p><strong>\$SwitchRoot: </strong> False";} "</p>"."\r\n";


echo "<h2>Student &amp; Theme Names</h2>";
echo "<p><strong>\$theme: </strong>". $theme  . "</p>"."\r\n";
echo "<p><strong>\$student_name: </strong>". $student_name  . "</p>"."\r\n";
echo "<p><strong>\$student_folder_name: </strong>". $student_folder_name  . "</p>"."\r\n";
echo "<p><strong>\$default_header_title: </strong>". $default_header_title . "</p>"."\r\n";
echo "<p><strong>\$default_header_subtitle: </strong>".  $default_header_subtitle . "</p>"."\r\n";


echo "<h2>CSS &amp; Javascript</h2>";
if ($Enable_Normalize == True) {echo "<p><strong>\$Enable_Normalize: </strong> True";} else {echo "<p><strong>\$Enable_Normalize: </strong> False";} "</p>"."\r\n";

if ($Enable_ModernCSS_Reset == True) {echo "<p><strong>\$Enable_ModernCSS_Reset: </strong> True";} else {echo "<p><strong>\$Enable_ModernCSS_Reset: </strong> False";} "</p>"."\r\n";

if ($Enable_ModernCSS_Reset == FALSE AND $Enable_Normalize == FALSE) {echo "<p><strong>Simple CSS Reset: </strong> is Enabled";} else {echo "<p><strong>Simple CSS Reset: </strong> is Disabled";}"</p>"."\r\n";

if ($Enable_JQueryPlugins == True) {echo "<p><strong>\$Enable_JQueryPlugins: </strong> True";} else {echo "<p><strong>\$Enable_JQueryPlugins: </strong> False";} "</p>"."\r\n";
// if ($a > $b) {echo "a is greater than b"; } else {echo "a is NOT greater than b";}


echo "<h2>Absolute Paths (for includes or require)</h2>";
echo "<p><strong>\$abpath_templates_folder: </strong>". $abpath_templates_folder . "</p>"."\r\n";
echo "<p><strong>\$abpath_includes_folder: </strong>". $abpath_includes_folder . "</p>"."\r\n";
echo "<p><strong>\$abpath_db_records: </strong>". $abpath_db_records . "</p>"."\r\n";

echo "<h2>Relative Paths for Content Folders</h2>";
echo "<p><strong>\$baseFolder: </strong>". $baseFolder . "</p>"."\r\n";
echo "<p><strong>\$db_records_folder: </strong>". $db_records_folder . "</p>"."\r\n";
echo "<p><strong>\$img_folder: </strong>". $img_folder . "</p>"."\r\n";
echo "<p><strong>\$audio_folder: </strong>". $audio_folder . "</p>"."\r\n";
echo "<p><strong>\$img_folder: </strong>". $img_folder . "</p>"."\r\n";
echo "<p><strong>\$PDF_folder: </strong>". $PDF_folder . "</p>"."\r\n";
echo "<p><strong>\$social_folder: </strong>". $social_folder . "</p>"."\r\n";
echo "<p><strong>\$SWF_folder: </strong>". $SWF_folder . "</p>"."\r\n";
echo "<p><strong>\$video_folder: </strong>". $video_folder . "</p>"."\r\n";


echo "<h2>Student Paths</h2>";
echo "<p>(\$SwitchRoot does not affect these)</p>";
echo "<p><strong>\$current_grads_folder: </strong>". $current_grads_folder . "</p>"."\r\n";
echo "<p><strong>\$current_grads_and_student_name: </strong>". $current_grads_and_student_name . "</p>"."\r\n";

echo "<h2>Social Media / Current Page Paths</h2>";
echo "<p><strong>\$current_page_path: </strong>". $current_page_path . "</p>"."\r\n";

echo "<h2>Contact Form Paths</h2>";
echo "<p><strong>\$formurl: </strong>". $formurl . "</p>"."\r\n";
echo "<p><strong>\$thankyouurl: </strong>". $thankyouurl  . "</p>"."\r\n";
echo "<p><strong>\$errorurl: </strong>". $errorurl . "</p>"."\r\n";


echo "<h2>PHP Server Variables</h2>";
echo "<p><strong>SERVER[\"\$_SERVER['HTTP_HOST']\"]: </strong>". $_SERVER['HTTP_HOST'] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"DOCUMENT_ROOT\"]: </strong>". $_SERVER["DOCUMENT_ROOT"] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER['PHP_SELF']\"]: </strong>". $_SERVER['PHP_SELF'] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER['SERVER_NAME']\"]: </strong>". $_SERVER['SERVER_NAME'] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER['REQUEST_URI']\"]: </strong>". $_SERVER['REQUEST_URI'] . "</p>"."\r\n";


?>
</body>
</html>
