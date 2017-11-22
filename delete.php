<?php
  require('database.php');
//POST request - to save data
//GET request - to grab data
//PUT request - to update data
//DELETE request - to delete data
//Handles GET REQUEST
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["id"])) {
  $id = $_GET["id"];

  try{
    $statement = $pdo->prepare(
    'DELETE FROM users WHERE id = :id');
    $statement->execute(["id" => $id]);
    echo "<script>location.href='/read.php?show=all'</script>";
  } catch(PDOException $e){
    echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
  }
} else {
    echo "<script>location.href='/read.php?show=all'</script>";
    die();
}

}

?>
