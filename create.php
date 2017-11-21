<?php
  require('database.php');

//Code to create things on tHe page
//insert something inside of ddataabe: Create new user
if($_SERVER['REQUEST_METHOD'] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $age = $_POST["age"];

  try{
    $statement = $pdo->prepare(
      'INSERT INTO users (first_name, last_name, age) VALUES
      (:first_name, :last_name, :age);'
    );

    $statement->execute(['first_name' => $first_name, 'last_name' => $last_name, 'age' => $age]);
    echo "Insert user: {$first_name}";
//pdo give me the last id inserted
    $id = $pdo->lastInsertId();

    echo "<script>location.href='/read.php?show=one&id={$id}'</script>";

  } catch(PDOException $e){
    echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
  }
}

?>
<html>
  <head>
      <title>CRUD Application</title>
  </head>
  <body>
    <form action="/create.php" method="POST">
      <label for="first_name">First Name</label><br>
      <input type="text" name="first_name" value=""><br>
      <label for="last_name">Last Name</label><br>
      <input type="text" name="last_name" value=""><br>
      <label for="age">age</label><br>
      <input type="text" name="age" value=""><br>
      <button type="submit">Save</button>
    </form>
  </body>
</html>
