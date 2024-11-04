<?php
require_once("util-db.php");
require_once("model-Drivers-with-Violation.php");

$pageTitle = "Drivers with Violation";
include "view-header.php";
$Drivers = selectDrivers();
Include "view-Drivers-with-Violation.php";
include "view-footer.php";
?>
