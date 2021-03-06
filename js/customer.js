//faq
$(document).ready(function(){
    var btn = '#faqBox .tabBar > ul';
    var content = '#faqBox .content';
    
    $(btn).find('li:first p').addClass('active');
    $(btn).find('li:first a').addClass('active');
    $(content).find('div:first').fadeIn(0);
    
    $(btn).find('a').click(function(e){
        e.preventDefault();
        $(btn).find('a').removeClass('active');
        $(this).addClass('active');
        var index = $(this).parent().index();
        $(content).find('div').stop().fadeOut(0);
        $(content).find('div').eq(index).stop().fadeIn(0);
    });
});

//person
$(document).ready(function(){
    $('#personBox button').click(function(e){
        e.preventDefault();
        
        var name = '#personBox .nameBox';
        var phone02 = '#personBox #phone02';
        var phone03 = '#personBox #phone03';
        var title = '#personBox .titleBox';
        var content = '#personBox .cBox';
        
        var nameValue = $(name).val().length;
        var phone02Value = $(phone02).val().length;
        var phone03Value = $(phone03).val().length;
        var titleValue = $(title).val().length;
        var contentValue = $(content).val().length;
        
        if(nameValue != 0 && phone02Value != 0 && phone03Value != 0 && titleValue != 0 && contentValue != 0){
            alert('문의내용이 접수되었습니다.');
            $(name).val('');
            $(phone02).val('');
            $(phone03).val('');
            $(title).val('');
            $(content).val('');
            
        }else{
            alert('필수입력항목을 모두 작성하여 주십시오.');
        }
    });
});

//lost
$(document).ready(function(){
    $('#lostBox button').click(function(e){
        e.preventDefault();
        
        var name = '#lostBox .nameBox';
        var phone02 = '#lostBox #phone02';
        var phone03 = '#lostBox #phone03';
        var title = '#lostBox .titleBox';
        var content = '#lostBox .cBox';
        
        var nameValue = $(name).val().length;
        var phone02Value = $(phone02).val().length;
        var phone03Value = $(phone03).val().length;
        var titleValue = $(title).val().length;
        var contentValue = $(content).val().length;
        
        if(nameValue != 0 && phone02Value != 0 && phone03Value != 0 && titleValue != 0 && contentValue != 0){
            alert('분실물이 신고되었습니다.');
            $(name).val('');
            $(phone02).val('');
            $(phone03).val('');
            $(title).val('');
            $(content).val('');
            
        }else{
            alert('필수입력항목을 모두 작성하여 주십시오.');
        }
    });
});


