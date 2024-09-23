<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('129.15.65,247', 'mis4013', 'School10800!', 'mis-4013-db-hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
