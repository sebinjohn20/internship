<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['ID']
$name = $_POST['name'];
$age= $_POST['age'];
$department = $_POST['dept'];
$Joining_year = $_POST['year'];
$sql = "INSERT INTO student (id,name, age, department,joining_year)                                                                                                                                          )
VALUES ('$id','$name', '$age', '$department','$joining_year')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>