<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>★ KEVIN'S SPACE ★</title>
    <style>
        body {
            background-color: #0d1b2a; /* Azul marino */
            background-image: radial-gradient(#1b3022 1px, transparent 1px); /* Efecto puntos retro */
            background-size: 20px 20px;
            color: #c1d7ae; /* Verde pastel */
            font-family: "Courier New", monospace;
            margin: 0;
            padding: 20px;
        }

        /* Contenedor principal tipo Myspace */
        .main-wrapper {
            max-width: 900px;
            margin: 0 auto;
            border: 3px double #a2d2ff; /* Azul clarito */
            background-color: rgba(27, 48, 34, 0.9); /* Verde oscuro */
            padding: 15px;
        }

        header {
            border: 2px solid #ffafcc; /* Rojo pastel */
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            background: #1b3022;
        }

        h1 { color: #ffafcc; text-transform: uppercase; letter-spacing: 5px; }

        .flex-container { display: flex; gap: 20px; }
        
        /* Columna izquierda (perfil) */
        .sidebar { width: 300px; border: 1px solid #a2d2ff; padding: 10px; }
        
        .profile-pic {
            width: 100%;
            border: 5px solid #f8f9fa;
            filter: contrast(1.2); /* Efecto foto retro */
        }

        /* Columna derecha (Cosas que conozco de ti) */
        .content { flex: 1; border: 1px solid #a2d2ff; padding: 10px; }

        .box {
            background: #0d1b2a;
            border: 1px solid #c1d7ae;
            margin-bottom: 15px;
            padding: 10px;
        }

        .box-title {
            background: #c1d7ae;
            color: #1b3022;
            font-weight: bold;
            padding: 5px;
            margin: -10px -10px 10px -10px;
        }

        /* Botones estilo retro */
        .retro-btn {
            background: #ffafcc;
            color: #1b3022;
            border: 3px outset #f8f9fa;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .retro-btn:active { border-style: inset; }

        pre {
            font-size: 10px;
            line-height: 8px;
            color: #ffafcc;
            background: #000;
            padding: 10px;
            display: none;
        }
        /* Esto hace que si la pantalla es de celular, el diseño cambie */
@media (max-width: 600px) {
    body {
        padding: 10px; /* Menos espacio a los lados */
    }
    
    .contenedor-principal { 
        width: 100% !important; /* Que use todo el ancho del cel */
        margin: 0 auto;
    }

    img {
        max-width: 100%; /* Que las fotos no se salgan de la pantalla */
        height: auto;
    }
    
    /* Si tienes tablas tipo MySpace, esto ayuda a que no se vean raras */
    table {
        width: 100% !important;
    }
}
    </style>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<audio id="bgMusic" loop>
    <source src="musica.mp3" type="audio/mpeg">
</audio>

<div class="main-wrapper">
    <header>
        <h1>.: My Dear Love :.</h1>
        <p>¡Bienvenido al rincón de Kevin!</p>
    </header>

    <div class="flex-container">
        <div class="sidebar">
            <img src="foto2.jpg" class="profile-pic">
            <div class="box" style="margin-top:10px;">
                <p><strong>Estado:</strong> Enamorado de Karla ♡</p>
                <p><strong>Música:</strong> Afro Jazz 🎶</p>
            </div>
            <button class="retro-btn" onclick="document.getElementById('bgMusic').play()">▶ CLICK PARA MÚSICA</button>
        </div>

        <div class="content">
            <div class="box">
                <div class="box-title">Lo que hemos pasado...</div>
                <p>El paso del tiempo no importa cuando se trata del amor...</p>
            </div>

            <div class="box">
                <div class="box-title">Un detalle especial</div>
                <button class="retro-btn" onclick="document.getElementById('corazon').style.display='block'">VER CORAZÓN</button>
                <pre id="corazon">
      ******        ******
    **********    **********
  ************* *************
  ***************************
   *************************
     *********************
       *****************
         *************
           *********
             *****
               *
                </pre>
            </div>

            <div class="box" style="text-align:center;">
                <a href="interactivo.php" class="retro-btn" style="background:#a2d2ff;">¡ESCRIBEME ALGO! 💌</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
