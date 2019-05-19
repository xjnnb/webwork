/*
Author:Xu Jianan
BuildDate:2019-04-24
Version:1.0
Function:lab-7 Login JS Powered By JQuery
*/
//对键盘事件作出响应
$(document).keydown(function(event) {
    //单击回车键登陆检查
    if (event.keyCode == "13") {//keyCode=13是回车键
        $.getJSON("js/users.json",function (data) {//使用AJAX请求来获得JSON数据
            $.each(data,function (index,obj) {//对JSON进行遍历
                if ($('#user').val() == obj.name && $('#password').val() == obj.pwd) {//比较数据，并输出结果
                    $("#logResult").css("color","black");
                    $("#logResult").html("登录成功");
                    setTimeout("window.location='../login.php';", 800);//设置延时跳转
                }
                else {
                    $("#logResult").css("color","red");
                    $("#logResult").html("登录失败");
                }
            })
        })
    }
});
$(document).ready(function(){//当页面加载完成后执行
    //聚焦于username时初始化输入框及提示栏
    $("#user").focus(function(){
        $(this).css("background-color","#FFFFCC");
        $(this).css("color","black");
        $("#userResult").html("");
        $("#logResult").html("");
    });
    //检查用户名是否符合要求并输出提示
    $("#user").blur(function(){
        $(this).css("background-color","#FFFFFF");
        var warnInfo = check_username_legal($(this).val());
        if (warnInfo === "") {
            $(this).css("color","black");
            $("#userResult").html(warnInfo);
        }
        else {
            $(this).css("color","red");
            $("#userResult").css("color","red");
            $("#userResult").html(warnInfo);
        }
    });
    //聚焦于password时初始化输入框及提示栏
    $("#password").focus(function(){
        $(this).css("background-color","#FFFFCC");
        $(this).css("color","black");
        $("#pwdResult").html("");
        $("#logResult").html("");
    });
    //检查密码是否符合要求并输出提示
    $("#password").blur(function(){
        $(this).css("background-color","#FFFFFF");
        $("#pwdResult").css("color","red");
        var len = $("#password").val().length;
        if (len == 0) {
            $("#pwdResult").html( "密码为空");
        }
        else if (len>6){
            $("#pwdResult").html( "密码不得超过六位");
        }
    });
    //单击登陆按钮登陆检查
    $("#button").click(function(){
        $.getJSON("js/users.json",function (data) {//使用AJAX请求来获得JSON数据
            $.each(data,function (index,obj) {//对JSON进行遍历
                if ($('#user').val() == obj.name && $('#password').val() == obj.pwd) {//比较数据，并输出结果
                    $("#logResult").css("color","black");
                    $("#logResult").html("登录成功");
                    setTimeout("window.location='room/room.html';", 800);//设置延时跳转
                }
                else {
                    $("#logResult").css("color","red");
                    $("#logResult").html("登录失败");
                }
            })
        })
    });

});

// TODO:优化密码判断结构
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