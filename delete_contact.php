<?php
include "db.php";

$id = (int)($_GET['id'] ?? 0); // safe casting

if ($id > 0) {
    $sql = "DELETE FROM contact WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: inbox.php"); // reload inbox
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid ID.";
}
?>