var tiles;
var tooltips;

$(document).ready(function () {
    tiles = $('.dynamicTile > .row > .tiles');
    tooltips = $('[data-toggle="tooltip"]');

    $('.tile.tile-small .carousel').carousel({
        interval: 5000
    });
    $('.tile.tile-big .carousel').carousel({
        interval: 10000
    });

    $(".tile.tile-small").each(function (e) {
        $(this).height($(this).width() / 2);
    });
    $(".tile.tile-big").each(function (e) {
        $(this).height($(this).width());
    });
    if ($(window).width() > 768) {
        $('.contact-form').css('min-height', tiles.height() - 10);
        $('.contact-form > div').css('min-height', tiles.height() - 10);
        tooltips.attr('data-placement', 'left');
    }
    else {
        tooltips.attr('data-placement', 'top');
    }

    //Tooltips
    tooltips.tooltip();
    //********************

    //Click anchors
    $("a").click(function (e) {
        if ($(this).attr('href') == '#') {
            e.preventDefault();
        }
    });
    //********************

    $(window).resize(function () {
        if (this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function () {
            $(this).trigger('resizeEnd');
        }, 10);
    });

    $(window).bind('resizeEnd', function () {
        $(".tile.tile-small").each(function (e) {
            $(this).height($(this).width() / 2);
        });
        //$(".carousel").height($("#tile1").width());
        //$(".item").height($("#tile1").width());
        $(".tile.tile-big").each(function (e) {
            $(this).height($(this).width());
        });
        if ($(window).width() > 768) {
            $('.contact-form').css('min-height', tiles.height() - 10);
            $('.contact-form > div').css('min-height', tiles.height() - 10);
            tooltips.attr('data-placement', 'left');
        }
        else {
            tooltips.attr('data-placement', 'top');
        }

    });

});