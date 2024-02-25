<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0; /* Añadido para mayor contraste */
        }
        form {
            width: 80%; /* Ancho del formulario */
            background-color: white; /* Color de fondo del formulario */
            padding: 20px; /* Espaciado interno del formulario */
            border-radius: 10px; /* Bordes redondeados del formulario */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra del formulario */
        }
        ul {
            list-style-type: none; /* Eliminar viñetas de la lista */
            padding: 0; /* Eliminar relleno */
        }
        li {
            margin-bottom: 20px; /* Espaciado entre elementos de lista */
        }
        label {
            display: block; /* Mostrar etiquetas en una nueva línea */
            font-weight: bold; /* Negrita para etiquetas */
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%; /* Ocupar todo el ancho disponible */
            padding: 8px; /* Espaciado interno */
            margin-top: 4px; /* Espaciado superior */
            border: 1px solid #ccc; /* Borde gris */
            border-radius: 4px; /* Bordes redondeados */
            box-sizing: border-box; /* Incluir el relleno y el borde en el ancho total */
        }
        button {
            background-color: #007bff; /* Color de fondo del botón */
            color: white; /* Color del texto del botón */
            border: none; /* Sin borde */
            padding: 10px 20px; /* Espaciado interno */
            border-radius: 4px; /* Bordes redondeados */
            cursor: pointer; /* Cambiar el cursor al pasar el ratón */
        }
        button:hover {
            background-color: #0056b3; /* Cambiar color de fondo al pasar el ratón */
        }
    </style>
</head>
<body>

<form action="/form_handler.php" method="post">
    <ul>
        <li>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="user_name" />
        </li>
        <li>
            <label for="mail">Correo electrónico:</label>
            <input type="email" id="mail" name="user_mail" />
        </li>
        <li>
            <label>Género:</label>
            <div class="contenedor">
                <input type="radio" id="masculino" name="genero" value="Masculino">
                <label for="masculino">Masculino</label>

                <input type="radio" id="femenino" name="genero" value="Femenino">
                <label for="femenino">Femenino</label>
            </div>
        </li>
        <li>
            <label>¿Es usted una persona muda?</label>
            <div class="contenedor">
                <input type="radio" id="no" name="mute" value="No">
                <label for="no">No</label>

                <input type="radio" id="si" name="mute" value="Si">
                <label for="si">Si</label>
            </div>
        </li>
        <li>
            <label>¿Qué motivos le impulsan a hacer uso de nuestra página web?</label>
            <textarea id="msg" name="user_message"></textarea>
        </li>
        <li>
            <button type="submit">Enviar</button>
        </li>
    </ul>
</form>

</body>
</html>

<?php
// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogiendo los datos del formulario
    $name = $_POST["user_name"];
    $email = $_POST["user_mail"];
    $gender = $_POST["genero"];
    $mute = $_POST["mute"];
    $message = $_POST["user_message"];

    // Aquí puedes realizar cualquier acción que necesites con los datos del formulario
    // Por ejemplo, enviar un correo electrónico, guardar en una base de datos, etc.

    // En este ejemplo, simplemente mostraremos los datos recogidos
    echo "<h2>Datos enviados:</h2>";
    echo "<p>Nombre: $name</p>";
    echo "<p>Correo electrónico: $email</p>";
    echo "<p>Género: $gender</p>";
    echo "<p>¿Es una persona muda?: $mute</p>";
    echo "<p>Motivos para usar la página web: $message</p>";
}
?>
