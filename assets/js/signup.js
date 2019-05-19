/*
Author:Xu Jianan
BuildDate:2019-04-10
Version:2.0
Function:lab-5 Sign Up JS
*/
var arrInfos=[//输入规则提示文本
    "6~18 个字符，可使用字母、数字、下划线，需以字母开头",
    "6~16 个字符，区分大小写",
    "请再次填写密码",
    "忘记密码时，可以通过该手机号码快速找回密码",
    "请填写图片中的字符，不区分大小写"
];
var arrErrorInfos=[//输入报错提示文本
    "长度应为 6~18 个字符",
    "邮件地址需由字母、数字或下划线组成",
    "密码长度应为 6~16 个字符",
    "密码过于简单，请尝试“字母+数字”的组合",
    "两次填写的密码不一致",
    "请填写正确的手机号",
    "验证码输入错误",
    "邮件地址第一位应以字母开头",
    "密码为空"
];
var arrCorrectInfos=[//输入正确提示文本
    "用户名可用",
    "密码可用",
    "密码一致",
    "手机号码可用",
    "验证通过"
];
var submitInfos=[//提交提示文本
    "请先同意服务条款再进行注册",
    "注册项有误",
    "注册提交"
];
var imageSrc=[//验证码地址
    "../images/verify/check1.jpeg",
    "../images/verify/check2.jpeg",
    "../images/verify/check3.jpeg"
];
var verifyCodeInfo=[//验证码内容
    "ysbqm",
    "strw3k",
    "5dbcp"
];
var tmpCode;//定义验证码变量
var checkStatus;//定义检查状态变量
emailResultObj = document.getElementById("emailResult");
pwdResultObj = document.getElementById("pwdResult");
pwdCheckResultObj = document.getElementById("pwdCheckResult");
phoneResultObj = document.getElementById("phoneResult");
verifyCodeResultObj = document.getElementById("verifyCodeResult");

emailErrorObj = document.getElementById("emailError");
pwdErrorObj = document.getElementById("pwdError");
pwdCheckErrorObj = document.getElementById("pwdCheckError");
phoneErrorObj = document.getElementById("phoneError");
verifyCodeErrorObj = document.getElementById("verifyCodeError");

change_verifyCodePhoto();//初始化验证码
//初始化规则提示文本
emailResultObj.innerHTML=arrInfos[0];
pwdResultObj.innerHTML=arrInfos[1];
pwdCheckResultObj.innerHTML=arrInfos[2];
phoneResultObj.innerHTML=arrInfos[3];
verifyCodeResultObj.innerHTML=arrInfos[4];
//改变验证码
function change_verifyCodePhoto() {
    var img = document.getElementById("VerifyCodePhoto");
    tmpCode = Math.floor((Math.random()*3));
    if(img.src.match(imageSrc[tmpCode])){//判断随机的验证码与当前验证码是否相同
        change_verifyCodePhoto();
    }else{
        img.src = imageSrc[tmpCode];
    }
}
//检查验证码是否正确
function check_verifyCode() {
    var verifyCode_input=document.getElementById("verifyCode").value;
    verifyCode_input=verifyCode_input.toUpperCase();
    verifyCode_input=verifyCode_input.toLowerCase(); //忽略验证码大小写
    if (verifyCode_input!==verifyCodeInfo[tmpCode]){ //验证码输入错误
        verifyCodeErrorObj.style.color="red";
        verifyCodeErrorObj.innerHTML=arrErrorInfos[6];
        checkStatus = true;
    }
    else { //验证码输入正确
        verifyCodeErrorObj.style.color="green";
        verifyCodeErrorObj.innerHTML=arrCorrectInfos[4];
    }
}
//清除verifyCodeError
function clear_verifyCodeError(){
    verifyCodeErrorObj.innerHTML="";
}
//检查手机号是否合法
function check_phoneNum() {
    var phoneNum_input=document.getElementById("phone").value;
    var phoneLen=phoneNum_input.length; //获取手机号长度
    if (phoneNum_input%1 !== 0 || phoneLen!==11){//检查手机号码是否为整数且是否为11位数
        phoneErrorObj.style.color="red";
        phoneErrorObj.innerHTML=arrErrorInfos[5];
        checkStatus = true;
    }
    else { //手机号合法
        phoneErrorObj.style.color="green";
        phoneErrorObj.innerHTML=arrCorrectInfos[3];
    }
}
//清除phoneNumError
function clear_phoneNumError(){
    phoneErrorObj.innerHTML="";
}
//检查密码是否合法
function check_pwd() {
    var onlyNum = /^[0-9]+$/g; //密码只含数字
    var onlyEn = /^[a-zA-Z]+$/g; //密码只含英文字母
    var pwd_input=document.getElementById("password").value;
    var pwdLen=pwd_input.length; //获取密码长度
    pwdErrorObj.style.color="red";
    if (pwdLen<6||pwdLen>16){ //检查密码长度是否在6～16范围内
        pwdErrorObj.innerHTML=arrErrorInfos[2];
        checkStatus = true;
    }
    else if (onlyNum.test(pwd_input)|| onlyEn.test(pwd_input)){ //检查密码是否只含数字或只含英文字母
        pwdErrorObj.innerHTML=arrErrorInfos[3];
        checkStatus = true;
    }
    else { //密码合法
        pwdErrorObj.style.color="green";
        pwdErrorObj.innerHTML=arrCorrectInfos[1];
    }
}
//清除pwdError
function clear_pwdError() {
    var pwd=document.getElementById("password");
    pwd.value="";
    pwdErrorObj.innerHTML="";
}
//检查两次密码是否相同
function check_pwdAgain() {
    var pwd_input1=document.getElementById("password").value; //第一次输入的密码
    var pwd_input2=document.getElementById("pwdCheck").value; //第二次输入的密码
    pwdCheckErrorObj.style.color="red";
    if(pwd_input2.length===0){ //第二次输入密码为空
        pwdCheckErrorObj.innerHTML=arrErrorInfos[8];
        checkStatus = true;
    }
    else if (pwd_input1!==pwd_input2){ //两次输入密码不同
        pwdCheckErrorObj.innerHTML=arrErrorInfos[4];
        checkStatus = true;
    }
    else { //两次输入密码相同
        pwdCheckErrorObj.style.color="green";
        pwdCheckErrorObj.innerHTML=arrCorrectInfos[2];
    }
}
//清除pwdAgainError并清空输入框
function clear_pwdAgainError(){
    var pwdCheck=document.getElementById("pwdCheck");
    pwdCheck.value=""; //清空输入框
    pwdCheckErrorObj.innerHTML="";
}
//检查email地址合法性
function check_email() {
    var addressRule = /^[a-zA-Z0-9_]+$/g; //只包含字母数字下划线
    var firstEn = /^[A-Za-z]/g; //首位为字母
    var address_input=document.getElementById("email").value;
    var addressLen = address_input.length;
    emailErrorObj.style.color="red";
    if(addressLen < 6 || addressLen > 18){ //检查断email输入长度
        emailErrorObj.innerHTML=arrErrorInfos[0];
        checkStatus = true;
    }
    else if (!addressRule.test(address_input)){ //检查email输入是否只包含字母数字下划线
        emailErrorObj.innerHTML=arrErrorInfos[1];
        checkStatus = true;
    }
    else if (!firstEn.test(address_input)){ //检查email输入首位是否为字母
        emailErrorObj.innerHTML=arrErrorInfos[7];
        checkStatus = true;
    }
    else{ //email输入合法
        emailErrorObj.style.color="green";
        emailErrorObj.innerHTML=arrCorrectInfos[0];
    }
}
//清除emailError
function clear_emailError() {
    emailErrorObj.innerHTML="";
}
//对键盘输入作出响应
function keyTrigger(){
    if (event.keyCode == 13){ //单击回车（13）触发
        submit_check(); //调用登陆方法
    }
}
//按顺序检查所有输入项
function check_all_status_in_order() {
    check_email();
    check_pwd();
    check_pwdAgain();
    check_phoneNum();
    check_verifyCode();
}
//提交检查
function submit_check() {
    checkStatus = false; //初始化检查状态
    check_all_status_in_order(); //按顺序检查所以输入是否正确
    var checkBoxObj=document.getElementById("checkbox");
    if (!checkBoxObj.checked){ //检查checkBox是否被选中,并在报错后变更验证码
        alert(submitInfos[0]);
        change_verifyCodePhoto(); //报错并改变验证码
    }
    else if (checkStatus) { //检查所有输入项是否合法,并在报错后变更验证码
        alert(submitInfos[1]);
        change_verifyCodePhoto(); //报错并改变验证码
    }
    else {
       var confirm = window.confirm(submitInfos[2]); //弹出确认框
       if (confirm) { //判断是否确认
           window.location.href="../common/main.html"; //跳转登陆界面
       }
    }
    document.getElementById("verifyCode").blur(); //使文本框失去焦点，避免误触发clear_verifyCodeError()
}