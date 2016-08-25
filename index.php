<!DOCTYPE html>
<html lang="es" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8" />
    <title>evidencia4</title>
</head>
<body>
    <?php
    /**
     * AUTOR: Enrique Andrés Martínez Agudelo
     * AUTOR: 1082905929
     * DESARROLLO WEB CON PHP
     * Evidencia: Taller "Uso de formularios para transferencia"
     */

    include_once('operation.php'); # Llamada al fichero operation.php
     ?>
    <!-- En este punto se crea el formulario -->
    <form class="cinema" action="./" method="post">
        <div>
            <div class="tabla">
                <table>
                <?php
                include('room.php'); # Llamada al fichero room.php
                 ?>
                </table>
            </div>
            <!-- En este punto se crea tanto el Label y
            el Cajón de Texto para el apartado FILA -->
            <div class="lugar">
                <span class="hijoLugar"><label for="fila">Fila</label></span>
                <span class="hijoLugar">
                    <input type="number" id="fila" name="fila" min="1" max="5" />
                </span>
            </div>
            <!-- En este punto se crea tanto el Label y
            el Cajón de Texto para el apartado LUGAR -->
            <div class="lugar">
                <span class="hijoLugar"><label for="lugar">Puesto</label></span>
                <span class="hijoLugar">
                    <input type="number" id="lugar" name="lugar" min="1" max="5" />
                </span>
            </div>
            <!-- En este punto se crea tanto el Radio-Button y
            el Label para la opción RESERVAR -->
            <div class="operation">
                <input type="radio" id="rese" name="oper" value="R" checked />
                <label for="rese">Reserva</label>
            </div>
            <!-- En este punto se crea tanto el Radio-Button y
            el Label para la opción COMPRAR -->
            <div class="operation">
                <input type="radio" id="comp" name="oper" value="V" />
                <label for="comp">Comprar</label>
            </div>
            <!-- En este punto se crea tanto el Radio-Button y
            el Label para la opción LIBERAR -->
            <div class="operation">
                <input type="radio" id="libe" name="oper" value="L" />
                <label for="libe">Liberar</label>
            </div>
            <!-- En este punto se crea el botón de Envío -->
            <div class="btn">
                <input type="submit" name="solicitar" value="Solicitar" />
            </div>
            <!-- En este punto se crea el botón de Reseteado -->
            <div class="btn">
                <input type="reset" name="borrar" value="Borrar">
            </div>
        </div>
        <!-- En este punto se crea un cajón de texto tipo textarea que
        permanecerá oculto y servira para trabajar y comprar las transacciones
    -   -->
        <div class="oculto">
            <textarea name="msn" hidden="hidden"><?php
                echo implode("", $sala);
             ?></textarea>
        </div>
    </form>
</body>
</html>
