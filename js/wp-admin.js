(function ($) {
    $("document").ready(function(){
        $(".children").hide();
        $(".selectit").click(function(){
            
            $(this).next(".children").slideToggle(500);
            
        });
    });
    
})(jQuery);