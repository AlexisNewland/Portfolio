<?php

// This line is to call the database connection
require_once("dbconnect.php");

// Get the data from the form in contacts.html
$email = $_POST['email'];
$comment = $_POST['comment'];

// Create a query to insert our data into the database
$query = "INSERT INTO newsletter (email, comment) VALUES ('$email', '$comment')";

// Execute the query
mysqli_query($conn, $query);

// Redirect the user to the homepage when the form is submitted.
header("Location: index.html");
?>
