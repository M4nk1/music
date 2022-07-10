<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/normalize">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <div class="box">
        <h2>Registrate</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario" name="inicia_sesion">
            <div class="inputBox">
            <i class="bi bi-person-fill"></i>   
            <input type="text" name="usuario" required="" value="">
                <label>Usuario</label>
                
            </div>
            <div class="inputBox">
            <i class="bi bi-key-fill"></i>
                <input type="password" name="password" required="" value="" placeholder="">
                <label>Contraseña</label>
            </div>
            <div class="inputBox">
            <i class="bi bi-key-fill"></i>
                <input type="password" name="password2" required="" value="" placeholder="">
                <label>Repita su contraseña</label>
            </div>
            <input type="submit" name="" value="Registrar" id="boton" onclick="inicia_sesion.submit()"><br>
            </form>
            <a href="inicia_sesion.php">¿Ya tienes cuenta?</a>

        
    </div>
</body>
</html>