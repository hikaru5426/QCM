<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=qcm", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$query = "INSERT INTO utilisateur(IdUtilisateur, Login, MotDePasse) VALUES('1','Admin','1234')";
  $query = "SELECT * FROM utilisateur";
  //$conn->exec($query);
  $stmt = $conn->query($query);


  if ($stmt->rowCount() > 0) {
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . $row['IdUtilisateur'] . "</li>"; // Replace "column_name" with the actual column name from your table
        echo "<li>" . $row['Login'] . "</li>";
        echo "<li>" . $row['MotDePasse'] . "</li>";
        echo "<li>" . $row['Nom'] . "</li>";
        echo "<li>" . $row['Prénom'] . "</li>";
    }
    echo "</ul>";
    } else {
        echo "0 results";
    $result = $conn->query($query);
    }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1 class="centered_blue">Accueil du site QCM :</h1>
        <form action="login.php" method="post" class="centered">
            Login :<input type="text" name="Login"><br>
            Mot de passe :<input type="text" name="MDP"><br>
        </form>
        <p class="red_centered">Vous devez obligatoirement saisir un login et mot de passe pour entrer sur l'application QCM</p>
    </body>
</html>