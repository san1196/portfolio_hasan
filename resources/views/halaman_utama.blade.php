<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasan - Portfolio</title>
    <!--Favicon-->
    <link rel="icon" href="{{ asset('assets_template/assets/images/HASAN_Foto.jpg') }}">
    <!--Google Font: Dosis-->
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!--stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/jquery.lineProgressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/animate.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('assets_template/assets/css/lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/stroke-gap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_template/assets/css/responsive.css') }}">


</head>
<body>

    <!--************************************
        PreLoader Area Start
    **************************************-->
    <div class="preloader">
        <div class="loader_width">
            <div class="dash uno"></div>
            <div class="dash dos"></div>
            <div class="dash tres"></div>
            <div class="dash cuatro"></div>
        </div><!--end .loader_width-->
    </div><!--end .preloader-->
    <!--************************************
        PreLoader Area End
    **************************************-->

    <!--************************************
        Header Area Start
    **************************************-->
    <header class="topbar wow slideInDown">

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="main-nav">
            <div class="container">
                <a class="navbar-brand" href="">
                    <b style="font-family: Monaco;">H A S A N</b>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="la la-bars"></span>
                    <span class="la la-bars"></span>
                    <span class="la la-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ml-auto">
                        <li class="nav-item">
                            <a data-scroll-nav="0" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll-nav="1" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll-nav="2" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll-nav="3" class="nav-link">Work</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll-nav="4" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div><!--end .collapse-->
            </div><!--end .container-->
        </nav><!--end .navbar-->
    </header><!--end .topbar-->
    <!--************************************
        Header Area End
    **************************************-->

    <!--************************************
        CV Intro Area Start
    **************************************-->
    <section class="page_scroll cv_intro_area" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cv_intro_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2><strong>Hello</strong> There!</h2>
                        <h1>I'm <strong>Hasan</strong></h1>
                        <h3 class="cv_about_me_skill_slide">
                            <span class="cv_about_me_txt">I am a </span>
                            <span class="cv_about_skills_slide owl-carousel">
                                <span>Fullstack Web Developer.</span>
                                <span>Technical Odoo.</span>
                                <span>Consultant IT.</span>
                            </span>
                        </h3>
                        <div class="cv_about_me_buttons">
                            <button class="simple_btn btn btn-primary" type="submit" value="About Me" data-scroll-nav="1">About Me</button>
                            <!-- <button class="blue_btn btn btn-primary" type="submit" value="Hire Me">Hire Me</button> -->
                        </div><!--end .cv_about_me_buttons-->
                    </div><!--end .cv_intro_text-->
                </div><!--end .col-lg-7-->
                <div class="col-lg-6">
                    <img class="about_me_img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" src="{{ asset('assets_template/assets/images/1614619954916.jpeg') }}" alt="About Me">
                </div><!--end .col-lg-5-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .cv_intro_area-->
    <!--************************************
        CV Intro Area End
    **************************************-->

    <!--************************************
        About Area Start
    **************************************-->
    <section class="page_scroll about_area section_padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about_img_box wow fadeInLeft">
                        <img src="{{ asset('assets_template/assets/images/about.png') }}" alt="About Me">
                    </div><!--end .about_img_box-->
                </div><!--end .col-lg-5-->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about_me_details wow fadeInRight">
                        <h1 class="title_shape">About Me</h1>
                        <h3>Who Am i?</h3>
                        <p>I'm a professional in the field of Software Engineer, especially as a PHP Web Developer and Odoo ERP, as wellas mastering MySQL, PostgreSQL and SQL Server database processing. as well as other developer support tools such as Git, Linux and Windows Servers and more.</p>
                        <b>Core Skill</b>
                        <ul>
                            <li>Software Development</li>
                            <li>Business Analyst</li>
                            <li>Quality Testing</li>
                            <li>Technical Writer</li>
                            <li>Cloud Computing</li>
                            <li>Trainner Technical Odoo</li>
                        </ul>
                        <a href="{{ asset('assets_template/assets/file/Hasan_FullstackWebDeveloper.pdf') }}" target="_blank" class="blue_btn btn btn-primary">Download CV</a>
                    </div><!--end .about_me_details-->
                </div><!--end .col-lg-6-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .about_area-->
    <!--************************************
        About Area End
    **************************************-->

    <!--************************************
        My Skill Area Start
    **************************************-->
    <section class="page_scroll my_skill_area section_padding gray_bg" id="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero_section_title text-center wow fadeInUp">
                        <h1 class="title_shape">My Skills</h1>
                        <p></p>
                    </div><!--end .hero_section_title-->
                </div><!--end .col-lg-8-->
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="my_skill_box">
                        <h3>HTML5</h3>
                        <div id="html5"></div>
                    </div><!--end .my_skill_box-->
                    <div class="my_skill_box">
                        <h3>CSS3</h3>
                        <div id="css3"></div>
                    </div><!--end .my_skill_box-->
                    <div class="my_skill_box">
                        <h3>JavaScript</h3>
                        <div id="javascript"></div>
                    </div><!--end .my_skill_box-->
                    <div class="my_skill_box">
                        <h3>PHP</h3>
                        <div id="php"></div>
                    </div><!--end .my_skill_box-->
                </div><!--end .col-lg-6-->
                <div class="col-lg-6 wow fadeInRight">
                    <div class="my_skill_box">
                        <h3>Python</h3>
                        <div id="python"></div>
                    </div><!--end .my_skill_box-->
                    <div class="my_skill_box">
                        <h3>Web Development</h3>
                        <div id="web_development"></div>
                    </div><!--end .my_skill_box-->
                    <div class="my_skill_box">
                        <h3>Odoo</h3>
                        <div id="odoo"></div>
                    </div><!--end .my_skill_box-->
                    <div class="my_skill_box">
                        <h3>Cloud Computing</h3>
                        <div id="cloud"></div>
                    </div><!--end .my_skill_box-->
                </div><!--end .col-lg-6-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .my_skill_area-->
    <!--************************************
        My Skill Area End
    **************************************-->

    <!--************************************
        My Services Area Start
    **************************************-->
    <section class="page_scroll my_service_area section_padding gray_bg" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero_section_title wow fadeInUp text-center">
                        <h1 class="title_shape">My Services</h1>
                        <p></p>
                    </div><!--end .hero_section_title-->
                </div><!--end .col-lg-8-->

                <div class="col-lg-4 col-md-6">
                    <div class="my_service_box wow fadeInUp" data-wow-duration="0.3s">
                        <span class="service_number">01</span>
                        <i class="icon icon-DesktopMonitor"></i>
                        <h4>Web Development</h4>
                        <ul>
                            <li>Laravel</li>
                            <li>Odoo</li>
                        </ul>
                    </div><!--end .my_service_box-->
                </div><!--end .col-lg-4-->
                <div class="col-lg-4 col-md-6">
                    <div class="my_service_box wow fadeInUp" data-wow-duration="0.6s">
                        <span class="service_number">02</span>
                        <i class="icon icon-Bulb"></i>
                        <h4>Solution</h4>
                        <ul>
                            <li>Custom Web Application</li>
                            <li>ERP Application</li>
                        </ul>
                    </div><!--end .my_service_box-->
                </div><!--end .col-lg-4-->
                <div class="col-lg-4 col-md-6">
                    <div class="my_service_box wow fadeInUp" data-wow-duration="0.9s">
                        <span class="service_number">03</span>
                        <i class="icon icon-Flag"></i>
                        <h4>Training</h4>
                        <ul>
                            <li>Technical Odoo</li>
                            <li>Bootcamp Trainer</li>
                        </ul>
                    </div><!--end .my_service_box-->
                </div><!--end .col-lg-4-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .my_service_area-->
    <!--************************************
        My Services Area End
    **************************************-->

    <!--************************************
        Blog Area Start
    **************************************-->
    <section class="blog_area section_padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero_section_title wow fadeInUp text-center">
                        <h3 class="title_shape">My Works</h3>
                        <p></p>
                    </div><!--end .hero_section_title-->
                </div><!--end .col-lg-12-->

                <div class="col-lg-4">
                    <div class="blog_box wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="blog_img_box"></div><!--end .blog_img_box-->
                        <div class="blog_details">
                            <div class="blog_meta_box">
                                <div class="author_meta">
                                    <i class="icon icon-User"></i> :- Analyst
                                </div><!--end .author_meta-->
                                <div class="date_meta">
                                    <i class="icon icon-Agenda"></i> :- Oct 17 - Nov 17
                                </div><!--end .date_meta-->
                            </div><!--end .blog_meta_box-->
                            <h1>PT Bukit Asam · Internship</h1>
                            <p></p>
                        </div><!--end .blog_details-->
                    </div><!--end .blog_box-->
                </div><!--end .col-lg-4-->
                <div class="col-lg-4">
                    <div class="blog_box wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                        <div class="blog_img_box bg-2"></div><!--end .blog_img_box-->
                        <div class="blog_details">
                            <div class="blog_meta_box">
                                <div class="author_meta">
                                    <i class="icon icon-User"></i> :- Jr. Programmer
                                </div><!--end .author_meta-->
                                <div class="date_meta">
                                    <i class="icon icon-Agenda"></i> :- May 18 - Aug 19
                                </div><!--end .date_meta-->
                            </div><!--end .blog_meta_box-->
                            <h1>PT Dwimitra Raya Sejati</h1>
                            <p></p>
                        </div><!--end .blog_details-->
                    </div><!--end .blog_box-->
                </div><!--end .col-lg-4-->
                <div class="col-lg-4">
                    <div class="blog_box wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
                        <div class="blog_img_box bg-3"></div><!--end .blog_img_box-->
                        <div class="blog_details">
                            <div class="blog_meta_box">
                                <div class="author_meta">
                                    <i class="icon icon-User"></i> :- Software Engineer
                                </div><!--end .author_meta-->
                                <div class="date_meta">
                                    <i class="icon icon-Agenda"></i> :- Aug 19 - now
                                </div><!--end .date_meta-->
                            </div><!--end .blog_meta_box-->
                            <h1>PT Juke Solusi Teknologi</h1>
                            <p></p>
                        </div><!--end .blog_details-->
                    </div><!--end .blog_box-->
                </div><!--end .col-lg-4-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .blog_area-->
    <!--************************************
        Blog Area End
    **************************************-->


    <!--************************************
        Contact Form Area Start
    **************************************-->
    <footer class="contact_form_area" data-scroll-index="4">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contact_form">
                    <div class="hero_section_title">
                        <h3 class="title_shape">Get In Touch</h3>
                        <p></p>
                    </div>
                    <form action="#" onsubmit="return showPopup()">
                        <div class="row">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" id="name" placeholder="Your Name *" required>
                            </div>
                            <div class="col-lg-12">
                                <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Your E-mail *" required>
                            </div>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" id="subject" placeholder="Your Subject *" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary blue_btn" type="submit" value="Send Message">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h5><b style="font-family: Dosis;">Contact Info</b></h5>
                        @foreach($about_data as $value)
                            <p style="font-family: Dosis;"><i class="fa fa-user" aria-hidden="true"></i> {{ $value->name }}</p>
                            <p style="font-family: Dosis;"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $value->address }}</p>
                            <p style="font-family: Dosis;"><i class="fa fa-phone" aria-hidden="true"></i> {{ $value->telephone }}</p>
                            <p style="font-family: Dosis;"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $value->email }}</p>
                            <iframe src="{{ $value->sosmed }}" width="680" height="290" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h5><b style="font-family: Dosis;">Contact Info</b></h5>
                        <p style="font-family: Dosis;"><i class="fa fa-map-marker" aria-hidden="true"></i> Cabangbungin, Bekasi 17720</p>
                        <p style="font-family: Dosis;"><i class="fa fa-phone" aria-hidden="true"></i> (+62) 0821 23981612</p>
                        <p style="font-family: Dosis;"><i class="fa fa-envelope" aria-hidden="true"></i> hasansulistyo96@gmail.com</p>
                        <p style="font-family: Dosis;"><img src="{{ asset('assets_template/assets/images/linkedin.png') }}" alt="" width="18px" height="18px"> <a href="https://www.linkedin.com/in/san-hasan/" target="_blank">LinkedIn</a></p>
                        <br>
                    </div>
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126956.81402353152!2d107.07115898095955!3d-6.076617787761741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a28fb74e2de7b%3A0x42c44fcb5f712e85!2sKec.%20Cabangbungin%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1667487024175!5m2!1sid!2sid" width="680" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-1"></div>
        </div>
        <div id="map" style="display: none;"></div>
    </footer><!--end .contact_form-->
    <!--************************************
        Contact Form Area End
    **************************************-->

    <!--************************************
        Copyright Area Start
    **************************************-->
    <div class="copyright_area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="wow fadeInUp">Copyright &copy; 2022. All Rights Reserved By <a href="http://techydevs.com" target="_blank">Techydevs</a></p>
                </div><!--end .col-lg-12-->
            </div><!--end .row-->
        </div><!--end .container-->
    </div><!--end .copyright_area-->
    <!--************************************
        Copyright Area End
    **************************************-->

    <!--ScrollTop Icon-->
    <a class="scroll_top" data-scroll-goto="0">
        <i class="fa fa-rocket"></i>
    </a>
    <!--ScrollTop Icon-->

    <script>
        function showPopup()
        {
            var name = document.getElementById("name").value;
            var email = document.getElementById("exampleInputEmail1").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("exampleFormControlTextarea1").value;

            alert("Thanks you\n\nName: " + name + "\nEmail: " + email + "\nSubject: " + subject + "\nMessage: " + message + "\n\nOur team will contact you soon.");
        }
    </script>

    <!--Ajax-->
    <script src="{{ asset('assets_template/assets/js/jquery-2.2.4.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/jquery.counter.min.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_template/assets/js/custom_googlemap.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&libraries"></script>
    <script src="{{ asset('assets_template/assets/js/custom.js') }}"></script>
</body>
</html>