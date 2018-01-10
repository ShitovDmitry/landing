var $modalGetConsultation = $("#get-call-modal");
var $modalSuccess = $("#successModal");
var $modalRedirect = $("#");
var $modalFastDoor = $("#");
var $articleModal = $("#article-dialog");
var itemsMainDiv = ('.MultiCarousel');
var itemsDiv = ('.MultiCarousel-inner');
var itemWidth = "";

$(document).ready(function(){


        $('.flexslider').flexslider({
            animation: "fade"
        });

        $(function() {
            $('.show_menu').click(function(){
                $('.menu').fadeIn();
                $('.show_menu').fadeOut();
                $('.hide_menu').fadeIn();
            });
            $('.hide_menu').click(function(){
                $('.menu').fadeOut();
                $('.show_menu').fadeIn();
                $('.hide_menu').fadeOut();
            });
        });

        $("input#phone").mask("+7(999) 999-99-99");

        "use strict";
        /*=======================================
        General
        =======================================*/
        var xv_ww = $(window).width();

        if ($("div").is("#share_open_full_container")) {
            //НОВЫЕ АКЦИИ ВЗЯТЫЕ С ALUSYS.Ru
            $(window).scroll(function(){
                var destination_start=$(window).scrollTop();
                if (destination_start > 500) {
                    $('#share_full_container').removeClass('hidden');
                    setTimeout(share_f,0);
                } else {
                    $('#share_full_container').addClass('hidden');
                }
            });
            $('.close-block').click(function(){
                $('#share_open_full_container').hide();
                share_f();
            });
            share_hover_bind('#share_container_1','#share_closed_1');
            share_hover_bind('#share_container_2','#share_closed_2');
            share_hover_bind('#share_container_3','#share_closed_3');
            $(document).mouseup(function (e){
                var div = $("#share_open_full_container");
                if (!div.is(e.target)
                    && div.has(e.target).length === 0) {
                    $('#share_open_full_container').hide();
                    share_f();
                }
            });
        }


        /*=======================================
        Parallax
        =======================================*/
        if (xv_ww >= 768) {
            $.stellar({
                horizontalScrolling: false,
                verticalOffset: 0,
                responsive: true,
            });
        }
        /*=======================================
        Navigation
        =======================================*/
        $("body").on("click", ".js-get-call", function(){
            $modalGetConsultation.modal();
        });
        $("body").on("click", ".js-open-article-modal", function(){
            var articleId = $(this).data("article-id");
            $.ajax({
                url: ajaxUrl,
                type: "post",
                dataType: "json",
                data: {
                    ACTION: "getPaperById",
                    PARAMETERS: {
                        article_id:articleId,
                    }
                }
            }).done(function (result) {
                $articleModal.find(".title").html(result.data.title);
                $articleModal.find(".modal-body").html(result.data.description);
                $articleModal.modal();
            });

        });
        $("body").on("click", ".nav-triger", function(e) {
            e.preventDefault();
            $(".main-menu").slideToggle();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).find('span').removeClass("fa-navicon");
                $(this).find('span').addClass("fa-times");
            } else {
                $(this).find('span').removeClass("fa-times");
                $(this).find('span').addClass("fa-navicon");
            }
        });

        $("body").on("click", ".nav a[href^='#']", function(e) {
            e.preventDefault();
            var $this = $(this);
            $("body,html").animate({
                scrollTop: $($this.attr("href")).offset().top
            }, 500);
        });

        $("body").on("click", ".main-menu > li.parent", function(e) {
            if ($(window).width() < 1024) {
                e.preventDefault();
                e.stopImmediatePropagation();
                $(this).children("ul").slideToggle();
            }
        });

        $(window).on("scroll", function(e) {
            if ($(window).scrollTop() > 50) {
                // > 100px from top - show div
                $(".navbar-custom").addClass("navbar_style");
            } else {
                // <= 100px from top - hide div
                $(".navbar-custom").removeClass("navbar_style");
            }
        });

        $("body").on("click", ".tab", function(){
            $("body").find(".tab").removeClass("active");
            $(this).addClass("active");
            var id = $(this).data("tab");
            $("body").find(".tabs-result").addClass("hidden");
            $("body").find(".tabs-result[data-tabs-result='"+id+"']").removeClass("hidden");
        });

        $("body").on("click", ".js-please-call-me", function(){
            var nameInput = $(this).closest(".form").find("input#name");
            var phoneInput = $(this).closest(".form").find("input#phone");
            var siteBlock = $(this).closest(".form").data("site-block");
            if(!nameInput.val().length) {
                nameInput.addClass("error");
            }
            if(!phoneInput.val().length) {
                phoneInput.addClass("error");
            }
            if(nameInput.val().length && phoneInput.val().length==17){
                sendRequest(nameInput.val(), phoneInput.val(), siteBlock, function(){
                    nameInput.val(null);
                    phoneInput.val(null);
                    $modalGetConsultation.modal("hide");
                    $modalSuccess.modal();
                });
            }

        });
        $modalGetConsultation.on("click", ".js-send-reques", function(){
            var name = $modalGetConsultation.find("input#name").val();
            var phone = $modalGetConsultation.find("input#phone").val();
            var siteBlock = $(this).data("site-block");
            if(!name.length) {
                $modalGetConsultation.find("input#name").addClass("error");
            }
            if(!phone.length) {
                $modalGetConsultation.find("input#phone").addClass("error");
            }
            if(name.length && phone.length==17){
                sendRequest(name, phone, siteBlock, function(){
                    $modalGetConsultation.find("input").val(null);
                    $modalGetConsultation.modal("hide");
                    $modalSuccess.modal();
                });
            }

        });

        $modalGetConsultation.on("keyup", "input", function(){
           $(this).removeClass("error");
        });


        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();
        $(window).resize(function () {
            ResCarouselSize();
        });

        $("a[rel^='prettyPhoto']").prettyPhoto({
            show_title: false,
            modal:false,
            social_tools:"",
        });
        /*=======================================
        Flicker
        =======================================*/
        if ($('#flicker-feed').length !== 0) {
            $('#flicker-feed').jflickrfeed({
                limit: $('#flicker-feed').data('limit'),
                qstrings: {
                    id: $('#flicker-feed').attr('data-userID')
                },
                itemTemplate: '<li><a href="{{image_b}}" data-rel="prettyPhoto"><img alt="{{title}}" src="{{image_s}}" /></a></li>'
            }, function() {
                $("a[data-rel^='prettyPhoto']").prettyPhoto();
            });
        }

        /*=======================================
        Slider
        =======================================*/
        var owl = $(".owl-carousel");
        owl.each(function() {
            var $this = $(this),
                viewDots = $this.data("dots"),
                isLoop = $this.data("loop"),
                isNav = $this.data("nav"),
                viewSlides = +$this.data("slides"),
                viewSlides_md = +$this.data("slides-md"),
                viewSlides_sm = +$this.data("slides-sm"),
                slideMargin = +$this.data("margin"),
                slidesCenter = $this.data("center"),
                slidesHash = $this.data("hash"),
                nextIcon = $this.data("next"),
                prevIcon = $this.data("prev"),
                slideDrag = $this.data("drag"),
                slideFade = $this.data("fade"),
                slideAuto = $this.data("auto");

            $this.owlCarousel({
                loop: isLoop,
                margin: slideMargin,
                nav: isNav,
                dots: viewDots,
                center: slidesCenter,
                URLhashListener: slidesHash,
                mouseDrag: slideDrag,
                animateOut: slideFade,
                autoplay: slideAuto,
                autoHeight: true,
                navText: ["<i class='btn_prev fa " + prevIcon + "'></i>", "<i class='btn_next fa " + nextIcon + "'></i>"],
                responsive: {
                    0: {
                        items: viewSlides_sm
                    },
                    600: {
                        items: viewSlides_md
                    },
                    1000: {
                        items: viewSlides
                    }
                }
            }); /*owl end*/
        }); /*each*/

}); /*end ready*/ /*end require*/
function share_hover_bind(div_container, div_in) {
    $(div_in).hover(function(){
        $(div_container).animate({
            right:0
        }, 200);
    });
    $(div_in).mouseleave(function(){
        $(div_container).animate({
            right:-10
        }, 200);
    });
    $(div_in).click(function(){
        $('#share_full_container').hide();
        if (div_in=="#share_closed_1") {
            share_id="share_container_1";
        }
        if (div_in=="#share_closed_2") {
            share_id="share_container_2";
        }
        if (div_in=="#share_closed_3") {
            share_id="share_container_3";
        }
        share_f_open(share_id);
    });
}
function share_f(share_id) {//открытие всех
    share_container_height=$('#share_full_container').height();
    $('#share_full_container').css('marginTop',-share_container_height/2);
    $('#share_full_container').fadeIn();
}
function share_f_open() {
    $('.share_open_container').hide();
    $('.share_open_container[share_id='+share_id+']').show();
    share_container_height=$('#share_open_full_container').height();
    $('#share_open_full_container').css('marginTop',-share_container_height/2);
    $('#share_open_full_container').fadeIn("slow");
}
//this function define the size of the items
function ResCarouselSize() {
    var incno = 0;
    var dataItems = ("data-items");
    var itemClass = ('.item');
    var id = 0;
    var btnParentSb = '';
    var itemsSplit = '';
    var sampwidth = $(itemsMainDiv).width();
    var bodyWidth = $('body').width();
    $(itemsDiv).each(function () {
        id = id + 1;
        var itemNumbers = $(this).find(itemClass).length;
        btnParentSb = $(this).parent().attr(dataItems);
        itemsSplit = btnParentSb.split(',');
        $(this).parent().attr("id", "MultiCarousel" + id);


        if (bodyWidth >= 1200) {
            incno = itemsSplit[3];
            itemWidth = sampwidth / incno;
        }
        else if (bodyWidth >= 992) {
            incno = itemsSplit[2];
            itemWidth = sampwidth / incno;
        }
        else if (bodyWidth >= 768) {
            incno = itemsSplit[1];
            itemWidth = sampwidth / incno;
        }
        else {
            incno = itemsSplit[0];
            itemWidth = sampwidth / incno;
        }
        $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
        $(this).find(itemClass).each(function () {
            $(this).outerWidth(itemWidth);
        });

        $(".leftLst").addClass("over");
        $(".rightLst").removeClass("over");

    });
}


//this function used to move the items
function ResCarousel(e, el, s) {
    var leftBtn = ('.leftLst');
    var rightBtn = ('.rightLst');
    var translateXval = '';
    var divStyle = $(el + ' ' + itemsDiv).css('transform');
    var values = divStyle.match(/-?[\d\.]+/g);
    var xds = Math.abs(values[4]);
    if (e == 0) {
        translateXval = parseInt(xds) - parseInt(itemWidth * s);
        $(el + ' ' + rightBtn).removeClass("over");

        if (translateXval <= itemWidth / 2) {
            translateXval = 0;
            $(el + ' ' + leftBtn).addClass("over");
        }
    }
    else if (e == 1) {
        var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
        translateXval = parseInt(xds) + parseInt(itemWidth * s);
        $(el + ' ' + leftBtn).removeClass("over");

        if (translateXval >= itemsCondition - itemWidth / 2) {
            translateXval = itemsCondition;
            $(el + ' ' + rightBtn).addClass("over");
        }
    }
    $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
}

//It is used to get some elements from btn
function click(ell, ee) {
    var Parent = "#" + $(ee).parent().attr("id");
    var slide = $(Parent).attr("data-slide");
    ResCarousel(ell, Parent, slide);
}

function sendRequest(name, phone, siteBlock, callback){
    $.ajax({
        url: ajaxUrl,
        type: "post",
        dataType: "json",
        data: {
            ACTION: "sendRequest",
            PARAMETERS: {
                name:name,
                phone: phone,
                siteBlock:siteBlock
            }
        }
    }).done(function (result) {
        if(callback) {
            callback();
        }
    });
}
