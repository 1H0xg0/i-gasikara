$(document).ready(function(){


    $(document).on('click', '#admin-docs-uploads', function(){


        $("#display-content").html($('.preloader').html());
        $.post(base_url(true)+'Admin/page_docs_upload', {page : 'upload'}, function(data) {
            $("#display-content").html(data);
        });


    });

    $(document).on('click', '#admin-docs-bibliotheque', function(){


        $("#display-content").html($('.preloader').html());
        $.post(base_url(true)+'Admin/page_docs_biblio', {page : 'biblio'}, function(data) {
            $("#display-content").html(data);
        });


    });

    $(document).on('click', '#add-path', function(){

        var c = confirm("Voulez-vous vraiment le créer");
        if (c == true) {
            var data_post = {
                path : $('#input-path').val()
            };
            if(data_post.path.length > 0){
                $.post(base_url(true)+'Path/add', data_post , function(data) {
                    $('#admin-docs-uploads').trigger('click');
                });
            }
        }


    });

    $(document).on('click', '.delete-img', function(){

        var c = confirm("Voulez-vous vraiment le supprimer");
        if (c == true) {
            var data_post = {
                id : $(this).data('id')
            };

            $.post(base_url(true)+'Image/delete', data_post , function(data) {
                $('#admin-docs-bibliotheque').trigger('click');
            });
        }

    });


    $(document).on('click', '.delete-video', function(){

        var c = confirm("Voulez-vous vraiment le supprimer");
        if (c == true) {
            var data_post = {
                id : $(this).data('id')
            };

            $.post(base_url(true)+'Video/delete', data_post , function(data) {
                $('#admin-docs-bibliotheque').trigger('click');
            });
        }

    });

    $(document).on('click', '.delete-file', function(){

        var c = confirm("Voulez-vous vraiment le supprimer");
        if (c == true) {
            var data_post = {
                id : $(this).data('id')
            };

            $.post(base_url(true)+'Image/delete_file', data_post , function(data) {
                $('#admin-docs-bibliotheque').trigger('click');
            });
        }

    });

    $(document).on('click', '#add-video', function(){

        var data_post = {
            title : $('#input-video-title').val(),
            category : $('#input-video-category').val(),
            content : $('#input-video-content').val()
        };

        $.post(base_url(true)+'Video/add', data_post , function(data) {
            $('#admin-docs-uploads').trigger('click');
        });

    });


});