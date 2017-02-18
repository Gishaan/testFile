<?php
$url = parse_url(getenv("heroku_8c0cd6c1d489728	"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
echo "How you doing?";
?>
