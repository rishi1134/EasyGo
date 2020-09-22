<?php

require 'phpMQTT.php';
$topic = "available";


$client_id = "qwerwerrerewrcrgr";

function procmsg($topic, $msg){
	$file = 'slot.txt';
	$current = file_get_contents($file);
	$current = $msg;
	file_put_contents($file, $current);
	echo "Msg Recieved: $msg\n";
}
    
$mqtt = new phpMQTT("m16.cloudmqtt.com", 17887, $client_id);
if ($mqtt->connect(true, NULL, "cpfjxexh", "0R1pH_favGt7")) {
  $topics[$topic] = array(
      "qos" => 0,
      "function" => "procmsg"
  );
  $mqtt->subscribe($topics,0);
  while($mqtt->proc(false)) {}
  $mqtt->close();
} else {
  exit(1);
}
?>