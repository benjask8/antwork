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


<div class="wwu-info">
        
    <h3 class="big-title">Trabaja con nosotros</h3>
    <p class="more-info">En Antwork, creemos en un enfoque de trabajo colaborativo y dinámico que fomente la innovación y el crecimiento personal. Nuestra cultura organizacional se basa en valores como la transparencia, la empatía y el compromiso con la excelencia.

    </p>
    <p class="more-info">Al unirte a nuestro equipo, tendrás la oportunidad de trabajar en proyectos desafiantes y significativos que impactan positivamente en la sociedad. Valoramos la diversidad de ideas y perspectivas, y fomentamos un ambiente inclusivo donde cada miembro del equipo se sienta valorado y empoderado.</p>
    <p class="more-info">Nos esforzamos por crear un entorno de trabajo que fomente la creatividad y el aprendizaje continuo. Nuestra filosofía se centra en el crecimiento y el desarrollo personal, brindando oportunidades para el desarrollo profesional y la realización personal.

    </p>
    <p class="more-info">Si estás buscando un lugar donde puedas crecer profesionalmente, colaborar con personas talentosas y hacer una diferencia en el mundo, ¡te invitamos a unirte a nosotros en Antwork!
        
    </p>
</div>

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



<div class="wwu-info">
        
    <h3 class="normal-title">Acerca de</h3>
    <p class="more-info">En Antwork, creemos en un enfoque de trabajo colaborativo y dinámico que fomente la innovación y el crecimiento personal. Nuestra cultura organizacional se basa en valores como la transparencia, la empatía y el compromiso con la excelencia.

    </p>
    <p class="more-info">Al unirte a nuestro equipo, tendrás la oportunidad de trabajar en proyectos desafiantes y significativos que impactan positivamente en la sociedad. Valoramos la diversidad de ideas y perspectivas, y fomentamos un ambiente inclusivo donde cada miembro del equipo se sienta valorado y empoderado.</p>
    <p class="more-info">Nos esforzamos por crear un entorno de trabajo que fomente la creatividad y el aprendizaje continuo. Nuestra filosofía se centra en el crecimiento y el desarrollo personal, brindando oportunidades para el desarrollo profesional y la realización personal.

    </p>
    <p class="more-info">Si estás buscando un lugar donde puedas crecer profesionalmente, colaborar con personas talentosas y hacer una diferencia en el mundo, ¡te invitamos a unirte a nosotros en Antwork!
        
    </p>
</div>




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