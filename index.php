<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de Montaña Rusa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-size: 14px;
        }
        img {
            width: 100%;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<form action="validar.php" method="POST">
    <h2>Validador de Montaña Rusa</h2>
    <label for="altura">Altura (cm):</label>
    <input type="number" id="altura" name="altura" required>
    
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad"  pattern="[0-9]{1,2}" required>
    
    <label>¿Acepta no llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
    <input type="radio" id="acepta" name="aceptacion" value="si" required>
    <label for="acepta">Sí</label>
    <input type="radio" id="no_acepta" name="aceptacion" value="no" required>
    <label for="no_acepta">No</label>
    
    <input type="submit" value="Obtener Ticket">
</form>

</body>
</html>
