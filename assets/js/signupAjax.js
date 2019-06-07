$(document).ready(function(){
    $("#okBtn").click(function(){
        var name=$("#name").val();
        var sex=$('input:radio[name="optionsRadios"]:checked').val();
        var id=$("#ID").val();
        var dept=$("#exampleFormControlSelect1").val();
        var password=$("#password").val();
        $.post("../common/signup.php",{"name":name,"sex":sex,"id":id,"dept":dept,"password":password},function (data) {
            console.log("DEBUG");
            var json = JSON.parse(data);
            //console.log(json[0].result);
            if(json[0].result== '0'){
                alert("注册成功！");
                window.location.href="../../index.html";
            }
            else{
                $('#IDError').html("该学号已经被注册");
            }
        });
    });
});