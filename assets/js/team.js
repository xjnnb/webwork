
$(document).ready(function () {
    $.post("../common/sidebarInfo.php",{ },function (data) {
        var json=JSON.parse(data);
        $("#userNameInfo").html(json.username);
        $("#userLevelInfo").html(json.userLevel);
    });

    $.post("../common/team.php",{"searchText":""},function (data) { //预加载
        var json = JSON.parse(data);
        console.log(json);
        var html="";
        html+="<div class=\"col-sm-3 col-md-3 col-lg-3\">\n" +
            "                                                        <div class=\"card sm-card\" style=\"background-color: #f2f3f8;border-radius: 10px;\">\n" +
            "                                                            <div class=\"icon-preview addTeam\" style=\"font-size: inherit;font-size: 6rem;  text-align: center;\"><i class=\"la la-plus\"></i></div>\n" +
            "                                                        </div>\n" +
            "                                                    </div>";
        for(var i=0;i<json.length;i++){
            html+="<div class=\"col-sm-3 col-md-3 col-lg-3\">\n" +
                "                                                        <div class=\"card sm-card\">\n" +
                "                                                            <img class=\"card-img-top\" src=\"http://cn.inspinia.cn/html/inspiniacn/quillpro/assets/img/gallery-image-3.jpg\" alt=\"Gallery Image 3\">\n" +
                "                                                            <div class=\"card-body\">\n" +
                "                                                                <h4 class=\"card-title\">"+json[i].team_name+"</h4>\n" +
                "                                                                <p class=\"card-text\"><small>"+json[i].simple+"</small></p>\n" +
                "                                                                <p class=\"card-text text-right\">\n" +
                "                                                                   <div class=\"form-button-action\">\n" +
                "                                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link <btn-simple-primary editBtn\" data-original-title=\"Edit Task\" id=\"editBtn\">\n" +
                "                                                                              <i class=\"la la-edit\"></i>\n" +
                "                                                                            </button>\n" +
                "                                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link btn-simple-danger deleteBtn\" data-original-title=\"Remove\" id=\"deleteBtn\">\n" +
                "                                                                                <i class=\"la la-times\"></i>\n" +
                "                                                                            </button>\n" +
                "                                                                    </div>\n" +
                "                                                                </p>\n" +
                "                                                            </div>\n" +
                "                                                        </div>\n" +
                "                                                    </div>";
        }
        $("#selectInfoTable").html(html);
        //metchHeight
        var $divClass = $('.sm-card');
        var height = 0;
        $divClass.each(function () {
            if ($(this).height() > height) {
                height = $(this).height();
            }
        });
        $divClass.height(height);
        $('.icon-preview').css('marginTop',height/3);

        //pagination
        var json = JSON.parse(data);
        var pageSize=7;
        var totalPage = Math.ceil(json.length/pageSize);
        var currentPage=1;

        var htmlBtnPre="<li><a href=\"#\" id=\"prePage\">«</a></li>";
        var htmlBtnSuf="<li><a href=\"#\" id=\"nextPage\">»</a></li>";
        var htmlBtn=htmlBtnPre;
        for(var i=1;i<=totalPage;i++){
            htmlBtn+="<li><a href='#' class ='jumpPage'>"+i+"</a></li>";
        }
        htmlBtn+=htmlBtnSuf;
        $('#pagination').html(htmlBtn);

        $("body").on("click",".jumpPage",function(e){
            e.preventDefault();   //阻止默认事件
            currentPage=$(this).parent().text();
            console.log(currentPage);
            $("#currentPage").html(currentPage);
            showInfo();
        });

        if(totalPage==0){
            $("#selectInfoTable").html("暂无数据");
        }else{
            $("#totalPage").html(totalPage);
            $("#currentPage").html(1);
            showInfo();
        }
        $("#nextPage").click(function () {
            currentPage=Math.min(currentPage+1,totalPage);
            $("#currentPage").html(currentPage);
            showInfo();
        });
        $("#prePage").click(function () {
            currentPage=Math.max(currentPage-1,1);
            $("#currentPage").html(currentPage);
            showInfo();
        })

    })


    $("#searchBt").click(function () {
        var searchText=$("#searchText").val();
        $.post("../common/team.php",{"searchText":searchText},function (data) {
            var json = JSON.parse(data);
            console.log(json);
            function showInfo() {
                var html = "";
                html += "<div class=\"col-sm-3 col-md-3 col-lg-3\">\n" +
                    "                                                        <div class=\"card sm-card\" style=\"background-color: #f2f3f8;border-radius: 10px;\">\n" +
                    "                                                            <div class=\"icon-preview\" style=\"font-size: inherit;font-size: 6rem; text-align: center;\"><i class=\"la la-plus\"></i></div>\n" +
                    "                                                        </div>\n" +
                    "                                                    </div>";
                for (var i = 0; i < json.length; i++) {
                    html += "<div class=\"col-sm-3 col-md-3 col-lg-3\">\n" +
                        "                                                        <div class=\"card sm-card\">\n" +
                        "                                                            <img class=\"card-img-top\" src=\"http://cn.inspinia.cn/html/inspiniacn/quillpro/assets/img/gallery-image-3.jpg\" alt=\"Gallery Image 3\">\n" +
                        "                                                            <div class=\"card-body\">\n" +
                        "                                                                <h4 class=\"card-title\">" + json[i].team_name + "</h4>\n" +
                        "                                                                <p class=\"card-text\"><small>" + json[i].simple + "</small></p>\n" +
                        "                                                                <p class=\"card-text text-right\">\n" +
                        "                                                                   <div class=\"form-button-action\">\n" +
                        "                                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link <btn-simple-primary editBtn\" data-original-title=\"Edit Task\" id=\"editBtn\">\n" +
                        "                                                                              <i class=\"la la-edit\"></i>\n" +
                        "                                                                            </button>\n" +
                        "                                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link btn-simple-danger deleteBtn\" data-original-title=\"Remove\" id=\"deleteBtn\">\n" +
                        "                                                                                <i class=\"la la-times\"></i>\n" +
                        "                                                                            </button>\n" +
                        "                                                                    </div>\n" +
                        "                                                                </p>\n" +
                        "                                                            </div>\n" +
                        "                                                        </div>\n" +
                        "                                                    </div>";
                }
                $("#selectInfoTable").html(html);
                //metchHeight
                var $divClass = $('.sm-card');
                var height = 0;
                $divClass.each(function () {
                    if ($(this).height() > height) {
                        height = $(this).height();
                    }
                });
                $divClass.height(height);
                $('.icon-preview').css('marginTop',height/3);
            }

            //pagination
            var json = JSON.parse(data);
            var pageSize=7;
            var totalPage = Math.ceil(json.length/pageSize);
            var currentPage=1;

            var htmlBtnPre="<li><a href=\"#\" id=\"prePage\">«</a></li>";
            var htmlBtnSuf="<li><a href=\"#\" id=\"nextPage\">»</a></li>";
            var htmlBtn=htmlBtnPre;
            for(var i=1;i<=totalPage;i++){
                htmlBtn+="<li><a href='#' class ='jumpPage'>"+i+"</a></li>";
            }
            htmlBtn+=htmlBtnSuf;
            $('#pagination').html(htmlBtn);

            $("body").on("click",".jumpPage",function(e){
                e.preventDefault();   //阻止默认事件
                currentPage=$(this).parent().text();
                console.log(currentPage);
                $("#currentPage").html(currentPage);
                showInfo();
            });

            if(totalPage==0){
                $("#selectInfoTable").html("暂无数据");
            }else{
                $("#totalPage").html(totalPage);
                $("#currentPage").html(1);
                showInfo();
            }
            $("#nextPage").click(function () {
                currentPage=Math.min(currentPage+1,totalPage);
                $("#currentPage").html(currentPage);
                showInfo();
            });
            $("#prePage").click(function () {
                currentPage=Math.max(currentPage-1,1);
                $("#currentPage").html(currentPage);
                showInfo();
            })
        })
    })


    $("body").on("click", ".addTeam", function () {

        $("#main1").hide();
        $("#main3").show();

    })

    $("#saveNewTeam1").click(function () {
        var name =$("#name").val();
        var teacher=$("#teacher").val();
        var stu=$("#stu").val();
        var comment=$("#comment").val();
        $.post("../common/addNewTeam.php",{'name':name,'teacher':teacher,'stu':stu,'comment':comment},function (data) {
            if(data==1){
                alert("添加团队成功！");
                window.location.href='../common/teamPage.php';
            }else{
                alert("信息为空或者成员已经被添加！");
            }
        })
    })
})
