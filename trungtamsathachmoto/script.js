
$(document).ready(function(){
    // hide ,show boxchat
    $("#title_hotro").click(function(){
        $("#chatForm").toggle();
        $("#title_hotro").css({"right":"2px","bottom":"25px"});

    });
    $("#menu_main ul li").mouseenter(function(){
        $("#menu_main ul li a").css("color","yellow");
    });
    $("#menu_main ul li").mouseleave(function(){
        $("#menu_main ul li a").css("color","#ffffff");
    });

    $("#sidebar_right div ul li ").mouseenter(function() {
        ("#sidebar_right div ul li a").css("color","red");
    });
     $("#sidebar_right div#listLeft ul li ").mouseleave(function() {
        ("#sidebar_right div ul li a").css("color","blue");
    });
    // alert("hihihoho");
});
