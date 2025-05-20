<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <?php
       $preco = $_POST['preco'];
       $porcentagem = $_POST['porcentagem'];
       $por = $porcentagem/100;
       $des = $preco - $preco * $por;
       echo "O valor do produto com o desconto R$".$des;
       
    ?>
</body>
</html>