<?php
include 'dpconnect.php';

$id = $_POST['id'];
$comment = $_POST['comment'];

$query = "UPDATE comments SET comment = :comment WHERE id = :id";
$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':comment', $comment);

try {
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Comment updated successfully";
    } else {
        echo "No changes made or comment not found";
    }
} catch (PDOException $e) {
    echo "Error updating comment: " . $e->getMessage();
}

$conn = null;
?>
