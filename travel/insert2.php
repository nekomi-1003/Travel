<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $trav_name = $_POST['name'];
    $trav_mail = $_POST['email'];
    $trav_pass = $_POST['pass'];

    $stmt = $conn->prepare("INSERT INTO signdb (trav_name, travmail, trav_pass) VALUES (:trav_name, :travmail, :trav_pass)");
    $stmt->bindParam(':trav_name', $trav_name);
    $stmt->bindParam(':travmail', $trav_mail);
    $stmt->bindParam(':trav_pass', $trav_pass);
    $stmt->execute();

    // Redirect to home-two.php after inserting data
    header('Location: home-two.php');
    exit();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
