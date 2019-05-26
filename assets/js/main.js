
$(document).ready(function(){
    $("#searchBt").click(function(){
        var data=[{'teacher':'王老师','student':'{"name":"小明","age":"12"}'},{'teacher':'张老师','student':'{"name":"小红","age":"13"}'}];
        console.log(data.length);
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
            // $("#selectTable").replaceWith(html);
            $("#selectInfoTable").html(html);
        });
    });
});