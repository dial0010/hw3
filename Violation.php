<?php
require_once("util-db.php");
require_once("model-Violation.php");

$pageTitle = "Violations";
include "view-header.php";
$Violations = selectViolation();
include "view-Violations.php";
include "view-footer.php";
?>
