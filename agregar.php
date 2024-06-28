<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Add category</title>
</head>
<body>

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

    $sql = $conexion -> prepare("INSERT INTO public_category_bs1 (category_id, category_name, category_level3, category_level2, category_level1, search_words, weight, category_level0) VALUES (?,?,?,?,?,?,?,?)");

    $resultado = $sql->execute([$category_id, $category_name, $category_level3, $category_level2, $category_level1, $search_words, $weight, $category_level0]);

    if ($resultado) {
        header("location:desti.php");
    }else{
        echo "No s'han insertat les dades.";
    }

?>
    
</body>
</html>