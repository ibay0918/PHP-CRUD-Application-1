<?php
  require('database.php');

//Code to create things on tHe page
//insert something inside of ddataabe: Create new user
if($_GET["show"] == "all") {
  try{
    $statement == $pdo->prepare(
      'SELECT * FROM users;'
    );
    $statement->execute();
    echo "Read from table users</br>";
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    var_dump($results);
  } catch(PDOException $e){
    echo "<h4 style=color: red;'>'".$e->getMessage(). "</h4>";
  }
}
?>
<html>
  <head>
      <title>CRUD Application</title>
  </head>
  <body>

  </body>
</html>
