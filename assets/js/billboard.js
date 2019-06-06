
$(document).ready(function(){
    $.post("../common/sidebarInfo.php",{ },function (data) {
        var json=JSON.parse(data);
        $("#userNameInfo").html(json.username);
        $("#userLevelInfo").html(json.userLevel);
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
});