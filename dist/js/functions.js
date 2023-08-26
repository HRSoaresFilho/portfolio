$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 2) {
            $(".navbar").addClass("bg-dark-scroll");
        } else {
            $(".navbar").removeClass("bg-dark-scroll");
        }
    });
});

$(document).on('click', '.navbar a[href^="#"]', function (event) {
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
            $('.navbar a[href="#' + id + '"]').addClass('active');
            $('.navbar a[href^="#"]').not('.navbar a[href="#' + id + '"]').removeClass('active');
        }
    });
});

$(document).ready(function () {
    var $submitForm = $('#submit-form');
    var $nome = $('#nome');
    var $email = $('#email');
    var $msg = $('#mensagem');
    var $response = $('#response');
    var $loading = $('.loading');
    var $textSend = $('#text-send');
    var $formContato = $('#form-contato');

    $submitForm.click(function () {
        var nome = $nome.val();
        var email = $email.val();
        var msg = $msg.val();

        function showMessage(message) {

            $response.html(message);
            $response.removeClass('text-success').addClass('p-1 text-danger');

            setTimeout(function () {
                $response.removeClass('p-1');
                $response.html('');
            }, 3000);

            return false;
        }

        if (nome.length <= 5) {
            return showMessage('Informe seu nome');
        }
        if (email.length <= 5) {
            return showMessage('Informe seu email');
        }
        if (msg.length <= 5) {
            return showMessage('Escreva uma mensagem');
        }

        var urlData = "&nome=" + nome + "&email=" + email + "&msg=" + msg;

        function resetForm() {
            $formContato[0].reset();
            $textSend.text("Enviar").fadeIn('fast');
        }

        $.ajax({
            type: "POST",
            url: "dist/php/sendmail.php",
            async: true,
            data: urlData,
            success: function (data) {
                $response.html(data);
                $response.removeClass('text-danger').addClass('p-1 text-success');
                $loading.hide();
                resetForm();
                $textSend.fadeIn('fast', function () {
                    setTimeout(function () {
                        $response.removeClass('p-1');
                        $response.html('');
                    }, 4000);
                });
            },
            error: function (data) {
                $response.html(data.responseText);
                $response.removeClass('text-success').addClass('p-1 text-danger');
                $loading.hide();
                $textSend.fadeIn('fast', function () {
                    setTimeout(function () {
                        $response.removeClass('p-1');
                        $response.html('');
                    }, 4000);
                });
            },
            beforeSend: function () {
                $textSend.hide();
                $loading.fadeIn('fast');
            }
        });
    });
});