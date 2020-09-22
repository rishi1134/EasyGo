<html>
<head>
<style>
p{
	font-size:100px;
	text-align:center;
}
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image: url("");
	height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.p1{
margin-top:50px;
margin-left:350px;
font-size:50px;
color:#001a1a;	
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  width:300px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:400px;
  margin-right:150px;
  cursor: pointer;
  float:right;
}	
.button1 {
  background-color: transparent; 
  color: black; 
  border: 1px solid #f44336;
  border-radius:4px;
}
</style>
<body>
<div class="bg">


<div class='p1'> CONFIRMATION MESSAGE</div>

<?php

$selectedslot=$_POST['action'];
$current = "$selectedslot";
echo '<p>'.'You have selected Slot : '.$current.'</p>';
file_put_contents('C:\wamp64\www\composer\Updatedslot.txt', $current);

require 'phpMQTT.php';
$topic = "UpdatedSlot";
$client_id = "directx11_11";
echo '<a href="../app/payment.php"> <button class="button button1">PAYMENT</button></a>';

$updatedslot = file_get_contents('C:\wamp64\www\composer\Updatedslot.txt');
error_reporting(E_ALL ^ E_WARNING);
$message->DeleteSlot = $updatedslot;

$message = json_encode($message);
$mqtt = new phpMQTT("m16.cloudmqtt.com", your_port_no, $client_id);
if ($mqtt->connect(true, NULL, "your_username", "your_pass")) {
    $mqtt->publish($topic, $message, 0);
   # echo "Published message: " . $message;
    $mqtt->close();
}else{
    echo " <br />";
}
?>



</div>
</body>
</html>