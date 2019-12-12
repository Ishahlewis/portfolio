$(function(){

    $('.bars').on('click',function(){
        $('.nav').slideDown();
    });

    $('.nav').hide();
    
    $('.back-up').on('click', function(){
        $('.nav').slideUp();
    });

});
