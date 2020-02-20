<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $resultado = $n1 * $n2;

    echo "O resultado é: ".$resultado;
    header("location: chama.php?res=$resultado&n1=$n1&n2=$n2");
?>