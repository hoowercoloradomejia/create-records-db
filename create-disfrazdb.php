<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSTAFA</title>
</head>
<body>
    <br/>
    <br/>
    <center><img src="ima/logo.jpg" width="400" height="400" /></center>
    <br/>
    <br/>
    <form action="save-disfraz.php" method="POST">
        Nombre <input type="text" name="name"> <br/>
        <br/>
        Genero 
        <h4>
        <input type="radio" name="genero" value="0"/> Femenino
        <input type="radio" name="genero" value="1"/> Masculino
        <input type="radio" name="genero" value="2"/> Adolecente
        <input type="radio" name="genero" value="3"/> Niño </h4>
            <br/>
        Talla Adulto
        <select name="talla1">
            <option value=""></option>
            <option value="1">XS</option>
            <option value="2">S</option>
            <option value="3">M</option>
            <option value="4">L</option>
            <option value="5">XL</option>
            <option value="6">XXL</option>
        </select>
        Talla Niño
        <select name="talla2">
            <option value=""></option>
            <option value="1">Recien nacido</option>
            <option value="2">3 meses</option>
            <option value="3">6 meses</option>
            <option value="4">9 meses</option>
            <option value="5">12 meses</option>
            <option value="6">15 meses</option>
            <option value="7">18 meses</option>
            <option value="8">2 años</option>
            <option value="9">3 años</option>
            <option value="0">4 años</option>
            <option value="11">5 años</option>
            <option value="12">6 años</option>
            <option value="13">7 años</option>
            <option value="14">8 años</option>
        </select>
        Talla adolecente
        <select name="talla3">
            <option value=""></option>
            <option value="1">10</option>
            <option value="2">12</option>
            <option value="3">14</option>
            <option value="4">16</option>
            <option value="5">18</option>
        </select>
        <br/>
        <br/>
        <input type="submit" value="Guardar">
        <br/>
        <br/>
        

    </form>
</body>
</html>