<!--Descripción del software
    1.Contará con un super usuario que dará permiso de generar accesos a número de usuarios donde
    se le podrá asignar números de codigos  cada uno para los clientes. Este súper usuario p-
    odrá modificar los permiso de los clientes y bloquear los permisos de los usuarios con un
     de radio.botón.
    2.Hay un panel de usuario donde podra modificar los datos de los clientes y sus privilegios
    3.Generara un código QR para direccionar a una página web donde se mostraran los datos del
    cliente en la página de panel de visualización, cada cliente puede disponer de 3 codigos QR.
    4.Solo puede conectarse el QR a los clientes logados. En caso de ser usuario de lectura, 
    termina el acceso por medio de una targeta magnética que abrira el panel con sus registros
    de entrada y salida al hospital.
    5.En caso de exixstir el permiso de acceso, registrara los ingresos, contara la permanencia
    de vehículos, registrando tambien las salidas. No importa cuantos codigos QR tenga el clie-
    ente, solo podra ver "este usuario ya ingreso otro vehículo" (marca, color, placas) y lo 
    registra en la tabla de infracciones.
    6.Si el vehículo permanece fuera del horario, tambien lo registrara en la tabla de infracc-
    iones y mandara una ALERTa al usuario de lectura y bloqueando la lectura de códigos, solo
    los podra ser desbloqueada con la targeta magnética durante diez minutos hasta que se res-
    uelva a pasar la targeta o se registre la salida del vehículo la cual también se registrara
    en la tabla de infracciones.
    7.Solo el super usuario podra editar las infracciones y solo el podrá imprimir un reporte
    de infracciones, ademas de una reporte de ingresos, egresos y permanencia, por día o expo-
    rtarla a Excel. -->
<!DOCTYPE html>
<html Lang = "es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge"> 

        <title>Login principal</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <link rel="stylesheet" href="hoja.css">
    
</head>
	<body style="background-color:#25be3f"> <!--Este es el login princpal-->
        <div id="imagen">
            <img src="hospital3.JPG" width="130px" height="140px">
        </div>
        <div class="Texto">
                <form>
                    <ul>
                        <h5>Nombre de usuario</h5> <!--Por el momento no tiene un diseño y una dirección este
                                            registro, pero ya luego lo completare-->
                        <input type="text" name="correo" id="correo" class="form-input" maxlength="50">
                        
                        <h5>Contraseña</h5>
                        <input type="text" name="Password" id="Password" class="form-input" maxlength="100">
                        <br>
                        <input class="form-btn" name="submit" type="submit" value="Registrar"/> 
                        
                    </ul>
        </div>   
                    </form>   
          
        <div class="Texto">
            <a href="Super_usuario/Super_usuario.php">Crear cuenta</a>
        </div>     
        </form>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>