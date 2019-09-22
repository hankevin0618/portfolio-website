jQuery(document).ready(function($) {


    $('.bg_hover ').hover(function() {
        $(this).find('img:last-child').fadeToggle();
    });
    
    /*$('.portfolio_hover_uxui ').hover(function() {
        $(this).find('img:last-child').fadeToggle();
    });
    
    $('.portfolio_hover_graphic_design ').hover(function() {
        $(this).find('img:last-child').fadeToggle();
    });
    */
    
    
    /* $('nav').show();
    
    $('h1').click(function() {
        $('nav').show();
    });
    
    
     $('h1').click(function(){
        $('body').toggleClass('nav-active'); //it can hide or show anything.
    }); //then add body.nav-active to the css and make the style block

     */
});