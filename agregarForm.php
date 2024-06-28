<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <article class="container mt-5">
        <h1 class="text-center mb-4">Add category</h1>
        <form action="agregar.php" method="POST">
            <article class="mb-3">
                <label for="category_id" class="form-label">ID</label>
                <input type="text" class="form-control" id="name" name="category_id" required>
            </article>
            <article class="mb-3">
                <label for="category_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="category_name" required>
            </article>
            <article class="mb-3">
                <label for="category_level3" class="form-label">Category Level 3</label>
                <input type="text" class="form-control" id="surname" name="category_level3" required>
            </article>
            <article class="mb-3">
                <label for="dni" class="form-label">Category Level 2</label>
                <input type="text" class="form-control" id="dni" name="category_level2" required>
            </article>
            <article class="mb-3">
                <label for="level1" class="form-label">Category Level 1</label>
                <input type="text" class="form-control" name="category_level1" required>
            </article>
            <article class="mb-3">
                <label for="search" class="form-label">Search Words</label>
                <input type="text" class="form-control" name="search_words" required>
            </article>
            <article class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" name="weight" required>
            </article>
            <article class="mb-3">
                <label for="level0" class="form-label">Category Level 0</label>
                <input type="text" class="form-control" name="category_level0" required>
            </article>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </article>
</body>
</html>