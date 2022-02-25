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


</body>

</html>