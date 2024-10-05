<?php
function selectShowsByPlatform($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select p.platform_id, platform_name, show_title, genre
from `mis4013-hw3`.platform p
join `mis4013-hw3`.show s on s.platform_id=p.platform_id
where s.platform_id=?");
        $stmt->bind_param("i", $cid);
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
