<?php include 'form-to-email.php'  ?>
<!DOCTYPE html>
<!-- Created By M.Maaz Faisal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div style="width: 100%;" class="max-width">
            <div class="logo"><a href="#home"><img style="height:80px;" src="Logo/White-logo.png"></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Journal</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">M. Maaz Faisal</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title"><span style="color: #1e90ff;">About</span> me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-pic.webp" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Maaz and I'm a <span class="typing-2"></span></div>
                    <p>I’m currently a Computer Science student at Usman University. I am extremely passionate about programming and designing as a whole. I essentially work on the backend because I enjoy solving complex problems that require critical thinking skills and logic. Though, I am flexible and have also worked on the frontend as well! The technologies that I’m comfortable in are Python, JavaScript , Html, CSS and Bootstrap.</p>
                    <a href="https://1drv.ms/b/s!AqUf6nbR_cyDmjlJgDkGonp3KT0B" download="">Download CV</a>
                </div>
            </div>
        </div>
    </section>



    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My <span style="color: #1e90ff;">services</span></h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Branding</div>
                        <p>I create logos, social medial post and posters.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Marketing</div>
                        <p>I write blogs and I also work on SEO(Search Engine Optimization)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Development</div>
                        <p>I'm a full stack developer, mainly specializing in Backend.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My <span style="color:#1e90ff;">skills</span></h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I'm an apprentice at Ibexoft, where I've where I learned various skills that also include soft skills. My ambition is to become a full-stack developer with a focus on the backend. I decided to focus in the backend because I enjoy utilizing my own logic to solve complicated issues. I just completed a WordPress project that allowed me to hone my talents digital marketing, design, and content writing abilities.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Python</span>
                            <span>65%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>75%</span>
                        </div>
                        <div class="line python"></div>
                        <div class="bars">
                            <div class="info">
                                <span>Wordpress</span>
                                <span>83%</span>
                            </div>
                            <div class="line wordpress"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Html, CSS and Bootstrap</span>
                                <span>80%</span>
                            </div>
                            <div class="line html"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>73%</span>
                            </div>
                            <div class="line js"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>PhotoShop</span>
                                <span>28%</span>
                            </div>
                            <div class="line photoshop"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My <span style="color: #1e90ff;">Journal</span></h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/blog-2.webp" alt="">
                        <div class="text">What Things To Keep In Mind When Choosing a Theme</div>
                        <p>When it comes to choosing a theme for their websites, most newcomers are overwhelmed. There are
                            thousands of themes available, both free and paid....</p>
                        <button type="button" class="btn btn-primary">
                            <a style="color: white;" href="blogs.html#blog-2" target="_blank">Read more</a>
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/firmbee-com-gcsNOsPEXfs-unsplash.webp" alt="">
                        <div class="text">How To Create Your Own 90-Minute Hour</div>
                        <p>Most individuals desire to improve their time management skills, and it's no secret that technology
                            can help them do so. However, it is the same technology....</p>
                        <button type="button" class="btn btn-primary">
                            <a style="color: white;" href="blogs.html#blog-1" target="_blank">Read more</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title"><span style="color:#1e90ff;">Contact</span> me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>If you have any queries, please feel free to fill out the form or sending me a mail</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">M. Maaz Faisal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Karachi, Pakistan</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">m.maazfaisal0301@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input name="name" type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input name="subject" type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="Message" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>