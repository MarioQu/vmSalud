<?php   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require_once 'vendor/autoload.php';
       
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
      

    if ($_SERVER["REQUEST_METHOD"] == "POST") {                                  
        $fullname               = trim(($_POST["nombre"] ?? '')." ".($_POST["apaterno"] ?? '')." ".($_POST["amaterno"] ?? ''));  
        $email                  = trim($_POST["email"] ?? '');     
        $telefono               = trim($_POST["telefono"] ?? '');  
        $tipo_servicio          = trim($_POST["tipo_servicio"] ?? '');  
        $comentarios            = trim($_POST["comentarios"] ?? '');  
        $asunto                 = "VM Salud - Contact Form";            

          
        $mail = new PHPMailer(true);                         
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // o 3 para más detalle
            $mail->Debugoutput = 'html';
            $mail->isSMTP();                                     
            $mail->Host         = 'mail.vmsalud.com';                    
            $mail->SMTPAuth     = true;                                        
            $mail->Username      = "forms@vmsalud.com";                  
            $mail->Password      = "tn&DrG2Si?D%pD7h";          
            $mail->SMTPSecure   = PHPMailer::ENCRYPTION_SMTPS; //PHPMailer::ENCRYPTION_STARTTLS               
            $mail->Port         = 465;   
            
            
            $mail->setFrom("forms@vmsalud.com", "VM Salud - Formulario de Contacto"); 
            $mail->addAddress("marioalberto.7731@gmail.com", "Contact Form");
            // $mail->addAddress("contacto@vmsalud.com", "Contact Form");
            // $mail->addBCC("marioalberto.7731@gmail.com", "Contact Form");

            $mail->Subject = 'VM Salud | Formulario de Contacto';
            $mail->Body = "<table border='0' align='center' width='500' style='border-collapse: collapse; border: 3px solid #0C4B4F; background-color: #fff; color: #247F84; font-family: sans-serif; padding-left: 50px; padding-top: 100px; padding-right: 50px; padding-bottom: 100px;'>                                                    
                            <tr>
                                <td style='text-align: center;'>
                                    <br><br>
                                    <img src='https://vmsalud.com/assets/images/vm-salud.png' alt='' style='width: 200px;'>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style='color: #247F84; font-size: 18px; text-align: center; padding-top: 20px; padding-bottom: 20px;'>
                                    Formulario de Contacto
                                </td>
                            </tr>
                                                        
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Nombre:</strong>
                                    <span>".htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8')."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Email:</strong>
                                    <span style='color: #247F84;'>".htmlspecialchars($email, ENT_QUOTES, 'UTF-8')."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Teléfono:</strong>
                                    <span>".htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8')."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Servicio:</strong>
                                    <span>".htmlspecialchars($tipo_servicio, ENT_QUOTES, 'UTF-8')."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Comentario:</strong>
                                    <span>".htmlspecialchars($comentarios, ENT_QUOTES, 'UTF-8')."</span>
                                    <br><br>
                                </td>
                            </tr> 
                            
                        </table>";
            $mail->isHTML(true);              
                      
            $mail->CharSet = 'UTF-8';    
            $mail->send();                                           
            echo "Gracias! Tu mensaje ha sido enviado.";
        } catch (Exception $e) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }else{
        echo "Error on the request";
    }
?>