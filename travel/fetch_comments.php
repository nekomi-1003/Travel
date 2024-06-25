<?php
include 'dpconnect.php';

$query = "SELECT * ,DATE_FORMAT(created_at, '%Y-%m-%d %H:%i') as formatted_date FROM comments ORDER BY created_at DESC";
$result = $conn->query($query);

if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name = htmlspecialchars($row['name']);
        $comment = htmlspecialchars($row['comment']);
        $id = $row['id'];
        $formatted_date = $row['formatted_date'];

        echo "<div class='comment mb-2 p-2 border rounded' id='comment-{$id}'>
                <p><strong>{$name}</strong>: {$comment}</p>
                <p class='text-muted'><small>Last updated or created: {$formatted_date}</small></p>
                <button class='btn btn-warning' style='font-weight: bold; margin:5px; padding: .25rem 3.5rem; font-size: .875rem; line-height: 1.5; border-radius: .32rem;' onclick='updateComment({$id})'>Edit</button>
                <button class='btn btn-sm btn-danger' style='font-weight: bold; margin:5px; padding: .25rem 3.0rem; font-size: .875rem; line-height: 1.5; border-radius: .32rem;' onclick='deleteComment({$id})'>Delete</button>

              </div>";
    }
} else {
    echo "<p>No comments yet.</p>";
}

$conn = null;
?>