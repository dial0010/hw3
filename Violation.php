<?php
require_once("util-db.php");
require_once("model-Violation.php");

$pageTitle = "Violation";
include "view-header.php";
$Violation = selectViolation();
include "view-Violation.php";
include "view-footer.php";
?>
