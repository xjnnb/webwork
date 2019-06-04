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
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-sub">
                                        Add <code class="highlighter-rouge">.table-striped</code> to rows the striped table
                                    </div>
                                    <div class="form-group from-show-notify row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 text-right">
                                            <label>日期</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 ">
                                            <select class="form-control" id="seltime">
                                                <option value ="allSearch">全部</option>
                                                <option value ="week">近一周内</option>
                                                <option value ="month">近一月内</option>
                                                <option value="year">近一年内</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 text-right">
                                            <label>类别</label>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-2">
                                            <select class="form-control" id="seltype">
                                                <option value ="allSearch">全部</option>
                                                <option value ="match">比赛通知</option>
                                                <option value ="activity">活动通知</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 text-right col-lg-offset-1">
                                            <input type="text" placeholder="关键词 ... " class="form-control text-right" id="searchText">
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <button type="button"  class="btn btn-primary" id="searchBt">Go</button>
                                        </div>
                                    </div>
                                    <table class="table table-typo">
                                        <tbody id="selectInfoTable">
                                        <tr>
                                            <td>
                                                <p>动词打次类</p>
                                                <small>2019-01-01</small>
                                            </td>
                                            <td><span class="h6">我是标题，很长的那种，很厉害的那种</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Paragraph</p>
                                                <small>2019-01-01</small>
                                            </td>
                                            <td><span class="h6">h6. Bootstrap heading</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
<script type="text/javascript" src="../js/billboard.js"></script>
</body>

</html>