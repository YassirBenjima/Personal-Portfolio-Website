<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact') or die('Connection failed');
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name='$name' AND email='$email' AND number = '$number' AND message = '$msg'") or die('query failed');
    if (mysqli_num_rows($select_message) > 0) {
        $message[] = "Message sent already";
    } else {
        mysqli_query($conn, "INSERT INTO contact_form(name,email,number,message) VALUES('$name','$email','$number','$msg')");
        $message[] = "Message sent successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website | By Yassir Benjima</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '<div class="message">
            <span>' . $msg . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }
    ?>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Cantact</a>
        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>

        </div>
    </header>
    <section class="home" id="home">
        <div class="image">
            <img src="images/moi.jpg" alt="" />
        </div>
        <div class="content">
            <h3>Hi, I'am Yassir Benjima</h3>
            <span>Computer Engineering and Networking</span>
            <p>
                My name is Yassir BENJIMA. I am a third-year student in Computer Engineering and Networks at the Moroccan School of Engineering Sciences (EMSI)
            </p>
            <a href="#about" class="btn">about me</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"><span>Biography</span></h1>
        <div class="biography">
            <p>
                My name is Yassir BENJIMA. I am a third-year student in Computer Engineering and Networks at the Moroccan School of Engineering Sciences (EMSI)
            </p>
            <div class="bio">
                <h3><span>Name : </span> Yassir Benjima</h3>
                <h3><span>Email : </span> yassirbenjima18@gmail.com</h3>
                <h3><span>Phone : </span>+212 623-401-404</h3>
                <h3><span>Age : </span> 21 years</h3>
                <h3><span>Experience : </span> +1 years of experience</h3>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        <div class="skills">
            <h1 class="heading"><span>Skills</span></h1>
            <div class="progress">
                <div class="bar">
                    <h3><span>HTML</span><span>100%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>CSS</span><span>90%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Javascript</span><span>95%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Bootstrap</span><span>100%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>PHP</span><span>98%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Laravel</span><span>100%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>C++</span><span>95%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Python</span><span>90%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Django</span><span>90%</span></h3>
                </div>
            </div>
        </div>
        <div class="edu-exp">
            <h1 class="heading"><span>Education & exprience</span></h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title">Education</h3>
                    <div class="box">
                        <span> 2019-2020 </span>
                        <h3>Bachelor’s Degree in Experimental Sciences</h3>
                        <p>Bachelor’s Degree in Experimental Sciences, with a Specialization in Life and Earth Sciences</p>
                    </div>
                    <div class="box">
                        <span> 2021-2023 </span>
                        <h3> Specialized Technician in Digital Development,Full-Stack Web Development</h3>
                        <p> ISTA NTIC, Sidi Youssef Ben Ali – Marrakech</p>
                    </div>
                    <div class="box">
                        <span> 2023-Now </span>
                        <h3> Third-Year Engineering Student, specializing in Computer Science and Networks</h3>
                        <p>Moroccan School of Engineering Sciences (EMSI) Marrakech</p>
                    </div>
                </div>

                <div class="box-container">
                    <h3 class="title">Exprience</h3>
                    <div class="box">
                        <span> March 2023 - April 2023 </span>
                        <h3> Internship as a Developer at 212Communication</h3>
                        <p> Designed and developed a web management application for the Pickalbatros hotel group using HTML, CSS,Bootstrap, Symfony, and jQuery</p>
                    </div>
                    <div class="box">
                        <span> July 2024 - August 2024</span>
                        <h3> Internship as a Developer at Grow Easy</h3>
                        <p>Designed and developed an e-commerce website using HTML, CSS, Bootstrap, Laravel, and AJAX</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h1 class="heading"><span>Services</span></h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam error ipsum at numquam doloremque aspernatur quas. Rerum, suscipit illum omnis nemo cumque ut! Sit, alias doloribus praesentium minima omnis natus?</p>
            </div>
            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <h3>Graphic Design</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam error ipsum at numquam doloremque aspernatur quas. Rerum, suscipit illum omnis nemo cumque ut! Sit, alias doloribus praesentium minima omnis natus?</p>
            </div>
            <div class="box">
                <i class="fab fa-bootstrap"></i>
                <h3>Bootstrap</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam error ipsum at numquam doloremque aspernatur quas. Rerum, suscipit illum omnis nemo cumque ut! Sit, alias doloribus praesentium minima omnis natus?</p>
            </div>
            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>SEO Marketing</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam error ipsum at numquam doloremque aspernatur quas. Rerum, suscipit illum omnis nemo cumque ut! Sit, alias doloribus praesentium minima omnis natus?</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>Digital Marketing</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam error ipsum at numquam doloremque aspernatur quas. Rerum, suscipit illum omnis nemo cumque ut! Sit, alias doloribus praesentium minima omnis natus?</p>
            </div>
            <div class="box">
                <i class="fab fa-wordpress-simple"></i>
                <h3>Wordpress</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam error ipsum at numquam doloremque aspernatur quas. Rerum, suscipit illum omnis nemo cumque ut! Sit, alias doloribus praesentium minima omnis natus?</p>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>Portfolio</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/img-1.jpg" alt="">
                <h3>Front-End Development</h3>
                <span>( 2020 - Now )</span>
            </div>
            <div class="box">
                <img src="images/img-2.jpg" alt="">
                <h3>Back-End Development</h3>
                <span>( 2020 - Now )</span>
            </div>
            <div class="box">
                <img src="images/img-3.jpg" alt="">
                <h3>Full-Stack Project</h3>
                <span>( 2020 - Now )</span>
            </div>
            <div class="box">
                <img src="images/img-4.jpg" alt="">
                <h3>E-Commerce Website</h3>
                <span>( 2020 - Now )</span>
            </div>
            <div class="box">
                <img src="images/img-5.jpg" alt="">
                <h3>Responsive Design</h3>
                <span>( 2020 - Now )</span>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact Me</span></h1>
        <form action="" method="POST">
            <div class="flex">
                <input type="text" name="name" placeholder="Enter your name" class="box" required />
                <input type="email" name="email" placeholder="Enter your email" class="box" required />
            </div>
            <input type="numberr" min="0" name="number" placeholder="Enter your number" class="box" required />
            <textarea name="message" class="box" required cols="30" rows="10" placeholder="Enter your message"></textarea>
            <input type="submit" value="Send message" name="submit" class="btn" />
        </form>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+212-623-401-404</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>yassirbenjima18@gmail.com</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Marrakech , Morocco 4000</p>
            </div>
        </div>
    </section>
    <div class="credit">&copy; copyright @<?php echo date('Y'); ?> by <span>Yassir Benjima</span></div>
    <script src="js/script.js"></script>
</body>

</html>