<div class="container-fluid"  id="main2" style="display: none">
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
                                    <input type="text" class="form-control" id="name" placeholder="请输入公告标题">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 text-right">
                                    <label>类别</label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <select class="form-control" id="seltype">
                                        <option value ="match">比赛公告</option>
                                        <option value ="activity">活动公告</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-2 col-md-2 col-sm-12 text-right">
                                    <label>公告内容</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 text-right">
                                                    <textarea class="form-control" id="comment" rows="12" placeholder="请输入公告内容"></textarea>
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