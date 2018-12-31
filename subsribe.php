<?php
require_once('config.php');

if(!$mqtt->connect(true, NULL, $username, $password)) {
	exit(1);
}

$topics['publishtest'] = array("qos" => 0, "function" => "procmsg");
$mqtt->subscribe($topics, 0);
while($mqtt->proc()){
		
}

$mqtt->close();
function procmsg($topic, $msg){
		echo "\n\n--> Msg Recieved: " . date("r") . "\n";
		echo "Topic: {$topic}\n";
		echo "---MESSAGE-START---\n";
		echo "$msg";
		echo "\n---MESSAGE-END---\n\n";
}
