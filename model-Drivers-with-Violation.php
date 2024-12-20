<?php
function selectDrivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Drivers_id, Drivers_name, Car_brand FROM `Drivers`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectViolationbyDrivers($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT V.Violation_id, Violation_number, Violation_reason, Month, Day, Day_time FROM `Violation` V join City C on V.Violation_id = C.City_id where C.Drivers_id=?");
        $stmt->bind_param("i", $iid);
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
