<?php
    include "connect.php";
    $name=$_POST["name"];
    $seltype=$_POST["seltype"];
    $text=$_POST["text"];
    if($name==null || $text==null){
        echo 0;
    }else{
        if($seltype=="match"){
            $seltype='比赛公告';
        }else{
            $seltype="活动公告";
        }
        $time=date('Y-m-d', time());
        $sql="select count(notice_id) from notice";
        $rs=mysqli_query($db,$sql);
        $id="";
        while($row=mysqli_fetch_array($rs)){
            $id=$row[0]+1;
        }
        $sql="insert INTO notice (notice_id,notice_name,notice_date,notice_type,text) VALUES('".$id."','".$name."','".$time."','".$seltype."','".$text."')";
        mysqli_query($db,$sql);
        echo 1;
    }
?>