<?php 
include("conexion.php");

// 1. Guardar mensaje nuevo solo si se presionó el botón
if (isset($_POST['enviar'])) {
    $nombre = "Invitado"; // O puedes agregar un input de nombre en el form
    $msg = mysqli_real_escape_string($conexion, $_POST['mensaje']);

    if (!empty($msg)) {
        // Usamos los nombres de columna que creamos en Railway: 'nombre' y 'mensaje'
        $sql = "INSERT INTO mensajes (nombre, mensaje) VALUES ('$nombre', '$msg')";
        mysqli_query($conexion, $sql);
        
        // Esto recarga la página para que no se reenvíe el mensaje al dar F5
        header("Location: interactivo.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook ★ Kevin</title>
    <style>
        body {
            background: #ffafcc;
            background-image: url('https://curiotopia.neocities.org/backgrounds/pattern/stars.gif');
            font-family: 'MS Sans Serif', Tahoma, sans-serif;
            padding: 10px; /* Reducido para celular */
        }
        .win-window {
            background: #c0c0c0;
            border: 2px solid #fff;
            border-right: 2px solid #808080;
            border-bottom: 2px solid #808080;
            width: 95%; /* Adaptable a la pantalla */
            max-width: 450px;
            margin: 20px auto;
            box-shadow: 5px 5px 0px rgba(0,0,0,0.5);
        }
        .title-bar {
            background: linear-gradient(90deg, #000080, #1084d0);
            color: white;
            padding: 3px 10px;
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }
        .content-area { padding: 15px; text-align: center; }
        textarea { width: 90%; height: 60px; border: 2px inset #808080; }
        .btn-win { background: #c0c0c0; border: 2px outset #fff; padding: 5px 15px; cursor: pointer; font-weight: bold; }
        
        .messages-list {
            background: #fff;
            border: 2px inset #808080;
            height: 180px;
            overflow-y: scroll;
            margin-top: 15px;
            text-align: left;
            padding: 10px;
            font-size: 12px;
        }
        .msg-item { border-bottom: 1px dotted #808080; padding: 5px 0; color: #ff1493; word-wrap: break-word; }

        /* Estilo para el reproductor en móviles */
        @media (max-width: 600px) {
            .winamp-player { position: static !important; width: 100% !important; margin-bottom: 10px; }
        }
    </style>
</head>
<body>

<div class="win-window winamp-player" style="width: 300px; position: fixed; top: 10px; left: 10px; z-index: 100;">
    <div class="title-bar"><span>Winamp - Afro Jazz</span><span>X</span></div>
    <div class="content-area" style="background: #000; padding: 5px;">
        <audio controls loop style="width: 100%;">
            <source src="musica.mp3" type="audio/mpeg">
        </audio>
    </div>
</div>

<div class="win-window">
    <div class="title-bar"><span>Leave a Message for Kevin!</span><span>X</span></div>
    <div class="content-area">
        <form action="interactivo.php" method="POST">
            <textarea name="mensaje" placeholder="Hii!! Escribe aquí algo lindo... XD" required></textarea><br><br>
            <input type="submit" name="enviar" value="Post Message!" class="btn-win">
        </form>

        <div class="messages-list">
            <marquee scrollamount="3" style="background: #000; color: #0f0; font-family: monospace;">★ RECENT MESSAGES ★</marquee>
            <?php
            $resultado = mysqli_query($conexion, "SELECT * FROM mensajes ORDER BY id DESC");
            if ($resultado) {
                while($row = mysqli_fetch_assoc($resultado)) {
                    // Usamos 'mensaje' que es el nombre real de la columna
                    echo "<div class='msg-item'><strong>> </strong>" . htmlspecialchars($row['mensaje']) . " <span style='font-size:10px; color:#808080;'>(".date('H:i', strtotime($row['fecha'])).")</span></div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<center><a href="index.php" class="btn-win" style="text-decoration:none;">Back to Home</a></center>

</body>
</html>
</html>
