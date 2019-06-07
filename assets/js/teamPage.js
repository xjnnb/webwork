$(document).ready(function () {
    $("body").on("click", "#editBtn", function () {

        var team_name = $(this).parent().siblings().eq(0).text();
        $("#main1").hide();
        $("#main2").show();

        $.post("../common/editTeam.php",{"name":team_name,"flag":0},function (data) {
            var json=JSON.parse(data);
            $("#chargeTeach").html(json[0].teacher_name);
            $("#chargeStu").html(json[0].stu_name);
        })
        function showInfo() {
            $.post("../common/editTeam.php", {"name": team_name, "flag": 1}, function (data) {
                var json = JSON.parse(data);
                var html = "";
                for (var i = 0; i < json.length; i++) {
                    html += "<tr>\n" +
                        "                                            <td>" + json[i].name + "</td>\n" +
                        "                                            <td>" + json[i].id + "</td>\n" +
                        "                                        </tr>\n" +
                        "                                        <tr>"
                }
                $("#stuTable").html(html);
            })
        }
        showInfo();
        $("#addNewPeo").click(function () {
            var stu_id=$("#inlineinput").val();
            $.post("../common/editTeam.php",{"name":team_name,"stu_id":stu_id,"flag":2},function (data) {
                if(data==1){
                    alert("添加成功");
                    showInfo();

                }else{
                    alert("此学号不存在或已有团队！");
                }
            })


        })
        $.post("../common/editTeam.php",{"name":team_name,"flag":3},function (data) {
            $("#introduce_text").html(data);

        })
        $.post("../common/editTeam.php",{"name":team_name,"flag":4},function (data) {
            var json=JSON.parse(data);
            var html="<h2 style=\"margin-top: 0px;\">Just do it！</h2>";
            for(var i=0;i<json.length;i++){
                html+="<ul class=\"timeline-items\">\n" +
                    "                                                <li class=\"timeline-item animated fadeInLeft\" style=\"animation-duration: 300ms;\">\n" +
                    "                                                    <time>"+json[i].date+"         "+json[i].type+"</time>\n" +
                    "                                                    <hr>\n" +
                    "                                                    <p>"+json[i].name+"</p>\n" +
                    "                                                    <p>"+json[i].text+"</p>\n" +
                    "                                                    <hr>\n" +
                    "                                                </li>\n" +
                    "                                            </ul>"
            }
            $("#planTable").html(html);


        })


    })



})