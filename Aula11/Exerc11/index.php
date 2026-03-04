<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Extra</title>
</head>
<body>

<?php 
$numeros = [1,2,3,4,5,6,7,8,8,10];
$par = 0;
$impar = 0;

echo "números: " . implode(",",$numeros);

foreach ($numeros as $n) {
    if($n % 2 == 0){
        $par += 1;
    }else{
        $impar += 1;
    }
}
echo "<br><br>Pares: " . $par;
echo "<br>Ímpares: " . $impar;
?>
    
</body>
</html>