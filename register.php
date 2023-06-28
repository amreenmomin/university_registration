<?php
// Assuming the database name is "DB" and table name is "users"
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form values
$name = $_POST['name'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];
$school = $_POST['school'];
$department = $_POST['department'];
$course = $_POST['course'];
$mobile = $_POST['mobile'];

// Insert the form values into the database table
$sql = "INSERT INTO users (name, dob, sex, email, address, school, department, course, mobile) VALUES ('$name', '$dob', '$sex', '$email', '$address', '$school', '$department', '$course', '$mobile')";

if ($conn->query($sql) === true) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>