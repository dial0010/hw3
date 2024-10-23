<?php
function selectViolation() {
    $conn = null;
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Violation_id, Violation_number, Violation_reason FROM `Violation`");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e;
    } finally {
        if ($conn) {
            $conn->close();
        }
    }
}
?>
