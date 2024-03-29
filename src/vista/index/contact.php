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
        $mail->addAddress('rosanojuan65@gmail.com', 'Nombre Destinatario'); // La dirección de correo del destinatario y su nombre

        $mail->Subject = 'Asunto del correo';
        $mail->Body    = 'Contenido del correo';

        // Envía el correo electrónico
        $mail->send();

        // Configura el asunto y el cuerpo del correo
        $mail->Subject = 'Mensaje de contacto';
        $mail->Body    = 'Nombre: ' . $_POST['nombre'] . '<br>' .
                         'Correo electrónico: ' . $_POST['correo'] . '<br>' .
                         'Teléfono: ' . $_POST['telefono'] . '<br>' .
                         'Mensaje: ' . $_POST['mensaje'];

        // Envía el correo electrónico
        $mail->send();
        echo 'El correo electrónico se envió correctamente.';
    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }
}
?>

<div class="contact-form-container">
    <div class="contact-form-img">
        <img src="https://www.servinform.es/wp-content/uploads/2022/03/Beneficios-de-la-atencion-al-cliente-virtual.jpg" alt="">
    </div>
    <form id="contactForm" class="contact-form">
    <h1 class="contact-form-title">Contacta Con Nosotros</h1>
    <p class="contact-form-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, cupiditate?</p>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
    <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
    <input type="tel" id="telefono" name="telefono" placeholder="Teléfono">
    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Mensaje" required></textarea>
    <button type="submit">Enviar</button>
    <p class="msg-p" id="msgP"></p>
</form>

</div>


<?php require 'src/vista/partials/footer.php'; ?>

<script src="fetch/contact.js">
</script>