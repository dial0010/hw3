<?php
require_once("util-db.php");
require_once("model-Violation-by-Drivers.php");

$pageTitle = "Violation by Drivers";
include "view-header.php";
$Violations = selectViolationbyDrivers($_GET['id']);
include "view-Violation-by-Drivers.php";
include "view-footer.php";
?>
