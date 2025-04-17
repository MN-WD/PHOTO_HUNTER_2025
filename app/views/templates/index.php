<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>HEADER</header>
    <main>
        MAIN
        <?php echo $content; ?>
        <!-- php var_dump($connexion); pour voir si on est bien connecté, affiche object(PDO)#1 (0) { } -->
    </main>
    <footer>FOOTER</footer>
</body>
</html>