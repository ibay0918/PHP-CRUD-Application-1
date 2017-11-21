<?php
  require('database.php');
  initMigration($pdo);
?>
<html>
  <head>
      <title>CRUD Application</title>
  </head>
  <body>
    <a href="create.php?show=all">Create User</a>
    <a href="read.php?show=all">Show All Users</a>
  </body>
</html>
