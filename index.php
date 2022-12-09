<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakshi Jagtap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">Sakshi Jagtap</a>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about-meid">About</a></li>
            <li><a href="#skills-id">Skills</a></li>
            <li><a href="#project-id">Projects</a></li>
            <li><a href="#contact-form-id">Contact</a></li>
            <li><div class="bx bx-moon"></div></li>
        </ul>
    </header>

    <!-- Home -->
    <section class="home" id="home">
        <div class="social">
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-dribbble'></i></a>
            <a href="#"><i class='bx bxl-behance'></i></a>
        </div>

        <div class="home-text">
            <span>Hello, I'm</span>
            <h1 class="heading-name">Sakshi Jagtap</h1>
            <span class="aim">Full Stack Developer</span>
            <p class="para-home">Pursuing Bachelors of Engineering from Pune Institute Of Computer Technology</p>
            <a href="#contact-form-id" class="contact-me">Contact Me</a>
        </div>

        <div class="home-img">
            <img src="11.png" alt="img" srcset="">
        </div>
    </section>


    <!-- About Me -->

    <section class="aboutme" id="about-meid">
        <h1 class="aboutme-heading">About Me</h1>
        <span>Introduction</span>

        <div class="aboutme-section">
            <div class="img-section">
                <img src="121.jpg" alt="" class="my-img">
            </div>


            <div class="aboutme-text">
                <p>Pre-Final Year Student of Pune Institute Of Computer Technology, Pune. Studying Electronics & Telecommunication(ECE) Department. Aspiring Full Stack Developer   || Competitive Programmer   ||   4 STAR (C++) on Hackerank   ||   2 STAR on CODECHEF   ||    Member of PICT PCSB CLUB(CSI - Web SIG Team) </p>
                <div class="icons-div">
                    <span><i class='bx bxs-user'></i>   Sakshi Jagtap</span>
                    <span><i class='bx bxs-phone' ></i>    +91 93732 12107</span>
                    <span><i class='bx bxs-envelope'></i>   sakshijagtap222@gmail.com</span>
                </div>
                <a href="download.php?file=MagicalCV" class="contact-me">Download CV</a>

            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="skills" id="skills-id">
        <h1 class="skill-heading">Skills</h1>
        <span class="skill-subheading">My Skills</span>

        <div class="skills-section">
            <div class="skill-bar">
                <div class="bars">
                    <div class="bars-box">
                        <h3>HTML</h3>
                        <span>94%</span>
                        <div class="light-bar"></div>
                        <div class="percent-bar html-bar"></div>
                    </div>
    
                    <div class="bars-box">
                        <h3>CSS</h3>
                        <span>94%</span>
                        <div class="light-bar"></div>
                        <div class="percent-bar css-bar"></div>
                    </div>
    
                    <div class="bars-box">
                        <h3>Javascript</h3>
                        <span>30%</span>
                        <div class="light-bar"></div>
                        <div class="percent-bar js-bar"></div>
                    </div>
    
                    <div class="bars-box">
                        <h3>React</h3>
                        <span>30%</span>
                        <div class="light-bar"></div>
                        <div class="percent-bar react-bar"></div>
                    </div>
                </div>
            </div>
    
            <div class="skill-img">
                <img src="123.png" alt="">
            </div>
            
    </section>

    <!-- Projects -->

    <section class="projects" id="project-id">
        <h1 class="project-heading">Projects</h1>
        <!-- <span class="project-subheading">My Projects</span> -->

        <img src="blog-1.jpg" alt="" height="300" width="350">
        <img src="blog-6.jpg" alt="" height="300" width="350">
        <img src="blog-4.jpg" alt="" height="300" width="350">
        <img src="blog-5.jpg" alt="" height="300" width="350">
        
    </section>


    <!-- Contact Form -->
    <section class="contact-form" id="contact-form-id">
        <h1 class="contact-me-heading">Contact Me</h1>

        <form action="https://formsubmit.co/ae81585b207134ec83f6dc43f242770c" method= 'POST' class="form">
            <input type="text" name="name" id="name" placeholder="Your Name">
            <input type="text" name="email" id="email" placeholder="Your Email">
            <textarea name="message" id="message" cols="20" rows="10" placeholder="Enter your message....."></textarea>
            <button class="submit">Send</button>
        </form>
    </section>
</body>
</html>