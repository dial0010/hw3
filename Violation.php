<?php
require_once("util-db.php");
require_once("model-Violation.php");

$pageTitle = "Violations";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add";
    if (insertViolation($_POST['vNumber'], $_POST['vReason'])) {
    echo '<div class="alert alert-success" role="alert">Course added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Delete";
    if (deleteViolation($_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Course deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}

$Violations = selectViolation();
include "view-Violation.php";
include "view-footer.php";
?>
