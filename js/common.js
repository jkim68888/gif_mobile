//header
$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 0){
            $('header').addClass('fixed');
        }else{ 
            $('header').removeClass('fixed');
        }
    });
});

//panel
$(document).ready(function(){
    var btn = '.menu';
    var close = '.close a';
    var panel = '.panel';
    var main = '.mainNav';
    var sub = '.subNav';
    var bg = '.panelBg';
    var speed = 'fast';

    $(btn).click(function(e){
        e.preventDefault(); 
        $(panel).addClass('active');
        $(bg).stop().fadeIn(100);
        $('html, body').addClass('active');
        $(close).click(function(e){
            e.preventDefault();
            $(panel).removeClass('active');
            $(bg).stop().delay(300).fadeOut(100,function(){
                $(main).removeClass('active');
                $(sub).slideUp(0);
            }); 
            $('html, body').removeClass('active');
        });
    });
    
    $(bg).click(function(){
        $(panel).removeClass('active');
        $(this).stop().delay(300).fadeOut(100,function(){ 
            $(main).removeClass('active');
            $(sub).slideUp(0);
        }); 
        $('html, body').removeClass('active');
    });
    
    $(main).click(function(e){
        e.preventDefault();
        var has = $(this).hasClass('active');

        if(has){ 
            $(this).removeClass('active'); 
            $(this).next().stop().slideUp(speed);
        }else{
            $(main).removeClass('active'); 
            $(this).addClass('active'); 

            $(sub).stop().slideUp(speed); 
            $(this).next().stop().slideDown(speed); 
        }
    });
});

//ticket
$(document).ready(function(){
    $('header .ticket a').click(function(e){
        e.preventDefault();
        alert('예매한 티켓보기는 현재 서비스 점검중입니다. 다음에 다시 이용부탁드립니다.');
    });
});







