<?php 
$word = trim($_GET['censored-word']);
$paragraph = trim($_GET['paragraph']);
$paragraph_length = strlen($paragraph);
$paragraph_censored = str_replace($word, '***', $paragraph);
$paragraph_censored_length = strlen($paragraph_censored);
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph page</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous" />
</head>
<body>
    <h1 class="text-center mt-3 mb-5">Paragraph</h1>
    <div class="container">     
        <h3>Il paragrafo che hai inserito è:</h3>
        <p class="fst-italic my-4"> <?= $paragraph ?></p>
        <p>Il paragrafo inserito ha una lunghezza di:<b> <?= $paragraph_length ?></b> caratteri.</p>
        <hr>
        <h3>Il paragrafo censurato è:</h3>
        <p class="fst-italic my-4"> <?= $paragraph_censored ?></p>
        <p>Il paragrafo censurato ha una lunghezza di:<b> <?= $paragraph_censored_length ?></b> caratteri.</p>
    </div>
</body>
</html>