
$(document).ready(function(){
    $.post("../common/sidebarInfo.php",{ },function (data) {
        var json=JSON.parse(data);
        $("#userNameInfo").html(json.username);
        $("#userLevelInfo").html(json.userLevel);
    });

});