<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title> Exercício 2</title>

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
            animation: show .6s forwards;
        }

        @keyframes show {
            from {
                opacity: 0;
                transform: matrix3d(-30px, 0, 0);
            }
            to {
                opacity: 1;
                transform: matrix3d(0, 0, 0);
            }
        }

    </style>
</head>

<body>
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
    ?>

    <?php 
        if($num1 < $num2) { ?>
            <div class="form">
                <h1> A = <?= $num1 ?></h1>
                <h1> B = <?= $num2 ?></h1>
            </div>
        <?php } else { ?>
            <div class="form">
                <h1> A = <?= $num2 ?></h1>
                <h1> B = <?= $num1 ?></h1>
            </div>
        <?php } ?>

    

       
        


    
</body>

</html>