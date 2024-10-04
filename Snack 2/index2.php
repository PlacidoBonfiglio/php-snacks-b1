<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack b1 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <h1 class="text-center mt-5">Snack 2</h1>

        <form action="index2.php" method="get" class="container">
            <div class="mb-3 mt-5">
                <label for="name">Inserisci il tuo nome</label>
                <input type="text" id="name">
            </div>

            <div class="mb-3">
                <label for="email">Inserisci la tua e-mail</label>
                <input type="email" id="email">
            </div>

            <div class="mb-3">
                <label for="age">Inserisci la tua età</label>
                <input type="number" id="age">
            </div>
        </form>
    </main>
</body>

</html>