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
function insertDrivers($dName, $dBrand) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("INSERT INTO `Drivers` (`Drivers_name`, `Car_brand`) VALUES (?, ?)");
    $stmt->bind_param("ss", $dName, $dBrand);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateDrivers($dName, $dBrand, $did) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("update `Drivers` set `Drivers_name` = ?, `Car_brand` = ? where Drivers_id = ?");
    $stmt->bind_param("ssi", $dName, $dBrand, $did);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDrivers($did) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("delete from `Drivers` where Drivers_id = ?");
    $stmt->bind_param("i", $did);
    $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
