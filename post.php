<?php
include "auth.php";
include "db.php";

$msg = "";

// ================= EDIT SECTION =================
if(isset($_GET['edit_id'])){
    $edit_id = intval($_GET['edit_id']);

    // -------- UPDATE POST --------
    if(isset($_POST['update'])){

        $cat = $_POST['cat'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $image = $_POST['image'];
        $author = $_POST['author'];
        $tag = $_POST['tag'];

        // TIMESTAMP friendly: check if user submitted date
        if(!empty($_POST['date'])){
            $date = date("Y-m-d H:i:s", strtotime($_POST['date']));
            $stmt = $conn->prepare("UPDATE post SET cat=?, title=?, text=?, image=?, author=?, tag=?, date=? WHERE id=?");
            $stmt->bind_param("sssssssi", $cat, $title, $text, $image, $author, $tag, $date, $edit_id);
        } else {
            // If date empty, let TIMESTAMP auto-update
            $stmt = $conn->prepare("UPDATE post SET cat=?, title=?, text=?, image=?, author=?, tag=? WHERE id=?");
            $stmt->bind_param("ssssssi", $cat, $title, $text, $image, $author, $tag, $edit_id);
        }

        if($stmt->execute()){
            $msg = "<div class='alert alert-success'>Post updated successfully!</div>";
        } else {
            $msg = "<div class='alert alert-danger'>Update failed: ".$stmt->error."</div>";
        }

        $stmt->close();
    }

    // -------- GET CURRENT POST DATA --------
    $stmt = $conn->prepare("SELECT * FROM post WHERE id=?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 0){
        die("Post not found!");
    }

    $post = $result->fetch_assoc();
    $stmt->close();

    // Convert DB timestamp to datetime-local
    $post['date'] = date('Y-m-d\TH:i', strtotime($post['date']));
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    background:#f4f4f9;
}
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
.content{
    margin-left:250px;
    padding:30px;
}
.table img{
    max-width:80px;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h3>Admin Panel</h3>
    <a href="post.php">Posts</a>
    <a href="create.php">Create Post</a>
    <a href="inbox.php">Inbox</a>
    <a href="logout.php">Logout</a>
</div>

<div class="content">

<?php if(isset($edit_id)) { ?>

    <h2>Edit Post ID: <?php echo $edit_id; ?></h2>
    <?php echo $msg; ?>

    <form method="POST">

        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="cat" class="form-control" value="<?php echo htmlspecialchars($post['cat']); ?>" required>
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </div>

        <div class="mb-3">
            <label>Text</label>
            <textarea name="text" class="form-control" rows="5" required><?php echo htmlspecialchars($post['text']); ?></textarea>
        </div>

        <div class="mb-3">
            <label>Image URL</label>
            <input type="text" name="image" class="form-control" value="<?php echo htmlspecialchars($post['image']); ?>">
        </div>

        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo htmlspecialchars($post['author']); ?>" required>
        </div>

        <div class="mb-3">
            <label>Tag</label>
            <input type="text" name="tag" class="form-control" value="<?php echo htmlspecialchars($post['tag']); ?>">
        </div>

        <div class="mb-3">
            <label>Date & Time (optional)</label>
            <input type="datetime-local" name="date" class="form-control" value="<?php echo $post['date']; ?>">
            <small class="text-muted">Leave empty to auto-update timestamp.</small>
        </div>

        <button type="submit" name="update" class="btn btn-primary">Update Post</button>
        <a href="post.php" class="btn btn-secondary">Back</a>

    </form>

<?php } else { ?>

    <?php
    $result = $conn->query("SELECT * FROM post ORDER BY id DESC");
    ?>

    <h2>All Posts</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Text</th>
                <th>Image</th>
                <th>Author</th>
                <th>Tag</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['cat']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo substr($row['text'],0,50).'...'; ?></td>
                <td>
                    <?php if($row['image']) { ?>
                        <img src="<?php echo $row['image']; ?>">
                    <?php } ?>
                </td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['tag']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <a href="post.php?edit_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<?php } ?>

</div>

</body>
</html>