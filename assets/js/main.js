
$(document).ready(function(){
    $.post("../common/sidebarInfo.php",{ },function (data) {
        var json=JSON.parse(data);
        $("#userNameInfo").html(json.username);
        $("#userLevelInfo").html(json.userLevel);
    });

    //加载界面时就加载所有信息
    $.post("../common/main.php",{"searchText":"","seltype":"allSearch"},function (data) {
        var html="";
        function showInfo() {
            html="";
            for(var i = (currentPage-1)*pageSize ; i<json.length && i<(currentPage)*pageSize;i++){
                if(json[i].state==1){
                    json[i].state="已审核";
                }else{
                    json[i].state="未审核";
                }
                html+='<tr>';
                html+="<td>"+json[i].statue+"</td>"
                    +"<td>"+json[i].name+"</td>"
                    +"<td>"+json[i].id+"</td>"
                    +"<td>"+json[i].dept+"</td>"
                    +"<td>"+json[i].team+"</td>"
                    +"<td>"+json[i].state+"</td>";
                html+='<td>\n' +
                    '                                                        <div class="form-button-action">\n' +
                    '                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link <btn-simple-primary editBtn" data-original-title="Edit Task" id="editBtn">\n' +
                    '                                                            <i class="la la-edit"></i>\n' +
                    '                                                        </button>\n' +
                    '                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger deleteBtn" data-original-title="Remove" id="deleteBtn">\n' +
                    '                                                            <i class="la la-times"></i>\n' +
                    '                                                        </button>\n' +
                    '                                                        </div>\n' +
                    '                                                    </td>';
                html+='</tr>';
            }

            $("#selectInfoTable").html(html);
        }
        var json = JSON.parse(data);
        var pageSize=6;
        var totalPage = Math.ceil(json.length/pageSize);
        var currentPage=1;

        var htmlBtnPre="<li><a href=\"#\" id=\"prePage\">«</a></li>";
        var htmlBtnSuf="<li><a href=\"#\" id=\"nextPage\">»</a></li><li>共</li><li><label id=\"totalPage\">4</label></li><li>页</li><li>第</li><li><label id=\"currentPage\">4</label></li><li>页</li>";
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
    });

    $("#searchBt").click(function(){
        var id=$("#searchText").val();
        var seltype=$("#seltype").val();
        $.post("../common/main.php",{"searchText":id,"seltype":seltype},function (data) {
            var html="";

            function showInfo() {
                html="";
                for(var i = (currentPage-1)*pageSize ; i<json.length && i<(currentPage)*pageSize;i++){
                    if(json[i].state==1){
                        json[i].state="已审核";
                    }else{
                        json[i].state="未审核";
                    }
                    html+='<tr>';
                    html+="<td>"+json[i].statue+"</td>"
                        +"<td>"+json[i].name+"</td>"
                        +"<td>"+json[i].id+"</td>"
                        +"<td>"+json[i].dept+"</td>"
                        +"<td>"+json[i].team+"</td>"
                        +"<td>"+json[i].state+"</td>";
                    html+='<td>\n' +
                        '                                                        <div class="form-button-action">\n' +
                        '                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link <btn-simple-primary" data-original-title="Edit Task" id="editBtn">\n' +
                        '                                                            <i class="la la-edit"></i>\n' +
                        '                                                        </button>\n' +
                        '                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger" data-original-title="Remove" id="deleteBtn">\n' +
                        '                                                            <i class="la la-times"></i>\n' +
                        '                                                        </button>\n' +
                        '                                                        </div>\n' +
                        '                                                    </td>';
                    html+='</tr>';
                }

                $("#selectInfoTable").html(html);
            }
            var json = JSON.parse(data);
            var pageSize=6;
            var totalPage = Math.ceil(json.length/pageSize);
            var currentPage=1;


            var htmlBtnPre="<li><a href=\"#\" id=\"prePage\">«</a></li>";
            var htmlBtnSuf="<li><a href=\"#\" id=\"nextPage\">»</a></li><li>共</li><li><label id=\"totalPage\">4</label></li><li>页</li><li>第</li><li><label id=\"currentPage\">4</label></li><li>页</li>";
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

        });
    });
});