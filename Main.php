<?php

session_start();
$servername = 'localhost';
$username = 'root';
$password = '';

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
        echo "<li>" . $row['IdUtilisateur'] . "</li>";
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

if (isset($_POST['login'])){
    try{
        $connLogin = new PDO("mysql:host=$servername;dbname=qcm", $username, $password);
        $checkUser = $connLogin->prepare("SELECT * FROM utilisateur WHERE Login = :login AND MotDePasse = :mdp");
        $checkUser->bindParam(':login', $_POST['login']);
        $checkUser->bindParam(':mdp', $_POST['mdp']);
        $checkUser->execute();
        $user = fetchAll(PDO::FETCH_ASSOC)

        if ($checkUser->fetchColumn() = 1){
            
            $_SESSION['idUtilisateur'] = $user[0]['idUtilisateur'] ;
            $_SESSION['login'] = $user[0]['login'] ;
            $_SESSION['motDePasse'] = $user[0]['motDePasse'] ;
            $_SESSION['nom'] = $user[0]['nom'] ;
            $_SESSION['prénom'] = $user[0]['prénom'] ;

            header("Login.php")
    }
    catch(PDOException) $e{
        echo "The variable sql = " $sql "<br>And e.getMessage() = " . $e->getMessage();
    }
    
    }
    else
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1 class="centered blue">Accueil du site QCM :</h1>

        <form action="login.php" method="POST">
            <div class="formAccueil">
                <span class="bold">Login :</span><input type="text" name="login"><br><br>
                <span class="bold">Mot de passe :</span><input type="text" name="mdp"><br><br>
                
            </div>
            <div class="centered"><input type="submit" value="OK"></div>
        </form>

        <p class="centered red">Vous devez obligatoirement saisir un login et mot de passe pour entrer sur l'application QCM</p>
    </body>
</html>