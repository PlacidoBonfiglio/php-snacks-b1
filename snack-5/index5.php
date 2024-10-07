<?php
$word = $_GET["word"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>

    <!-- Bootstrap cdn 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">

            <h1 class="mb-4 mt-5 text-center">Snack 5</h1>

            <form action="index5.php" method="get">
                <div class="mb-3">
                    <label for="text" class="form-label">Verifica parola palindroma</label>
                    <input class="form-control" type="text" id="text" rows="3" name="word">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>