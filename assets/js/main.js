
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
                html+='<tr>';
                html+="              <td>\n" +
                    "                                                        <div class=\"form-check\">\n" +
                    "                                                            <label class=\"form-check-label\">\n" +
                    "                                                                <input class=\"form-check-input task-select\" type=\"checkbox\">\n" +
                    "                                                                <span class=\"form-check-sign\"></span>\n" +
                    "                                                            </label>\n" +
                    "                                                        </div>\n" +
                    "                                                    </td>";
                html+="<td>"+json[i].statue+"</td>"
                    +"<td>"+json[i].name+"</td>"
                    +"<td>"+json[i].id+"</td>"
                    +"<td>"+json[i].dept+"</td>"
                    +"<td>"+json[i].team+"</td>";
                html+='<td>\n' +
'                                                        <div class="form-button-action">\n' +
'                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link <btn-simple-primary" data-original-title="Edit Task">\n' +
'                                                            <i class="la la-edit"></i>\n' +
'                                                        </button>\n' +
'                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger" data-original-title="Remove">\n' +
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