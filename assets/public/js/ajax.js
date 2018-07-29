$(document).ready(function(){

    $(document).on('click', '.overlay-hidden', function(){
        var data_post = {
            id : $(this).data('id')
        }
        $("#display-video").html($('.preloader').html());
        $.post(base_url(true)+'Accueil/page_video', data_post, function(data) {
            $("#display-video").html(data);
        });
    });

    $(document).on('click', '#search-electoral', function(){
        $('[data-notify=container]').remove();

        var data_post = {
            cin : $('#input-cin').val()
        }

        $.notify(
            {
                icon: 'fa fa-times fa-2x',
                title: '&nbsp;',
                message: '<div id="display-info-person"></div>'
            },
            {
                type: 'info',
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                placement: {
                    from: "top",
                    align: "center"
                },
                timer: 0,
                offset: {
                    x: 0,
                    y: 20
                },
                allow_dismiss: true,
                template: '<div data-notify="container" class="col-md-4" style="background:#015104;" alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="title">{1}</span>' +
                '<span data-notify="message" class="text-center">{2}</span>' +
                '</div>'
            });

        $("#display-info-person").html($('.preloader').html());
        $.post(base_url(true)+'Accueil/page_electoral', data_post, function(data) {
            $("#display-info-person").html(data);
        });
    });

    $('body').click(function(){ $('[data-notify=container]').remove(); });

});