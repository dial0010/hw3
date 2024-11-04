<?php
function selectViolation() {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("SELECT Violation_id, Violation_number, Violation_reason FROM `Violation`");
    $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
