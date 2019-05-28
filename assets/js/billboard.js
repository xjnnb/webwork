
$(document).ready(function(){
    $("#searchBt").click(function(){
        console.log("success");

        var id=$("#searchText").val();
        var seltype=$("#seltype").val();
        $.post("../common/billboard.php",{"searchText":id,"seltype":seltype},function (data) {
            var html="";
            console.log(data);
            console.log((data.length));
            var json = JSON.parse(data);
             console.log(json.length);
             console.log(json);
            for(var i = 0 ; i<json.length;i++){
                html+='<tr>';
                html+="<td>"+json[i].id+"</td>"
                    +"<td>"+json[i].name+"</td>"
                    +"<td>"+json[i].date+"</td>"
                    +"<td>"+json[i].type+"</td>"
                    +"<td>"+json[i].text+"</td>";
                html+='</tr>';
            }

            $("#selectInfoTable").html(html);
        });
    });
});