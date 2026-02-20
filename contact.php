<?php
include "include/header.php";
?>
    <style>
        .contact-section{
    min-height: 100vh;
    padding: 80px 20px;
    background: linear-gradient(135deg,#141e30,#243b55);
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-card{
    width: 100%;
    max-width: 450px;
    padding: 45px;
    border-radius: 20px;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(20px);
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 20px 50px rgba(0,0,0,0.6);
    color:white;
    animation: fadeIn 0.8s ease-in-out;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

.contact-card h2{
    text-align:center;
    margin-bottom:35px;
    font-size:28px;
    letter-spacing:1px;
}

.form-group{
    position:relative;
    margin-bottom:30px;
}

.form-group input,
.form-group textarea{
    width:100%;
    padding:12px 5px;
    border:none;
    outline:none;
    background:transparent;
    border-bottom:2px solid rgba(255,255,255,0.4);
    color:white;
    font-size:15px;
    transition:0.3s;
}

.form-group label{
    position:absolute;
    top:12px;
    left:5px;
    transition:0.3s;
    color:rgba(255,255,255,0.7);
    pointer-events:none;
}

.form-group input:focus ~ label,
.form-group input:valid ~ label,
.form-group textarea:focus ~ label,
.form-group textarea:valid ~ label{
    top:-18px;
    font-size:12px;
    color:#00f2fe;
}

.form-group input:focus,
.form-group textarea:focus{
    border-bottom:2px solid #00f2fe;
}

.contact-card button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:50px;
    background: linear-gradient(90deg,#00f2fe,#4facfe);
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

.contact-card button:hover{
    transform:scale(1.06);
    box-shadow:0 15px 30px rgba(0,242,254,0.5);
}
    </style>
    <div class="contact-section">
    <div class="contact-card">
        <h2>Contact Us</h2>

        <form action="submit.php" method="get">

            <div class="form-group">
                <input type="text" name="fstname" required>
                <label>First Name</label>
            </div>

            <div class="form-group">
                <input type="text" name="sndname" required>
                <label>Last Name</label>
            </div>

            <div class="form-group">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>

            <div class="form-group">
                <textarea name="message" rows="4" required></textarea>
                <label>Your Message</label>
            </div>

            <button type="submit">Send Message</button>

        </form>
    </div>
</div>
    
   <?php
include "include/footer.php";
?>
