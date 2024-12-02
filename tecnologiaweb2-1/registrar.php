



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para la imagen de fondo */
        body {
            height: 100vh;
            background-image: url('imagen.png'); /* Coloca la ruta de tu imagen aquí */
            background-size: cover; /* Asegura que la imagen cubra toda la pantalla */
            background-position: center; /* Centra la imagen en la página */
            background-attachment: fixed; /* Hace que la imagen no se desplace con el scroll */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333; /* Cambiar color de texto para que sea legible sobre la imagen */
        }

      

        .login-container h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Registro</h2>
                <form action="registrar_usuario.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100"ççç>Registrar</button>
                </form>
            </div>
        </div>
        <div class="text-center mt-3">
        <a href="index.php">iniciar sesion</a>
        </div>

    </div>
</body>
</html>