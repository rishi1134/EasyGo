<html>
<body>


<style>
form input{
	float:left;
	padding-right:10px;
	margin-left:100px;
	border-radius:5px;
	font-size:50px;
	border-width:3px;
	border-color:black;
}
	
input{
	float:left;
	padding-right:10px;
	margin-left:120px;
	height:80px;
	width:80px;
}
p{
margin-top:0;
margin-left:150px;
font-size:100px;
border-width:3px;
color:black;	
}
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image: url("20.jpg");
	height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  opacity:0.5;
}
</style>
<body>
<div class="bg">
<?php
$input_data = file_get_contents('C:\wamp64\www\composer\slot.txt');
$msg=json_decode($input_data,true);
#print_r($msg['slots']); #avaialble slotss {"slots": [1, 2, 3], "total": 4}
#print_r($msg['total']);
$r=count($msg['slots']);
#print_r($r);
$p=$msg['total'];
#echo $p;

$items = array();
foreach($msg['slots'] as $username=>$p) {
 $items[] = $p;
}
$s=count($items);



echo '<br><br><br><p> AVAILABLE SLOTS </p>';
for ($i = 0; $i <$s ; $i++){
	echo '<form method="post" action="../composer/publish.php">
	
	<input type="submit" name="action" value="'. $items[$i]. '"/>
	
	</form>';
}

?>
</div>
</body>
</html>


