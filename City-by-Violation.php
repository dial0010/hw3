<?php
require_once("util-db.php");
require_once("model-City-by-Violation.php");

$pageTitle = "City by Violation";
include "view-header.php";
$Cities = selectCitybyViolation($_POST['cid']);
include "view-City-by-Violation.php";
include "view-footer.php";
?>
