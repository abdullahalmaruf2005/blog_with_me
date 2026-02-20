<?php
include "db.php";

$fst_name = $_GET["fstname"];
$lstname = $_GET["sndname"];
$email = $_GET["email"];
$message = $_GET["message"];

$sql = "INSERT INTO contact(firstname, lastname, email, message)
        VALUES('$fst_name', '$lstname', '$email', '$message')";

$res = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Submission - Blog With Me</title>

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
        <a class="nav-link text-white active" href="contact.php">Contact Us</a>
    </div>
</div>
</nav>

<!-- Result Section -->
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-6">

<div class="card shadow-lg">
<div class="card-body text-center p-4">

<h3 class="mb-4">Contact Form Submission</h3>

<p><strong>Name:</strong>
<?php echo htmlspecialchars($fst_name . " " . $lstname); ?>
</p>

<p><strong>Email:</strong>
<?php echo htmlspecialchars($email); ?>
</p>

<p><strong>Message:</strong><br>
<?php echo nl2br(htmlspecialchars($message)); ?>
</p>

<div class="mt-3">
<?php if($res){ ?>
    <div class="alert alert-success">
        Your message sent successfully!
    </div>
<?php } else { ?>
    <div class="alert alert-danger">
        Please correct your email or try again.
    </div>
<?php } ?>
</div>

<a href="contact.php" class="btn btn-primary mt-3">
    Back to Contact
</a>

</div>
</div>

</div>
</div>
</div>

<!-- Footer -->
<div class="bg-dark text-white text-center p-4 mt-5">
    <h4>MyBlog</h4>
    <p>Sharing ideas and stories with the world</p>
    <p class="mb-0">&copy; 2026 MyBlog. All rights reserved.</p>
</div>

</body>
</html>