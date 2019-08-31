<!doctype html>
<html>

    <head>
    
        <meta charset="utf-8">
        <title></title>
        
    </head>
    
    <body>
    
    	 <?php
		 	
			$usuario = $_GET["usu"];
			
			$password = $_GET["con"];
        	
            require ("datos_conexion.php");
            
            $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
			
			if(mysqli_connect_errno()){
				echo "Ocurrio un error";
				exit();
			}
			
			mysqli_select_db($conexion,$db_nombre) or die ("No se encuentran datos");
			
			mysqli_set_charset($conexion, "utf8");
            
			$consulta="SELECT USUARIOS, PASSWORD, PERFIL FROM usuarios_pass WHERE USUARIOS = ? AND PASSWORD= ?";        
			
           // $resultados=mysqli_query($conexion, $consulta);
		   
		   $resultados=mysqli_prepare($conexion,$consulta);
		   
		   $ok=mysqli_stmt_bind_param($resultados, 'ss', $usuario, $password);
		   	   
		   $ok=mysqli_stmt_execute($resultados);
		   
		   if($ok==false){
			   
			   echo "Error en la consulta";
			   
		   } else{
			
				$ok=mysqli_stmt_bind_result($resultados,$usuario,$password, $perfil);   
				
		   }
		   
		   
		   while(mysqli_stmt_fetch($resultados)){
			
				/*echo "Hola " . $usuario . "<br>";
				
				echo "Tu perfil es " . $perfil. "<br>";*/
			   
		   }
		   
		   if($perfil=="Super Usuario"){
			   
				include("Super_usuario/Super_usuario.php");   
			   
		   }else if($perfil=="Administrador"){

				include("Usuario_administrador/Usuario_administrador.php");

		   }else if($perfil=="Lectura"){

				include("Usuario_lectura/Usuario_lectura.php");   
			   
		   }else if($perfil=="Trabajador Social"){

				include("Usuario_social/Usuario_trabajador_social.php");
		   
	   	   }
            
			mysqli_stmt_close($resultados);
			mysqli_close($conexion);
            
        ?>
    	
    </body>
    
</html>