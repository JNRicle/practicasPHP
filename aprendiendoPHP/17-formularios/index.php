<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title>Formularios y HTML</title>
    </head>
    <body>
        <h1>Formularios</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" autofocus="autofocus" maxlength="20" 
            minlength="10" required="required" placeholder="mete tu nombre"/><br>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" disabled="disabled"/><br>
            <input type="button" name="boton" value="haceme click"/><br>
            <label for="Sexo">Sexo:</label>
            <p>
                HOMBRE<input type="checkbox" name="sexo" value="hombre"/>
                MUJER<input type="checkbox" name="sexo" value="mujer"/>
            </p>
            <label for="color">Color:</label>
            <input type="color" name="color"/><br>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha"/><br>
            <label for="correo">Correo</label>
            <input type="email" name="correo"/><br>
            <label for="archivo">Archivo</label>
            <input type="file" name="archivo" multiple="multiple"/><br>
            <label for="numero">Numero</label>
            <input type="number" name="numero"/><br>
            <label for="contra">Contraseña</label>
            <input type="password" name="contra"/><br>
            <input type="submit" value="enviar"/>
            <label for="continente">Continente</label>
            <p>
                Asia<input type="radio" name="continente" value="Asia"/>
                Europa<input type="radio" name="continente" value="Europa"/>
                America<input type="radio" name="continente" value="America"/>
            </p>
            <label for="paguinaweb">Web</label>
            <input type="url" name="paginaweb"/><br>
            <textarea></textarea><br>
            peliculas
            <select name="peliculas">
                <option value="Marvel">Marvel</option>
                <option value="DC">DC</option>
                <option value="INVETADO">INVETADO</option>
                <option value="ysiguido">ysiguido</option>
            </select>
            

        </form>
    </body>
</html>
