<?php
header("content-type:text/html;charset=utf-8");
$db=@new mysqli("localhost","root","");
if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('lab') or die('不能连接数据库');
mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码

?>