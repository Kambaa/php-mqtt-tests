<?php
require_once 'config.php';

$msg = "Hello World! at " . date("r");
if(is_array($argv) && count($argv)>1){
	$msg = $argv[1];
}


if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish("publishtest", $msg , 0);
	$mqtt->close();
} else {
    echo "Time out!\n";
}
