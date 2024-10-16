<?php
require_once("util-db.php");
require_once("model-Drivers.php");

$pageTitle = "Drivers";
include "view-header.php";
$Drivers = selectDrivers();
Include "view-Drivers.php";
include "view-footer.php";
?>
