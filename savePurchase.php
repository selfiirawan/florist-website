<?php
// CONNECT TO DATABASE
$conn = new mysqli("localhost", "root", "", "ProjectDB");
 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
// COLLECT DATA FROM FORM
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$totalPrice = $_POST['total']; // 'total' from HTML form textbox, maps to 'totalPrice' in DB
$customerName = $_POST['name'];
$customerAddress = $_POST['address'];
$customerEmail = $_POST['email'];
 
// INSERT DATA INTO purchase TABLE
$sql = "INSERT INTO purchase (product, quantity, totalPrice, customerName, customerAddress, customerEmail)
        VALUES ('$product', '$quantity', '$totalPrice', '$customerName', '$customerAddress', '$customerEmail')";
 
if ($conn->query($sql) === TRUE) {
  echo "Purchase recorded successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
