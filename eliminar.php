<?php

    include "conexio.php";


    $category_id = ($_GET["category_id"]);

    $sql = $conexion -> prepare("DELETE FROM public_category_bs1 WHERE category_id = ?;");
    $resultado = $sql -> execute([$category_id]);

    if ($resultado) {
        header("Location: desti.php");
    }

?>