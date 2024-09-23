<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis-4013-db-hw3.mysql.database.azure.com', 'mis4013', 'School10800!', 'mis4013-hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
