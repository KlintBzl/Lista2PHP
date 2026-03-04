<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
</head>
<body>

<?php 
$notas = [6,7,4];

echo "Notas: " . implode(",", $notas);

function calcularMedia($n){
    $soma = array_sum($n);
    $media = $soma / 3;
    return $media;
}

echo "<br>Média: " . calcularMedia($notas);

if(calcularMedia($notas) >= 7){
echo "<br>Resultado: Aprovado!";
} else{
echo "<br>Resultado: Reprovado!";
}
?>

</body>
</html>