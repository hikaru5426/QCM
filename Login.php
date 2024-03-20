<?php
session_start()
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Page de bienvenue</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>Bonjour <?php echo $_SESSION['nom'] . $_SESSION['prénom'];?>, cliquer sur le bouton <span class="red bold">ENTRER</span> pour continuer sur l'application QCM</body>
    <form method="POST" action=""></form>
</html>