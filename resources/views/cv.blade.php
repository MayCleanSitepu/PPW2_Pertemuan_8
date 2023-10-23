<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - My Portfolio Project</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- ===== SWIPER CSS ===== -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== Fontawsome ICONS ===== -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
        
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/style.css">

        <title>Portfolio Personal Complete</title>
    </head>
    <body>
        <!--===== SCROLL TOP =====-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        
        <!--===== HEADER =====-->
        <header class="l-header" id="header">
            <nav class="nav bd-container" id="navbar">
                <a href="#" class="nav__logo">Meriam Selim</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"> <a href="#home" class="nav__link active--link">Home</a></li>
                        <li class="nav__item"> <a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"> <a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"> <a href="#portfolio" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"> <a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
        
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <span class="home__greeting">Hello, My Name is</span>
                        <h1 class="home__name">Meriam Selim</h1>
                        <span class="home__professional">Web Developer</span>
                        <a download=" " href="pdf/cv.pdf" class="button button-light home__button">Download Cv</a>
                    </div>
           
                    <div class="home__social">
                        <a href="#" class="home__social-icon">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="#" class="home__social-icon">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="#" class="home__social-icon">
                            <i class='bx bxl-twitter'></i>
                        </a>
                        
                    </div>

                    <div class="home__img" >
                        <img src="https://images.unsplash.com/photo-1541710887094-e940650f6c42?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80" alt="" class="">
                    </div>

                   
                </div>
            </section>


            
            <!--===== ABOUT =====-->
            <section class="about section bd-container" id="about">
                <span class="section-subtitle">My History</span>
                <h2 class="section-title">About Me</h2>
                <div class="about__container bd-grid">
                        <div class="about__data bd-grid">
                            <p class="about__desc"><span>Hello, I am <br> </span>Freelance Front-End Developer, I am passionate about craeting and developing web interfaces. With years of experience in web design and development.</p>
                            <div>
                                <span class="about__number">1.5</span>
                                <span class="about__ach">Years of Experience</span>
                            </div>
                            <div>
                                <span class="about__number">15+</span>
                                <span class="about__ach">Completed Projects</span>
                            </div>
                            <div>
                                <span class="about__number">1</span>
                                <span class="about__ach">Best Work Award</span>
                            </div>
                        
                        </div>

                        <img src="https://images.unsplash.com/photo-1486074051793-e41332bf18fc?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8&auto=format&fit=crop&w=500&q=60" alt="" class="about__img">
                </div>
            </section>

            <!--===== QUALIFICATION =====-->
            <section class="quali section bd-container">
                <span class="section-subtitle">Experience and Education</span>
                <h2 class="section-title">Qualification</h2>

                <div class="quali__container bd-grid">
                    <div class="quali__content">
                        <h2 class="quali__title">
                            <i class='bx bxs-briefcase-alt quali__title-icon' ></i>
                            Work Experience
                        </h2>

                        <div class="bd-grid">
                            <div class="quali__data">
                                <h3 class="quali__area">Junior Front End Developer </h3>
                                <div class="quali__box">
                                    <span class="quali__work">
                                        <i class='bx bx-briefcase-alt quali__icon' ></i>
                                        FreeLancing
                                    </span>
                                    <span class="quali__work">
                                        <i class='bx bx-calendar-alt quali__icon' ></i>
                                        May 2020 - Jan 2021
                                    </span>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="quali__data">
                                <h3 class="quali__area">Customer Service Representitive</h3>
                                <div class="quali__box">
                                    <span class="quali__work">
                                        <i class='bx bx-briefcase-alt quali__icon' ></i>
                                        Abc Hospital
                                    </span>
                                    <span class="quali__work">
                                        <i class='bx bx-calendar-alt quali__icon' ></i>
                                        Jan 2017 - Dec 2019
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="quali__content">
                        <h2 class="quali__title">
                            <i class='bx bx-library quali__title-icon' ></i>
                              Education
                        </h2 >

                        <div class="bd-grid">
                            <div class="quali__data">
                                <h3 class="quali__area">Web Designing & Front-End Course</h3>
                                <div class="quali__box">
                                    <span class="quali__work">
                                        <i class='bx bxs-book quali__icon' ></i>
                                        online Learning
                                    </span>
                                    <span class="quali__work">
                                        <i class='bx bx-calendar-alt quali__icon' ></i>
                                        Jun 2019 - Apr 2020
                                    </span>
                                    
                                </div>
                            </div>

                            <div class="quali__data">
                                <h3 class="quali__area">Computer and Communication Engineering </h3>
                                <div class="quali__box">
                                    <span class="quali__work">
                                        <i class='bx bxs-book quali__icon' ></i>
                                        Helwan University - Faculty of Engineering
                                    </span>
                                    <span class="quali__work">
                                        <i class='bx bx-calendar-alt quali__icon' ></i>
                                        Sep 2010 - Jan 2016
                                    </span>
                                    
                                </div>
                            </div>
                                                       
                        </div>
                    </div>
                </div>
            </section>

            <!--===== SERVICES =====-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">What I offer</span>
                <h2 class="section-title">Services</h2>

                 <div class="services__container bd-grid">
                     <div class="services__data">
                        <i class='bx bxs-palette services__icon'></i>
                        <h3 class="services__title">UI /UX Design</h3>
                        <p class="services__desc">Services that I offer and work, with years of experience in the work area.</p>
                        <a href="#" class="button">See More</a>
                     </div>
                     <div class="services__data">
                        <i class='bx bx-laptop services__icon'></i>
                        <h3 class="services__title">Web Developing</h3>
                        <p class="services__desc">Services that I offer and work, with years of experience in the work area.</p>
                        <a href="#" class="button">See More</a>
                     </div>
                    
                 </div>

            </section>
            
            <!--===== PROJECT IN MIND =====-->
            <section class="project section bd-container" id="projects">
                <div class="project__container bd-grid">
                  <div class="project__data">
                    <i class='bx bxs-chat project__icon' ></i>
                    <div>
                        <h2 class="project__title project-tile">Project in Mind</h2>
                        <p class="project__desc">Let's build your project and give it a life.</p>
                    </div>
                    <div>
                        <a href="#" class="button button-white">Hire Me</a>
                    </div>
                  </div>

                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section bd-container" id="portfolio">
                <span class="section-subtitle">My Recent Projects</span>
                <h2 class="section-title">Portfolio</h2>
                <div class="portfolio__nav">
                    <span class="portfolio__item active--portfolio"data-filter="all">All</span>
                    <span class="portfolio__item" data-filter=".web">Web</span>
                    <span class="portfolio__item" data-filter=".ux">UI/UX</span>
                    <span class="portfolio__item" data-filter=".app">App</span>
                </div>
                <div class="portfolio__container bd-grid">
                    <div class="portfolio__content mix web">
                        <a href="#" class=""><img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/work1.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Web Development</span>
                            <a href="#"><h2 class="portfolio__title">New Portfolio of work done for a client</h2></a>
                            <a href="#" class="button button-link">View Details</a>
                        </div>
                        
                    </div>
                    <div class="portfolio__content mix web">
                        <a href="#" class=""><img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/work2.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Web Development</span>
                            <a href="#"><h2 class="portfolio__title">New Portfolio of work done for a client</h2></a>
                            <a href="#" class="button button-link">View Details</a>
                        </div>
                        
                    </div>
                    <div class="portfolio__content mix ux">
                        <a href="#" class=""><img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/work3.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">UI/UX</span>
                            <a href="#"><h2 class="portfolio__title">New Portfolio of work done for a client</h2></a>
                            <a href="#" class="button button-link">View Details</a>
                        </div>
                        
                    </div>
                    <div class="portfolio__content mix ux">
                        <a href="#" class=""><img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/work4.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">UI/UX</span>
                            <a href="#"><h2 class="portfolio__title">New Portfolio of work done for a client</h2></a>
                            <a href="#" class="button button-link">View Details</a>
                        </div>
                        
                    </div>
                    <div class="portfolio__content mix app">
                        <a href="#" class=""><img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/work5.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Mobile App</span>
                            <a href="#"><h2 class="portfolio__title">New Portfolio of work done for a client</h2></a>
                            <a href="#" class="button button-link">View Details</a>
                        </div>
                        
                    </div>
                    <div class="portfolio__content mix app">
                        <a href="#" class=""><img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/work6.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Mobile App</span>
                            <a href="#"><h2 class="portfolio__title">New Portfolio of work done for a client</h2></a>
                            <a href="#" class="button button-link">View Details</a>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--===== TESTIMONIAL =====-->
            <section class="reviews section bd-container"  id='welcome-section'>
                <span class="section-subtitle">My Client's Reviews </span>
                <h1 class="section-title">Reviews</h1>

                <div class="reviews__container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="reviews__content swiper-slide">
                            <img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/testimonial1.jpg" alt="" class="reviews__img">
                            <h3 class="reviews__title">Mike Doe</h3>
                            <span class="reviews__client">Client</span>
                            <p class="reviews__desc">This Company Does a very good service, offers the best deals and does a good job. I recommend it.</p>
                        </div>
                        <div class="reviews__content swiper-slide">
                            <img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/testimonial2.jpg" alt="" class="reviews__img">
                            <h3 class="reviews__title">Linda Adams</h3>
                            <span class="reviews__client">Client</span>
                            <p class="reviews__desc">This Company Does a very good service, offers the best deals and does a good job. I recommend it.</p>
                        </div>
                        <div class="reviews__content swiper-slide">
                            <img src="https://raw.githubusercontent.com/bedimcode/responsive-portfolio-Clay-Doe/main/assets/img/testimonial3.jpg" alt="" class="reviews__img">
                            <h3 class="reviews__title">Sam Hamilton</h3>
                            <span class="reviews__client">Client</span>
                            <p class="reviews__desc">This Company Does a very good service, offers the best deals and does a good job. I recommend it.</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                </section>

            <!--===== CONTACTME =====-->
            <section class="contact section bd-container" id="contact">
                <span class="section-subtitle">Let's help you in your projects</span>
                <h2 class="section-title">Contact Me</h2>
                <div class="contact__container bd-grid">
                    <div class="contact__content bd-grid">
                        <div class="contact__box">
                            <i class='bx bxs-home contact-icon'></i>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__desc">#123 Cairo - Egypt</span>
                        </div>
                        <div class="contact__box">
                            <i class='bx bxs-phone contact-icon'></i>
                            <h3 class="contact__title">Phone</h3>
                            <span class="contact__desc">+201x-xxxx-xxxx</span>
                        </div>
                        <div class="contact__box">
                            <i class='bx bxs-envelope contact-icon'></i>
                            <h3 class="contact__title">E-mail</h3>
                            <span class="contact__desc">m.selim@gmail.com</span>
                        </div>
                        <div class="contact__box">
                            <i class='bx bxs-chat contact-icon'></i>
                            <h3 class="contact__title">Chat</h3>
                            <a href="#" class="contact__social"><i class='bx bxl-whatsapp' ></i>
                            <a href="#" class="contact__social"><i class='bx bxl-messenger'></i>
                            <a href="#" class="contact__social"><i class='bx bxl-telegram' ></i>
                            </a>
                        </div>
                    </div>
                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeholder ="Name" class="contact__input">
                            <input type="email" placeholder ="Email" class="contact__input">
                        </div>
                        <div class="contact__inputs">
                            <input type="text" placeholder ="Project" class="contact__input">
                            <input type="number" placeholder ="Phone-number" class="contact__input">
                        </div>
                        <textarea class="contact__input" placeholder="Message"name="" id="" cols="0" rows="7"></textarea>
                        <div class="send__button"><input type="submit" value="Send" class="button contact__button"></form></div>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <div class="footer__container bd-container">
                <h1 class="footer__title">Meriam Selim</h1>
                <p class="footer__desc">I'm Meriam Selim and this is my personal website, consult me here.</p>

                <div class="footer__social">
                    <a href="#" class="footer__link"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://github.com/bedimcode" class="footer__link" id="profile-link" target="_blank"><i class='bx bxl-github' ></i></a>
                    <a href="#" class="footer__link"><i class='bx bxl-figma' ></i></a>
                    <a href="#" class="footer__link"><i class='bx bxl-codepen' ></i></a>
                    <a href="#" class="footer__link"><i class="fas fa-bolt"></i></a>
                </div>
                <p class="footer__copy">&#169; 2021 Meriam Selim. All rights reserved</p>
            </div>
        </footer>
        
        <!-- ===== MIXITUP FILTER ===== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.js" integrity="sha512-fuxK9KrfYYxsXOm+VTYLEX3vOKymX2CDP+X1q0vsTwe9LPyJBSC3LXPu79ZNZiNCFrSzzMklmp5bU9Da/1TQEw==" crossorigin="anonymous"></script>
        <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
          <!-- ===== Mixitup ===== -->
         
        <!-- ===== SWIPER JS ===== -->
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
        <!-- ===== GSAP ===== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
        
        <!--===== MAIN JS =====-->
        <script src="js/content.js"></script>
         
          
          <!--===== FreeCodeCamp.org Test =====-->
          <!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    </body>
</html>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="js/script.js"></script>

</body>
</html>
