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
        <form  action="/recibeFormContacto" method="POST">
            @csrf <!-- input oculto, medida de seguridad-->
            <br>
                <label for="nombre">Nombre </label><br>
                <!--<input id="nombre" type="text" name="nombre" value={{$nombre}}> <br> carga valor default
                <input id="correo" type="email" name="correo" value="{{$correo}}"><br>-->



                <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}"> <br>
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
                <br>
                <label for="correo">Correo </label> <br>
                <input id="correo" type="email" name="correo" value="{{ old('correo') }}"><br>
                @error('correo')
                    <i>{{ $message }}</i>
                @enderror
                <br>
                <label for="comentario">Comentario </label> <br>

                <textarea id="comentario" name="comentario"  cols="30" rows="10" value="{{ old('comentario') }}">
                
                </textarea><br>
                @error('comentario')
                    <i>{{ $message }}</i>
                @enderror
                <br>
                <br>
                <br>
             
        

                <input type="submit" value="ENVIAR">

           
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