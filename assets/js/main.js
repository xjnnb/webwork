
$(document).ready(function(){
    $("#searchBt").click(function(){

        var id=$("#searchText").val();
        var seltype=$("#seltype").val();
        console.log("debug");
        console.log(id);
        console.log(seltype);
        $.post("../common/main.php",{"searchText":id,"seltype":seltype},function (data) {
            var html="";
            console.log(data);
            console.log((data.length));
            var json = JSON.parse(data);
             console.log(json.length);
             console.log(json);
            for(var i = 0 ; i<json.length;i++){
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
        });
    });
});