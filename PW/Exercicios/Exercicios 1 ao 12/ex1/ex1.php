<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <?php
       $valor = $_POST['valor'];
       for ($i = 0; $i < 11; $i++){
        $tab = $valor * $i;
        echo $valor." x ".$i. " = ".$tab."<br>";
       }
    ?>
</body>
</html>