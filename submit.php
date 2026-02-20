<?php
include "db.php";
include "include/header.php";

$fst_name = $_GET["fstname"];
$lstname = $_GET["sndname"];
$email = $_GET["email"];
$message = $_GET["message"];

$sql = "INSERT INTO contact(firstname, lastname, email, message)
        VALUES('$fst_name', '$lstname', '$email', '$message')";

$res = $conn->query($sql);
?>

<!-- Only this div is styled, header/footer remain untouched -->
<div style="
    max-width: 500px;
    margin: 50px auto;
    padding: 30px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    font-family: 'Poppins', sans-serif;
    text-align: center;
">
    <h2 style="margin-bottom: 20px; color:#333;">Contact Form Submission</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($fst_name . " " . $lstname); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Message:</strong> <?php echo htmlspecialchars($message); ?></p>
    <p style="margin-top:20px; font-weight:bold; color:<?php echo $res ? 'green' : 'red'; ?>;">
        <?php 
            if($res){
                echo "Your message sent successfully!";
            } else {
                echo "Please correct your email or try again.";
            }
        ?>
    </p>
</div>

<?php
include "include/footer.php";
?>