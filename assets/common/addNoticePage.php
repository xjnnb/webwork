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
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="breadcrumb" style="margin-bottom: 0px;">
                                            <li><a href="../common/billboardPage.php">公告资讯管理</a></li>
                                            <li class="active">发布公告</li>
                                        </ul>
                                    </div>
                                    <div class="card-body col-md-11">
                                        <div class="form">
                                            <div class="form-group from-show-notify row">
                                                <div class="col-lg-2 col-md-2 col-sm-12 text-right">
                                                    <label>标题</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <input type="text" class="form-control" id="user_name" placeholder="请输入指导老师姓名">
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-12 text-right">
                                                    <label>类别</label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-12">
                                                    <select class="form-control" id="seltype">
                                                        <option value ="match">比赛通知</option>
                                                        <option value ="activity">活动通知</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group from-show-notify row">
                                                <div class="col-lg-2 col-md-2 col-sm-12 text-right">
                                                    <label>公告内容</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-12 text-right">
                                                    <textarea class="form-control" id="comment" rows="12">
												    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="form">
                                            <div class="form-group from-show-notify row">
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12" >
                                                    <button id="displayNotif" type="button" class="btn btn-success">发布公告</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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