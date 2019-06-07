<?php
include "connect.php";
$name=$_POST["name"];
$teacher=$_POST["teacher"];
$stu=$_POST["stu"];
$comment=$_POST["comment"];
$flag=1;
if($name==null||$teacher==null||$stu==null||$comment==null){
    $flag=0;
}else{
    $sql="select team_id from stu where stu_id='".$stu."'";
    $rs=mysqli_query($db,$sql);
    if(mysqli_affected_rows($db)){
        while ($row=mysqli_fetch_array($rs)){
            if($row[0]!='0'){
                $flag=0;
            }
//            ECHO $sql;
        }

    }else{
        $flag=0;
    }

    $sql="select team_id from teacher where teacher_id='".$teacher."'";
    $rs=mysqli_query($db,$sql);
    if(mysqli_affected_rows($db)){
        while ($row=mysqli_fetch_array($rs)){
            if($row[0]!='0'){
                $flag=0;
            }
        }
    }else{
        $flag=0;
    }
}
if($flag){
    $sql="select * from team";
    $rs=mysqli_query($db,$sql);
    $team_id=mysqli_affected_rows($db)+1;

    $sql="select * from introduce";
    $rs=mysqli_query($db,$sql);
    $introduce_id=mysqli_affected_rows($db);

    $sql="INSERT INTO team (team_id,team_name,stu_no,teacher_no,introduce_id) VALUES ('".$team_id."','".$name."','".$stu."','".$teacher."','".$introduce_id."')";
    mysqli_query($db,$sql);

    $sql="INSERT INTO introduce (introduce_id,text) VALUES ('".$introduce_id."','".$comment."')";
    mysqli_query($db,$sql);

    $sql="update stu set team_id='".$team_id."'where stu_id='".$stu."'";
    mysqli_query($db,$sql);

    $sql="update teacher set team_id='".$team_id."'where teacher_id='".$teacher."'";
    mysqli_query($db,$sql);

//    echo $sql;
    echo 1;
}else{
    echo 0;
}