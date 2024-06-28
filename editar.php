<?php

    include "conexio.php";

    $category_id = $_POST["category_id"];
    $category_name = $_POST["category_name"];
    $category_level3 = $_POST["category_level3"];
    $category_level2 = $_POST["category_level2"];
    $category_level1 = $_POST["category_level1"];
    $search_words = $_POST["search_words"];
    $weight = $_POST["weight"];
    $category_level0 = $_POST["category_level0"];


    $sentencia = $conexion->prepare("UPDATE public_category_bs1 SET category_name = ?, category_level3 = ?, category_level2 = ?, category_level1 = ?, search_words = ?, weight = ?, category_level0 = ? WHERE category_id = ?");

    $resultado = $sentencia->execute([$category_name, $category_level3 , $category_level2, $category_level1, $search_words, $weight, $category_level0, $category_id]);
    
    if ($resultado === TRUE) {
       header("Location: desti.php");
    }else {
        echo "Alguna cosa ha sortit malament!";
    }

?>