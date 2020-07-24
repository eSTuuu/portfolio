<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b8e97b3dc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./stylesheets/main.css">
</head>
<body>
    <?php include './includes/navbar.php'?>
    <div class="banner">
        <p class="header">Hi I'm </p>
        <p class="pre-icons">Meet me there!</p>
        <div class="icons">
            <a href="" class="icon-link"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="icon-link"><i class="fab fa-instagram"></i></a>
            <a href="" class="icon-link"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <div class="about">
        <header class="about-title">About</header>
        <div class="about-container">
            <img src="./image/about.jpg" alt="" class="about-img">
            <div class="about-text">
                <p class="about-container-title">Hi I'm Oskar</p>
                <p class="p-relative"><span class="dot">Student</span><span class="dot">Web Developer</span><span>Gamer</span></p>
                <p class="about-container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti optio reiciendi srepellendus consectetur ad rem pariatur distinctio sapiente ab, quod possimus aut quos itaque? Corrupti veniam illumdolorem molestiae magni. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magni sint. Consequuntur possimus sit accusantium ab cum! Reprehenderit eum dolores fuga nihil aspernatur?</p>
            </div>
        </div>
    </div>
    <div class="services">
        <header class="services-title">Services</header>
        <div class="cards">
            <div class="card">
                <p class="card-icon">
                    <i class="fas fa-database"></i>
                </p>
                <p class="card-title">Manage Database</p>
                <p class="card-desc">Lorem ipsum dolor sit amet conse tur adipis icing elit. Nihil fugit atis har um quod. Labo rum nece ssi tatibus quo veritatis ea odit molestias iure.</p>
            </div>
            <div class="card">
                <p class="card-icon">
                    <i class="fas fa-magic"></i>
                </p>
                <p class="card-title">Design</p>
                <p class="card-desc">Lorem ipsum dolor sit amet conse tur adipis icing elit. Nihil fugit atis har um quod. Labo rum nece ssi tatibus quo veritatis ea odit molestias iure</p>
            </div>
            <div class="card">
                <p class="card-icon">
                <i class="fas fa-window-maximize"></i>
                </p>
                <p class="card-title">Build Website</p>
                <p class="card-desc">Lorem ipsum dolor sit amet conse tur adipis icing elit. Nihil fugit atis har um quod. Labo rum nece ssi tatibus quo veritatis ea odit molestias iure</p>
            </div>
        </div>
    </div>
    <div class="contact">
        <header class="contact-title">Contact us</header>
        <form action="" class="contact-form">
            <input type="text" name="name" class="contact-input" placeholder="Full Name">
            <input type="email" name="email" class="contact-input" placeholder="Email">
            <input type="text" name="subject" class="contact-input-subject" placeholder="Subject">
            <textarea name="message" id="message" class="contact-message" placeholder="Message"></textarea>
            <input type="submit" class="contact-submit" value="Send Message">
        </form>
    </div>
    <?php include './includes/footer.php'?>
    <script src="./javascript/main.js"></script>
</body>
</html>