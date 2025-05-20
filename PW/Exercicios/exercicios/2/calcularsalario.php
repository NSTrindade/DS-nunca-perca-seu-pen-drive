
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cals.css">
    <title>Document</title>
</head>
<body>
<?php 
$valor = $_POST['txtvalor']; 
$horas = $_POST['txthoras']; 
$salario = $valor * $horas; 
echo "De acordo com as informações digitadas na página anterior, 
o salário é R$".$salario; 
?>
</body>
</html>
