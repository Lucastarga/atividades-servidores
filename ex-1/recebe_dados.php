<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title> Exercício 1</title>

    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);
            overflow: hidden;

        }

        label {
            font-weight: 600;
            font-size: 1.5rem;
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
            box-shadow: 2px 14px 32px 0px rgba(0, 0, 0, 0.40);
            -webkit-box-shadow: 2px 14px 32px 0px rgba(0, 0, 0, 0.40);
            -moz-box-shadow: 2px 14px 32px 0px rgba(0, 0, 0, 0.40);
        }

    </style>
</head>

<body>
    <?php
    $num1 = $_GET['num1'];
    ?>

    <?php
    if ($num1 < 0) { ?>
        <div class='form'>
            <h1>O número <?= $num1 ?> é um valor negativo!</h1>
        </div>
    <?php } elseif ($num1 == 0) { ?>
        <div class='form'>
            <h1>O número <?= $num1 ?> é igual a 0!</h1>
        </div>
    <?php } else { ?>
        <div class='form'>
            <h1>O número <?= $num1 ?> é um valor positivo!</h1>
        </div>
    <?php } ?>

</body>

</html>