<?php
$user_name=trim($_POST['user_name']);//1
$user_id=trim($_POST['user_id']);//1
$user_sex=$_POST['user_sex'];
$team_id=$_POST['team_id'];
$user_status=$_POST['user_status'];//用户身份
$user_password=$_POST['user_password'];//1
$is_ok=0;      //默认未审核  1为审核通过  未通过则直接删除
$introduce_id=0;//默认为0  空介绍
$user_dept=$_POST['user_dept'];

$db = new mysqli('localhost','root','','lab');
if(mysqli_connect_errno()){
    echo '<p>Error :Could not connect to database.<br/>
    Please try again later.</p>';
    exit;
}
if($user_status=='student'){
    $grade=substr($user_id,0,4);
    switch($grade){
        case '2015':$grade='大四';
        case '2016':$grade='大三';
        case '2017':$grade='大二';
        case '2018':$grade='大一';
    }
    $query='insert into stu values  (?,?,?,?,?,?,?,?,?)';
    $stmt= $db->prepare($query);
    $stmt->bind_param('sisissiis',$user_name,$user_id,$user_sex,$team_id,$grade,$user_dept,$introduce_id,$is_ok,$user_password);
    $stmt->execute();
}else{
    $query='insert into stu values  (?,?,?,?,?,?,?,?)';
    $stmt= $db->prepare($query);
    $stmt->bind_param('sisisiis',$user_name,$user_id,$user_sex,$team_id,$user_dept,$introduce_id,$is_ok,$user_password);
    $stmt->execute();
}

$db->close();
