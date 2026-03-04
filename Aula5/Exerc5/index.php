
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    
<?php 
$nota = 7;
echo "Nota: " . $nota;
?>
<br>
<?php if($nota >= 7): ?>
    <?= "Resultado: Aprovado!" ?>
<?php elseif($nota >= 5 && $nota < 7): ?>
    <?= "Resultado: Recuperação!" ?>
<?php elseif($nota < 5): ?>
    <?= "Resultado: Reprovado!" ?>
<?php endif; ?>

</body>
</html>