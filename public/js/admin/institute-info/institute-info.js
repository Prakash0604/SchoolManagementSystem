$(document).ready(function () {

});

$(document).off("click","#changeLogoBtn").on("click","#changeLogoBtn",function(){
    $("#logo").trigger("click");
})
