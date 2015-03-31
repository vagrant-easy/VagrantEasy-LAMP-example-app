<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>I am an example.</title>
  <style type="text/css">
    body{
      font-family: "Lucida Console", Monaco, monospace;
      font-size: 20px;
    }
    .error{
      color: #e50000;
    }
    .success{
      color: #33cc00;
    }
  </style>
</head>
<body>
	<h1>VagrantEasy Example App</h1>
  <ul>
  	<li>
  		<strong>PHP</strong>
  		<ul>
  			<li>Version.......... <?php echo '<span class="success">' . phpversion() . '</span>'; ?></li>
  		</ul>
  	</li>
  	<li>
  		<strong>MySQL</strong>
  		<ul>
  			<li>Version.......... <?php 
          $servername = "localhost";
          $username = "example_user";
          $password = "example_pass";

          $link = mysql_connect($servername, $username, $password);
          if (!$link){ 
            echo '<span class="error">ERROR</span>';
          }else{
            echo '<span class="success">' . mysql_get_server_info() . '</span>';
            mysql_close($link);
          }
        ?></li>
  			<li>Connecting.......... <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=example_db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<span class="success">OK</span>'; 
          } catch(PDOException $e) {
            echo '<span class="error">FAIL: ' . $e->getMessage() . '</span>';
          }
        ?></li>
  		</ul>
  	</li>
  </ul>
</body>
</html>