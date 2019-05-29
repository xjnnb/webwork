/*
Author:Wengdf
BuildDate:2019-05-24
Version:1.0
Function:signup
*/
var arrErrorInfos = [ //输入报错提示文本
    "姓名为空",
    "姓名长度应小于18个字符",
    "密码长度应为 6~16 个字符",
    "密码过于简单，请尝试“字母+数字”的组合",
    "两次填写的密码不一致",
    "请填写正确的学工号",
    "验证码输入错误",
    "密码为空",
    "学工号长度应为9位"
];
var arrCorrectInfos = [ //输入正确提示文本
    "姓名可用",
    "密码可用",
    "密码一致",
    "学工号格式正确",
    "验证通过"
];
var submitInfos = [ //提交提示文本
    "请先同意服务条款再进行注册",
    "注册项有误",
    "注册提交"
];
var checkStatus; //定义检查状态变量


//检测姓名
$('#name').blur(function(event) {
    $('#nameError').css('color', 'red');
    if ($(this).val().length <= 0) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#nameError').html(arrErrorInfos[0]);
        checkStatus = true;
    }
    else if ($(this).val().length > 18) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#nameError').html(arrErrorInfos[1]);
        checkStatus = true;
    }
    else { //name输入合法
        $(this).parent().removeClass("has-error");
        $(this).parent().addClass("has-success");
        $('#nameError').css('color', '#59d05d');
        $('#nameError').html(arrCorrectInfos[0]);
    }
});
//去除提示
$('#name').focus(function () {
    $(this).val('');
    $('#nameError').html('&emsp;');
});


//检查学工号
$('#ID').blur(function(event) {
    $('#IDError').css('color', 'red');
    if ($(this).val().length !== 9) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#IDError').html(arrErrorInfos[8]);
        checkStatus = true;
    }
    else if ($(this).val().length > 18) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#IDError').html(arrErrorInfos[5]);
        checkStatus = true;
    }
    else { //name输入合法
        $(this).parent().removeClass("has-error");
        $(this).parent().addClass("has-success");
        $('#IDError').css('color', '#59d05d');
        $('#IDError').html(arrCorrectInfos[3]);
    }
});
//去除提示
$('#name').focus(function () {
    $(this).val('');
    $('#nameError').html('&emsp;');
});
//检查学工号是否合法
    function check_ID() {
        var IDObj = document.getElementById("ID");
        var IDNum_input = IDObj.value;
        IDErrorObj.style.color = "red";
        if (IDNum_input.length !== 9) { //检查学工号长度
            removeClass(IDObj.parentNode, "has-success");
            addClass(IDObj.parentNode, "has-error");
            IDErrorObj.innerHTML = arrErrorInfos[8];
            checkStatus = true;
        } else if (IDNum_input[0] !== "T" && IDNum_input[0] !== "S") { //检查学工号第一位
            removeClass(IDObj.parentNode, "has-success");
            addClass(IDObj.parentNode, "has-error");
            IDErrorObj.innerHTML = arrErrorInfos[5];
            checkStatus = true;
        } else { //学工号合法
            removeClass(IDObj.parentNode, "has-error");
            addClass(IDObj.parentNode, "has-success");
            IDErrorObj.style.color = "#59d05d";
            IDErrorObj.innerHTML = arrCorrectInfos[3];
        }
    }

//清除IDError
    function clear_IDError() {
        var IDObj = document.getElementById("ID");
        IDObj.value = "";
        IDErrorObj.innerHTML = "&emsp;";
    }
//
//
// //检查密码是否合法
//     function check_pwd() {
//         var onlyNum = /^[0-9]+$/g; //密码只含数字
//         var onlyEn = /^[a-zA-Z]+$/g; //密码只含英文字母
//         var pwdObj = document.getElementById("password");
//         var pwd_input = pwdObj.value;
//         var pwdLen = pwd_input.length; //获取密码长度
//         pwdErrorObj.style.color = "red";
//         if (pwdLen < 6 || pwdLen > 16) { //检查密码长度是否在6～16范围内
//             removeClass(pwdObj.parentNode, "has-success");
//             addClass(pwdObj.parentNode, "has-error");
//             pwdErrorObj.innerHTML = arrErrorInfos[2];
//             checkStatus = true;
//         } else if (onlyNum.test(pwd_input) || onlyEn.test(pwd_input)) { //检查密码是否只含数字或只含英文字母
//             removeClass(pwdObj.parentNode, "has-success");
//             addClass(pwdObj.parentNode, "has-error");
//             pwdErrorObj.innerHTML = arrErrorInfos[3];
//             checkStatus = true;
//         } else { //密码合法
//             removeClass(pwdObj.parentNode, "has-error");
//             addClass(pwdObj.parentNode, "has-success");
//             pwdErrorObj.style.color = "#59d05d";
//             pwdErrorObj.innerHTML = arrCorrectInfos[1];
//         }
//     }
//
// //清除pwdError
//     function clear_pwdError() {
//         var pwd = document.getElementById("password");
//         pwd.value = "";
//         pwdErrorObj.innerHTML = "&emsp;";
//     }
//
//
// //检查两次密码是否相同
//     function check_pwdAgain() {
//         var pwd1Obj = document.getElementById("password");
//         var pwd2Obj = document.getElementById("pwdCheck")
//         var pwd_input1 = pwd1Obj.value; //第一次输入的密码
//         var pwd_input2 = pwd2Obj.value; //第二次输入的密码
//         pwdCheckErrorObj.style.color = "red";
//         if (pwd_input2.length === 0) { //第二次输入密码为空
//             removeClass(pwd2Obj.parentNode, "has-success");
//             addClass(pwd2Obj.parentNode, "has-error");
//             pwdCheckErrorObj.innerHTML = arrErrorInfos[7];
//             checkStatus = true;
//         } else if (pwd_input1 !== pwd_input2) { //两次输入密码不同
//             removeClass(pwd2Obj.parentNode, "has-success");
//             addClass(pwd2Obj.parentNode, "has-error");
//             pwdCheckErrorObj.innerHTML = arrErrorInfos[4];
//             checkStatus = true;
//         } else { //两次输入密码相同
//             removeClass(pwd2Obj.parentNode, "has-error");
//             addClass(pwd2Obj.parentNode, "has-success");
//             pwdCheckErrorObj.style.color = "#59d05d";
//             pwdCheckErrorObj.innerHTML = arrCorrectInfos[2];
//         }
//     }
//
// //清除pwdAgainError并清空输入框
//     function clear_pwdAgainError() {
//         var pwdCheck = document.getElementById("pwdCheck");
//         pwdCheck.value = ""; //清空输入框
//         pwdCheckErrorObj.innerHTML = "&emsp;";
//     }
//
//
// //对键盘输入作出响应
//     function keyTrigger() {
//         if (event.keyCode == 13) { //单击回车（13）触发
//             submit_check(); //调用登陆方法
//         }
//     }
//
// //按顺序检查所有输入项
//     function check_all_status_in_order() {
//         check_ID();
//         check_name();
//         check_pwd();
//         check_pwdAgain();
//     }
//
// //提交检查
//     function submit_check() {
//         checkStatus = false; //初始化检查状态
//         check_all_status_in_order(); //按顺序检查所以输入是否正确
//         var checkBoxObj = document.getElementById("agreeItems");
//         if (!checkBoxObj.checked) { //检查checkBox是否被选中,并在报错后变更验证码
//             alert(submitInfos[0]);
//         } else if (checkStatus) { //检查所有输入项是否合法,并在报错后变更验证码
//             alert(submitInfos[1]);
//         } else {
//             var confirm = window.confirm(submitInfos[2]); //弹出确认框
//             if (confirm) { //判断是否确认
//                 window.location.href = "../../index.html"; //跳转登陆界面
//             }
//         }
//     }
//
// $(document).ready(function() {//文档就绪事件
//
//     //用户名
//
//
//
//
//     //密码
//
//     //检测密码
//     $('#userPw').blur(function(event)  { //失去焦点时进行判断密码
//         if ($('#userPw').val().length != 6) { //内容长度非6
//             $('#pwError').css('color', 'red');
//             $('#pwError').html("密码需为六位");
//             $('#pwError').css('visibility', 'visible');
//         } else {
//             $('#pwError').css('visibility', 'hidden');
//         }
//     });
//     //去除提示
//     $('#userPw').focus(function () {
//         $('#logInfo').css('visibility', 'hidden');
//     });
//
//
//
//     //登陆
//
//     //登陆按钮检测
//     $("#loginBut").click(function() { //密码用户名核对
//         $.getJSON("static/users.json", function(json) {
//             $.each(json, function(index, obj) {
//                 if ($('#userName').val() == obj.name && $('#userPw').val() == obj.pwd) {
//                     $('#logInfo').html("登录成功");
//                     $('#logInfo').css('color', 'green');
//                     $('#logInfo').css('visibility', 'visible');
//                     setTimeout("window.location='card/card.html';", 1000)
//                 } else {
//                     $('#logInfo').css('color', 'red');
//                     $('#logInfo').html("登录失败");
//                     $('#logInfo').css('visibility', 'visible');
//                 }
//             })
//         })
//     });
//
//     //回车登陆检测
//     $('#userPw').keydown(function() {
//         if (event.keyCode == 13) { // 13为回车键
//             $.getJSON("static/users.json", function(json) {//getJSON() 方法使用 AJAX 的 HTTP GET 请求获取 JSON 数据
//                 $.each(json, function(index, obj) {//each() 方法为每个匹配元素规定要运行的函数
//                     if ($('#userName').val() == obj.name && $('#userPw').val() == obj.pwd) {
//                         $('#logInfo').html("登录成功");
//                         $('#logInfo').css('color', 'green');
//                         $('#logInfo').css('visibility', 'visible');
//                         setTimeout("window.location='card/card.html';", 1000)
//                     } else {
//                         $('#logInfo').css('color', 'red');
//                         $('#logInfo').html("登录失败");
//                         $('#logInfo').css('visibility', 'visible');
//                     }
//                 })
//             })
//         }
//     });
//
//
//
//     //注册
//
//     $('#registBut').click(function(){
//         window.location.href = "register/register.html";
//     });
//});