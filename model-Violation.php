<?php
function selectViolation() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT Violation_id, Violation_number, Violation_reason FROM 'Violation'")
    
?>
