<?php
function selectCourses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select course_id, course_number, course_description
from `mis4013-hw3`.course");
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