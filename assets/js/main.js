
$(document).ready(function(){
    $("#searchBt").click(function(){
        var id=$("#searchText").val();
        var seltype=$("#seltype").val();
        $.post("../common/main.php",{"searchText":id,"seltype":seltype},function (data) {
            var html="";
            var json = JSON.parse(data);
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