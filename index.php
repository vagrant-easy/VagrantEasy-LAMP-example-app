<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>I am an example.</title>
</head>
<body>
	<h1>
    <?php
      $servername = "localhost";
      $username = "example_user";
      $password = "example_pass";

      try {
          $conn = new PDO("mysql:host=$servername;dbname=example_db", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully"; 
          }
      catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage();
          }
    ?>
  </h1>
</body>
</html>