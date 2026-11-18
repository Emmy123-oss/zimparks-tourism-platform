<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $enquiry = htmlspecialchars($_POST['enquiry']);
    $conn = new mysqli("localhost", "root", "", "zimparks_db");
    if ($conn->connect_error) { die("Connection failed."); }
    $stmt = $conn->prepare("INSERT INTO enquiries (visitor_name, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $enquiry);
    $stmt->execute();
    echo "Thank you, $name. Your enquiry has been submitted.";
    $stmt->close();
    $conn->close();
}
?>