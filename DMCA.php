<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DMCA Policy - Blog With Me</title>

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
        <a class="nav-link text-white active" href="DMCA.php">DMCA</a>
        <a class="nav-link text-white" href="contact.php">Contact Us</a>
    </div>
</div>
</nav>

<!-- Cover Image -->
<div class="container-fluid p-0">
    <img src="https://img.freepik.com/free-vector/night-landscape-with-lake-mountains-trees-coast-vector-cartoon-illustration-nature-scene-with-coniferous-forest-river-shore-rocks-moon-stars-dark-sky_107791-8253.jpg?w=740&q=80"
         class="img-fluid w-100" style="max-height:300px; object-fit:cover;">
</div>

<!-- Main Section -->
<div class="container mt-4">
<div class="row">

<!-- DMCA Content -->
<div class="col-md-8">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-4">

        <h3 class="mb-3">📜 DMCA Policy</h3>
        <h5 class="text-muted">DMCA Notice & Takedown Policy</h5>
        <hr>

        <p>
        This website respects the intellectual property rights of others and expects its users to do the same.
        In accordance with the Digital Millennium Copyright Act (DMCA), we will respond promptly
        to claims of copyright infringement reported to us.
        </p>

        <p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement,
        please provide us with the following information:</p>

        <ul>
            <li>A description of the copyrighted work that you claim has been infringed.</li>
            <li>The exact URL or location on our website where the material is located.</li>
            <li>Your full name, address, telephone number, and email address.</li>
            <li>A statement that you have a good faith belief that the disputed use is not authorized by the copyright owner.</li>
            <li>A statement that the information in the notification is accurate.</li>
            <li>Your electronic or physical signature.</li>
        </ul>

        <hr>

        <h5>Send your DMCA complaint to:</h5>
        <p>
        📧 Email: your@email.com <br>
        📌 Website: www.yourwebsite.com
        </p>

        <p>
        Upon receiving a valid DMCA notice, we will remove the infringing content as soon as possible.
        </p>

        </div>
    </div>
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
            </div>
        </div>
    </div>
</div>

</div>
</div>

<!-- Footer -->
<div class="bg-dark text-white text-center p-4 mt-5">
    <h4>MyBlog</h4>
    <p>Sharing ideas and stories with the world</p>
    <div class="mb-2">
        <a href="index.php" class="text-white me-3">Home</a>
        <a href="about.php" class="text-white me-3">About</a>
        <a href="privacy.php" class="text-white me-3">Privacy</a>
        <a href="DMCA.php" class="text-white me-3">DMCA</a>
        <a href="contact.php" class="text-white">Contact</a>
    </div>
    <p class="mb-0">&copy; 2026 MyBlog. All rights reserved.</p>
</div>

</body>
</html>