<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title> Exercício 4</title>

    <style>
        *{
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);
            display: grid;
            font: 87.5%/1.5em 'Montserrat', sans-serif;
            margin: 0;
            min-height: 100vh;
            place-items: center;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        td {
            padding: 0;
        }

        .calendario-container {
            position: relative;
            width: 450px;
            
        }

        .calendario-container header {
            border-radius: 1em 1em 0 0;
            background: #045B78;
            color: #fff;
            padding: 3em 2em;
            width: 100%;
        }

        .dia {
            font-size: 2em;
            font-weight: 300;
            line-height: 1em;
        }

        .mes {
            font-size: 4em;
            line-height: 1em;
            text-transform: lowercase;
        }

        .calendario {
            background: #fff;
            border-radius: 0 0 1em 1em;
            -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
            box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
            color: #555;
            display: inline-block;
            padding: 2em;
        }

        .calendario thead {
            color: #e66b6b;
            font-weight: 700;
            text-transform: uppercase;
        }

        .calendario td {
            padding: .5em 1em;
            text-align: center;
        }

        .calendario tbody td:hover {
            background: #cacaca;
            color: #fff;
        }

        .ante-mes,
        .prox-mes {
            color: #cacaca;
        }

        .anel-esquerdo,
        .anel-direito {
            position: absolute;
            top: 140px;
        }

        .anel-esquerdo {
            left: 2em;
        }

        .anel-direito {
            right: 2em;
        }

        .anel-esquerdo:before,
        .anel-esquerdo:after,
        .anel-direito:before,
        .anel-direito:after {
            background: #fff;
            border-radius: 4px;
            -webkit-box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
            box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
            content: "";
            display: inline-block;
            margin: 8px;
            height: 32px;
            width: 8px;
        }

        .error{
            width: 350px;
            min-height: 350px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 5px;
            line-height: 2rem;
            padding: 20px;
        }

        .error a {
            text-decoration: none;
            font-size: 1.5rem;
            animation: show .6s forwards;
        }

        .img-error img{
            max-width: 60%; 
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
        $num = $_GET['mes'];
        $array_mes = array(
            '1' => 'Janeiro',
            '2' => 'Fevereiro',
            '3' => 'Março',
            '4' => 'Abril',
            '5' => 'Maio',
            '6' => 'Junho',
            '7' => 'Julho',
            '8' => 'Agosto',
            '9' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro',
        );
    ?>

    <?php 
    if($num > 0 && $num <= 12){ ?>
    <?php
    foreach ($array_mes as $i => $value) {
        if ($num == $i) { ?>
            <div class="container">
                <div class="calendario-container">
                    <header>
                        <div class="dia"><?= "Mês $num" ?></div>
                        <div class="mes"><?= $value ?></div>
                    </header>
                    <table class="calendario">
                        <thead>
                            <tr>
                                <td>Seg</td>
                                <td>Ter</td>
                                <td>Qua</td>
                                <td>Qui</td>
                                <td>Sex</td>
                                <td>Sáb</td>
                                <td>Dom</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ante-mes">29</td>
                                <td class="ante-mes">30</td>
                                <td class="ante-mes">31</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td class="prox-mes">1</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="anel-esquerdo"></div>
                    <div class="anel-direito"></div>
                </div>
            </div>

        <?php } ?>
    <?php } ?>
        
    <?php } else { ?>
        
        <div class="error">
            <div class="img-error">
                <img src="./error.png" alt="">
            </div>
            <div class="text-error">
                <h1>Por favor, insira um número entre 1 a 12!</h1>
            </div>
            <div>
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