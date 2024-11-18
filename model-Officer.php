<?php
function selectOfficer() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Officer_id, Office_name, Officer_rank FROM `Officer`");
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
