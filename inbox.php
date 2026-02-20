<?php
include "auth.php";
include "db.php"; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inbox - Admin Panel</title>
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

/* CONTENT AREA */
.content{
    margin-left:250px;   /* SAME AS SIDEBAR WIDTH */
    padding:30px;
}
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3>Admin Panel</h3>
    <a href="post.php">Posts</a>
    <a href="create.php">Create Post</a>
    <a href="inbox.php" style="background:#34495e;">Inbox</a>
    <a href="logout.php">Logout</a>

</div>

<!-- Content -->
<div class="content">
    <h2>Inbox</h2>

<?php
$sql = "SELECT * FROM contact ORDER BY id DESC";
$result = $conn->query($sql);

if(!$result){
    die("Query failed: " . $conn->error);
}
?>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>

    <tbody>
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".htmlspecialchars($row['firstname'].' '.$row['lastname'])."</td>";
                echo "<td>".htmlspecialchars($row['email'])."</td>";
                echo "<td>".htmlspecialchars($row['message'])."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3' class='text-center'>No contacts found</td></tr>";
        }
        ?>
    </tbody>
</table>

<a href="admin.php" class="btn btn-secondary">Back</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>