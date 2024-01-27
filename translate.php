<?php
// connection to database
$conn = mysqli_connect('localhost', 'root', '');
$ps = 0;
if (!$conn) {
    $ps++;
}

$pilihDB = mysqli_select_db($conn, 'userform');

$kata = $_GET['kata'];
$bahasa = $_GET['bahasa'];

if ($ps == 0) {

    if ($bahasa == "indonesia") {
        $cari = mysqli_query($conn, "SELECT * FROM translate WHERE indonesia='$kata'");
    } else if ($bahasa == "sumbawa") {
        $cari = mysqli_query($conn, "SELECT * FROM translate WHERE sumbawa='$kata'");
    }

    $jum = mysqli_num_rows($cari);

    if ($jum == 0) {
       // print("kata tidak tersedia");
        echo json_encode([
                "status" => false,
                "kata"   => "kata tidak tersedia",
                "ket"    => ""
            ]);
    } else {

        $data = mysqli_fetch_array($cari);

        if ($bahasa == "indonesia") {
           echo json_encode([
                "status" => true,
                "kata"   => $data['sumbawa'],
                "ket"    => $data['keterangan'],
         ]);
           // print($data['sumbawa']);
        } else if ($bahasa == "sumbawa") {
            //print($data['indonesia']);

             echo json_encode([
                "status" => true,
                "kata"   => $data['indonesia'],
                "ket"    => $data['keterangan'],
            ]);
        }
    }
}

if(isset($_GET['query'])){
    $keyword = $_GET['query'];
    $query = mysqli_query($conn,"SELECT * FROM translate WHERE indonesia LIKE '%".$keyword."%' ORDER BY id LIMIT 10");
 
    while ($data = mysqli_fetch_array($query)) {
        $output['suggestions'][] = [
            'value' => $data['indonesia'],
            'indonesia'  => $data['indonesia']
        ];
    }
 
    if (! empty($output)) {
        echo json_encode($output);
    }
  }
