<?php
require_once("util-db.php");
require_once("model-shows-by-platform.php");

$pageTitle ="Shows by Platform";
include "view-header.php"; 
$sections = selectShowsByPlatform($_POST['cid']);
include "view-shows-by-platform.php";
include "view-footer.php";
?>
