
$(document).ready(function () {
    $("#searchBt").click(function () {
        var searchText=$("#searchText").val();
        $.post("../common/team.php",{"searchText":searchText},function (data) {
            var json = JSON.parse(data);
            console.log(json);
            var html="";
            html+="<div class=\"col-sm-3 col-md-3 col-lg-3\">\n" +
                "                                                        <div class=\"card sm-card\" style=\"background-color: #f2f3f8;border-radius: 10px;\">\n" +
                "                                                            <div class=\"icon-preview\" style=\"font-size: inherit;font-size: 6rem; text-align: center;\"><i class=\"la la-plus\"></i></div>\n" +
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
                    "                                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link <btn-simple-primary\" data-original-title=\"Edit Task\" id=\"editBtn\">\n" +
                    "                                                                              <i class=\"la la-edit\"></i>\n" +
                    "                                                                            </button>\n" +
                    "                                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link btn-simple-danger\" data-original-title=\"Remove\" id=\"deleteBtn\">\n" +
                    "                                                                                <i class=\"la la-times\"></i>\n" +
                    "                                                                            </button>\n" +
                    "                                                                    </div>\n" +
                    "                                                                </p>\n" +
                    "                                                            </div>\n" +
                    "                                                        </div>\n" +
                    "                                                    </div>";
            }
            $("#selectInfoTable").html(html);

        })
    })
})
