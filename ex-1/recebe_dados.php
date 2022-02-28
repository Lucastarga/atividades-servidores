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


        .error a {
            text-decoration: none;
            font-size: 1.5rem;
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
            <div>
                <h1>O número <?= $num1 ?> é um valor negativo!</h1>
            </div>
            <div class="error">
                <a href="./index.php">
                    <svg width="17px" height="17px" viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-arrow-backward">
                        <title>1181</title>
                        <defs></defs>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M1.307,5.988 L6.616,1.343 C7.027,0.933 7.507,0.864 7.918,1.275 L7.918,4.407 C8.014,4.406 8.098,4.406 8.147,4.406 C13.163,4.406 16.885,7.969 16.885,12.816 C16.885,14.504 16.111,13.889 15.788,13.3 C14.266,10.52 11.591,8.623 8.107,8.623 C8.066,8.623 7.996,8.624 7.917,8.624 L7.917,11.689 C7.506,12.099 6.976,12.05 6.615,11.757 L1.306,7.474 C0.897,7.064 0.897,6.399 1.307,5.988 L1.307,5.988 Z" fill="#434343" class="si-glyph-fill"></path>
                        </g>
                    </svg>
                    Voltar
                </a>
            </div>
        </div>
    <?php } elseif ($num1 == 0) { ?>
        <div class='form'>
            <div>
                <h1>O número <?= $num1 ?> é igual a 0!</h1>
            </div>
            <div class="error">
                <a href="./index.php">
                    <svg width="17px" height="17px" viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-arrow-backward">
                        <title>1181</title>
                        <defs></defs>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M1.307,5.988 L6.616,1.343 C7.027,0.933 7.507,0.864 7.918,1.275 L7.918,4.407 C8.014,4.406 8.098,4.406 8.147,4.406 C13.163,4.406 16.885,7.969 16.885,12.816 C16.885,14.504 16.111,13.889 15.788,13.3 C14.266,10.52 11.591,8.623 8.107,8.623 C8.066,8.623 7.996,8.624 7.917,8.624 L7.917,11.689 C7.506,12.099 6.976,12.05 6.615,11.757 L1.306,7.474 C0.897,7.064 0.897,6.399 1.307,5.988 L1.307,5.988 Z" fill="#434343" class="si-glyph-fill"></path>
                        </g>
                    </svg>
                    Voltar
                </a>
            </div>
        </div>
    <?php } else { ?>
        <div class='form'>
            <div>
                <h1>O número <?= $num1 ?> é um valor positivo!</h1>
            </div>
            <div class="error">
                <a href="./index.php">
                    <svg width="17px" height="17px" viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-arrow-backward">
                        <title>1181</title>
                        <defs></defs>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M1.307,5.988 L6.616,1.343 C7.027,0.933 7.507,0.864 7.918,1.275 L7.918,4.407 C8.014,4.406 8.098,4.406 8.147,4.406 C13.163,4.406 16.885,7.969 16.885,12.816 C16.885,14.504 16.111,13.889 15.788,13.3 C14.266,10.52 11.591,8.623 8.107,8.623 C8.066,8.623 7.996,8.624 7.917,8.624 L7.917,11.689 C7.506,12.099 6.976,12.05 6.615,11.757 L1.306,7.474 C0.897,7.064 0.897,6.399 1.307,5.988 L1.307,5.988 Z" fill="#434343" class="si-glyph-fill"></path>
                        </g>
                    </svg>
                    Voltar
                </a>
            </div>
        </div>
    <?php } ?>

</body>

</html>