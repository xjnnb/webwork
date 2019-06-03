<?php

include "connect.php";


$Text = $_POST["searchText"];
$type = $_POST["seltype"];
//echo $Text;
//ECHO $type;
if($Text==null&&$type !="allSearch"){
    header("location:/billboard.html");//直接打开该php文件，跳转到登录界面
}



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

if($type=='allSearch') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice;";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(notice_date like '%" . $Text . "%' ) or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}


else if($type=="id") {

    $sql = "SELECT * FROM notice  WHERE notice_id like '%" . $Text . "%'";
    $rs = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($rs)) {
        array_push($arr, $row);
    }

}else if($type=="name"){
    $sql="SELECT * FROM notice  WHERE notice_name like '%".$Text."%'";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }

}else if($type=="date"){
    $sql="SELECT * FROM notice  WHERE notice_date like '%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }

}else if($type=="type"){
    $sql="SELECT * FROM notice  WHERE notice_type like '%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }

}else if($type=="text"){
    $sql="SELECT * FROM notice  WHERE text like '%".$Text."%';";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }

}

$brr= array();
for($i=0; $i<count($arr);$i++){

    $brr[]=array("id"=>$arr[$i][0],"name"=>$arr[$i][1],"date"=>$arr[$i][2],"type"=>$arr[$i][3],"text"=>$arr[$i][4]);

}

    echo json_encode($brr);//输出json数据
?>