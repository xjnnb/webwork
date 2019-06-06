<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>实验室信息管理系统</title>
    <link href="../css/sets/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sets/ready.css">
    <link rel="stylesheet" href="../css/sets/demo.css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>
<?php include "header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-body">
                                            <ul class="breadcrumb">
                                                <li><a href="../common/mainPage.php">首页</a></li>
                                                <li class="active">搜索</li>
                                            </ul>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 text-right">
                                                <label>筛选</label>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-2">
                                                <select class="form-control input-fixed" id="seltype">
                                                    <option value ="allSearch">全部</option>
                                                    <option value ="id">学工号</option>
                                                    <option value ="name">姓名</option>
                                                    <option value="team">团队</option>
                                                    <option value="dept">系别</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 text-right col-lg-offset-4">
                                                <input type="text" placeholder="关键词 ... " class="form-control text-right" id="searchText">
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <button type="button"  class="btn btn-primary" id="searchBt">Go</button>
                                            </div>
                                        </div>
                                        <table class="table table-striped mt-3">
                                            <thead>
                                            <tr>
                                                <th scope="col">身份</th>
                                                <th scope="col">姓名</th>
                                                <th scope="col">学号</th>
                                                <th scope="col">系别</th>
                                                <th scope="col">团队</th>
                                                <th scope="col">状态</th>
                                                <th scope="col">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody id="selectInfoTable">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php include "pagination.php"; ?>
                </div>
                <?php include "editPage.php"; ?>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
</div>
<script src="../js/sets/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../js/sets/bootstrap.js"></script>
<script src="../js/sets/ready.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>