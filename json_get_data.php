<?php
$host = "localhost";
$user = "lovepreet";
$password = "changepassword";
$db = "dbhere";

$sql = "select * from userinfo;";
$con = mysqli_connect($host,$user,$password,$db);

$result = mysqli_query($con,$sql);

$response = array();
while ($row = mysqli_fetch_array($result)) {
  array_push($response,array("name"=>$row[0],"email"=>$row[1],"mobile"=>$row[2]));

}

echo json_encode(array("server_response"=>$response));
mysql_close($con);
?>
