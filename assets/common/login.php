 <?php
    include "connect.php";

    $user = $_POST["user"];
    $pwd = $_POST["password"];

    if($user==null||$pwd==null){
        header("location:../../index.html");//直接打开该php文件，跳转到登录界面
    }




    //在学生的表中查找用户
    $sql="SELECT * FROM stu  WHERE stu_id='".$user."' AND password='".$pwd."';";

    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        $flag=1;
    }
     //在老师的表中查找用户
    $sql="SELECT * FROM teacher  WHERE teacher_id='".$user."' AND password='".$pwd."';";

    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        $flag=2;
    }
     //在管理员的表中查找用户
    $sql="SELECT * FROM admin  WHERE admin_id='".$user."' AND password='".$pwd."';";
//$rs = mysql_query($sql);
//$arr = array();
//while($rows = mysql_fetch_array($rs)){
//    array_push($arr,$rows);
//}
    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        $flag=3;
    }
//    组装json
    $data['flag']=$flag;
//返回json数据

    echo json_encode($data);//输出json数据
sleep(0.5);
    ?>
