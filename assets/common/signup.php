<?php
header('Content-Type: text/html;charset=utf-8');




///////////////data
$name=trim($_POST['name']);//1
$id=trim($_POST['id']);//1
$sex=$_POST['sex'];
$team='0';
$status="";//用户身份
$password=$_POST['password'];//1
$is_ok='0';//默认未审核  1为审核通过  未通过则直接删除
$introduce_id='0';//默认为0  空介绍
$dept=$_POST['dept'];



//////////////connect db
//    $db=mysqli_connect("localhost","root","","lab");
$db = @new mysqli("localhost", "root", "123456");
if ($db->connect_error)
    die('链接错误: ' . $db->connect_error);
$db->select_db('lab') or die('不能连接数据库');

mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码






$flag = '0';//用于判断


$sql = "SELECT * FROM stu WHERE stu_id='".$id ."';";
//    echo $id;
$rs = mysqli_query($db, $sql);
//    echo mysqli_num_rows($rs)>0;
if (mysqli_num_rows($rs)>0) {
    $flag = '1';
}


$sql = "SELECT * FROM teacher WHERE teacher_id='".$id."';";
$rs = mysqli_query($db, $sql);
if (mysqli_num_rows($rs)>0) {
    $flag = '1';
}


if ($flag == '0') {
    $status = substr($id, 0, 1);
    if ($status == 'S') {
        $grade = substr($id, 1, 4);
        switch ($grade) {
            case '2015':
                $grade = '大四';
                break;
            case '2016':
                $grade = '大三';
                break;
            case '2017':
                $grade = '大二';
                break;
            default:
                $grade = '大一';
        }
        $sql = "insert into stu values  ('".$name."','".$id."','".$sex."','".$team."','".$grade."','".$dept."','".$introduce_id."','".$is_ok."','".$password."');";
//            $sql = "insert into stu values  (".$name.",".$id .",".$sex.",".$team. "," . $grade . "," . $dept . "," . $introduce_id . "," . $is_ok . "," . $password . ");";
        $rs = mysqli_query($db, $sql);


        }
    else {
        $sql = "insert into teacher values  ('".$name."','".$id."','".$sex."','".$team."','".$dept."','".$introduce_id."','".$is_ok."','".$password."');";
//            $sql = "insert into teacher values  (" . $name . "," . $id . "," . $sex . "," . $team . "," . $dept . "," . $introduce_id . "," . $is_ok . "," . $password . ");";
        $rs = mysqli_query($db, $sql);

    }
}
$arr = array();
$arr[] = array("result" => $flag);
echo json_encode($arr);
