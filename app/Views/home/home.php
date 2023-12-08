<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            margin: 0; /* Corregir el error de margen y padding */
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #424348; /* Color de fondo */
            display: flex; /* Usar flexbox para centrar verticalmente */
            align-items: center;
            justify-content: center;
            height: 100vh; /* Ajustar al 100% del viewport height */
        }
        
        .container {
            width: 50%;
        }

        .login-box {
            background-color: #fff;
            padding: 30px; /* Reducir el padding para una apariencia más limpia */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            text-align: center; /* Centra el contenido */
        }

        .login-box h2 {
            color: #333;
        }

        .login-box img {
            max-width: 150px; /* Reducir el tamaño de la imagen */
            margin-bottom: 20px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"],
        .login-box select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 3px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-box input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box"> 
            <img src="../img/laila.png" alt="Logo"/>
            <h2>Iniciar Sesión</h2>
            <form action="<?php base_url('user/login'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Usuario" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña" required>
                </div>
                <div class="mb-3">
                    <label for="rol">¿Quien eres?</label>
                    <select name="rol" id="rol" class="form-control" required>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                </div>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </div>
</body>
</html>
