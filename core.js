$(document).ready(function() {
    $('#ContactForm').submit(function(event) {
      event.preventDefault();
  
        var datosFormulario = $(this).serialize();
        $("#SendCotiza").attr("disabled", true);
        $(".spinner-cotiza").removeClass("d-none");
  
        $.ajax({
            type: 'POST',
            url: 'vendor/send_contactform.php',
            data: datosFormulario,
            success: function(){
                window.open("gracias", "_self");               
            },
            error: function() {
                $('#resultado').html('Error al procesar el formulario.');
            }
        });
    });
});