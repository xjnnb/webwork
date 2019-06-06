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
                                    <img class="card-img-top" src="http://cn.inspinia.cn/html/inspiniacn/quillpro/assets/img/gallery-image-3.jpg" alt="Gallery Image 3" style="width: 100% !important;
    height: 150px;">
                                    <div class="card-body">
                                        <div class="form-group from-show-notify row">
                                            <div class="col-md-6">
                                                <div class="teacher">
                                                    <div style="background-color:#f7f8fa;">
                                                        <h6 style="padding: 20px 0 10px 20px; margin: 0;">指导老师</h6>
                                                        <table class="table table-striped" >
                                                            <div class="form-group" style="padding-top: 0;">
                                                                <div class="row" style="padding-left: 20px; margin: 0;">
                                                                    <label class="control-label" >姓名</label>
                                                                    <label class="control-label" style="padding-left: 20px;">章德帅</label>
                                                                </div>
                                                                <div class="row" style="padding-left: 20px; margin: 0;">
                                                                    <label class="control-label">职称</label>
                                                                    <label class="control-label" style="margin-left: 20px;">副教授</label>
                                                                </div>
                                                            </div>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="student" >
                                                    <div style="background-color:#f7f8fa;">
                                                        <h6 style="padding: 20px 0 20px 20px; margin: 0;">团队成员</h6>
                                                    </div>
                                                    <table class="table mt-3" style="margin-top: 5px;">
                                                        <tbody>
                                                        <tr>
                                                            <td>张悦</td>
                                                            <td>2017212212000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>一只猪</td>
                                                            <td>2017212212001</td>
                                                        </tr>
                                                        <tr>
                                                            <td>一只猪</td>
                                                            <td>2017212212001</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="row" style="margin-bottom:20px;">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-2 col-form-label">学号</label>
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="introduce">
                                                    <div style="background-color:#f7f8fa;">
                                                        <h6 style="padding: 20px 0 20px 20px; margin: 0;">团队简介</h6>
                                                    </div>
                                                    <p style="margin: 10px 0 20px 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="plan">
                                                    <div style="background-color:#f7f8fa;">
                                                        <h6 style="padding: 20px 0 20px 20px; margin: 0;">日程安排</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="timeline">
                                                            <h2 style="margin-top: 0px;">2018</h2>
                                                            <ul class="timeline-items">
                                                                <li class="timeline-item animated fadeInLeft" style="animation-duration: 300ms;">
                                                                    <time>
                                                                        06-07 非常正经比赛
                                                                    </time>
                                                                    <hr>
                                                                    <p>我们是一个正经比赛</p>
                                                                    <p>非常正经</p>
                                                                    <hr>
                                                                </li>
                                                            </ul>
                                                            <ul class="timeline-items">
                                                                <li class="timeline-item animated fadeInLeft" style="animation-duration: 300ms;">
                                                                    <time>
                                                                        06-07 非常正经比赛
                                                                    </time>
                                                                    <hr>
                                                                    <p>我们是一个正经比赛</p>
                                                                    <p>非常正经</p>
                                                                    <hr>
                                                                </li>
                                                            </ul>
                                                            <ul class="timeline-items">
                                                                <li class="timeline-item animated fadeInLeft" style="animation-duration: 300ms;">
                                                                    <time>
                                                                        06-07 非常正经比赛
                                                                    </time>
                                                                    <hr>
                                                                    <p>我们是一个正经比赛</p>
                                                                    <p>非常正经</p>
                                                                    <hr>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</body>

</html>