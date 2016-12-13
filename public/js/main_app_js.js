var tiles;
var tooltips;
var index=0;

$(document).ready(function () {
    tiles = $('.dynamicTile > .row > .tiles');
    tile_items = $('.tiles .item');
    descs = $('.tile-description');
    tooltips = $('[data-toggle="tooltip"]');
    tile_items.each(function(){
        $(this).attr('id', index++);
    });

    $('.tile.tile-small .carousel').carousel({
        interval: 5000
    });
    $('.tile.tile-big.fast .carousel').carousel({
        interval: 10000
    });
    $('.tile.tile-big.slow .carousel').carousel({
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

    //Click tile
    descs.hide();
    tile_items.click(function(e) {
        var desc = $(this).closest('section').find('.tile-description');
        if(desc.css('display')=="none" || desc.attr('selected-tile')!=$(this).attr('id'))
        {
            desc.html($(this).html());
            desc.find('.b-overlay').remove();
            desc.find('.slide-badge').remove();
            desc.slideDown();
            var $anchor = desc;
            $('html, body').stop().animate({
                scrollTop: $anchor.offset().top-30
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        }
        else if(desc.attr('selected-tile')==$(this).attr('id'))
        {
            desc.slideUp();
        }
        desc.attr('selected-tile', $(this).attr('id'));

    });

});