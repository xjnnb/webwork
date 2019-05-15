/*
Author:Xu Jianan
BuildDate:2019-04-10
Version:1.1
Function:lab-5 Login JS
*/
var flag = false;//初始化flag
//对键盘输入作出响应
function keyTrigger(){
    if (event.keyCode == 13){// 单击回车（13）触发
        log_check();// 调用登陆方法
    }
}
//聚焦于username时初始化输入框及提示栏
function resetUsername() {
    var userObj = document.getElementById("userResult");
    var strObj = document.getElementById("user");
    strObj.style.color="black";
    userObj.innerHTML = "";
}
//聚焦于password时初始化输入框及提示栏
function resetPassword() {
    var pwdObj = document.getElementById("pwdResult");
    pwdObj.innerHTML="";
}
//检查用户名是否符合要求并输出提示
function check_username() {
    var userObj = document.getElementById("userResult");
    var strObj = document.getElementById("user");
    var userStr = strObj.value;
    var warnInfo = check_username_legal(userStr);
    if (warnInfo == "") {
        strObj.style.color="black";
        userObj.innerHTML = warnInfo;
        flag = true;
    }
    else {
        userObj.style.color="red";
        strObj.style.color="red";//高亮已输入的字符
        userObj.innerHTML = warnInfo;
    }
}
// 检查用户名是否合法
function check_username_legal(str) {
    var warnInfo = "";
    if ("" == str) {
        warnInfo = "用户名为空";
        return warnInfo;
    }
    else if (!check_other_char(str)) {
        warnInfo = "用户名输入有误";
        return warnInfo;
    }
    return warnInfo;
}
// 检查用户名是否含有特殊字符
function check_other_char(str) {
    var other_char =/\w[\u4e00-\u9fa5a-zA-Z0-9_-]*/;//排除特殊字符与中文
    return str==str.match(other_char);//比较用户名
}
//检查密码是否符合要求并输出提示
function check_password() {
    var pwdObj = document.getElementById("pwdResult");
    var pwd = document.getElementById("password");
    pwdObj.style.color="red";
    var pwdStr = pwd.value;
    var len = pwdStr.length;
    if (len == 6) {
        pwdObj.innerHTML = "";//
        flag = true;
    }
    else if(len == 0){
        pwdObj.innerHTML = "密码为空";
        flag = false;
    }
    else{
        pwdObj.innerHTML = "密码长度输入有误";
        flag = false;
    }
}
//登陆
function log_check() {
    flag = false;//初始化flag
    check_username();//检查用户名是否符合要求
    check_password();//检查密码是否符合要求
    admin_pwd=123456;//初始密码123456
    admin_username="admin";//初始用户名admin
    var logObj = document.getElementById("logResult");
    logObj.innerHTML = "";//还原Log提示框
    logObj.style.color="red";
    var pwd = document.getElementById("password");
    var pwdStr = pwd.value;
    var strObj = document.getElementById("user");
    var userStr = strObj.value;
    if (flag == true) {//判断用户名与密码是否符合要求
        if ((pwdStr==admin_pwd)&&(userStr==admin_username)) {//判断密码或用户名是否正确
            window.location.href="room/room.html";
        }
        else {
            logObj.innerHTML = "密码或用户名错误";
        }
    }
    else {
        logObj.innerHTML = "输入信息有误，请查看提示";
    }
}
