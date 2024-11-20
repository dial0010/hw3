<?php
require_once("util-db.php");
require_once("model-Officer.php");

$pageTitle = "Officers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertOfficer($_POST['vNumber'], $_POST['vReason'])) {
    echo '<div class="alert alert-success" role="alert">Officer added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Delete":
    if (deleteOfficer($_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Officer deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Edit":
    if (updateOfficer($_POST['vNumber'], $_POST['vReason'], $_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Officer edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}

$Officers = selectOfficer();
Include "view-Officer.php";
include "view-footer.php";
?>
