<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <?php
       $nota1 = $_POST['nota1'];
       $nota2 = $_POST['nota2'];
       $nota3 = $_POST['nota3'];
       $nota4 = $_POST['nota4'];
       $med = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
       if ($med < 5) {
        echo "Reprovado";
       } else {
        echo "Aprovado";
       }
       
    ?>
</body>
</html>