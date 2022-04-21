<?php

$db = mysqli_connect('mysql5038.site4now.net','a85e19_api','Surya@2001','db_a85e19_api');
if(!$db)
{
    echo"Not Connected";
}else
{

$user = $_GET['name'];
$pass = $_GET['password'];
//$user ='test';
//$pass = 'test';
//$q = "SELECT * FROM Users WHERE UserName = '".$user."' And Password='".$pass."'";
$q= "SELECT * FROM `users` WHERE `name` = '$user' And `password`='$pass'";
//$q= "SELECT * FROM users";
$result = mysqli_query($db,$q);
//$count = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if($count >= 1)
{
    $response=true;
}
else
{  
     $response=false;
}
}
header('Content-type:application/json');
echo json_encode($response);
?>
