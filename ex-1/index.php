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

        *{
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

        label{
            font-weight: 600;
            font-size: 1.5rem;
        }

        .form {
            padding: 20px;
            min-width: 300px;
            min-height: 200px;
            background-color: #ccc;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.75);
        }

        .item-form{
            width: 100%;
        }

        .input-item{
            margin-top: 5px;
            height: 30px;
            padding: 10px 5px;
        }

        .input-submit{
            height: 30px;
            background-color: #7FDCEB;
            color: #fff;
            font-size: 1.125rem;
            border: none;
            outline: none;
            transition: .3s;
        }

        .input-submit:hover{
            transform: scale(1.02);
        }

        .input-submit,
        .input-item{
            width: 100%;
        }

    </style>
</head>



<body>
    <form class="form" action="recebe_dados.php" method="POST">
        <div class="item-form">
            <label for="num1">Verifica valor:</label></br>
            <input class="input-item" type="number" id="num1" name="num1" placeholder="Digite um número" required ></br>
        </div>

        <div class="item-form">
            <input class="input-submit" type="submit"name="Enviar">
        </div>
    </form>
</body>

</html>