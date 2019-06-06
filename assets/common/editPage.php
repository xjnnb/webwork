<div class="container-fluid" id="main2"  style="display:none">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form action="" method="post">
                <div class="card">
                    <div class="card-body">
                        <ul class="breadcrumb" style="margin-bottom: 0px;">
                            <li><a href="../common/mainPage.php">首页</a></li>
                            <li class="active">编辑人员</li>
                        </ul>
                    </div>
                    <div class="card-body col-md-11">
                        <div class="form">
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>姓名:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="name" placeholder="请输入姓名" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>学号:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="id" placeholder="请输入学号" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="form-check" id="selectSex">
                                    <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                        <label>性别:</label>
                                    </div>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="optionsRadios" value="Male"  checked="" id="selectMale" disabled="disabled">
                                            <span class="form-radio-sign">男</span>
                                        </label>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="optionsRadios" value="Female" id="selectFemale" disabled="disabled">
                                            <span class="form-radio-sign">女</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>团队:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="password" class="form-control" id="team" placeholder="请输入团队" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>身份:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="statue" placeholder="请输入身份" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>专业:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="dept" placeholder="请输入专业" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>自我介绍:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                        <textarea class="form-control" id="introduce">请输入自我介绍</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>修改密码:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="password" class="form-control" id="password" placeholder="请输入修改的密码">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>确认密码:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="password" class="form-control" id="passwordAgain" placeholder="请再次输入修改的密码">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="form">
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div></div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12" >
                                    <button id="displayNotif" type="button" class="btn btn-success" >保存修改</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
