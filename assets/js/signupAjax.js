
$(document).ready(function(){
    $("#okBtn").click(function(){
        var name=$("#name").val();
        var sex=$("#selectSex").val();
        var id=$("#ID").val();
        var dept=$("#exampleFormControlSelect1").val();
        var password=$("#password").val();
        $.post("../common/signup.php",{"name":name,"sex":sex,"id":id,"dept":dept,"password":password},function (data) {
            var json = JSON.parse(data);
            var html="";
            console.log(json.result);
            // $("#selectInfoTable").html(html);
        });
    });
});