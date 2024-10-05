<?php
require_once("util-db.php");
require_once("model-platform.php");

$pageTitle ="Platforms";
include "view-header.php"; 
$platforms = selectPlatforms();
include "view-platform.php";
include "view-footer.php";
?>
