$("#button").click(function(){
    var user=$("#user").val();
    var password=$("#password").val();
    var select=$('input[type=radio][name=optionsRadios]:checked').val();//获取单选框选择的值
    $.post("./assets/common/login.php",{"user":user,"password":password,"select":select},function (data) {
        var json = JSON.parse(data);
        if((data['flag'])=='0'){
            $("#logResult").html("登陆失败");
        }
        else{
            window.location.href='assets/common/mainPage.php';
        }
    });
});