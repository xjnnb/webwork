
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
            // console.log("debug");
            for(var i = 1 ; i<data.length;i++){
                html+='<tr>';
                html+="<td>"+data[i].status+"</td>"
                    +"<td>"+data[i].name+"</td>"
                    +"<td>"+data[i].id+"</td>"
                    +"<td>"+data[i].dept+"</td>"
                    +"<td>"+data[i].team+"</td>";
                html+='</tr>';
            }

            $("#selectInfo").append(html);
        });
    });
});