<?php
require_once("util-db.php");
require_once("model-Drivers.php");

$pageTitle = "Drivers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertDrivers($_POST['dName'], $_POST['dBrand'])) {
    echo '<div class="alert alert-success" role="alert">Driver added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Delete":
    if (deleteDrivers($_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Driver deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
     case "Edit":
    if (updateDrivers($_POST['dName'], $_POST['dReason'], $_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Driver edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}

$Drivers = selectDrivers();
Include "view-Drivers.php";
include "view-footer.php";
?>
