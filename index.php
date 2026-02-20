<?php
include "db.php";
include "include/header.php";

$limit = 2;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// Search or Category
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$start = ($page - 1) * $limit;

/* ---------------- TOTAL COUNT QUERY ---------------- */
if ($search != '') {
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM post 
                            WHERE tag LIKE ?");
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
    $stmt = $conn->prepare("SELECT * FROM post 
                            WHERE tag LIKE ?
                            ORDER BY id DESC
                            LIMIT ?, ?");
    $search_param = "%{$search}%";
    $stmt->bind_param("sii", $search_param, $start, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $stmt = $conn->prepare("SELECT * FROM post 
                            ORDER BY id DESC
                            LIMIT ?, ?");
    $stmt->bind_param("ii", $start, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<style>
    .post_section{
        margin-left:2%;
    }
</style>
<div class="cover_pic">
    <img src="https://timelinecovers.pro/facebook-cover/download/ocean-national-geographic-facebook-cover.jpg" 
    alt="Cover" class="cover_pic_1">
</div>

<div class="post_section">
    <div class="post">
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<h4 class='post_title'>". htmlspecialchars($row['title']) . "</h4>";
                echo "<i>".$row['date'].".</i>";
                echo "<i> by-".$row['author']."</i><br><br>";
                echo "<img src='".htmlspecialchars($row['image'])."' class='post_image'>";
                echo "<p>".nl2br(htmlspecialchars($row['text']))."</p><br>";
                echo "<hr><br>";
            }
        } else {
            echo "<h3>No posts found.</h3>";
        }
        ?>
    </div>

    <!-- Category Section -->
    <div class="category">
        <h1>Categories..</h1>
        <hr>
        <a href="home.php?search=PHP" class="category_all <?php if($search=='PHP') echo 'active'; ?>">PHP</a>
        <a href="home.php?search=Laravel" class="category_all <?php if($search=='Laravel') echo 'active'; ?>">Laravel</a>
        <a href="home.php?search=JavaScript" class="category_all <?php if($search=='JavaScript') echo 'active'; ?>">JavaScript</a>
        <a href="home.php?search=MySQL" class="category_all <?php if($search=='MySQL') echo 'active'; ?>">MySQL</a>
        <a href="home.php?search=html" class="category_all <?php if($search=='html') echo 'active'; ?>">HTML</a>
    </div>
</div>

<!-- Pagination -->
<div style="text-align:center; margin:20px;">
<?php
echo "Pages: ";

for($i = 1; $i <= $total_pages; $i++){
    if($i == $page){
        echo "<strong style='margin:5px;'>$i</strong>";
    } else {
        if($search != ''){
            echo "<a href='?page=$i&search=".urlencode($search)."' style='margin:5px;'>$i</a>";
        } else {
            echo "<a href='?page=$i' style='margin:5px;'>$i</a>";
        }
    }
}
?>
</div>

<?php
include "include/footer.php";
?>