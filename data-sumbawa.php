<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = mysqli_connect("localhost", "root", "", "userform");

  if(isset($_GET['query'])){
    $keyword = $_GET['query'];
    $query = mysqli_query($conn,"SELECT * FROM translate WHERE sumbawa LIKE '%".$keyword."%' ORDER BY id LIMIT 10");
 
    while ($data = mysqli_fetch_array($query)) {
        $output['suggestions'][] = [
            'value' => $data['sumbawa'],
            'sumbawa'  => $data['sumbawa']
        ];
    }
 
    if (! empty($output)) {
        echo json_encode($output);
    }
  }
?>