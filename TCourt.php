<?php
require_once("util-db.php");
require_once("model-TCourt.php");

$pageTitle = "TCourts";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertTCourt($_POST['tName'], $_POST['tCity'], $_POST['tCounty'], $_POST['tState'])) {
    echo '<div class="alert alert-success" role="alert">TCourt added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Delete":
    if (deleteTCourt($_POST['tid'])) {
    echo '<div class="alert alert-success" role="alert">TCourt deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Edit":
    if (updateTCourt($_POST['tName'], $_POST['tCity'], $_POST['tCounty'], $_POST['tState'], $_POST['tid'])) {
    echo '<div class="alert alert-success" role="alert">TCourt edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}

$TCourts = selectTCourt();
Include "view-TCourt.php";
include "view-footer.php";
?>
