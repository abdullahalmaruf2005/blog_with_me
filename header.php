<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog With Me</title>
    <link rel="stylesheet" href="home_css.css?v=1.0">
</head>
<body>

   <style>
    /* Reset some basic styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Header styling */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #1e3c72; /* nice gradient or color */
    background-image: linear-gradient(135deg, #1e3c72, #2a5298);
    color: white;
    flex-wrap: wrap;
}

.header-left {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 10px;
}

.site-title h1 {
    font-size: 24px;
    margin-bottom: 5px;
}

.site-title p {
    font-size: 14px;
    color: #dcdcdc;
}

/* Search box styling */
.search-form {
    display: flex;
    align-items: center;
    gap: 5px;
}

.search-box {
    padding: 6px 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 14px;
}

.search-btn {
    padding: 6px 12px;
    border-radius: 5px;
    border: none;
    background-color: #ff9900;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.search-btn:hover {
    background-color: #e68a00;
}

/* Navbar styling */
.navbar {
    display: flex;
    justify-content: center;
    background-color: #f2f2f2;
    padding: 10px 0;
    flex-wrap: wrap;
}

.nav-item {
    text-decoration: none;
    color: #333;
    margin: 0 15px;
    font-weight: 500;
    transition: color 0.3s ease, transform 0.3s ease;
}

.nav-item:hover {
    color: #ff9900;
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .search-form {
        width: 100%;
    }

    .search-box {
        flex: 1;
    }

    .navbar {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}
   </style>
    <header class="header">
        <div class="header-left">
            <img src="https://cdn.pixabay.com/photo/2016/07/07/08/18/logo-1502039_960_720.jpg" 
                 alt="Logo" class="logo">
            <div class="site-title">
                <h1>Blog with Me</h1>
                <p>Bangla PHP, Java</p>
            </div>
        </div>

        <div class="header-right">
            <form method="GET" action="home.php" class="search-form">
                <input type="text" name="search" class="search-box" placeholder="Search..."
                       value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="search-btn">Search</button>
            </form>
        </div>
    </header>

    <!-- Navbar Section -->
    <nav class="navbar">
        <a href="index.php" class="nav-item">Home</a>
        <a href="about.php" class="nav-item">About Us</a>
        <a href="privacy.php" class="nav-item">Privacy</a>
        <a href="DMCA.php" class="nav-item">DMCA</a>
        <a href="contact.php" class="nav-item">Contact Us</a>
    </nav>

</body>
</html>