<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $aceptacion = $_POST['aceptacion'];

    $errors = [];

    if ($altura < 120) {
        $errors[] = "Debe superar una altura de 120 cm.";
    }

    if ($edad <= 16) {
        $errors[] = "Debe tener una edad superior a 16 años.";
    }

    if ($aceptacion !== "si") {
        $errors[] = "Debe aceptar no llevarnos a juicio por daños y perjuicios de un mal mantenimiento.";
    }

    if (empty($errors)) {
        echo "<h2 class='success'>¡Gracias! Aquí tiene su ticket.</h2>";
        echo "<img src='ticket.jpg' alt='Ticket'>";
    } else {
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    }
}
?>
