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
function insertViolation($vNumber, $vReason) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("INSERT INTO `Violation` (`Violation_number`, `Violation_reason`) VALUES (?, ?)");
    $stmt->bind_param("ss", $vNumber, $vReason);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateViolation($vNumber, $vReason, $cid) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("update `Violation` set `Violation_number` = ?, `Violation_reason` = ? where Violation_id = ?");
    $stmt->bind_param("ssi", $vNumber, $vReason, $cid);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteViolation($cid) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("delete from `Violation` where Violation_id = ?");
    $stmt->bind_param("i", $cid);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
