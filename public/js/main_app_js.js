var tiles;
var tiles_sng;
var tooltips;
var index = 0;
var alertItems = ["4 osoby oglądają właśnie oferty nieruchomości", "2min temu zostało dokonane zamówienie na usługi rachunkowe"];
var contactForm = $('.contact-form');
var contactFormDivs = $('.contact-form > div');

$(document).ready(function () {
    tiles = $('.dynamicTile > .row > .tiles');
    tiles_sng = $('.dynamicTile > .row > .tiles .tile');
    tile_items = $('.tiles .item');
    descs = $('.tile-description');
    tooltips = $('[data-toggle="tooltip"]');

    $('.tile.tile-small .carousel').carousel({
        interval: 5000
    });
    $('.tile.tile-big.fast .carousel').carousel({
        interval: 10000
    });
    $('.tile.tile-big.slow .carousel').carousel({
        interval: 10000
    });

    tile_items.each(function () {
        $(this).attr('id', index++);
    });
    resizeTiles();
    if ($(window).width() > 974) {
        /*
         $(".tile.tile-small").each(function (e) {
         $(this).height($(this).width() / 2);
         });
         $(".tile.tile-big").each(function (e) {
         $(this).height($(this).width());
         });
         */
        contactForm.css('min-height', tiles.height() - 30);
        contactFormDivs.css('min-height', tiles.height() - 30);
        tooltips.attr('data-placement', 'left');
    }
    else {
        contactForm.css('min-height', 'auto');
        contactFormDivs.css('min-height', 'auto');
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
        resizeTiles();
        if ($(window).width() > 974) {
            /*
             $(".tile.tile-small").each(function (e) {
             $(this).height($(this).width() / 2);
             });
             //$(".carousel").height($("#tile1").width());
             //$(".item").height($("#tile1").width());
             $(".tile.tile-big").each(function (e) {
             $(this).height($(this).width());
             });
             */

            contactForm.css('min-height', tiles.height() - 30);
            contactFormDivs.css('min-height', tiles.height() - 30);
            tooltips.attr('data-placement', 'left');
        }
        else {
            contactForm.css('min-height', 'auto');
            contactFormDivs.css('min-height', 'auto');
            tooltips.attr('data-placement', 'top');
        }

    });

    //Click tile
    descs.hide();
    /*
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
     */

    if ($(window).width() > 974) {
        window.setInterval(function () {
            if ($(window).width() > 974) {
                var item = alertItems[Math.floor(Math.random() * alertItems.length)];
                $.notify(
                    item,
                    {position: "b l", className: "black", showDuration: 800, autoHideDelay: 7500,}
                );
            }
        }, 20000);
    }

});

function resizeTiles() {
    /*
     tile_items.each(function(){
     $(this).height(500);
     });
     */
}