<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
        <title>calcul</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
</head>

<body>
    <form action="somme.php" method="post">
        <div class="input-group mb-3">
            <span>Entrez le premier nombre: </span>
            <input type="number" class="form-control" name="var1" />
        </div>
        <div class="input-group mb-3">
            <span>Entrez le deuxieme nombre: </span>
            <input type="number" class="form-control" name="var2" />
        </div>
        <input type="submit" value="calculer" />
    </form>
</body>

</html>