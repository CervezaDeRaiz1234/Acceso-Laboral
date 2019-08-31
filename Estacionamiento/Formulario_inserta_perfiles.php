<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Registro</title>
        
    </head>
    
    <body>
    
        <form action="insertar_registros_perfiles.php" method="get">
        
            <p>
              <label>Usuario: 
                <input type="text" name="usu">
              </label>
              <br>
              <label>Contraseña: 
                <input type="password" name="con">
              </label>
            </p>
            <p>Perfil: 
              <label for="perfil"></label>
              <select name="perfil" id="perfil">
                <option>Super Usuario</option>
                <option>Administrador</option>
                <option>Lectura</option>
                <option>Trabajador Social</option>
              </select>
            </p>
            <p>
              <input type="submit" name="enviando" value="Registro">
            </p>
        
        </form>
    
    </body>
    
</html>