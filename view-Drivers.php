<?php
require_once("util-db.php");  
require_once("model-Drivers.php");

$pageTitle = "Drivers";
include "view-header.php";

// Handling form submissions
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertDrivers($_POST['dName'], $_POST['dBrand'])) {
                echo '<div class="alert alert-success" role="alert">Driver added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error adding driver.</div>';
            }
            break;
        case "Delete":
            if (deleteDrivers($_POST['did'])) {
                echo '<div class="alert alert-success" role="alert">Driver deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error deleting driver.</div>';
            }
            break;
        case "Edit":
            if (updateDrivers($_POST['dName'], $_POST['dBrand'], $_POST['did'])) {
                echo '<div class="alert alert-success" role="alert">Driver updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error updating driver.</div>';
            }
            break;
    }
}

// Fetching all drivers
$Drivers = selectDrivers();
include "view-Drivers.php";
include "view-footer.php";
?>
