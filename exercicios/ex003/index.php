<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos </h1>

    <?php 
        //  0x = hexadecimal 0b = binário 0 = octal
        // $num =0b10;
        // echo "O valor da variavel é $num";

        // $v = "Vinicius";
        // var_dump($v);

        // $num = (int) 3e2; // 3x10(2) coerção
        //echo "O valor é $num" 
        //var_dump($num);
        // $num = (float) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print "o valor para casado é $casado";

        // $vet = [6, 2, 9, 3, 5];
        // var_dump($vet);

        // class Pessoa {
        //     private string $nome;

        // }

        // $p = new Pessoa;
        // var_dump($p);
        // $nome = 'Vinicius';
        // $sobrenome = 'Gomes';
        // echo  "$nome $sobrenome \u{1f596}";

        // const Estado = "RJ";
        // echo "MORO NO " . Estado ;
        // const CANAL = "Curso em Vídeo \u{1f499}";
        // echo " Eu adoro o ".CANAL;

        $nome = "Vinicius";
        $sobrenome = "Gomes";
        $apelido = "Esquerdinha";
        echo "$nome \"$apelido\" $sobrenome";


    ?>
    
</body>
</html>
