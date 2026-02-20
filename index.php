<?php
include "db.php";
$limit = 2;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$start = ($page - 1) * $limit;

/* ---------------- TOTAL COUNT QUERY ---------------- */
if ($search != '') {
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM post WHERE tag LIKE ?");
    $search_param = "%{$search}%";
    $stmt->bind_param("s", $search_param);
    $stmt->execute();
    $result_total = $stmt->get_result();
    $total_row = $result_total->fetch_assoc();
    $stmt->close();
} else {
    $result_total = $conn->query("SELECT COUNT(*) as total FROM post");
    $total_row = $result_total->fetch_assoc();
}

$total_posts = $total_row['total'];
$total_pages = ceil($total_posts / $limit);

/* ---------------- MAIN POST QUERY ---------------- */
if ($search != '') {
    $stmt = $conn->prepare("SELECT * FROM post WHERE tag LIKE ? ORDER BY id DESC LIMIT ?, ?");
    $search_param = "%{$search}%";
    $stmt->bind_param("sii", $search_param, $start, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $stmt = $conn->prepare("SELECT * FROM post ORDER BY id DESC LIMIT ?, ?");
    $stmt->bind_param("ii", $start, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog With Me</title>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Header -->
<div class="container-fluid bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="https://cdn.pixabay.com/photo/2016/07/07/08/18/logo-1502039_960_720.jpg"
                 width="60" class="rounded me-3">
            <div>
                <h3 class="mb-0">Blog with Me</h3>
                <small>Bangla PHP, Java</small>
            </div>
        </div>

        <form method="GET" action="index.php" class="d-flex">
            <input type="text" name="search" class="form-control me-2"
                   placeholder="Search..."
                   value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button class="btn btn-warning">Search</button>
        </form>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<div class="container">
    <div class="navbar-nav">
        <a class="nav-link text-white" href="index.php">Home</a>
        <a class="nav-link text-white" href="about.php">About Us</a>
        <a class="nav-link text-white" href="privacy.php">Privacy</a>
        <a class="nav-link text-white" href="DMCA.php">DMCA</a>
        <a class="nav-link text-white" href="contact.php">Contact Us</a>
        <a class="nav-link text-white" href="adminlogin.php">Admin login</a>
    </div>
</div>
</nav>

<!-- Cover -->
<div class="container-fluid p-0">
    <img src="https://timelinecovers.pro/facebook-cover/download/ocean-national-geographic-facebook-cover.jpg"
         class="img-fluid w-100" style="max-height:300px; object-fit:cover;">
</div>

<!-- Main Section -->
<div class="container mt-4">
<div class="row">

<!-- Post Section -->
<div class="col-md-8">
<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h4 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h4>
            <small class="text-muted">
                <?php echo $row['date']; ?> | by <?php echo $row['author']; ?>
            </small>
            <hr>
            <img src="<?php echo htmlspecialchars($row['image']); ?>"
                 class="img-fluid rounded mb-3">
            <p class="card-text">
                <?php echo nl2br(htmlspecialchars($row['text'])); ?>
            </p>
        </div>
    </div>
<?php
    }
} else {
    echo "<h3>No posts found.</h3>";
}
?>
</div>

<!-- Category Section -->
<div class="col-md-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4>Categories</h4>
            <hr>
            <div class="list-group">
                <a href="index.php?search=PHP" class="list-group-item list-group-item-action">PHP</a>
                <a href="index.php?search=Laravel" class="list-group-item list-group-item-action">Laravel</a>
                <a href="index.php?search=JavaScript" class="list-group-item list-group-item-action">JavaScript</a>
                <a href="index.php?search=MySQL" class="list-group-item list-group-item-action">MySQL</a>
                <a href="index.php?search=html" class="list-group-item list-group-item-action">HTML</a>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<!-- Pagination -->
<div class="container text-center mt-4">
<nav>
<ul class="pagination justify-content-center">
<?php
for($i = 1; $i <= $total_pages; $i++){
    if($i == $page){
        echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
    } else {
        if($search != ''){
            echo "<li class='page-item'><a class='page-link' href='?page=$i&search=".urlencode($search)."'>$i</a></li>";
        } else {
            echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
    }
}
?>
</ul>
</nav>
</div>

<!-- Footer -->
<div class="bg-dark text-white text-center p-4 mt-5">
    <h4>MyBlog</h4>
    <p>Sharing ideas and stories with the world</p>
    <p>&copy; 2026 MyBlog. All rights reserved.</p>
</div>

</body>
</html>