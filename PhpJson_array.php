<?php
header('Content-Type: application/json; charset=utf-8');
$data=array();
$userInfo['name']="Sayedur Rahman Sohan";
$userInfo['mobile']=2934857824;
$userInfo['email']="@gmail.com";
array_push($data,$userInfo);

$userInfo['name']='Sohan';
$userInfo['mobile']="4887549923489";
$userInfo['email']="sohan@gmail.com";
array_push($data,$userInfo);

echo json_encode($data);
?>

