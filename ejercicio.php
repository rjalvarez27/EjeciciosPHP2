<?php


// Obtener datos del formulario usando el metodo get

$add = "";
$datos = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ("base.php");
    $nombre = $_POST['nombre'] ?? "";
    $apellido = $_POST["apellido"] ?? "";
    $edad = $_POST['edad'] ?? "";
    $cedula = $_POST['cedula'] ?? "";
    $email = $_POST["email"] ?? "";
    $telefono = $_POST["telefono"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";
    $pais = $_POST["pais"] ?? "";
    $ciudad = $_POST["ciudad"] ?? "";
    $calle = $_POST["calle"] ?? "";
    $codigo_postal = $_POST['codigo_postal'] ?? "";
    $genero = $_POST['genero'] ?? "";

    if ($nombre == "" || $apellido == "nombre" || $edad == "edad" || $cedula == "cedula" || $email == "email" || $telefono == "telefono" || $contrasena == "contrasena" || $pais == "pais" || $ciudad == "ciudad" || $calle == "calle" || $codigo_postal == "codigo_postal" || $genero == "genero") {
        $datos = "Datos vacios por favor revisar";
    } else {
        echo "Bienvenido: $nombre $apellido <br>" ;
        $sql = "INSERT INTO usuarios (nombre, apellido, edad,  cedula, email, telefono, contrasena, pais, ciudad, calle, codigo_postal, genero) VALUES ('$nombre', '$apellido', '$edad', '$cedula', '$email', '$telefono', '$contrasena', '$pais', '$ciudad', '$calle', '$codigo_postal', '$genero')";
        if ($conn->query($sql)) {
            $add = "Usuario registrado";
        } else {
            $add = 'ERROR';
        }
        $conn->close();
    }
}
?>;

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="title">
        <h1 class = "regist">REGISTRO DE DATOS</h1>
    </header>
    <main>
        <section class="all">
            <form action="ejercicio.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">

                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">

                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad" placeholder="Ingrese su edad">

                <label for="cedula">Cedula</label>
                <input type="number" name="cedula" id="cedula" placeholder="Ingrese su cedula">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Ingrese su email">

                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono">

                <label for="contrasena">Contrasena</label>
                <input type="text" name="contrasena" id="contrasena" placeholder="Ingrese una contrasena">

                <label for="pais">Pais</label>
                <input type="text" name="pais" id="pais" placeholder="Ingrese su pais">

                <label for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su ciudad">

                <label for="calle">Calle</label>
                <input type="text" name="calle" id="calle" placeholder="Ingrese su calle">

                <label for="codigo_postal">Codigo postal</label>
                <input type="number" name="codigo_postal" id="codigo_postal" placeholder="Ingrese su codigo postal">

                <label for="genero">Genero</label>
                <select name="genero" id="genero">
                    <option disabled selected>Selecciona tu genero</option>
                    <option value="MAS">Masculino</option>
                    <option value="FEM">Femenino</option>
                    <option value="NO">NO</option>
                </select>

                <input class="btn" type="submit" value="Enviar datos de registro">
            </form>
        </section>
        <section class="alert">
            <h3>
                <?php echo $add; ?>
            </h3>
            <h3>
                <?php echo $datos; ?>
            </h3>
        </section>
    </main>
    <footer>
            <h1>© 2024 Copyright Derechos reservados</h1>
    </footer>
</body>

</html>