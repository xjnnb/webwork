
$(document).ready(function(){
    $("#searchBt").click(function(){

        var id=$("#searchText").val();
        var seltype=$("#seltype").val();
        $.post("../common/main.php",{"searchText":id,"seltype":seltype},function (data) {
            var html="";
            console.log(data);
            console.log((data.length));
            var json = JSON.parse(data);
             console.log(json.length);
             console.log(json);
            for(var i = 0 ; i<json.length;i++){
                html+='<tr>';
                html+="<td>"+json[i].statue+"</td>"
                    +"<td>"+json[i].name+"</td>"
                    +"<td>"+json[i].id+"</td>"
                    +"<td>"+json[i].dept+"</td>"
                    +"<td>"+json[i].team+"</td>";
                html+='</tr>';
            }

            $("#selectInfoTable").html(html);
        });
    });
});