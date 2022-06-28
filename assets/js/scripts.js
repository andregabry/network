$ (function (){
    var icon_menu = $(".app_header_icon");
    var app_sidebar = $(".app_sidebar");
    var app_content = $(".app_content");

    $(icon_menu).click(function (){
        $(app_sidebar).toggleClass("app_sidebar_active");
        $(app_content).toggleClass("app_content_full")
    });

    var icon_profile = $(".app_header_profile");
    var profile_content = $(".app_profile");
    var profile_close = $(".profile_close");

    $(icon_profile).click(function (){
        $(profile_content).fadeToggle(200);
    });

    $(profile_close).click(function (){
        $(profile_content).fadeOut(200);
    });
});