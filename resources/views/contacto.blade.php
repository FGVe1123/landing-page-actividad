<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CONTACTO</title>
   

    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>

    <div class="formulario">
        <form  method="GET">
            <br>

    

        
            
                <label for="codigo">codigo<input id="codigo" type="text" name="codigo"></label>   <br>
    
                <label for="nombre">Nombre <input id="nombre" type="text" name="nombre" value={{$nombre}}> </label>   <br>
            
                <label for="correo">Correo <input id="correo" type="mail" name="correo" value="{{$correo}}"> </label>   <br>
            
                <label for="comentario">Comentario <input id="comentario" type="text" name="comentario"> </label>   <br>
             
            
    
            <br>

            <button name="enviar" type="submit" >ENVIAR</button>

           
        </form>
        

        <!-- Ditectiva de blade @ -->
      
        @if(!empty($codigo))
            <p>
                {{$nombre ??''}}
                {{$correo ??''}}
            </p>
        @endif
        
    </div>
    
</body>
</html>