$(document).ready(function () {
    $('#leftNavigation > li > .down_children').click(function () {

        //reset color and backfround of li parent
        $.each($('#leftNavigation > li'), function () {
            $(this).children('button').css('background', 'transparent');
            $(this).css('background', 'transparent');
            $(this).children('a.down_children').children().children('i').css('color', '#222');
            //$(this).removeClass('active');
        });

        //change color and background of li parent
        $(this).css('background', 'transparent');
        $(this).css('color', '#fff');
        $(this).css('outline', 'none');
        //$(this).parent('li').addClass('active');
        $(this).children().children('i').css('color', '#fff');

        //collapse menu children after click on button
        $(this).parent('li').children('ul').slideToggle(10, function () {
            $(this).toggleClass('in out');
        });

        //remove class in and add class out
        $(this).parent('li').siblings().find('ul').slideUp(function () {
            $(this).children('ul').slideToggle(function () {
                $(this).toggleClass('in out');
            });
        });
    });
});