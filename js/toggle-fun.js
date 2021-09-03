$("document").ready(function(){

    $(".open-toggle-btn").click(function(){

            $(".sideBar").css("display", "none");
            $(".main-content").css("width","100%");
            $(".main-content").css("margin-left","0%");
            $(".open-toggle-btn").css("display", "none");
            $(".close-toggle-btn").css("display", "block");
        });
    });

    $("document").ready(function(){

        $(".close-toggle-btn").click(function(){

            $(".sideBar").css("display", "block");
            $(".main-content").css("width","80%");
            $(".main-content").css("margin-left","0%");
            $(".open-toggle-btn").css("display", "block");
            $(".close-toggle-btn").css("display", "none");
        });

});