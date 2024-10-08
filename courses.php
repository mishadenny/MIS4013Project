<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle ="Shows";
include "view-header.php"; 

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      InsertShow($_POST['sTitle'], $_POST['sGenre']);
      break;
  }
}
$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
