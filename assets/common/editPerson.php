<?php
include "connect.php";
$id=$_POST["id"];
$flag=$_POST["flag"];

$statue=substr($id,0,1);
if($flag==1){

    if($statue=='S')
        $sql="DELETE from stu  WHERE stu_id='".$id."';";
    else
        $sql="DELETE from teacher  WHERE teacher_id='".$id."';";
    mysqli_query($db,$sql);
}else if($flag==0){
    if($statue=='S') {
        $sql = "SELECT * FROM stu WHERE stu_id='" . $id . "';";
        $rs = mysqli_query($db, $sql);
        $arr = array();
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }
        $brr = array();
        for ($i = 0; $i < count($arr); $i++) {

            $brr[] = array("id" => $arr[$i][1], "name" => $arr[$i][0], "password" => $arr[$i][8], "sex" => $arr[$i][2],  "dept" => $arr[$i][5],"introduce_id" => $arr[$i][6],"team_id" => $arr[$i][3]);
            $brr[$i]["statue"]="学生";
        }
    }else  {
        $sql = "SELECT * FROM teacher WHERE teacher_id='" . $id . "';";
        $rs = mysqli_query($db, $sql);
        $arr = array();
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }
        $brr = array();
        for ($i = 0; $i < count($arr); $i++) {

            $brr[] = array("id" => $arr[$i][1], "name" => $arr[$i][0], "password" => $arr[$i][7], "sex" => $arr[$i][2],  "dept" => $arr[$i][4],"introduce_id" => $arr[$i][5],"team_id" => $arr[$i][4]);
            $brr[$i]["statue"]="老师";
        }
    }
    for ($i = 0; $i < count($brr); $i++) {
        $sql="SELECT team_name from team where team_id='".$brr[$i]["team_id"]."'";
        $rs=mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($rs)){
            $brr[$i]["team"]=$row[0];
        }
        $sql="SELECT text from introduce where introduce_id='".$brr[$i]["introduce_id"]."'";
        $rs=mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($rs)){
            $brr[$i]["introduce"]=$row[0];
        }

    }

    echo json_encode($brr);//输出json数据

}
else if($flag==2){


    $id = $_POST["id"];
    $introduce = $_POST["introduce"];
    $password = $_POST["password"];
    $passwordAgain = $_POST["passwordAgain"];
    $statue=substr($id,0,1);
    if($password!=$passwordAgain){
        echo 0;
    }else{
        if($statue=='S') {
            $sql = "UPDATE stu SET password ='".$password."' WHERE stu_id='".$id."'";
            $rs=mysqli_query($db,$sql);
            $sql = "SELECT introduce_id FROM stu WHERE stu_id = '".$id."'";
            $rs=mysqli_query($db,$sql);
            $introduce_id="";
            while($row= mysqli_fetch_array($rs)){
                $introduce_id=$row[0];
            }
            if ($introduce_id == '0') {
                $sql = "select count(introduce_id) from introduce";
                $rs = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($rs)) {
                    $introduce_id = $row[0];
                }
                $sql = "INSERT INTO introduce (introduce_id,text) VALUES('" . $introduce_id . "','" . $introduce . "')";
                mysqli_query($db,$sql);
                $sql = "UPDATE stu SET introduce_id ='" . $introduce_id . "' WHERE stu_id='" . $id . "'";
                $rs = mysqli_query($db, $sql);

            } else {
                $sql = "UPDATE introduce SET text='" . $introduce . "'WHERE introduce_id='" . $introduce_id . "'";
                mysqli_query($db, $sql);
            }

        }else {
            $sql = "UPDATE teacher SET password ='" . $password . "' WHERE teacher_id='" . $id . "'";
            $rs = mysqli_query($db, $sql);
            $sql = "SELECT introduce_id FROM teacher WHERE teacher_id = '" . $id . "'";
            $rs = mysqli_query($db, $sql);
            $introduce_id = "";
            while ($row = mysqli_fetch_array($rs)) {
                $introduce_id = $row[0];
            }
            if ($introduce_id == '0') {
                $sql = "select count(introduce_id) from introduce";
                $rs = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($rs)) {
                    $introduce_id = $row[0];
                }
                $sql = "INSERT INTO introduce (introduce_id,text) VALUES('" . $introduce_id . "','" . $introduce . "')";
//                echo $sql;
                mysqli_query($db,$sql);
                $sql = "UPDATE teacher SET introduce_id ='" . $introduce_id . "' WHERE teacher_id='" . $id . "'";
                $rs = mysqli_query($db, $sql);

            } else {
                $sql = "UPDATE introduce SET text='" . $introduce . "'WHERE introduce_id='" . $introduce_id . "'";
                mysqli_query($db, $sql);
            }
        }
        echo 1;
    }






}else{
    $sql="";
    echo $statue;
    if($statue=='S'){
        $sql = "UPDATE stu SET isok ='1' WHERE stu_id='" . $id . "'";
        echo $sql;
    }else{
        $sql = "UPDATE teacher SET isok ='1' WHERE teacher_id='" . $id . "'";
    }
    echo $sql;
    mysqli_query($db,$sql);
}



?>