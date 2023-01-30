<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Password Generator</title>
</head>

<body>
    <main>
        <div class="container-fluid psw-container">
            <div class="row d-flex justify-content-center">
                <div class="col-3">
                    <form action="index.php" method="get">
                        <label class="m-1" for="lunghezza">Inserisci la lunghezza della password:</label>
                        <input class="m-1" type="text" id="lunghezza" name="lunghezza">
                        <input class="m-1" type="submit" value="Genera password">
                    </form>
                    <div class="col-12">
                        <div class="strong-password">
                            <h4>La tua password è:</h4>
                            <?php include_once __DIR__ . '/partials/function.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>