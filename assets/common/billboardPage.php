<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>实验室信息管理系统</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../css/sets/ready.css">
    <link rel="stylesheet" href="../css/sets/demo.css">
    <link rel="stylesheet" href="../css/billboard.css" type="text/css">
</head>

<body>
<?php include "header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <form class="navbar-left navbar-form nav-search mr-md-3" action="" method="post">
                <div class="search-group">
                    <input type="text"  placeholder="Search for..." id="searchText">
                    <select id="seltype">
                        <option value ="allSearch">全部</option>
                        <option value ="id">通知编号</option>
                        <option value ="name">通知标题</option>
                        <option value ="date">通知日期</option>
                        <option value="type">通知类型</option>
                        <option value="text">通知文本</option>
                    </select>
                    <span >
                            <button  type="button" id = "searchBt">Go!</button>
                        </span>
                </div>
                <div id="selectInfo">
                    <table id="selectTable">
                        <tr>
                            <td><label >通知编号</label></td>
                            <td><label >通知标题</label></td>
                            <td><label >通知日期</label></td>
                            <td><label >通知类别</label></td>
                            <td><label >通知内容</label></td>
                        </tr>
                    </table>
                    <table id = "selectInfoTable"></table>

                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/billboard.js"></script>

</body>

</html>