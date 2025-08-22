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
            success: function(respuesta){
                console.log("Respuesta del servidor:");
                console.log(respuesta); // Aquí deberías ver el log completo de PHPMailer
                // window.open("gracias", "_self");               
            },
            error: function(xhr, status, error) {
                console.error("Error en la petición AJAX:", error);
                $('#resultado').html('Error al procesar el formulario.');
            }
        });
    });
});