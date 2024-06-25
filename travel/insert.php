<?php
$a = $_POST['username'];
$b = $_POST['password'];
$correctEmail = 'krystyllplaza@email.com';
$correctPassword = 'we143web';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

if ($a == $correctEmail && $b == $correctPassword) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("INSERT INTO logindb (trav_email, pass_word) 
                                VALUES (:username, :password)");
        $stmt->bindParam(':username', $a);
        $stmt->bindParam(':password', $b);

        $stmt->execute();
        
        // Redirect to home.php
        header("Location: home.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
} else {
    // Display alert message for incorrect email or password
    echo "<script>alert('Incorrect email or password');</script>";
}
?>
