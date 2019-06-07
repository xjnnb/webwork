
$(document).ready(function(){
    var permission ="0";
    $.post("../common/sidebarInfo.php",{ },function (data) {
        var json=JSON.parse(data);
        $("#userNameInfo").html(json.username);
        $("#userLevelInfo").html(json.userLevel);
        permission = json.permit;
    });

    $.post("../common/billboard.php",{"seltime":"allSearch","searchText":"","seltype":"allSearch"},function (data) {
        var html="";
        console.log(data);
        console.log((data.length));
        var json = JSON.parse(data);
        console.log(json.length);
        console.log(json);
        for(var i = 0 ; i<json.length;i++){
            html+='<tr>';
            html+="<tr>\n" +
                "                                            <td>\n" +
                "                                                <p>"+json[i].type+"</p>\n" +
                "                                                <small>"+json[i].date+"</small>\n" +
                "                                            </td>\n" +
                "                                            <td><span class=\"h6\">"+json[i].name+"</span>\n" +
                "                                                <p>"+json[i].text+"</p>\n" +
                "                                            </td>\n" +
                "                                        </tr>"

        }

        $("#selectInfoTable").html(html);
    });


    $("#searchBt").click(function(){
        console.log("success");
        var seltime=$("#seltime").val();
        var searchText=$("#searchText").val();
        var seltype=$("#seltype").val();
        $.post("../common/billboard.php",{"seltime":seltime,"searchText":searchText,"seltype":seltype},function (data) {
            var html="";
            console.log(data);
            console.log((data.length));
            var json = JSON.parse(data);
             console.log(json.length);
             console.log(json);
            for(var i = 0 ; i<json.length;i++){
                html+='<tr>';
                html+="<tr>\n" +
                    "                                            <td>\n" +
                    "                                                <p>"+json[i].type+"</p>\n" +
                    "                                                <small>"+json[i].date+"</small>\n" +
                    "                                            </td>\n" +
                    "                                            <td><span class=\"h6\">"+json[i].name+"</span>\n" +
                    "                                                <p>"+json[i].text+"</p>\n" +
                    "                                            </td>\n" +
                    "                                        </tr>"

            }

            $("#selectInfoTable").html(html);
        });
    });
    $("#addNotice").click(function (e) {
        if (permission !=="1"){
            alert("对不起，您还未经过审批！");
        } else {
            e.preventDefault();
            $("#main1").hide();
            $("#main2").show();
        }
    });
    $("#displayNotif").click(function () {
        var name=$("#name").val();
        var seltype=$("#seltype").val();
        var text=$("#comment").val();
        $.post("../common/addNotice.php",{"name":name,"seltype":seltype,"text":text},function (data) {
            if(data==1){
                alert("公告添加成功！");
                window.location.href="../common/billboardPage.php"
            }else{
                alert("标题和内容均不能为空！");
            }
        })
    })
});