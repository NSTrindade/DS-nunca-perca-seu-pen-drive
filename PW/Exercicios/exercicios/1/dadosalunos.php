<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dad.css">
    <title>Document</title>
</head>
<body>
<?php
    echo "Segue abaixo as informações digitadas na página anterior". '<br>'; 
    echo "Nome digitado...: ".$_POST['txtnome']. '<br>'; 
    echo "Telefone...: ".$_POST['txttelefone']. '<br>'; 
    echo "Curso...:".$_POST['chocursos']. '<br>'; 
    echo "RG...:".$_POST['txtRG']. '<br>'; 
    echo "Módulo...: ".$_POST['txtmodulo']. '<br>';

?>
</body>
</html>
