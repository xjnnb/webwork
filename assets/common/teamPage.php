<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>实验室信息管理系统</title>
<!--    <link rel="stylesheet" href="http://cn.inspinia.cn/html/inspiniacn/quillpro/assets/css/quillpro/quillpro.css">-->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../css/sets/ready.css">
    <link rel="stylesheet" href="../css/sets/demo.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/team.css">
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
                                            <div class="col-lg-1 col-md-1 col-sm-1 text-right">
                                                <label>系别</label>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-2">
                                                <select class="form-control" id="seltype">
                                                    <option value ="allSearch">全部</option>
                                                    <option value = "软件工程">软件工程</option>
                                                    <option value = "计算机科学与技术">计算机科学与技术</option>
                                                    <option value = "计算机科学与技术(师范)">计算机科学与技术(师范)</option>
                                                    <option value = "计算机金融">计算机金融</option>
                                                    <option value = "物联网">物联网</option>
                                                </select>
                                            </div>
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
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <div class="card sm-card">
                                                            <img class="card-img-top" src="http://cn.inspinia.cn/html/inspiniacn/quillpro/assets/img/gallery-image-3.jpg" alt="Gallery Image 3">
                                                            <div class="card-body">
                                                                <h4 class="card-title">三只菜鸡</h4>
                                                                <p class="card-text"><small>虽然我们代码菜，但是我们界面好看啊！</small></p>
                                                                <p class="card-text text-right">
                                                                    <img style="border-radius: 90px; width: 10%" src="../img/profile.jpg">
                                                                    <img style="border-radius: 90px; width: 10%" src="../img/profile.jpg">
                                                                    <img style="border-radius: 90px; width: 10%" src="../img/profile.jpg">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <div class="card sm-card">
                                                            <img class="card-img-top" src="http://cn.inspinia.cn/html/inspiniacn/quillpro/assets/img/gallery-image-3.jpg" alt="Gallery Image 3">
                                                            <div class="card-body">
                                                                <h4 class="card-title">三只菜鸡</h4>
                                                                <p class="card-text"><small>虽然我们代码菜，但是我们界面好看啊！</small></p>
                                                                <p class="card-text text-right">
                                                                    <img style="border-radius: 90px; width: 10%" src="../img/profile.jpg">
                                                                    <img style="border-radius: 90px; width: 10%" src="../img/profile.jpg">
                                                                    <img style="border-radius: 90px; width: 10%" src="../img/profile.jpg">
                                                                </p>
                                                            </div>
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
<script type="text/javascript" src="../js/metchHeight.js"></script>
<script type="text/javascript" src="../js/team.js"></script>
</body>

</html>