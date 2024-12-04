<?php
function selectTCourt() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Tcourt_id, Tcourt_name, Tcourt_city, tcourt_county, tcourt_state FROM `TCourt`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTCourt($tName, $tCity, $tCounty, $tState) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO `TCourt` (`Tcourt_name`, `Tcourt_city`, `Tcourt_county`, `Tcourt_state`,) VALUES (?, ?)");
    $stmt->bind_param("ss", $tName, $tCity, $tCounty, $tState);
    $success = $stmt->execute();
    $conn->close();
    return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTCourt($tName, $tCity, $tCounty, $tState, $tid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("UPDATE `TCourt` SET `TCourt_name` = ?, `TCourt_rank` = ? WHERE Tcourt_id = ?");
    $stmt->bind_param("ssi", $tName, $tCity, $tCounty, $tState, $tid);
    $success = $stmt->execute();
    $conn->close();
    return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTCourt($tid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("DELETE FROM `TCourt` WHERE Tcourt_id = ?");
    $stmt->bind_param("i", $tid);
    $success = $stmt->execute();
    $conn->close();
    return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
