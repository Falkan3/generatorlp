$( document ).ready(function() {
    $('.carousel').carousel({
        interval: 5000
    });

    //$(".tile").height($(".tile").width());
    $(".tile").each(function(e) {
        $(this).height($(this).width());
    });


    $(window).resize(function() {
        if(this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
        }, 10);
    });

    $(window).bind('resizeEnd', function() {
        //$(".tile").height($("#tile1").width());
        //$(".carousel").height($("#tile1").width());
        //$(".item").height($("#tile1").width());
        $(".tile").each(function(e) {
            $(this).height($(this).width());
        });

    });

});