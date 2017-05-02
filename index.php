<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "ad_5519def1673ced4";
$password = "b40cf849";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * from cliente";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
       <tr>
      <td><?php echo $row['idcliente']?></td>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['apellido']?></td>
      <td><?php echo $row['email']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
?>
</body>
</html>
