<?php
include 'dpconnect.php';

$name = $_POST['name'];
$comment = $_POST['comment'];

$query = "INSERT INTO comments (name, comment) VALUES (?, ?)";
$stmt = $conn->prepare($query);

$stmt->bindParam(1, $name);
$stmt->bindParam(2, $comment);

try {
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Comment added successfully";
    } else {
        echo "Error adding comment";
    }
} catch (PDOException $e) {
    echo "Error adding comment: " . $e->getMessage();
}

$conn = null;
?>
