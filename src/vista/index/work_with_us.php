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

        $mail->Subject = 'Mensaje de cv';

        // Crea el cuerpo del mensaje con saltos de línea
        $body = 'Nombre: ' . $_POST['nombre'] . "\n" .
                'Correo electrónico: ' . $_POST['correo'] . "\n" .
                'Teléfono: ' . $_POST['telefono'] . "\n" .
                'Mensaje: ' . $_POST['mensaje'];

        // Establece el cuerpo del mensaje en formato HTML
        $mail->isHTML(true);
        $mail->Body = nl2br($body); // Convierte saltos de línea a etiquetas HTML <br>

        // Adjunta el archivo CV si se ha cargado
        if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
            $cvTempPath = $_FILES['cv']['tmp_name'];
            $cvFileName = $_FILES['cv']['name'];
            $mail->addAttachment($cvTempPath, $cvFileName); // Adjunta el archivo CV al correo
        }

        // Envía el correo electrónico
        $mail->send();
        echo 'El correo electrónico se envió correctamente.';
    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }
}
?>


<div class="wwu-form-container">
    <div class="wwu-form-img">
        <img src="public/images/logo/ant_wwu.png" alt="">
    </div>
    <form id="contactForm" class="wwu-form">
    <h1 class="wwu-form-title">Trabaja Con Nosotros</h1>
    <p class="wwu-form-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, cupiditate?</p>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
    <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
    <input type="tel" id="telefono" name="telefono" placeholder="Teléfono">
    <label for="cv" class="cv-label">
    Cargar Curriculum Vitae <span class="material-symbols-outlined">cloud_upload</span>
    </label>
    <input type="file" accept=".pdf" id="cv" name="cv" style="display: none;">
    <span id="fileName">Seleccionar archivo</span>
    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Mensaje" required></textarea>
    <button type="submit">Enviar</button>
    <p class="msg-p" id="msgP"></p>
</form>

</div>



<h3 class="normal-title">Trabaja con nosotros</h3>
    <p class="more-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam saepe numquam laudantium nisi labore debitis minima! Quisquam ut velit obcaecati earum esse et tempore exercitationem consequatur reiciendis! Necessitatibus, vel minima!

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, beatae.

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi itaque quo voluptate exercitationem obcaecati. Cumque quod quos, repellat sed consequuntur dolores optio, dicta quasi possimus est, ex magnam eaque praesentium. Tenetur consequatur molestiae optio laboriosam quas adipisci deleniti, quidem magni unde quod neque perspiciatis natus aliquam dolore eius explicabo. Libero minus dolor amet magni vel soluta ratione illo magnam incidunt consequatur blanditiis dolores voluptatibus sit enim accusantium itaque, quis id iusto ad impedit quisquam quae assumenda ut fuga! Quaerat odit quidem, quod nemo numquam sunt ullam maxime sit dignissimos eos sed atque voluptatem rerum voluptatibus a cum sint? Quidem, vel?

    </p>    



<?php require 'src/vista/partials/footer.php'; ?>

<script src="fetch/wwu.js">
</script>


<script>
    const cvInput = document.getElementById('cv');
    const fileNameSpan = document.getElementById('fileName');

    cvInput.addEventListener('change', function() {
        if (cvInput.files.length > 0) {
            fileNameSpan.textContent = cvInput.files[0].name;
        } else {
            fileNameSpan.textContent = 'Seleccionar archivo';
        }
    });
</script>