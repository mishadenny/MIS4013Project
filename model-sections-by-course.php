<?php
function selectSectionsByCourse($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select s.show_id, show_title, genre, title_episode, season_number, episode_number
from `mis4013-hw3`.show s
join `mis4013-hw3`.episode e on e.show_id=s.show_id 
where e.show_id=?");
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
