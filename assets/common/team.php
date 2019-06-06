<?php
include "connect.php";
$searchText=$_POST["searchText"];
$arr=array();
if($searchText==null) {
    $sql="SELECT * FROM team";
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}
else {
    $tep = "";
    $len = mb_strlen($searchText, 'utf-8');
    for ($i = 0; $i < $len; $i++) {
        $cha = mb_substr($searchText, $i, 1, 'utf-8');
        if ($i < $len - 1)
            $tep = $tep . $cha . '%';
        else $tep = $tep . $cha;

    }
    $searchText = $tep;
    $sql="SELECT * FROM team where  team_name LIKE '%".$searchText."%';";
//    echo $sql;
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}
$brr=array();
for($i=0;$i<count($arr);$i++){
    $sql="SELECT teacher_name from teacher where teacher_id='".$arr[$i][3]."'";
//    echo $sql;
    $rs=mysqli_query($db,$sql);
    $brr[$i]["teacher"]="";
    if($rs)
    while($row = mysqli_fetch_array($rs)){
        $brr[$i]["teacher"]=$row[0];
    }

    $sql="SELECT stu_name from stu where stu_id='".$arr[$i][2]."'";
    $rs=mysqli_query($db,$sql);
    $brr[$i]["student"]="";
    if($rs)
    while($row=mysqli_fetch_array($rs)){
        $brr[$i]["student"]=$row[0];
    }

    $sql="SELECT text from introduce where introduce_id=".$arr[$i][4];
    $rs=mysqli_query($db,$sql);
    $brr[$i]["introduce"]="";
    while($row=mysqli_fetch_array($rs)){
        $brr[$i]["introduce"]=$row[0];
        $simple=mb_substr($row[0], 0, min(15,mb_strlen($row[0],"utf-8")), 'utf-8');
        $simple.="...";
        $brr[$i]["simple"]=$simple;
    }

    $brr[$i]["team_name"]=$arr[$i][1];
}
    echo json_encode($brr);
?>