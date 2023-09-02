<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style-PPT.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@500&display=swap" rel="stylesheet">

    <title>Piedra, Papel y Tijera</title>
</head>
<body>

    <div class="boton_salida"><a href="../index.html">Atras</a></div>

<h1>Juego de Piedra Papel o Tijera</h1>

<?php
        if(!isset($_GET['opcion']))
        {
           $bot = 0;
            $user = 0;
        }
        else
        {
            $bot = $_GET['bot'];
            $user = $_GET['user'];
        

    ?>

    <?php
        if(isset($_GET['calcular']))
        {
            $opcion = $_GET['opcion'];

            echo '<p class="usu">Usted eligio <b>'.$opcion.'</b></p>';
        }

     $azar = rand(1,3);
    
     if($opcion == 'Piedra')
     {
        switch($azar) 
        {
            case '1':
            {
                echo '<p class="bot_eleccion">El Bot ha elejido Piedra</p>
                <p class="emp">¡Empataste en esta ronda contra el bot!</p>';
                break;
            }

            case '2':
            {
                echo '<p class="bot_eleccion">El Bot ha elejido Papel</p>
                <p class="perd">¡Perdiste contra el Bot!</p>';
                $bot++;
                break;
            }

            case '3':
            {
                echo '<p class="bot_eleccion">El Bot ha elejido Tijeras</p>
                <p class="gano1">¡Le Ganaste al Bot!</p>';
                $user++;
                break;
            }
        }
    }

        if($opcion == 'Papel')
        {
        
        switch($azar) 
        {
            case '1':
            {
                echo '<p class="bot_eleccion">El Bot ha elejido Piedra</p>
                <p class="gano1">¡Le Ganaste al Bot!</p>';
                $user++;
                break;
            }

            case '2':
            {
                echo '<p class="bot_eleccion">El Bot ha elejido Papel</p>
                <p class="emp">¡Empataste en esta ronda contra el bot!</p>';
                break;
            }

            case '3':
            {
                echo '<p class="bot_eleccion">El Bot ha elejido Tijeras</p>
                <p class="perd">¡Perdiste contra el Bot!</p>';
                $bot++;
                break;
            }
        }
    }

        if($opcion == 'Tijera')
        {
            switch($azar) 
            {
                case '1':
                {
                    echo '<p class="bot_eleccion">El Bot ha elejido Piedra</p>
                    <p class="perd">¡Perdiste contra el Bot!</p>';
                    $bot++;
                    break;
                }

                case '2':
                {
                    echo '<p class="bot_eleccion"">El Bot ha elejido Papel</p>
                    <p class="gano1">¡Le Ganaste al Bot!</p>';
                    $user++;
                    break;
                }

                case '3':
                {
                    echo '<p class="bot_eleccion">El Bot ha elejido Tijeras</b></p>
                    <p class="emp">¡Empataste en esta ronda contra el bot!</p>';
                    break;
                }
            }
        }
    
    }
?>

    <?php echo '<div class="rachas">';
    echo '<div class="racha_bot"><b>Bot : '.$bot.'</b></div>'; 
    echo '<div class="racha_user"><b>User : '.$user.'</b></div>';
    
    if($bot>=5)
    {
        echo '<div class="resultado">';
        echo '<p class="end">Se termino el Juego</p>';
        echo '<p class="perdio">¡PERDISTE!</p>';
        echo '<style type = "text/css">form {display: none} </style>';
        echo '</div>';
    }

    if($user>=5)
    {
        echo '<div class="resultado">';
        echo '<p class="end">Se termino el Juego</p>';
        echo '<p class="gano2">¡GANASTE!</p>';
        echo '<style type = "text/css">form {display: none} </style>';
        echo '</div>';
    }
    ?>

    <h4 class = "consigna">Seleccione una opcion: </h4>

    <form action="" method="get">

    <input type="radio" name="opcion" value="Piedra" id="1" required>
    <label class="piedra" for="1"><img src="imagenes/Piedra.png" ></label>
    
    <input type="radio" name="opcion" value="Papel" id="2" required>
    <label class="papel" for="2"><img src="imagenes/Papel.png"></label>

    <input type="radio" name="opcion" value="Tijera" id="3" required>
    <label class="tijera" for="3"><img src="imagenes/Tijera.png"></label>


    <input type="hidden" name="bot" value="<?php echo $bot;?>">
    <input type="hidden" name="user" value="<?php echo $user;?>">

    <input class="boton" type="Submit" name="calcular" value="Jugar">

    </form>

</body>
</html>