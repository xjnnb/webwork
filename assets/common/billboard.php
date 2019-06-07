<?php

include "connect.php";


$Text = $_POST["searchText"];
$seltype = $_POST["seltype"];
$seltime = $_POST["seltime"];

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
if($seltype=='allSearch' and $seltime=='allSearch') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice;";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
//        ECHO $sql;
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='match' and $seltime=='allSearch') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_type='比赛公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_type='比赛公告'AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='activity' and $seltime=='allSearch') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_type='活动公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_type='活动公告'AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='allSearch' and $seltime=='week') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-7 and sysdate();";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_date between  current_date()-7 and sysdate() and (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='match' and $seltime=='week') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-7 and sysdate() and notice_type='比赛公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE  notice_date between  current_date()-7 and sysdate() and  notice_type='比赛公告' AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='activity' and $seltime=='week') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-7 and sysdate() and notice_type='活动公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_date between  current_date()-7 and sysdate() and  notice_type='活动公告'AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='allSearch' and $seltime=='month') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-30 and sysdate();";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_date between  current_date()-30 and sysdate() and (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') (text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='match' and $seltime=='month') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-30 and sysdate() and notice_type='比赛公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE  notice_date between  current_date()-30 and sysdate() and  notice_type='比赛公告' AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='activity' and $seltime=='month') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-30 and sysdate() and notice_type='活动公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_date between  current_date()-30 and sysdate() and  notice_type='活动公告'AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%')  or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='allSearch' and $seltime=='year') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-365 and sysdate();";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_date between  current_date()-365 and sysdate() and (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='match' and $seltime=='year') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-365 and sysdate() and notice_type='比赛公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE  notice_date between  current_date()-365 and sysdate() and  notice_type='比赛公告' AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}else if($seltype=='activity' and $seltime=='year') {

    if ($Text == "") {
        $sql = "SELECT * FROM  notice WHERE notice_date between  current_date()-365 and sysdate() and notice_type='活动公告';";

        $rs = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }

    }
    else {
        $sql = "SELECT * FROM notice  WHERE notice_date between  current_date()-365 and sysdate() and  notice_type='活动公告'AND (notice_id like '%" . $Text . "%' ) or(notice_name like '%" . $Text . "%') or(notice_type like '%" . $Text . "%') or(text like '%" . $Text . "%');";
        $rs = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            array_push($arr, $row);
        }

    }

}




    $brr= array();
for($i=0; $i<count($arr);$i++){

    $brr[]=array("id"=>$arr[$i][0],"name"=>$arr[$i][1],"date"=>$arr[$i][2],"type"=>$arr[$i][3],"text"=>$arr[$i][4]);

}

    echo json_encode($brr);//输出json数据
?>