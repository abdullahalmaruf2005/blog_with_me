<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Blog With Me</title>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

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
        <a class="nav-link text-white active" href="about.php">About Us</a>
        <a class="nav-link text-white" href="privacy.php">Privacy</a>
        <a class="nav-link text-white" href="DMCA.php">DMCA</a>
        <a class="nav-link text-white" href="contact.php">Contact Us</a>
    </div>
</div>
</nav>

<!-- About Us Section -->
<section class="py-5 bg-light text-center">
<div class="container" style="max-width:900px;">
    <h1 class="mb-4">About Us</h1>
    <p class="fs-5 text-secondary mb-3">
        Welcome to <strong>Blog with Me</strong>! We are passionate about sharing valuable insights, tips, 
        and stories on <strong>technology, lifestyle, and more</strong>. Our mission is to provide readers 
        with high-quality content that informs, inspires, and empowers.
    </p>
    <p class="fs-5 text-secondary mb-5">
        Our team consists of dedicated writers and enthusiasts who love exploring new trends and delivering 
        content that matters. We believe in creating a community where knowledge is shared and ideas grow.
    </p>

    <!-- Team Members -->
    <h2 class="mb-4">Meet Our Team</h2>
    <div class="row justify-content-center g-4">

        <div class="col-sm-6 col-md-4 text-center">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQEVDq-yzWSLAA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1698776186308?e=1773273600&v=beta&t=5RCg1jcSepQrFDc5n-D8swChQjLIQyDUPyy_8nQ2Z8Y" 
                 alt="Team Member" class="rounded-circle mb-2" style="width:150px; height:150px;">
            <h5>Maruf</h5>
            <p class="text-secondary mb-0">Founder & Lead Writer</p>
        </div>

        <div class="col-sm-6 col-md-4 text-center">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQEVDq-yzWSLAA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1698776186308?e=1773273600&v=beta&t=5RCg1jcSepQrFDc5n-D8swChQjLIQyDUPyy_8nQ2Z8Y" 
                 alt="Team Member" class="rounded-circle mb-2" style="width:150px; height:150px;">
            <h5>Maruf</h5>
            <p class="text-secondary mb-0">Content Manager</p>
        </div>

        <!-- Add more team members here if needed -->

    </div>
</div>
</section>

<!-- Footer -->
<div class="bg-dark text-white text-center p-4 mt-5">
    <h4>MyBlog</h4>
    <p>Sharing ideas and stories with the world</p>
    <p class="mb-0">&copy; 2026 MyBlog. All rights reserved.</p>
</div>

</body>
</html>