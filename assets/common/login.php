<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>登录验证</title>
</head>
<body>
<div class="main">
    <?php

        $user = $_POST["user"];
        $pwd = $_POST["password"];

        if($user==null||$pwd==null){
            header("location:../../index.html");//直接打开该php文件，跳转到登录界面
//            echo "<h3>密码空</h3>";
        }

        $db=@new mysqli("localhost","root","");
        $flag=0;
        if ($db->connect_error)
            die('链接错误: '. $db->connect_error);
        $db->select_db('lab') or die('不能连接数据库');



//    $sql="SELECT * FROM stu  WHERE stu_id= 20171 AND password= '123456'";
    $sql='SELECT * FROM stu  WHERE stu_id='.$user." AND password='".$pwd."';";

    $result=$db->query($sql);
    $num_users=$result->num_rows;//在数据库中搜索到符合的用户
    if($num_users!=0){
        //搜索到该用户
//            echo "<h3>登录成功</h3>";
        header("location:main.html");
//        echo "登录成功";
    }
    else{

        header("location:../../index.html");
        echo "<h3>登录失败</h3>";
        echo "alert(f)";
    }


    ?>
</div>
</body>
</html>
