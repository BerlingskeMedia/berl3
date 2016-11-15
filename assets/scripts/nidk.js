$(document).ready(function() {

    var counter = 0;
    var counterMax = 3;

    $('.tabs').on('click','a', function(e){
        e.preventDefault();
        var link = $(this).data('link');
        var currentTab = $('.tabs').find('.current');
        var currentContainer = $('.tab-container').find('.showMe');
        $(currentContainer).removeClass('showMe');
        $('#tabContent' + link).addClass('showMe');
        $(currentTab).removeClass('current');
        $(this).addClass('current');
        $('.tab').find('ul').removeClass();
        $('.tab').find('ul').addClass('counter-0');
        counter = 0;
    });

    

    // scroll 
    

    var scrollList = function(b) {
        var list = $(b).closest('.tab').find('ul');
        $(list).removeClass();
        $(list).addClass('counter-' + counter);
        console.log(counter);
    };

    $('.arrow-prev').click(function(e){
        e.preventDefault();
        var b = $(this);
        if(counter > 0) {
            counter--;
            scrollList(b);
        } 
    });
    $('.arrow-next').click(function(e){
        e.preventDefault();
        var b = $(this);
        if(counter < counterMax) {
            counter++;
            scrollList(b);
        } 
    });
    
    
});