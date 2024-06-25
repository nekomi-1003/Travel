<?php
include 'dpconnect.php';

$id = $_POST['id'];

$query = "DELETE FROM comments WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

try {
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Comment deleted successfully";
    } else {
        echo "Error deleting comment. Comment not found or already deleted.";
    }
} catch (PDOException $e) {
    echo "Error deleting comment: " . $e->getMessage();
}

$conn = null;
?>
