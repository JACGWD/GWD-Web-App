<?php

require_once  ($_SERVER["DOCUMENT_ROOT"]."/current-grads/billy-poppins/app/config.php");
$redirectTo = "index.php";
// force users to go to home page instead of page we don't want them to see here

require ($rootTemplates_folder."redirect.php");

?>
