<?php
header("Content-type: application/json");

$con = mysqli_connect("localhost", "root", "123xyz", "lab");

$char = isset($_GET['chars']) ? $_GET['chars'] : '';

$res = mysqli_query($con, "SELECT user_id, user_name FROM user WHERE user_name LIKE '%".mysqli_real_escape_string($con, $char)."%'");
$rows = array();
while ($data = mysqli_fetch_assoc($res)) {
  $rows[] = $data;
}

echo json_encode($rows);
