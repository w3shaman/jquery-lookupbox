<?php
$con = mysqli_connect("localhost", "root", "123xyz", "lab");

$res = mysqli_query($con, "SELECT user_id, user_name FROM user WHERE user_name LIKE '%".mysqli_real_escape_string($con, $_GET['chars'])."%'");
$rows = array();
while ($data = mysqli_fetch_assoc($res)) {
  $rows[] = $data;
}

echo json_encode($rows);
