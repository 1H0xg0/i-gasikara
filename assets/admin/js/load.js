$(document).ready(function(){
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $(document).on('click', '#to-recover', function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
});