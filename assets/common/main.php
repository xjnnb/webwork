<?php
$Text = $_POST["searchText"];
$type = $_POST["seltype"];

if($Text==null&&$type !="allSearch"){
    header("location:/main.html");//直接打开该php文件，跳转到登录界面
}

header('Content-Type: text/html;charset=utf-8');
$db=@new mysqli("localhost","root","");
if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('lab') or die('不能连接数据库');

$arr = array();

if($type=='allSearch'){
    $sql="SELECT * FROM  stu;";


    $rs=mysqli_query($db,$sql);
    while($rows = mysqli_fetch_array($rs)){
        array_push($arr,$rows);
    }
    $sql="SELECT * FROM teacher ;";
    $rs=mysqli_query($db,$sql);
    while($rows = mysqli_fetch_array($rs)){
        array_push($arr,$rows);
    }
}else if($type=="id"){
    $sql="SELECT * FROM stu  WHERE stu_id='%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE teacher_id='%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else if($type=="name"){
    $sql="SELECT * FROM stu  WHERE stu_name='%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE teacher_name='%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else if($type=="dept"){
    $sql="SELECT * FROM stu  WHERE stu_dept='%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE teacher_dept='%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else{
    $sql="SELECT * FROM stu  WHERE team_id=(SELECT team_id from team WHERE team_name='%".$Text."%');";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE team_id=(SELECT team_id from team WHERE team_name='%".$Text."%');";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}
    $brr[]=array();
for($i=0; $i<count($arr);$i++){
    $statue=substr($arr[$i][1],0,1);
    $sql="SELECT team_name FROM team  WHERE team_id='".$arr[$i][3]."');";
    $rs=mysqli_query($db,$sql);
    $arr[$i]["team_name"]=$rs[0][0];
    if($statue=='T'){
        $brr[]=array("statue"=>"teacher","name"=>$arr[$i][0],"id"=>$arr[$i][1],"dept"=>$arr[$i][4],"team"=>$arr[$i]["team_name"]);
    }else{
        $brr[]=array("statue"=>"student","name"=>$arr[$i][0],"id"=>$arr[$i][1],"dept"=>$arr[$i][5],"team"=>$arr[$i]["team_name"]);
    }
}
//echo print_r($brr);
//echo print_r($arr);

    echo json_encode($brr);//输出json数据
?>