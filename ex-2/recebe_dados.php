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
        $num2 = $_GET['num2'];
        $array_num = array('A' => $num1,'B' =>$num2);
        asort($array_num);

        echo "<div class='form'>";
        foreach($array_num as $i => $valor ){
            echo "<h2>" . $i . ' = '. $valor. "</h2>" . "</br>";
        }

        echo "</div>";


    ?>
</body>

</html>