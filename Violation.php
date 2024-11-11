<?php
require_once("util-db.php");
require_once("model-Violation.php");

$pageTitle = "Violations";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
  }
}

$Violations = selectViolation();
include "view-Violation.php";
include "view-footer.php";
?>
