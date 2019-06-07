$(document).ready(function(){
    $("body").on("click",".editBtn",function(){
        $("#main1").hide();
        $("#main2").show();

        console.log(1);
        var creditNum = $(this).parent().parent().siblings().eq(1).text();
        console.log(creditNum);

        $.post("../common/edit.php",{"card_no":creditNum,"flag":0},function (data) {
            var json=JSON.parse(data);
            console.log(json);
            $("#id").val(json[0].id);
            $("#user_name").val(json[0].user_name);
            $("#real_name").val(json[0].real_name);
            $("#mobile").val(json[0].mobile);
            $("#business").val(json[0].business);
            $("#card_no").val(json[0].card_no);
            $("#address").val(json[0].address);
            $("#password").val(json[0].password);
            $("#zipcode").val(json[0].zipcode);
            $("#enter_year").val(json[0].enter_year);
            $("#notify_state").val(json[0].class);

        })
    });
    $("body").on("click",".deleteBtn",function(){

        var id = $(this).parent().parent().siblings().eq(2).text();
        console.log(id);
        $.post("../common/edit.php",{"id":id,"flag":1},function (data) {

        })

        alert("删除成功！");
        window.location.href="mainPage.php";
    });


    $("#displayNotif").click(function () {

        var id=$("#id").val();
        var user_name=$("#user_name").val();
        var real_name=$("#real_name").val();
        var mobile=$("#mobile").val();
        var business=$("#business").val();
        var card_no=$("#card_no").val();
        var address=$("#address").val();
        var password=$("#password").val();
        var zipcode=$("#zipcode").val();
        var enter_year=$("#enter_year").val();
        var notify_state=$("#notify_state").val();

        $.post("../common/edit.php", {
            "id": id,
            "user_name": user_name,
            "real_name": real_name,
            "mobile": mobile,
            "business": business,
            "card_no": card_no,
            "address": address,
            "zipcode": zipcode,
            "enter_year": enter_year,
            "notify_state": notify_state,
            "password": password,
            "flag":2
        }, function (data) {
            alert("修改成功")
            window.location.href="mainPage.php";
        })

    })


});