<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title> Exercício 3 </title>

    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }



        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);
        }

        label {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .form {
            padding: 20px;
            min-width: 200px;
            min-height: 200px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 5px;
            box-shadow: 2px 14px 32px 0px rgba(0, 0, 0, 0.35);
            -webkit-box-shadow: 2px 14px 32px 0px rgba(0, 0, 0, 0.35);
            -moz-box-shadow: 2px 14px 32px 0px rgba(0, 0, 0, 0.35);
        }

        .aprovado {
            color: #00b40f;
        }

        .reprovado {
            color: #bb3500;
        }

        .image {
            width: 100px;
            height: 100px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .image img {
            max-width: 100%;
        }

    </style>
</head>

<body>
    <?php
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];

        $array_nota = array('N1' => $nota1, 'N2' => $nota2, 'N3' => $nota3);
        $media =  array_sum($array_nota) / 3;
        $media = number_format($media, 1, ',', '');
        $status;

        if ($media >= 6) {
            $status =  1;
        } else {
            $status = 0;
        }
    ?>

    <!-- inicio da condicao if / else -->
    <?php
    if ($media) { ?>
        <div class="form">
            <div class="image">
                <img src="./user.png" alt="">
            </div>
            <!-- inicio do laço foreach -->
            <?php
            foreach ($array_nota as $i => $value) { ?>
                <strong><?= $i . ' = ' . $value ?></strong> </br>
            <?php } ?>
            <!-- fim do laço foreach -->

             <?= "<strong> MG = $media </strong></br>" ?> <!-- imprime a media  -->
            <!-- inicio da condicao if / else -->
            <?php
            if ($status) { ?>
                <strong class="aprovado">Situação = Aprovado</strong>
            <?php } else { ?>
                <strong class="reprovado">Situação = Reprovado</strong>
            <?php }; ?>
            <!-- fim da condicao if / else -->
        </div>

    <?php } ?>
    <!-- fim da condicao if / else -->

</body>

</html>