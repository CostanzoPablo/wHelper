function loadChildrens(parentId){
    if ($('#' + parentId).hasClass('hidden')){
        $('#' + parentId).removeClass('hidden');
        $('#loading').removeClass('hidden'); 
        var oReq = new XMLHttpRequest();
        oReq.open("POST", 'panel/get/' + parentId, true);
        oReq.onload = function(oEvent) {
            if (oReq.status == 200) {
                if (oReq.response.length == 0){
                    $('#' + parentId).html('Whitout childrens');
                }else{
                    $('#' + parentId).html(oReq.response);
                }
            }else{
                alert("Error getting data from server. Code: " + oReq.status);
            }
            $('#loading').addClass('hidden');
        };

        oReq.send();
    }else{
        $('#' + parentId).addClass('hidden');
    }
}
