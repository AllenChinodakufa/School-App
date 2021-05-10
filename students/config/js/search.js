$(document).ready(function(){
    
    $("#searchMenu").keyup(function(){
        $('.search').attr("style", "visibility: visible!important;");
    });
    $("body").click(function(){
        $('.search').attr("style", "visibility: hidden!important;");
    });
    
});