<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    <title>CATEGORIES</title>
</head>

<body>

<article class="container">
        <h1 class="text-center" style="margin-left: -100px; color:black; padding-top: 30px;">CATEGORIES LIST</h1>
        <br>
</article>
<a href="agregarForm.php" style="margin-top: -20px; margin-left: 138px; margin-bottom: 20px;" class="btn btn-success">Add category</a>
    <article class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category Level 3</th>
            <th scope="col">Category Level 2</th>
            <th scope="col">Category Level 1</th>
            <th scope="col">Search Words</th>
            <th scope="col">Weight</th>
            <th scope="col">Category Level 0</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "conexio.php";

                $sql = $conexion -> query("SELECT * FROM public_category_bs1");
                $Fila = $sql -> fetchAll(PDO::FETCH_OBJ);

                foreach ($Fila as $row) {
            ?>

            <tr class="contenido">
                <th scope="row"><?php echo $row -> category_id?></th>
                <td><?php echo $row -> category_name?></td>
                <td><?php echo $row -> category_level3?></td>
                <td><?php echo $row -> category_level2?></td>
                <td><?php echo $row -> category_level1?></td>
                <td><?php echo $row -> search_words?></td>
                <td><?php echo $row -> weight?></td>
                <td><?php echo $row -> category_level0?></td>
                <td>
                    <a href="editarForm.php?category_id=<?php echo $row -> category_id?>" class="btn btn-warning">Edit</a>
                    <a href="eliminar.php?category_id=<?php echo $row -> category_id?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                    
            <?php
                }
            ?>
        </tbody>
    </table>
        
    </article>

</body>
</html>