<?php
header("content-type:text/html;charset=utf-8");
header('Content-Type:text/html;charset=utf-8;');
$Text = $_POST["searchText"];
$type = $_POST["seltype"];
//echo $Text;
//ECHO $type;
if($Text==null&&$type !="allSearch"){
    header("location:/main.html");//直接打开该php文件，跳转到登录界面
}

header('Content-Type: text/html;charset=utf-8');

$db=@new mysqli("localhost","root","");
if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('lab') or die('不能连接数据库');
mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码


$arr = array();


$tep="";
$len=mb_strlen($Text,'utf-8');
for($i=0;$i<$len;$i++){
    $cha=mb_substr($Text,$i,1,'utf-8');
    if($i<$len-1)
    $tep=$tep.$cha.'%';
    else $tep=$tep.$cha;

}

$Text=$tep;
//echo $Text;

if($type=='allSearch'){

    if($Text=="") {
        $sql = "SELECT * FROM  stu;";


        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }


        $sql = "SELECT * FROM teacher ;";
        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }
    }
    else{
        $sql="SELECT * FROM stu  WHERE (stu_id like '%".$Text."%' ) or(stu_name like '%".$Text."%') or(stu_dept like '%".$Text."%') or(stu_name like '%".$Text."%')or (team_id=(SELECT team_id from team WHERE team_name  like '%".$Text."%'));";
        $rs=mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($rs)){
            array_push($arr,$row);
        }
        $sql="SELECT * FROM teacher  WHERE (teacher_id like '%".$Text."%' ) or(teacher_name like '%".$Text."%') or(teacher_dept like '%".$Text."%') or(teacher_name like '%".$Text."%')or (team_id=(SELECT team_id from team WHERE team_name  like '%".$Text."%'));";
        $rs=mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($rs)){
            array_push($arr,$row);
        }


    }



}else if($type=="id"){

    $sql="SELECT * FROM stu  WHERE stu_id like '%".$Text."%'";
    $rs=mysqli_query($db,$sql);

    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }

    $sql="SELECT * FROM teacher  WHERE teacher_id like '%".$Text."%'";
    $rs=mysqli_query($db,$sql);

    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else if($type=="name"){
    $sql="SELECT * FROM stu  WHERE stu_name like '%".$Text."%'";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE teacher_name like '%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else if($type=="dept"){
    $sql="SELECT * FROM stu  WHERE stu_dept like '%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE teacher_dept like '%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else{
    $sql="SELECT * FROM stu  WHERE team_id=(SELECT team_id from team WHERE team_name  like '%".$Text."%');";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $sql="SELECT * FROM teacher  WHERE team_id=(SELECT team_id from team WHERE team_name  like '%".$Text."%');";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}
    $brr= array();
for($i=0; $i<count($arr);$i++){
    $statue=substr($arr[$i][1],0,1);
//    echo $arr[$i][3];
    $sql="SELECT team_name FROM team  WHERE team_id='".$arr[$i][3]."';";
    $rs=mysqli_query($db,$sql);

    $arr[$i]["team_name"]="";
    while($row = mysqli_fetch_array($rs)){
        $arr[$i]["team_name"]=$row[0];
    }

    if($statue=='T'){
        $brr[]=array("statue"=>"老师","name"=>$arr[$i][0],"id"=>$arr[$i][1],"dept"=>$arr[$i][4],"team"=>$arr[$i]["team_name"]);
    }else{
        $brr[]=array("statue"=>"学生","name"=>$arr[$i][0],"id"=>$arr[$i][1],"dept"=>$arr[$i][5],"team"=>$arr[$i]["team_name"]);
    }
}

    echo json_encode($brr);//输出json数据
?>