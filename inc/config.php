<?php 

// connect to ani_ni database 
$server = '37.221.93.61';
$username = 'ani_ni';
$password = 'ani_ni';
$database = 'ani_ni';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}
// set $config to config table data
$sql = "SELECT * FROM `config`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $config[$row['key']] = $row['value'];
  }
}

function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}
