<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    
<?php 
$idade = 18;
?>
<?php if($idade >= 18): ?>
    <?= "Você é maior de idade!" ?>
<?php else: ?>
    <?= "Você é menor de idade!" ?>
<?php endif; ?>

</body>
</html>