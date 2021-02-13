/*popup*/
$(document).ready(function(){
    
    function setCookie(name, value, expiredays){
        var todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expiredays);
        document.cookie = name + '=' + escape( value ) + '; path=/; expires=' + todayDate.toGMTString() + ';';
    }
    
    var popup = '.popup';
    var todayBox = '#close_today';
    var closeBox = '#close';
   
    $(todayBox).click(function(e){
        e.preventDefault(); 
     
        setCookie('exCookie','done',1); 
        
        $(popup).stop().fadeOut(0);
        $('html, body').css('overflow','visible');
    });
    
    $(closeBox).click(function(e){
        e.preventDefault(); 
     
        setCookie('exCookie','done',-1); 
        
        $(popup).stop().fadeOut(0);
        $('html, body').css('overflow','visible');
    });
    
    var cookieData = document.cookie;
    
    if(cookieData.indexOf('exCookie=done') < 0){
        $(popup).fadeIn(0);
        $('html, body').css('overflow','hidden');
    }else{
        $(popup).fadeOut(0);
        $('html, body').css('overflow','visible');
    }
    
});

//main
$(document).ready(function(){
    var swiper = new Swiper('main .swiper-container', {
        loop: true,
        pagination: {
        el: 'main .swiper-pagination',
        type: 'fraction',
        },
        autoplay: {
            delay: 4000,
        },
        on: {
            slideChangeTransitionEnd: function(){
                if(this.activeIndex == 1 || this.activeIndex == 5){
                    $('main .swiper-pagination-current').css('color', '#000');
                    $('main .swiper-pagination-total').css('color', '#000');
                    $('main .swiper-pagination-fraction').css('color', '#000');
                }else{
                    $('main .swiper-pagination-current').css('color', '#fff');
                    $('main .swiper-pagination-total').css('color', '#fff');
                    $('main .swiper-pagination-fraction').css('color', '#fff');
                }
            }
        }
    });
});

//ranking
$(document).ready(function(){
    var swiper = new Swiper('#ranking .swiper-container', {
        spaceBetween: 10,
        slidesPerView: '2.5',
    });
});


//event
$(document).ready(function(){
    var swiper = new Swiper('#event .swiper-container', {
        spaceBetween: 10,
        slidesPerView: 'auto',
    });
});





