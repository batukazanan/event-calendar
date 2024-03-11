<?php
include('config.php');

if(!empty($_GET['type']) && $_GET['type'] == 'list') {

    $current_date = date("Y-m-d H:i:s");
    $sql = "SELECT * FROM event WHERE start_date >= '$current_date' LIMIT 4";
    $result = $conn->query($sql);
    $eventArray = array();

    while($row = $result->fetch_assoc()){
        $eventArray[] = $row;
    }

    echo json_encode($eventArray);
}

?>