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

    $(icon_profile).click(function (){
        $(profile_content).fadeToggle(200);
    });

    var notify = $(".app_header_notify");
    var app_notify = $(".app_notify");

    $(notify).clik(function (){
        alert("Teste de click");
        $(app_notify).fadeToggle(200);
    });
});