<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $myArray = [3,2,1,5,4]; // Array original
    $newItem = 6; // Novo item a ser adicionado
    $myArray[] = $newItem; // Adiciona o novo item ao final do array

    $indexToRemove =  2; // Índice do item a ser removido

    unset($myArray[$indexToRemove]); // Remove o item do array com base no índice

sort($myArray); // Ordena o array em ordem crescente

// rsort($myArray); // Ordena o array em ordem decrescente

// asort($myArray); // Ordena o array mantendo a associação entre chaves e valores

// arsort($myArray); // Ordena o array em ordem decrescente mantendo a associação entre chaves e valores


$indexToChange = 4; // Índice do item a ser alterado
$newValue = 10; // Novo valor para o item

$myArray[$indexToChange] = $newValue; // Altera o valor do item no índice especificado

    foreach ($myArray as $item){
        echo $item . "<br>";
    }
    ?>
</body>
</html>