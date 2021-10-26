<?php
include_once "settings.php";

$ip = ip2long($_SERVER[$proxy]);

#$db = new mysqli($db_host, $db_username, $db_password, $db_name);
$db = new SQLite3("/home/waf/kirinas.com/kirinas.sqlite");

#$result = $db->query("INSERT INTO `hits` (ip, count) VALUES (" . $ip . ", 1) ON DUPLICATE KEY UPDATE count=count + 1");
$stmt = $db->prepare("INSERT INTO visits (ip, count) VALUES (:ip, 0) ON CONFLICT(ip) DO UPDATE SET count = count + 1;");
$stmt->bindParam(":ip", $ip, SQLITE3_INTEGER);
$result = $stmt->execute();

$stmt->close();
$db->close();
?>
