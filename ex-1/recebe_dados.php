<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title> Aula 2</title>

    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);

        }

        label{
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
            box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.40);
            -webkit-box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.40);
            -moz-box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.40);

        }
    </style>
</head>

<body>
    <?php
        $num1 = $_GET['num1'];
        // $num2 = $_GET['num2'];

        if ($num1 < 0) {
            echo "<div class='form'>";
            echo "<h1>O número $num1 é um valor negativo!</h1>";
            echo "</div>";
        } elseif ($num1 == 0) {
            echo "<div class='form'>";
            echo "<h1>O número $num1 é igual a 0!</h1>";
            echo "</div>";
        } else {
            echo "<div class='form'>";
            echo "<h1>O número $num1 é um valor positivo!</h1>";
            echo "</div>";
        }
    ?>
</body>

</html>