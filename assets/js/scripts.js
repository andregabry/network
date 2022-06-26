$ (function (){
    var icon_menu = $(".app_header_icon");
    var app_sidebar = $(".app_sidebar");
    var app_content = $(".app_content");

    $(icon_menu).click(function (){
        $(app_sidebar).toggleClass("app_sidebar_active");
        $(app_content).toggleClass("app_content_full")
    });
});