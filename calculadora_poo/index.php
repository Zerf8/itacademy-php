<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <label>valor 1</label>
        <br>
        <input type="text" name="val1">
        <br>
        <label>valor 2</label>
        <br>
        <input type="text" name="val2">
        <br>
        
        <select name="opcion">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>                                    
        </select>    
        <br>

        <button>Calcular</button>

    </form>   
</body>
</html>
