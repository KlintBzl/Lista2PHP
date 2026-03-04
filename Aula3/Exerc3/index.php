<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    
<?php 
$a = 3;
$b = 3;
?>
<?php if($a > $b): ?>
    <?=  $a . " é maior que " . $b ?>
<?php elseif($b > $a): ?>
    <?=  $b . " é maior que " . $a ?>
<?php elseif($a == $b): ?>
    <?= "os dois números são iguais" ?>
<?php endif; ?>

</body>
</html>