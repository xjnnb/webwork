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
    <link rel="stylesheet" href="../css/team.css" type="text/css">

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
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-body">
                                            <ul class="breadcrumb">
                                                <li><a href="../common/mainPage.php">首页</a></li>
                                                <li class="active">团队管理</li>
                                            </ul>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 text-right col-lg-offset-4">
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
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <div class="card sm-card" style="background-color: #f2f3f8;border-radius: 10px;">
                                                            <div class="icon-preview" style="font-size: inherit;font-size: 6rem; text-align: center;"><i class="la la-plus"></i></div>
                                                        </div>
                                                    </div>



                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php include "pagination.php"; ?>
                </div>
                <?php include "detailedteamPage.php";?>

            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
</div>
<script src="../js/sets/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../js/sets/bootstrap.js"></script>
<script src="../js/sets/ready.min.js"></script>
<script src="../js/team.js"></script>
<script src="../js/teamPage.js"></script>
<script type="text/javascript" src="../js/metchHeight.js"></script>
<script type="text/javascript" src="../js/team.js"></script>
</body>

</html>