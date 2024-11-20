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
function insertOfficer($oName, $oRank) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("INSERT INTO `Officer` (`Office_name`, `Officer_rank`) VALUES (?, ?)");
    $stmt->bind_param("ss", $oName, $oRank);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateOfficer($oName, $oRank, $oid) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("update `Officer` set `Office_name` = ?, `Officer_rank` = ? where Officer_id = ?");
    $stmt->bind_param("ssi", $oName, $oRank, $oid);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteOfficer($oid) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("delete from `Officer` where Officer_id = ?");
    $stmt->bind_param("i", $oid);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
