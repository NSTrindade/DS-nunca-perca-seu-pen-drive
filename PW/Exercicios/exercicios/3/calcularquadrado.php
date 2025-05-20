<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cal.css">
    <title>Document</title>
</head>
<body>
<?php
$A = $_POST['txta']; 
$B = $_POST['txtb']; 
$soma = $A + $B; 
$quadr = pow($soma, 2); 
echo "A soma dos valores: " .$soma. "<br>"; 
echo "O quadrado da soma: ".$quadr; 
?> 
</body>
</html>
<?php 
