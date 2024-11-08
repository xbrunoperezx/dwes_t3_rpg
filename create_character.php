<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crea tu personaje</title>
</head>
<body>
    <h1>Crea tu personaje</h1>
    
<form action="save_character.php" method ="POST">
   
    <label for="name">Name:</label>
    <input  name ="name" type="text" id="nameIput"> 

    <label for="descriptionInput">Descripcion:</label>
    <input  name ="description" type="text" id="descriptionId"> 

   
    <button type="submit">Creando mi personaje..</button>


</form>

</body>
</html>