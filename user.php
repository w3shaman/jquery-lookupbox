<?php
$con = mysql_connect("localhost", "root", "123xyz");
mysql_select_db("lab", $con);

$res = mysql_query("SELECT user_id, user_name FROM user WHERE user_name LIKE '%".mysql_real_escape_string($_GET['chars'], $con)."%'");
$rows = array();
while ($data = mysql_fetch_assoc($res)) {
  $rows[] = $data;
}

echo json_encode($rows);