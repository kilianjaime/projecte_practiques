<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Edit category</title>
</head>
<body>

    <?php
        include "conexio.php";

        $category_id = $_REQUEST["category_id"];

        $sql = $conexion->prepare("SELECT * FROM public_category_bs1 WHERE category_id = ?");
        $sql -> execute([$category_id]);

        $Fila = $sql->fetch(PDO::FETCH_OBJ);

    ?>
    <article class="container">
        <h1 class="text-center" style="background-color: blueviolet; color:aliceblue; border-radius: 10px;">Edit category</h1>
        <br>
    </article>
    <article class="container">
    <br>
    <form action="editar.php" method="POST">
    <article class="mb-3">
        <label for="category_id" class="form-label">ID</label>
        <input type="text" class="form-control" name="category_id" value="<?php echo $Fila -> category_id?>">
    </article>
    <article class="mb-3">
        <label for="Nom" class="form-label">Name</label>
        <input type="text" class="form-control" name="category_name" value="<?php echo $Fila -> category_name?>">
    </article>
    <article class="mb-3">
        <label for="level3" class="form-label">Category Level 3</label>
        <input type="text" class="form-control" name="category_level3" value="<?php echo $Fila -> category_level3?>">
    </article>
    <article class="mb-3">
        <label for="level2" class="form-label"> Category Level 2</label>
        <input type="text" class="form-control" name="category_level2" value="<?php echo $Fila -> category_level2?>">
    </article>
    <article class="mb-3">
        <label for="level1" class="form-label">Category Level 1</label>
        <input type="text" class="form-control" name="category_level1" value="<?php echo $Fila -> category_level1?>">
    </article>
    <article class="mb-3">
        <label for="search" class="form-label">Search Words</label>
        <input type="text" class="form-control" name="search_words" value="<?php echo $Fila -> search_words?>">
    </article>
    <article class="mb-3">
        <label for="weight" class="form-label">Weight</label>
        <input type="text" class="form-control" name="weight" value="<?php echo $Fila -> weight?>">
    </article>
    <article class="mb-3">
        <label for="level0" class="form-label">Category Level 0</label>
        <input type="text" class="form-control" name="category_level0" value="<?php echo $Fila -> category_level0?>">
    </article>
    <input type="hidden" name="hidden" value="1">
    <button type="submit" class="btn btn-success">Edit</button>
    <a href="desti.php" class="btn btn-dark">Back</a>
    </form>
    </article>
</body>
</html>