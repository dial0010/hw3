<?php
require_once("util-db.php");
require_once("model-Violation-by-Drivers.php");

$pageTitle = "Violations by Drivers";
include "view-header.php";
$Violation = selectViolationbyDrivers($_GET['id']);
include "view-Violation-by-Drivers.php";
include "view-footer.php";
?>
