$(document).ready(function() {
    $("body").on("click", ".editBtn", function () {
        var id = $(this).parent().parent().siblings().eq(2).text();
        var power = id.charAt(0);

        if (power == 'S') {
            alert("对不起，您没有此权限！");
        } else {
                $("#main1").hide();
                $("#main2").show();


            $.post("../common/editPerson.php", {"id": id, "flag": 0}, function (data) {
                var json = JSON.parse(data);

                $("#name").val(json[0].name);
                $("#id").val(json[0].id);
                if (json[0].sex == "Make") {
                    $('#selectMale').attr("checked", true);
                    $('#selectFemale').attr("checked", false);
                } else {
                    $('#selectMale').attr("checked", false);
                    $('#selectFemale').attr("checked", true);
                }
                $("#team").val(json[0].team);
                $("#statue").val(json[0].statue);
                $("#dept").val(json[0].dept);
                $("#introduce").val(json[0].introduce);
                $("#password").val(json[0].password);
                $("#passwordAgain").val(json[0].password);
            })
        }
    });


        $("body").on("click", ".deleteBtn", function () {
            var id = $(this).parent().parent().siblings().eq(2).text();
            var power = id.charAt(0);

            if (power == 'S') {
                alert("对不起，您没有此权限！");
            } else {
                if(confirm("确定执行删除操作?")){
                    var id = $(this).parent().parent().siblings().eq(2).text();
                    $.post("../common/editPerson.php", {"id": id, "flag": 1}, function (data) {
                        alert("删除成功！");
                        window.location.href = "mainPage.php";
                    })
                }

            }
        });



    $("#displayNotif").click(function () {

        var id=$("#id").val();
        var introduce=$("#introduce").val();
        var password=$("#password").val();
        var passwordAgain=$("#passwordAgain").val();
        console.log("hahahahahah");
        $.post("../common/editPerson.php", {"id": id, "introduce":introduce,"password":password,"passwordAgain":passwordAgain,"flag": 2}, function (data) {
            if(data==0){

                alert("两次密码不一致！");
            }else{
                alert("修改成功！");
                $("#main2").hide();
                $("#main1").show();
            }
        })


    })

}
)