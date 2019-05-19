<?php

$user = $_POST["user"];
$pwd = $_POST["password"];
$con=mysqli_connect("localhost","root","","lab");
$flag=0;
if (mysqli_connect_errno($con))
{
    echo "连接 MySQL 失败: " . mysqli_connect_error();
}




$query="select password from stu where stu_id='{$user}'";

$result=mysqli_query($con,$query);

// 获取数据
$arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
if($arr[0][0]===$pwd) {
    $flag=1;
}

$query="select password from teacher where teacher_id= '{$user}'";

$result=mysqli_query($con,$query);

// 获取数据
$arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
if($arr[0][0]===$pwd) {
    $flag=2;
}
if($flag!=0) {
    header("location:http://www.baidu.com");
}else{
    header("location:http://www.baidu.com");
    echo "用户名或密码错误!";
}

// 释放结果集
mysqli_free_result($result);

mysqli_close($con);



$con->close();
