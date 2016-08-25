<?php
/**
 * AUTOR: Enrique Andrés Martínez Agudelo
 * AUTOR: 1082905929
 * DESARROLLO WEB CON PHP
 * Evidencia: Taller "Uso de formularios para transferencia"
 */

# Este array guarda todas la posiciones libres de la sala del teatro.
$sala = array(
    'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L',
    'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L',
    'L', 'L', 'L', 'L', 'L'
);

/**
 * La función livin() tiene como objetivo imprimir la tabla a mostrar en la
 * pagina principal; además debe ser provista de un (1) argumento de tipo array
 * el cual deberá almacenar la información de las sillas del teatro y sus
 * estados.
 */
function living($array)
{
    echo "<tr><td colspan='6'>ESCENACIO</td></tr><tr><td></td>
            <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
            <tr>";
    foreach ($array as $key => $value) {
        if (!($key % 5)) { echo "<td>".(($key/5)+1)."</td>"; }
        echo "<td>".$value."</td>";
        if (!(($key + 1) % 5)) { echo "</tr><tr>"; }
    }
    echo "</tr>";
}

# Se evalua si la variable gobal $_POST está vacía; si es así se le entrega a la
# funcion living el array $sala con el valor actual (todas las sillas vacias).
# De lo contrario al array $sala se le pasará el array retornado por la funcion
# demand()., y posteriormente se pasa $sala con su nuevo valor a living().
if (empty($_POST)) {
    living($sala);
}
else {
    $sala = demand($_POST['fila'], $_POST['lugar'], $_POST['oper'], $_POST['msn']);
    living($sala);
}
