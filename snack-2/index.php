<?php 
// Passare come parametri GET name, mail e age 
// e verificare che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

if ( isset($_GET["username"]) ) {

  $userName = $_GET["username"];
  $email = $_GET["email"];
  $age = $_GET["age"]; 

  // input validation
  $isInputValid = false;
  if ( strlen($userName) > 3 && is_numeric($age) && strpos($email, ".") && strpos($email, "@") ) {
    $isInputValid = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-2</title>
</head>
<body>
  <main>
    <h2>Esegui l'accesso:</h2>
    <form action="">
      <input type="text" name="username" placeholder="username">
      <input type="text" name="email" placeholder="email">
      <input type="text" name="age" placeholder="age">
      <button>accedi</button>
    </form>

    <?php if ( isset($_GET["username"]) && $isInputValid ) { ?>
      <h2>-Accesso Consentito-</h2>
    <?php } else if ( isset($_GET["username"]) && $isInputValid == false ) { ?>
      <h2>-Accesso Negato-</h2>
    <?php } ?>
  </main>
</body>
</html>