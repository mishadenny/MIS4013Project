<?php
function selectInstructors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select actor_id, actor_name, age
from `mis4013-hw3`.actor");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertActor($aName, $aAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `mis4013-hw3`.`actor` (`actor_name`, `age`) VALUES (?, ?)");
        $stmt->bind_param("si", $aName, $aAge);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateActor($aName, $aAge, $iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `mis4013-hw3`.`actor` set `actor_name`=?, `age`=? where actor_id=?");
        $stmt->bind_param("sii", $aName, $aAge, $iid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteActor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `mis4013-hw3`.`actor` where actor_id=?");
        $stmt->bind_param("i", $iid);
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
