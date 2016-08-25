<?php
/**
 * AUTOR: Enrique Andrés Martínez Agudelo
 * AUTOR: 1082905929
 * DESARROLLO WEB CON PHP
 * Evidencia: Taller "Uso de formularios para transferencia"
 */

/**
 * La función demand() tiene como objetivo analizar y gestionar la petición del
 * usuario. Recibe cuatro (4) argumentos siendo $row para la fila escogida;
 * $site para el lugar escogido; $action para la acción a realizar (Reserva,
 * Compra o Liberación) y $msn para una cadena de caracteres correspondente a
 * cada silla en la sala del teatro.
 */
function demand($row, $site, $action, $msn)
{
    # A continuación se divide la cadena por caracter y se almacena como array.
    $slice = str_split($msn);
    # Se analizan las condiciones antes de trabajar con el array, sino se
    # devuelve el mismo sin haberlo trabajado.
    # La primera y tercera condición hacen referencia a cadenas vacías. La
    # segunda y tercera condición hacen referencia a valores mayores al espacio
    # del recinto. La quinta hace referencia a una acción nula.
    if (($row != "") && ($row <= 5) && ($site != "") && ($site <= 5) && ($action != "")) {
        # Se establece el indice a modificar
        $index = (($row - 1) * 5) + ($site - 1);
        # Se evalua si el valor guardado dentro de dicho indice ya se encuentra
        # con el valor 'V'.
        if (!($slice[$index] == 'V')) {
            $slice[$index] = $action;
        }
    }
    # Se retorna el valor actual de $slice.
    return $slice;
}
