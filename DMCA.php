<?php
    include "db.php";
    include "include/header.php";
    $sql="SELECT * FROM post";
    $result=$conn->query($sql);
           
?>

    <div class="cover_pic">
        <img src="https://img.freepik.com/free-vector/night-landscape-with-lake-mountains-trees-coast-vector-cartoon-illustration-nature-scene-with-coniferous-forest-river-shore-rocks-moon-stars-dark-sky_107791-8253.jpg?w=740&q=80" 
        alt="Cover" class="cover_pic_1">
    </div>

    <!-- Post Section -->
   <div class="post_section">
     <div class="post">
   <p class="dmca_p">📜 DMCA Policy
DMCA Notice & Takedown Policy

This website respects the intellectual property rights of others and expects its users to do the same. In accordance with the Digital Millennium Copyright Act (DMCA), we will respond promptly to claims of copyright infringement reported to us.

If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement, please provide us with the following information:

A description of the copyrighted work that you claim has been infringed.

The exact URL or location on our website where the material is located.

Your full name, address, telephone number, and email address.

A statement that you have a good faith belief that the disputed use is not authorized by the copyright owner.

A statement that the information in the notification is accurate.

Your electronic or physical signature.

Send your DMCA complaint to:

📧 Email: your@email.com

📌 Website: www.yourwebsite.com

Upon receiving a valid DMCA notice, we will remove the infringing content as soon as possible.</p>
    
</div>

     <div class="category">
        <h1>Categories..</h1>
        <hr>
        <a href="" class="category_all">PHP</a>
        <a href="" class="category_all">Laravel</a>
        <a href="" class="category_all">JavaScript</a>
        <a href="" class="category_all">MySQL</a>
    </div>
   </div>
  <?php
     include "include/footer.php";
  
  ?>