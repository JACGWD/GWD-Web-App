<?PHP

$graduatingStudentFolderName = "john-smith";
$theme = "default";

$SwitchRoot = TRUE;

if ($SwitchRoot == FALSE) {

	$var1 = ($_SERVER["DOCUMENT_ROOT"] . "/app/themes/". $theme . "/templates/");}
else {
  $var1 = ($_SERVER["DOCUMENT_ROOT"] . "/current-grads/". $graduatingStudentFolderName ."/app/themes/". $theme . "/templates/");
}

$rootTemplates_folder = $var1;

echo $var1;
?>
