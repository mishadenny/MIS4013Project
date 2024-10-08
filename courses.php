<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle ="Shows";
include "view-header.php"; 

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      If (InsertShow($_POST['sTitle'], $_POST['sGenre'])) {
        echo '<div class="alert alert-success" role="alert">Course Added </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error </div>';
      }
      break;
    case "Delete":
      If (deleteShow($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Course Deleted </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error </div>';
      }
      break;
  }
}
$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
