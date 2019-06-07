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
var nameCorrect,IDCorrect,pwdCorrect,pwdCheckCorrect; //定义检查状态变量


//检测姓名
$('#name').blur(function () {
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
        nameCorrect=true;
    }
});
//去除提示
$('#name').focus(function(){
    $(this).val('');
    $('#nameError').html('&emsp;');
});


//检查学工号
$('#ID').blur(function (){
    var IDNum_input=$(this).val();
    $('#IDError').css('color', 'red');
    if ($(this).val().length !== 9) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#IDError').html(arrErrorInfos[8]);
        checkStatus = true;
    }
    else if (IDNum_input[0] !== "T" && IDNum_input[0] !== "S") {
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
        IDCorrect=true;
    }
});
//去除提示
$('#ID').focus(function(){
    $(this).val('');
    $('#IDErrorObj').html('&emsp;');
});

//检查密码
$('#passwords').blur(function () {
    var onlyNum = /^[0-9]+$/g; //密码只含数字
    var onlyEn = /^[a-zA-Z]+$/g; //密码只含英文字母
    $('#pwdError').css('color', 'red');
    if ($(this).val().length< 6 || $(this).val().length > 16) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#pwdError').html(arrErrorInfos[2]);
        checkStatus = true;
    }
    else if (onlyNum.test($(this).val())|| onlyEn.test($(this).val())) {
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#pwdError').html(arrErrorInfos[3]);
        checkStatus = true;
    }
    else { //name输入合法
        $(this).parent().removeClass("has-error");
        $(this).parent().addClass("has-success");
        $('#pwdError').css('color', '#59d05d');
        $('#pwdError').html(arrCorrectInfos[1]);
        pwdCorrect=true;
    }
});
//去除提示
$('#passwords').focus(function () {
    $(this).val('');
    $('#pwdError').html('&emsp;');
});

//检查确认密码
$('#pwdCheck').blur(function () {
    $('#pwdCheckError').css('color', 'red');
    if ($(this).val().length===0) {//确认密码为空
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#pwdCheckError').html(arrErrorInfos[7]);
        checkStatus = true;
    }
    else if ($(this).val()!==$('#passwords').val()) {//两次输入密码不同
        $(this).parent().removeClass("has-success");
        $(this).parent().addClass("has-error");
        $('#pwdCheckError').html(arrErrorInfos[4]);
        checkStatus = true;
    }
    else { //两次输入密码相同
        $(this).parent().removeClass("has-error");
        $(this).parent().addClass("has-success");
        $('#pwdCheckError').css('color', '#59d05d');
        $('#pwdCheckError').html(arrCorrectInfos[2]);
        pwdCheckCorrect=true;
    }
});
//去除提示
$('#pwdCheck').focus(function () {
    $(this).val('');
    $('#pwdCheckError').html('&emsp;');
});

//对键盘输入作出响应
$(document).keydown(function(event){
    if (event.keyCode == 13) { //单击回车触发
        submit_check(); //调用登陆方法
    }
});

//按顺序检查所有输入项
function check_all_status_in_order() {
    $('#name').blur();
    $('#ID').blur();
    $('#passwords').blur();
    $('#pwdCheck').blur();
}

//提交检查
$("#okBtn").click(function(){
    nameCorrect= false, IDCorrect= false,pwdCorrect= false,pwdCheckCorrect= false;//初始化
    check_all_status_in_order(); //校验全部

    // if (!($('.form-check-input').is(':checked'))) { //检查checkBox是否被选中
    //     alert(submitInfos[0]);
    // }
    // else
    if (nameCorrect && IDCorrect && pwdCorrect && pwdCheckCorrect){
        alert(submitInfos[1]);
    }
    else {
        var confirm = window.confirm(submitInfos[2]); //弹出确认框
        if (confirm) { //判断是否确认
            var name=$("#name").val();
            var sex=$('input:radio[name="optionsRadios"]:checked').val();
            var id=$("#ID").val();
            var dept=$("#exampleFormControlSelect1").val();
            var password=$("#password").val();
            $.post("../common/signup.php",{"name":name,"sex":sex,"id":id,"dept":dept,"password":password},function (data) {
                var json = JSON.parse(data);
                if(json[0].result== '0'){
                    alert("注册成功，2秒后跳转！");
                    setTimeout(function(){ window.location.href="../../index.html"; }, 2000);
                }
                else{
                    $('#IDError').html("该学号已经被注册");
                }
            });
        }
    }
});
// function submit_check() {
//     nameCorrect= false, IDCorrect= false,pwdCorrect= false,pwdCheckCorrect= false;//初始化
//     check_all_status_in_order(); //按顺序检查所以输入是否正确
//     var checkBoxObj = document.getElementById("agreeItems");
//     if (!checkBoxObj.checked) { //检查checkBox是否被选中,并在报错后变更验证码
//         alert(submitInfos[0]);
//     } else if (checkStatus) { //检查所有输入项是否合法,并在报错后变更验证码
//         alert(submitInfos[1]);
//     } else {
//         var confirm = window.confirm(submitInfos[2]); //弹出确认框
//         if (confirm) { //判断是否确认
//             //window.location.href = "../../index.html"; //跳转登陆界面
//         }
//     }
// }