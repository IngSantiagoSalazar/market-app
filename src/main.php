<?php
session_start();

if(!isset($_SESSION['session_user_id'])){
    header('refresh:0;url=error_403.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="src/Icons/Market_main.png" />
    <title>Marketapp - Home</title>
    <style>
        /* Estilos Globales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, rgba(255, 255, 255, 1), #ff0000ff); /* Degradado elegante */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        /* Contenedor Principal */
        .container {
            background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco translúcido */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
            width: 350px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        /* Efecto hover para el contenedor */
        .container:hover {
            transform: translateY(-10px); /* Efecto de elevación */
        }

        /* Título */
        h1 {
            color: #ff0000ff; /* Azul suave para el título */
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* Nombre del usuario */
        .user-name {
            font-size: 24px; /* Tamaño de fuente aumentado */
            font-weight: 700;
            color: #FF0000; /* Rojo para el nombre */
            margin-bottom: 30px;
        }

        /* Imagen del usuario */
        .user-photo {
            width: 200px; /* Tamaño cuadrado */
            height: 200px;
            object-fit: cover; /* Mantiene la imagen en su aspecto */
            margin-bottom: 20px;
            border: 4px solid #ff0000ff; /* Borde azul para la foto */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave para la imagen */
        }

        /* Enlaces */
        .links {
            margin-top: 30px;
        }

        /* Estilo de los botones de enlace */
        .links a, .logout-btn {
            display: inline-block;
            padding: 12px 25px;
            margin: 10px 0;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        /* Botón List all users */
        .links a {
            background-color: #4A90E2; /* Azul para el botón de 'List all users' */
            color: #fff;
            margin-right: 10px;
        }

        /* Efecto hover para List all users */
        .links a:hover {
            background-color: #007BFF;
            transform: translateY(-2px);
        }

        /* Botón Logout */
        .logout-btn {
            background-color: #E74C3C; /* Rojo para el logout */
            color: #fff;
        }

        /* Efecto hover para Logout */
        .logout-btn:hover {
            background-color: #C0392B;
            transform: translateY(-2px); /* Efecto de elevación */
        }

        /* Animación para el botón al hacer clic */
        .links a:active, .logout-btn:active {
            transform: translateY(2px); /* Efecto de presionar */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Marketapp</h1>
        <div class="user-info">
            <img src="<?php echo $_SESSION['session_user_url_photo']; ?>" class="user-photo" alt="User Photo">
            <p class="user-name"><?php echo $_SESSION['session_user_fullname']; ?></p>
        </div>
        <div class="links">
            <a href="list_users.php">List all users</a>
        </div>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
