<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>实验室信息管理系统</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
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
                                        <div class="card-sub">
                                            Add <code class="highlighter-rouge">.table-striped</code> to rows the striped table
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-1 col-md-1 col-sm-4 text-right">
                                                <label>State</label>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-4">
                                                <select class="form-control input-fixed" id="seltype">
                                                    <option value ="allSearch">全部</option>
                                                    <option value ="id">学工号</option>
                                                    <option value ="name">姓名</option>
                                                    <option value="team">团队</option>
                                                    <option value="dept">系别</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-4 text-right">
                                                <input type="text" placeholder="Search ..." class="form-control text-right" id="searchText">
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-4">
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
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
<script src="../js/sets/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/sets/ready.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>