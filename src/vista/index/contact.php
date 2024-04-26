<?php
require 'src/vista/partials/head.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configura PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configura el servidor de correo saliente (SMTP)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth   = true; // Habilitar autenticación SMTP
        $mail->Username   = 'rosanojuan65@gmail.com'; // Tu dirección de correo electrónico de Gmail
        $mail->Password   = 'hmbv yjhs ezmi pmwh'; // Tu contraseña de Gmail
        $mail->SMTPSecure = 'tls'; // Usar TLS para una conexión segura
        $mail->Port       = 587; // Puerto SMTP de Gmail

        $mail->setFrom('rosanojuan65@gmail.com', 'Tu Nombre'); // Tu dirección de correo y tu nombre
        $mail->addAddress('clientes@antworkuy.com.uy', 'Nombre Destinatario'); // La dirección de correo del destinatario y su nombre

        // Configura el asunto y el cuerpo del correo
        $mail->Subject = 'Mensaje de contacto';
        $mail->Body = '
            <html>
            <head>
                <style>
                    /* Estilos CSS en línea */
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        color: #333;
                    }
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #fff;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }
                    h1 {
                        color: #007bff;
                    }
                    p {
                        margin-bottom: 20px;
                    }
                    strong {
                        color: #333;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>Mensaje de contacto</h1>
                    <p><strong>Nombre:</strong> ' . $_POST['nombre'] . '</p>
                    <p><strong>Correo electrónico:</strong> ' . $_POST['correo'] . '</p>
                    <p><strong>Teléfono:</strong> ' . $_POST['telefono'] . '</p>
                    <p><strong>Mensaje:</strong> ' . $_POST['mensaje'] . '</p>
                </div>
            </body>
            </html>
        ';

        $mail->CharSet = 'UTF-8'; // Establece el juego de caracteres como UTF-8
        $mail->IsHTML(true);

        // Envía el correo electrónico
        $mail->send();
        echo 'El correo electrónico se envió correctamente.';
    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }
}
?>

<!-- contact modal -->
<div class="contact-modal-2 open" role="dialog" aria-labelledby="contact-modal-heading" aria-describedby="contact-modal-description">
        
    <div class="location-msg">
        <a href="?c=index&m=index"><i class="fa-solid fa-house-chimney"></i> Inicio</a> <strong>></strong> <b>Contacto</b>
    </div>

    <div class="contact-modal-content">
        <div class="contact-modal-flex">
            <div class="contact-modal-flex-text">
                <h2 id="contact-modal-heading">Contáctanos para obtener más información</h2>
                <img src="public/images/logo/ant_contact.png" alt="">
                <p id="contact-modal-description">—Estamos aquí para <strong>brindarte toda la ayuda que necesites</strong> en cualquier momento del día.</p>
                <p id="contact-modal-description-2">Por favor, no dudes en proporcionar tus datos de contacto y te aseguramos que nos pondremos en contacto contigo lo antes posible para resolver cualquier consulta o pregunta que tengas.</p>
            </div>
            <form id="contactForm" class="contact-modal-flex-form" method="post">
                <h3>Datos de contacto</h3>
                <label class="contact-modal-label" for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required>

                <label class="contact-modal-label" for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" required>

                <label class="contact-modal-label" for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono">

                <label class="contact-modal-label" for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button type="submit">Enviar</button>
                <p class="msg-p" id="msgP"></p>
            </form>
        </div>
    </div>
</div>

<!-- contact modal end -->

<script>    
    document.title = "Contacto | AntWork";
</script>    
<script src="public/js/contact_modal.js"></script>


    
<?php require 'src/vista/partials/footer.php'; ?>
<script src="fetch/contact.js">
</script>