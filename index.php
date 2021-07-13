
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>PHP</title>
</head>
<body>

    <header>
        <?php include 'includes/header.inc.html';?>
    </header>

    <div class="row">
            <nav class="col-3 px-5">
                    <button type="button" class="btn btn-outline-secondary mx-auto btn-block">Home</button>
                <?php include 'includes/ul.inc.html';?>
            </nav>
            <section class="col-9">
                    <button type="button" class="btn btn-primary">Ajouter des données</button>
                <?php include 'includes/form.inc.html';?>
            </section>
    </div>

    <footer>
        <?php include 'includes/footer.inc.html';?>
    </footer>

</body>
</html>