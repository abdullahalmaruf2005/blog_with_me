<?php
include "auth.php";
include "db.php"; // Database connection

$msg = "";

// ---------- Create new post ----------
if(isset($_POST['create'])){
    $cat = $_POST['cat'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_POST['image'];
    $author = $_POST['author'];
    $tag = $_POST['tag'];

    // Convert datetime-local input to MySQL DATETIME format
    $date_input = $_POST['date'];
    $date = date('Y-m-d H:i:s', strtotime($date_input));

    $stmt = $conn->prepare("INSERT INTO post (cat, title, text, image, author, tag, date) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $cat, $title, $text, $image, $author, $tag, $date);

    if($stmt->execute()){
        $msg = "Post created successfully!";
    } else {
        $msg = "Creation failed: ".$stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Post - Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    background:#f4f4f9;
}

/* FIXED SIDEBAR */
.sidebar{
    width:250px;
    min-height:100vh;
    background:#2c3e50;
    color:#fff;
    position:fixed;
    left:0;
    top:0;
    padding-top:20px;
}

.sidebar h3{
    text-align:center;
    margin-bottom:20px;
}

.sidebar a{
    display:block;
    padding:12px 20px;
    color:#fff;
    text-decoration:none;
}

.sidebar a:hover{
    background:#34495e;
}

/* Highlight active menu */
.sidebar a.active{
    background:#34495e;
}

/* CONTENT AREA */
.content{
    margin-left:250px;
    padding:30px;
}
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3>Admin Panel</h3>
    <a href="post.php">Posts</a>
    <a href="create.php" class="active">Create Post</a>
    <a href="inbox.php">Inbox</a>
    <a href="logout.php">Logout</a>
</div>

<!-- Content -->
<div class="content">

<h2>Create New Post</h2>

<?php if($msg){ echo "<div class='alert alert-info'>$msg</div>"; } ?>

<form method="POST">
    <div class="mb-3">
        <label>Category:</label>
        <input type="text" name="cat" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Title:</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Text:</label>
        <textarea name="text" class="form-control" rows="5" required></textarea>
    </div>

    <div class="mb-3">
        <label>Image URL:</label>
        <input type="text" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Author:</label>
        <input type="text" name="author" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tag:</label>
        <input type="text" name="tag" class="form-control">
    </div>

    <div class="mb-3">
        <label>Date & Time:</label>
        <input type="datetime-local" name="date" class="form-control" required>
    </div>

    <button type="submit" name="create" class="btn btn-success">Create Post</button>
    <a href="post.php" class="btn btn-secondary">Back to Posts</a>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>