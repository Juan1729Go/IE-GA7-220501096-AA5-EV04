<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    <!-- css --> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&display=swap" rel="stylesheet"
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
    <!-- navegacion  -->
    <header class="header">
        <!-- logo de la marca -->
        <div class="logo-container">
          <img class="logo" src="" alt="logo" />
        </div>
    </header>

   <!-- cuerpo --> 
    <div class="contenedor"> 

        <div class="reguistro">
            <div class="reg-titulo">
                <h1>Registro de Usuario</h1> 
            </div>
            
            <!-- informacion de reguistro -->
            <div class="reg-cuerpo">
                <form action="../servicios/auth.php" method="POST">

                    <input type="text" name="name" placeholder="Nombre" autocomplete="off" required>
                    <br>

                    <input type="text" name="lastName" placeholder="Ingrese su Apellido" autocomplete="off" required>
                    <br>

                    <input type="email" name="email" placeholder="Ingrese su Email" autocomplete="off" required>
                    <br>

                    <input type="number" name="phone" placeholder="Ingrese su Celular" autocomplete="off" required> 
                    <br>

                    <input type="password" name="password" placeholder="Ingrese su Contraseña" autocomplete="off" required>
                    
                    <!-- boton enviar -->
                    <div class="sub-buton">
                        <input class="boton" type="submit" value="Registrar">
                    </div>
                    
                </form>
            </div>
                
        </div>

    </div> 
   
</body>
</html>
