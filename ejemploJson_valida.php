<?php
header("Content-type:application/json");
$json=$_GET['x'];
$data=json_decode($json);
if($data->user=="admin" && $data->password=="admin"){
	echo '{"estado":"true"}';
}else{
	echo '{"estado":"false"}';
}
?>