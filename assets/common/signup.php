<?php
$name=trim($_POST['name']);//1
$id=trim($_POST['id']);//1
$sex=$_POST['sex'];
$team='0';
$status="";//用户身份
$password=$_POST['password'];//1
$is_ok='0';      //默认未审核  1为审核通过  未通过则直接删除
$introduce_id='0';//默认为0  空介绍
$dept=$_POST['dept'];
header('Content-Type: text/html;charset=utf-8');
$db=@new mysqli("localhost","root","");
if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('lab') or die('不能连接数据库');
mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码
$statue=substr($id,0,1);

$flag='0';
$sql="SELECT * FROM stu WHERE stu_id='".id."'";
$rs = mysqli_query($db, $sql);
if($rs)$flag='1';
$sql="SELECT * FROM teacher WHERE teacher_id='".id."'";
$rs = mysqli_query($db, $sql);
if($rs)$flag='1';

if($flag==0) {
    if ($status == 'S') {
        $grade = substr($id, 1, 4);
        switch ($grade) {
            case '2015':
                $grade = '大四';
            case '2016':
                $grade = '大三';
            case '2017':
                $grade = '大二';
            case '2018':
                $grade = '大一';
        }
        $query = 'insert into stu values  (?,?,?,?,?,?,?,?,?)';
        $stmt = $db->prepare($query);
        $stmt->bind_param('sssssssss', $name, $id, $sex, $team, $grade, $dept, $introduce_id, $is_ok, $password);
        $stmt->execute();
    } else {
        $query = 'insert into teacher values  (?,?,?,?,?,?,?,?)';
        $stmt = $db->prepare($query);
        $stmt->bind_param('ssssssss', $name, $id, $sex, $team, $dept, $introduce_id, $is_ok, $password);
        $stmt->execute();
    }
}
$arr=array();
$arr[]=array("result"=>$flag);
echo json_encode($arr);
$db->close();
