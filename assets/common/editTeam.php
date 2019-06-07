<?php
include "connect.php";
$name=$_POST["name"];
$flag=$_POST["flag"];

$sql="select team_id from team where team_name ='".$name."'";
$team_id=0;
$rs=mysqli_query($db,$sql);
while($row = mysqli_fetch_array($rs))
$team_id=$row[0];

if($flag==0){
    $sql="select stu_no,teacher_no from team where team_name ='".$name."'";
    $stu_id=0;
    $teacher_id=0;
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        $stu_id=$row[0];
        $teacher_id=$row[1];
    }
    $sql="select stu_name from stu where stu_id='".$stu_id."'";
    $stu_name="";
    $rs=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($rs)){
        $stu_name=$row[0];
    }
    $sql="select teacher_name from teacher where teacher_id='".$teacher_id."'";
    $teacher_name="";
    $rs=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($rs)){
        $teacher_name=$row[0];
    }
    $arr=array();
    $arr[]=array("stu_name"=>$stu_name,"teacher_name"=>$teacher_name);
    echo json_encode($arr);
}else if($flag==1){
    $sql="select stu_id,stu_name from stu where team_id ='".$team_id."'";
    $rs=mysqli_query($db,$sql);
    $arr=array();

    while($row= mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $brr=array();
    for($i =0;$i<count($arr);$i++){
        $brr[]=array("name"=>$arr[$i][1],"id"=>$arr[$i][0]);
    }
    echo json_encode($brr);
}else if($flag==2){

    $stu_id=$_POST["stu_id"];
    $sql="select team_id from stu where stu_id ='".$stu_id."'";
//    echo $sql;
    $team_id2=0;
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        $team_id2=$row[0];
    }
    $vis=0;
    if($team_id2=='0'){
        $sql="update stu set team_id='".$team_id."' WHERE stu_id='".$stu_id."'";
//        echo $sql;
        $rs=mysqli_query($db,$sql);
        $vis=mysqli_affected_rows($db);
    }
    echo $vis;

}else if($flag==3){
    $sql="select introduce_id from team where team_id ='".$team_id."'";
    $rs=mysqli_query($db,$sql);
    $introduce_id=0;
    while($row=mysqli_fetch_array($rs)){
        $introduce_id=$row[0];
    }
    $sql="select text from introduce where introduce_id ='".$introduce_id."'";
    $rs=mysqli_query($db,$sql);
    $text=0;
    while($row=mysqli_fetch_array($rs)){
        $text=$row[0];
    }
    echo $text;
}else if($flag==4){
    $sql="select * from plan where team_id='".$team_id."'";
    $rs=mysqli_query($db,$sql);
    $arr=array();
    while($row=mysqli_fetch_array($rs)){
        $arr[]=array("name"=>$row[1],"date"=>$row[2],"type"=>$row[3],"text"=>$row[4]);
    }
    echo json_encode($arr);
}else{
    $sql="delete from team where team_id='".$team_id."'";
    mysqli_query($db,$sql);

    $sql="update stu set  team_id='0' where team_id='".$team_id."'";
    mysqli_query($db,$sql);

    $sql="update teacher set  team_id='0' where team_id='".$team_id."'";
    mysqli_query($db,$sql);
}

?>