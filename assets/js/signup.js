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
// var imageSrc = [ //验证码地址
//     "../images/verify/check1.jpeg",
//     "../images/verify/check2.jpeg",
//     "../images/verify/check3.jpeg"
// ];
// var verifyCodeInfo = [ //验证码内容
//     "ysbqm",
//     "strw3k",
//     "5dbcp"
// ];
// var tmpCode; //定义验证码变量
var checkStatus; //定义检查状态变量

nameErrorObj = document.getElementById("nameError");
IDErrorObj = document.getElementById("IDError");
pwdErrorObj = document.getElementById("pwdError");
pwdCheckErrorObj = document.getElementById("pwdCheckError");
// verifyCodeErrorObj = document.getElementById("verifyCodeError");





function addClass(obj, cls){
    var obj_class = obj.className,//获取 class 内容.
    blank = (obj_class != '') ? ' ' : '';//判断获取到的 class 是否为空, 如果不为空在前面加个'空格'.
    added = obj_class + blank + cls;//组合原来的 class 和需要添加的 class.
    obj.className = added;//替换原来的 class.
}
   
function removeClass(obj, cls){
    var obj_class = ' '+obj.className+' ';//获取 class 内容, 并在首尾各加一个空格. ex) 'abc    bcd' -> ' abc    bcd '
    obj_class = obj_class.replace(/(\s+)/gi, ' '),//将多余的空字符替换成一个空格. ex) ' abc    bcd ' -> ' abc bcd '
    removed = obj_class.replace(' '+cls+' ', ' ');//在原来的 class 替换掉首尾加了空格的 class. ex) ' abc bcd ' -> 'bcd '
    removed = removed.replace(/(^\s+)|(\s+$)/g, '');//去掉首尾空格. ex) 'bcd ' -> 'bcd'
    obj.className = removed;//替换原来的 class.
}






// change_verifyCodePhoto(); //初始化验证码
// //改变验证码
// function change_verifyCodePhoto() {
//     var img = document.getElementById("VerifyCodePhoto");
//     tmpCode = Math.floor((Math.random() * 3));
//     if (img.src.match(imageSrc[tmpCode])) { //判断随机的验证码与当前验证码是否相同
//         change_verifyCodePhoto();
//     } else {
//         img.src = imageSrc[tmpCode];
//     }
// }
// //检查验证码是否正确
// function check_verifyCode() {
//     var verifyCode_input = document.getElementById("verifyCode").value;
//     verifyCode_input = verifyCode_input.toLowerCase(); //忽略验证码大小写
//     if (verifyCode_input !== verifyCodeInfo[tmpCode]) { //验证码输入错误
//         verifyCodeErrorObj.style.color = "red";
//         verifyCodeErrorObj.innerHTML = arrErrorInfos[6];
//         checkStatus = true;
//     } else { //验证码输入正确
//         verifyCodeErrorObj.style.color = "green";
//         verifyCodeErrorObj.innerHTML = arrCorrectInfos[4];
//     }
// }
// //清除verifyCodeError
// function clear_verifyCodeError() {
//     verifyCodeErrorObj.innerHTML = "";
// }

//检查name合法性
function check_name() {
    var nameObj=document.getElementById("name");
    var name_input = nameObj.value;
    var namesLen = name_input.length;
    nameErrorObj.style.color = "red";
    if (namesLen <= 0) { //检查断name输入长度
        removeClass(nameObj.parentNode,"has-success");
        addClass(nameObj.parentNode,"has-error");
        nameErrorObj.innerHTML = arrErrorInfos[0];
        checkStatus = true;
    } else if (namesLen > 18) {
        removeClass(nameObj.parentNode,"has-success");
        addClass(nameObj.parentNode,"has-error");
        nameErrorObj.innerHTML = arrErrorInfos[1];
        checkStatus = true;
    } else { //name输入合法
        removeClass(nameObj.parentNode,"has-error");
        addClass(nameObj.parentNode,"has-success");
        nameErrorObj.style.color = "#59d05d";
        nameErrorObj.innerHTML = arrCorrectInfos[0];
    }
}
//清除nameError
function clear_nameError() {
    var nameObj=document.getElementById("name");
    nameObj.value = "";
    nameErrorObj.innerHTML = "&emsp;";
}



//检查学工号是否合法
function check_ID() {
    var IDObj=document.getElementById("ID");
    var IDNum_input = IDObj.value;
    IDErrorObj.style.color = "red";
    if (IDNum_input.length !== 9) { //检查学工号长度
        removeClass(IDObj.parentNode,"has-success");
        addClass(IDObj.parentNode,"has-error");
        IDErrorObj.innerHTML = arrErrorInfos[8];
        checkStatus = true;
    } else if (IDNum_input[0] !== "T" && IDNum_input[0] !== "S") { //检查学工号第一位
        removeClass(IDObj.parentNode,"has-success");
        addClass(IDObj.parentNode,"has-error");
        IDErrorObj.innerHTML = arrErrorInfos[5];
        checkStatus = true;
    } else { //学工号合法
        removeClass(IDObj.parentNode,"has-error");
        addClass(IDObj.parentNode,"has-success");
        IDErrorObj.style.color = "#59d05d";
        IDErrorObj.innerHTML = arrCorrectInfos[3];
    }
}
//清除IDError
function clear_IDError() {
    var IDObj=document.getElementById("ID");
    IDObj.value = "";
    IDErrorObj.innerHTML = "&emsp;";
}



//检查密码是否合法
function check_pwd() {
    var onlyNum = /^[0-9]+$/g; //密码只含数字
    var onlyEn = /^[a-zA-Z]+$/g; //密码只含英文字母
    var pwdObj=document.getElementById("password");
    var pwd_input = pwdObj.value;
    var pwdLen = pwd_input.length; //获取密码长度
    pwdErrorObj.style.color = "red";
    if (pwdLen < 6 || pwdLen > 16) { //检查密码长度是否在6～16范围内
        removeClass(pwdObj.parentNode,"has-success");
        addClass(pwdObj.parentNode,"has-error");
        pwdErrorObj.innerHTML = arrErrorInfos[2];
        checkStatus = true;
    } else if (onlyNum.test(pwd_input) || onlyEn.test(pwd_input)) { //检查密码是否只含数字或只含英文字母
        removeClass(pwdObj.parentNode,"has-success");
        addClass(pwdObj.parentNode,"has-error");
        pwdErrorObj.innerHTML = arrErrorInfos[3];
        checkStatus = true;
    } else { //密码合法
        removeClass(pwdObj.parentNode,"has-error");
        addClass(pwdObj.parentNode,"has-success");
        pwdErrorObj.style.color = "#59d05d";
        pwdErrorObj.innerHTML = arrCorrectInfos[1];
    }
}
//清除pwdError
function clear_pwdError() {
    var pwd = document.getElementById("password");
    pwd.value = "";
    pwdErrorObj.innerHTML = "&emsp;";
}


//检查两次密码是否相同
function check_pwdAgain() {
    var pwd1Obj=document.getElementById("password");
    var pwd2Obj=document.getElementById("pwdCheck")
    var pwd_input1 = pwd1Obj.value; //第一次输入的密码
    var pwd_input2 = pwd2Obj.value; //第二次输入的密码
    pwdCheckErrorObj.style.color = "red";
    if (pwd_input2.length === 0) { //第二次输入密码为空
        removeClass(pwd2Obj.parentNode,"has-success");
        addClass(pwd2Obj.parentNode,"has-error");
        pwdCheckErrorObj.innerHTML = arrErrorInfos[7];
        checkStatus = true;
    } else if (pwd_input1 !== pwd_input2) { //两次输入密码不同
        removeClass(pwd2Obj.parentNode,"has-success");
        addClass(pwd2Obj.parentNode,"has-error");
        pwdCheckErrorObj.innerHTML = arrErrorInfos[4];
        checkStatus = true;
    } else { //两次输入密码相同
        removeClass(pwd2Obj.parentNode,"has-error");
        addClass(pwd2Obj.parentNode,"has-success");
        pwdCheckErrorObj.style.color = "#59d05d";
        pwdCheckErrorObj.innerHTML = arrCorrectInfos[2];
    }
}
//清除pwdAgainError并清空输入框
function clear_pwdAgainError() {
    var pwdCheck = document.getElementById("pwdCheck");
    pwdCheck.value = ""; //清空输入框
    pwdCheckErrorObj.innerHTML = "&emsp;";
}



//对键盘输入作出响应
function keyTrigger() {
    if (event.keyCode == 13) { //单击回车（13）触发
        submit_check(); //调用登陆方法
    }
}
//按顺序检查所有输入项
function check_all_status_in_order() {
    check_ID();
    check_name();
    check_pwd();
    check_pwdAgain();
    // check_verifyCode();
}
//提交检查
function submit_check() {
    checkStatus = false; //初始化检查状态
    check_all_status_in_order(); //按顺序检查所以输入是否正确
    var checkBoxObj = document.getElementById("agreeItems");
    if (!checkBoxObj.checked) { //检查checkBox是否被选中,并在报错后变更验证码
        alert(submitInfos[0]);
        // change_verifyCodePhoto(); //报错并改变验证码
    } else if (checkStatus) { //检查所有输入项是否合法,并在报错后变更验证码
        alert(submitInfos[1]);
        // change_verifyCodePhoto(); //报错并改变验证码
    } else {
        var confirm = window.confirm(submitInfos[2]); //弹出确认框
        if (confirm) { //判断是否确认
            window.location.href = "../../index.html"; //跳转登陆界面
        }
    }
    // document.getElementById("verifyCode").blur(); //使文本框失去焦点，避免误触发clear_verifyCodeError()
}