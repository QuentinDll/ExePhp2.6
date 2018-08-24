<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&amp;firstname=Jean&amp;age=34">000</a>
        <p>
    <?php
    if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])){
      echo $_GET['firstname'] ." ". $_GET['lastname'] ." ". $_GET['age'];
    }
    ?>
        </p>
    </body>
</html>
