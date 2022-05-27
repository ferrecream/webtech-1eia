<?php
$servername = "localhost";
$username = "joske";
$password = "appeltaart";
$dbname = "joske";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO persons (voornaam, achternaam, stad)
VALUES ('Ferre', 'Creemers', 'Bree')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT voornaam, achternaam, stad FROM persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo " - voornaam: " . $row["voornaam"]. " - achternaam: " . $row["achternaam"]. " - stad" . $row["stad"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close();
?>
