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
            font-size: 1.25rem;
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
            box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.35);
            -webkit-box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.35);
            -moz-box-shadow: 2px 14px 32px 0px rgba(0,0,0,0.35);
        }

        .item-form{
            width: 100%;
            margin-top: 20px;
        }

        .input-item{
            margin-top: 5px;
            height: 30px;
            padding: 10px 5px;
        }

        .input-submit{
            margin-top: 10px;
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
    <form class="form" action="recebe_dados.php" method="GET">
        <h1>Cálculo de média final</h1>
        <div class="item-form">
            <label for="nota1">Primeira nota:</label></br>
            <input class="input-item" type="number" max="10" id="nota1" name="nota1" placeholder="Digite sua nota" required></br>
        </div>

        <div class="item-form">
            <label for="nota2">Segunda nota:</label></br>
            <input class="input-item" type="number" max="10" id="nota2" name="nota2" placeholder="Digite sua nota" required></br>
        </div> 

        <div class="item-form">
            <label for="nota3">Terceira nota:</label></br>
            <input class="input-item" type="number" max="10" id="nota3" name="nota3" placeholder="Digite sua nota" required></br>
        </div> 

        <div class="item-form">
            <input class="input-submit" type="submit"name="Enviar">
        </div>
    </form>
</body>

</html>