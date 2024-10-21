<?php
function selectPlatform() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT platform_id, platform_name, headquarters
FROM `mis4013-hw3`.platform;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlatform($pName, $pHeadquarters) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `mis4013-hw3`.`platform` (`platform_name`, `headquarters`) VALUES (?, ?)");
        $stmt->bind_param("ss", $pName, $pHeadquarters);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlatform($pName, $pHeadquarters, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `mis4013-hw3`.`platform` set `platform_name`=?, `headquarters`=? where platform_id=?");
        $stmt->bind_param("ssi", $pName, $pHeadquarters, $pid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlatform($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `mis4013-hw3`.`platform` where platform_id=?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
