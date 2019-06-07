 <?php
    include "connect.php";

    $user = $_POST["user"];
    $pwd = $_POST["password"];
    $arr = array();
    if($user==null||$pwd==null){
        header("location:../../index.html");//直接打开该php文件，跳转到登录界面
    }

    //在学生的表中查找用户
    $sql="SELECT * FROM stu  WHERE stu_id='".$user."' AND password='".$pwd."';";

    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        $rs = mysqli_query($db, $sql);//获取查询结果
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }
        $flag=1;
        session_start();
        $_SESSION["username"]=$arr[0][0];
        $_SESSION["userLevel"]="Student";
        $_SESSION["permit"]=$arr[0][7];
    }
     //在老师的表中查找用户
    $sql="SELECT * FROM teacher  WHERE teacher_id='".$user."' AND password='".$pwd."';";

    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        $rs = mysqli_query($db, $sql);//获取查询结果
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }
        $flag=2;
        session_start();
        $_SESSION["username"]=$arr[0][0];
        $_SESSION["userLevel"]="Teacher";
        $_SESSION["permit"]=$arr[0][6];
    }
     //在管理员的表中查找用户
    $sql="SELECT * FROM admin  WHERE admin_id='".$user."' AND password='".$pwd."';";
    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        $rs = mysqli_query($db, $sql);//获取查询结果
        while ($rows = mysqli_fetch_array($rs)) {
            array_push($arr, $rows);
        }
        $flag=3;
        session_start();
        $_SESSION["username"]=$arr[0][2];
        $_SESSION["userLevel"]="Administrator";
        $_SESSION["permit"]="1";
    }
//    组装json
    $data['flag']=$flag;
    $data['username']=$_SESSION["username"];
//返回json数据

    echo json_encode($data);//输出json数据
sleep(0.5);
    ?>
