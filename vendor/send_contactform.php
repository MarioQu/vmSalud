<?php   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require_once 'vendor/autoload.php';
        
    // require 'vendor/phpmailer/phpmailer/src/Exception.php';
    // require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    // require "vendor/phpmailer/phpmailer/src/SMTP.php";
    
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include("file_with_errors.php");
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {                                  
        $fullname               = $_POST["nombre"]." ".$_POST["apaterno"]." ".$_POST["amaterno"];  
        $email                  = $_POST["email"];     
        $telefono               = $_POST["telefono"];  
        $tipo_servicio          = $_POST["tipo_servicio"];  
        $comentarios            = $_POST["comentarios"];  
        $asunto                 = "VM Salud - Contact Form";            

          
        $mail = new PHPMailer(true);                         
        try {
            $mail->setFrom("vmsalud@neuronadigital.tech", "VM Salud - Formulario de Contacto"); 
            // $mail->setFrom("formularios@vmsalud.com", "VM Salud - Formulario de Contacto");   
            //$mail->addAddress("contacto@vmsalud.com", "Contact Form");
            $mail->addAddress("marioalberto.7731@gmail.com", "Contact Form");
            // $mail->addBCC("marioalberto.7731@gmail.com", "Contact Form");

            $mail->Subject = 'VM Salud | Formulario de Contacto';
            $mail->Body = "<table border='0' align='center' width='500' style='border-collapse: collapse; border: 3px solid #0C4B4F; background-color: #247F84; color: #ffffff; font-family: sans-serif; padding-left: 50px; padding-top: 100px; padding-right: 50px; padding-bottom: 100px;'>
                            <tr>
                                <td style='text-align: center;'>
                                    <br><br>
                                    <img src='https://vmsalud.com/assets/images/vm-salud.png' alt='' style='width: 200px;'>
                                </td>
                            </tr>
                            <tr>
                                <td style='color: #ffffff; font-size: 20px; font-weight: bold; text-align: center; letter-spacing: 1px; padding-top: 20px; padding-bottom: 20px;'>
                                    Formulario de Contacto
                                </td>
                            </tr>
                            
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Nombre:</strong>
                                    <span>".$fullname."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Email:</strong>
                                    <span style='color: #ffffff;'>".$email."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Teléfono:</strong>
                                    <span>".$telefono."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Servicio:</strong>
                                    <span>".$tipo_servicio."</span>
                                </td>
                            </tr> 
                            <tr>
                                <td style='text-align: center; padding: 15px;'>
                                    <strong style='color: #0C4B4F;'>Comentario:</strong>
                                    <span>".$comentarios."</span>
                                </td>
                            </tr> 
                            
                        </table>";
            $mail->isHTML(true);              
            // $mail->AltBody = 'Nombre: '.$fullname.' \n
            //                   Subject: '.$asunto.'\n';
            $mail->isSMTP();                                     
            // $mail->Host = 'correo.vmsalud.com';
            $mail->Host = 'smtp.hostinger.com';                    
            $mail->SMTPAuth = true;    
            $mail->SMTPDebug = 1;                          
            // $mail->Username = "formularios@vmsalud.com";                  
            // $mail->Password = "tn&DrG2Si?D%pD7h";
            // $mail->Username = "inteliseg-forms@neuronadigital.tech";                  
            // $mail->Password = "6%65&78hYtgFCasxs323/%(";
            $mail->Username = "vmsalud@neuronadigital.tech";                  
            $mail->Password = "Pg78^7%trF43$%6cW?";
            $mail->SMTPSecure = 'ssl';                
            $mail->Port = 465;  
            // $mail->CharSet = 'UTF-8';    
            $mail->send();                                           
            echo "Gracias! Tu mensaje ha sido enviado.";
        } catch (Exception $e) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }else{
        echo "Error on the request";
    }
?>