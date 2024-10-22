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

function selectCoursesByInstructors($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select s.show_id, show_title, genre, title_episode, season_number, episode_number
from `mis4013-hw3`.show s
join `mis4013-hw3`.episode e on e.show_id=s.show_id 
where e.actor_id=?");
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

function selectInstructorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select actor_id, actor_name
from `mis4013-hw3`.actor order by actor_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCoursesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select show_id, show_name
from `mis4013-hw3`.show order by show_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertEpisode($iid, $cid, $titleepisode, $seasonnumber, $episodenumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `mis4013-hw3`.`episode` (`actor_id`, `show_id`,'title_episode','season_number','episode_number') VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $iid, $cid, $titleepisode, $seasonnumber, $episodenumber);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEpisode($iid, $cid, $titleepisode, $seasonnumber, $episodenumber, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `mis4013-hw3`.`episode` set `actor_id`=?, `show_id`=?, 'title_episode'=?, 'season_number'=?, 'episode_number'=? where episode_id=?");
        $stmt->bind_param("iisssi", $iid, $cid, $titleepisode, $seasonnumber, $episodenumber, $sid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEpisode($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `mis4013-hw3`.`episode` where episode_id=?");
        $stmt->bind_param("i", $sid);
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
