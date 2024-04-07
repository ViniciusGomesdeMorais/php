<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel = "stylesheet" href = "style.css">

</head>
<body>
       <header>
    
       <h1> Trabalhando com numeros aleatórios </h1>
       
       </header>

       <main>
    <?php 
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        
        // rand()= 1951 - Linear congrential gererator
        // mt_rand()= 1997 - Mersenne twister
        // A partir do PHP 7.1, rand() é simples apontamento para mt_rand()
        // random_int() gera números aleatórios criptograficamente seguros!
       
        echo "<p> Gerando numero aleatório entre $min e $max... <br></p>";
        echo " O número gerado foi $num;"
    ?>
    <button onclick="javascrript:document.location.reload()">&#x1F504; Gerar Outro </button>
    </main>
</body>
</html>