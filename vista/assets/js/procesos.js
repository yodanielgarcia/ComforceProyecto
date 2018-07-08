function loadprocess() {
    $('#contenido').html("");
    $.post("createprocess.php", function(response) {
        $('#contenido').html(response);
        $('#contenido').fadeIn();
    });

}