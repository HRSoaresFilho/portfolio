$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 2) {
            $(".navbar").addClass("bg-dark-scroll");
        } else {
            $(".navbar").removeClass("bg-dark-scroll");
        }
    });
});

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 0);
});

$(document).on('scroll', function () {
    $('section').each(function () {
        var sectionTop = $(this).offset().top;
        var sectionBottom = sectionTop + $(this).outerHeight();
        var windowTop = $(window).scrollTop();
        var windowBottom = windowTop + $(window).height();
        var tolerance = 100;

        if (sectionBottom - tolerance > windowTop && sectionTop + tolerance < windowBottom) {
            var id = $(this).attr('id');
            $('a[href="#' + id + '"]').addClass('active');
            $('a[href^="#"]').not('a[href="#' + id + '"]').removeClass('active');
        }
    });
});

$(document).ready( function(){
    $('#submit-form').click( function(){
        var email = $('#email').val();
        var msg   = $('#mensagem').val();
 
        if(email.length <= 5){
            alert('Informe seu email');
            return false;
        }
        if(msg.length <= 5){
            alert('Escreva uma mensagem');
            return false;
        }

        var urlData = "&email=" + email + "&msg=" + msg ;
 
        $.ajax({
             type: "POST",
             url: "sendmail.php",
             async: true,
             data: urlData,
             success: function(data) {
                 $('#retornoHTML').html(data);
             },
             beforeSend: function() {
                 $('.loading').fadeIn('fast'); 
             },
             complete: function(){
                 $('.loading').fadeOut('fast');
             }
         });
    });
});