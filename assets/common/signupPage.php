<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>实验室管理系统</title>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="../css/sets/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sets/ready.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="row">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">实验室管理系统</div>
                <div class="card-category">致力于打造最好的实验室管理系统</div>
            </div>
            <form class="card-body" method="post" action="">
                <div class="form-group">
                    <label for="successInput">姓名</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your real name">
                    <small id="nameHelp" class="form-text text-muted">请输入您的真实姓名，不超过18个字符</small>
                    <small class="errors" id="nameError">&emsp;</small>
                </div>
                <div class="form-check" id="selectSex">
                    <label>性别</label><br/>
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" name="optionsRadios" value="Male"  checked="" id="selectMale">
                        <span class="form-radio-sign">Male</span>
                    </label>
                    <label class="form-radio-label ml-3">
                        <input class="form-radio-input" type="radio" name="optionsRadios" value="Female" id="selectFemale">
                        <span class="form-radio-sign">Female</span>
                    </label>
                </div>
                <div class="form-group">
                    <label id="successInput">学工号</label>
                    <input type="text" class="form-control" id="ID" placeholder="Enter Your Student/Teacher ID">
                    <small id="idHelp" class="form-text text-muted">学生学号以S开头，教师工号以T开头，9位长度</small>
                    <small class="errors" id="IDError">&emsp;</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">系别</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value = "软件工程">软件工程</option>
                        <option value = "计算机科学与技术">计算机科学与技术</option>
                        <option value = "计算机科学与技术(师范)">计算机科学与技术(师范)</option>
                        <option value = "计算机金融">计算机金融</option>
                        <option value = "物联网">物联网</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" id="passwords" placeholder="Enter Your Password">
                    <small id="passwordHelp" class="form-text text-muted">请输入密码，密码长度应为 6~16 个字符字母加数字组合</small>
                    <small class="errors" id="pwdError">&emsp;</small>
                </div>
                <div class="form-group">
                    <label for="password">确认密码</label>
                    <input type="password" class="form-control" id="pwdCheck" placeholder="Confirm Your Password">
                    <small id="checkPasswordHelp" class="form-text text-muted">请再次填写密码</small>
                    <small class="errors" id="pwdCheckError">&emsp;</small>
                </div>
                <div class="card-action">
                    <button type="button"  class="btn btn-success" id="okBtn" >确认注册</button>
                    <button type="button"  class="btn btn-danger" id="backBtn">返回登陆</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/sets/jquery.3.2.1.min.js"></script>
<script src="../js/sets/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/signup.js"></script>
</body>
<html>