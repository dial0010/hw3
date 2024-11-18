<?php
require_once("util-db.php");
require_once("model-Officer.php");

$pageTitle = "Officers";
include "view-header.php";
$Officers = selectOfficer();
Include "view-Officer.php";
include "view-footer.php";
?>
