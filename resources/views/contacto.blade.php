<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CONTACTO</title>

        <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
        <link rel="stylesheet" href="switch/dist/css/style.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        
        <div class=nav><a href="/"> <span> Landingpage </span> </a> </div>  
    </head>

    <body>
        
    <center>
        <div class="formulario">
            <form  action="/recibeFormContacto" method="POST">


                @csrf <!-- input oculto, medida de seguridad-->
               
               <label for="nombre">Nombre </label><br>
               <!--<input id="nombre" type="text" name="nombre" value={{$nombre}}> <br> carga valor default
               <input id="correo" type="email" name="correo" value="{{$correo}}"><br>-->
               <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }} {{$nombre }}"> <br>
               <!-- old('nombre'): mantiene lo último escrito, no se pierde el avance en caso de errores -->
               
               @error('nombre') <!-- @ error, blade, mensaje predeterminado -->
                   <i>{{ $message }}</i>
               @enderror
               <br>

               <label for="correo">Correo </label> <br>
               <input id="correo" type="email" name="correo" value="{{ old('correo') }} {{$correo}}"><br>
               @error('correo')
                   <i>{{ $message }}</i>
               @enderror
               <br>

               <label for="comentario">Comentario </label> <br>
               <input id="comentario" type="comentario" name="comentario" value="{{ old('comentario') }} {{$comentario}}"><br>
               @error('comentario')
                   <i>{{ $message }}</i>
               @enderror
               <br>
              
               <input type="submit" value="ENVIAR">


            
            </form>
            
            <!-- Ditectiva de blade @ -->
            
            @if(!empty($codigo))
                
                {{$nombre ??''}}
                {{$correo ??''}}
                {{$comentario ??''}}

            @endif
            
        </div>
    </center>

    
    </body>

</html>