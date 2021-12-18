// JavaScript Document
$(document).ready(function(){
    window.onscroll=function(){
        if(window.pageYOffset>50){
            $("nav").addClass("sticky-nav");
            $(".down-option").css({
                display:"none"
            });
        }else{
            $("nav").removeClass("sticky-nav");
            $(".down-option").css({
                display:"block"
            });
        }
    }
});
// jquery code for home nav 
// for active menue
$(document).ready(function(){
    $(window).resize(function(){
        if($(window).width()<570){
            $(".nav-item").removeClass("bg-primary");
            $(".carousel-logo-img").css({
                'width':'110px'
            });
            $(".filter-title").css({
                'display':'block'
            });
        }else{
            $(".nav-item:first-child").addClass("bg-primary");
            $(".carousel-logo-img").css({
                'width':'100%'
            });
            $(".filter-title").css({
                'display':'inline'
            });
        }
    });
    if($(window).width()<570){
        $(".nav-item").removeClass("bg-primary");
        $(".carousel-logo-img").css({
            'width':'110px'
        });
        $(".filter-title").css({
            'display':'block'
        });
    }else{
        $(".nav-item:first-child").addClass("bg-primary");
        $(".carousel-logo-img").css({
            'width':'100%'
        });
        $(".filter-title").css({
            'display':'inline'
        });
    }
})