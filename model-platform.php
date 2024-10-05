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
?>
