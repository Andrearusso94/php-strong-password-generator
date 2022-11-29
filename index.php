<?php

/*Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
Scriviamo tutto (logica e layout) in un unico file index.php
*/

include __DIR__ . '/function.php';


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #001632;
        }

        h1 {
            color: #7f8a99;
        }

        h2 {
            color: #0dcaf0;
        }
    </style>
</head>

<body>
    <header>
        < !-- place navbar here -->
    </header>
    <main>
        <div class="container-fluid py-5">
            <div class="container">
                <h1 class="text-center">Password Generetor</h1>
                <h2 class="text-center">Genera una password sicura</h2>
            </div>


            <?php if (isset($_GET['password'])) : ?>
                <div class="alert alert-success" role="alert"><strong><?= generatePassword($_GET["password"]); ?></strong>
                </div><?php endif; ?>


            <div class="mb-3 bg-white py-5">
                <form action="index.php">
                    <label for="password" class="form-label">Lunghezza Password</label>
                    <input class="px-2" type="number" name="password" id="password">
                    <button type="submit">Invia</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        < !-- place footer here -->
    </footer>
    < !-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>