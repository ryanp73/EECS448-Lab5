<?php

include "config.php";

$db = new mysqli($config["host"], $config["user"], $config["pass"], $config["db"]);

if ($db->connect_errno) {
	echo("Connect failed: %s\n" . $mysqli->connect_error);
	exit();
}
