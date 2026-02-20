<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Privacy Policy - Blog With Me</title>

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
        <a class="nav-link text-white" href="about.php">About Us</a>
        <a class="nav-link text-white active" href="privacy.php">Privacy</a>
        <a class="nav-link text-white" href="DMCA.php">DMCA</a>
        <a class="nav-link text-white" href="contact.php">Contact Us</a>
    </div>
</div>
</nav>

<!-- Privacy Section -->
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8">

<div class="card shadow-sm">
<div class="card-body p-5">

<h1 class="text-center mb-4">Privacy Policy</h1>

<p class="text-muted fs-5">
At <strong>Blog with Me</strong>, your privacy is very important to us. This Privacy Policy explains
how we collect, use, and protect the personal information of our users.
</p>

<h4 class="mt-4">Information We Collect</h4>
<p class="text-muted fs-5">
We may collect information when you visit our website, subscribe to newsletters, comment on posts,
or fill out contact forms. This includes your name, email address, and any other information
you voluntarily provide.
</p>

<h4 class="mt-4">How We Use Your Information</h4>
<p class="text-muted fs-5">
Your information is used to improve website content, respond to inquiries, send updates, and
personalize your experience. We do not sell or share your personal data with third parties
without your consent.
</p>

<h4 class="mt-4">Cookies</h4>
<p class="text-muted fs-5">
Our website may use cookies to enhance user experience, track site usage, and improve functionality.
You can disable cookies in your browser settings if you prefer.
</p>

<h4 class="mt-4">Changes to This Policy</h4>
<p class="text-muted fs-5">
We may update this Privacy Policy from time to time. Any changes will be posted on this page with
an updated date.
</p>

<p class="mt-4 text-center fs-5">
If you have any questions about our Privacy Policy, please contact us.
</p>

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