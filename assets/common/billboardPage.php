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
                <div class="container-fluid" id="main1" style="display: block">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="breadcrumb">
                                        <li><a href="../common/mainPage.php">首页</a></li>
                                        <li class="active">公告管理</li>
                                    </ul>
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
                                                <option value ="match">比赛公告</option>
                                                <option value ="activity">活动公告</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 text-right col-lg-offset-1">
                                            <input type="text" placeholder="关键词 ... " class="form-control text-right" id="searchText">
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <button type="button"  class="btn btn-primary" id="searchBt">Go</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="compose-message">
                                            <a href="#" class="btn btn-default btn-gradient btn-block up-notice" role="button" id="addNotice">发布公告</a>
                                        </div>
                                    </div>
                                    <table class="table table-typo">
                                        <tbody id="selectInfoTable">
                                        <tr>
                                            <td>
                                                <p><br></p>
                                                <small><br></small>
                                            </td>
                                            <td><span class="h6"><br></span>
                                                <p><br><br><br><br></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><br></p>
                                                <small><br></small>
                                            </td>
                                            <td><span class="h6"><br></span>
                                                <p><br><br><br><br></p>
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
            <?php  include "addNoticePage.php"?>

            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
</div>
<script src="../js/sets/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../js/sets/bootstrap.js"></script>
<script src="../js/sets/ready.min.js"></script>
<script type="text/javascript" src="../js/billboard.js"></script>
</body>

</html>