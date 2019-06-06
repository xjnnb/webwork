<?php

session_start();

$brr =array("username"=>$_SESSION["username"],"userLevel"=>$_SESSION["userLevel"]);

echo json_encode($brr);//输出json数据

?>
