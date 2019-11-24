<?php
# ######################################################################
#  GWD Web App version 0.84 Beta
# ######################################################################
?>
<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/app/config.php";
$redirectTo = "index.php";
// force users to go to home page instead of page we don't want them to see here

require ($abpath_templates_folder."redirect.php");

?>
