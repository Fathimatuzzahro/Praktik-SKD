<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/eclipse/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 23:47:45 GMT -->

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="img/xfav.png.pagespeed.ic.86XnbiuFGc.png" />

    <meta name="author" content="colorlib" />

    <meta name="description" content="" />

    <meta name="keywords" content="" />

    <meta charset="UTF-8" />

    <title>Alexandria School</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="css/linearicons.css%2bfont-awesome.min.css%2bbootstrap.css%2bmagnific-popup.css%2bowl.carousel.css%2bnice-select.css%2bhexagons.min.css.pagespeed.cc.e_F6Y5yBxP.css" />
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="css/A.main.css.pagespeed.cf.DQLcLWq5zQ.css" />
</head>

<body>

    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="img/xlogo.png.pagespeed.ic.FgtVtamvYI.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="index.php">Logout</a></li>
                        <li>
                            <button class="search">
                                <span class="lnr lnr-magnifier" id="search"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="search-input" id="search-input-box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>


    <section class="home-banner-area">
        <div class="container">
            <div class="row justify-content-center fullscreen align-items-center">
                <div class="col-lg-5 col-md-8 home-banner-left">
                    <h1 class="text-white">
                        Take the first step <br /> to learn with Alexandria School
                    </h1>
                    <p class="mx-auto text-white  mt-20 mb-40">
                        Investasi terbaik di dalam kehidupan manusia adalah melalui jalan pendidikan. Karena Pendidikan
                        adalah kunci untuk membangun manusia demi menciptakan peradaban yang lebih baik. Berdasarkan
                        gagasan itu Alexandria School hadir untuk memenuhi kebutuhan pendidikan
                        di Indonesia. </p>
                </div>
                <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                    <img class="img-fluid" src="img/xheader-img.png.pagespeed.ic.noU_itMUQ2.png" alt="" />
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area">
        <div class="container-fluid">
            <div class="feature-inner row">
                <div class="col-lg-2 col-md-6">
                    <div class="feature-item d-flex">
                        <i class="ti-book"></i>
                        <div class="ml-20">
                            <h4>New Classes</h4>
                            <p>
                                Alexandria School menyiapkan kelas-kelas terbaru di ekstrakulikuler computing seperti
                                design web , coding , berlatih sistem keamanan data dan amsih banyak lagi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="feature-item d-flex">
                        <i class="ti-cup"></i>
                        <div class="ml-20">
                            <h4>Top Courses</h4>
                            <p>
                                Top Courses Alexandria School yakni courses website , dimana siswa akan dilatih
                                bangaimana membangun website yang responsive , terkini dan informative.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="feature-item d-flex border-right-0">
                        <i class="ti-desktop"></i>
                        <div class="ml-20">
                            <h4>Full E-Books</h4>
                            <p>
                                Full E-books juga didapatkan di Alexandria Scool pada website AlexandriaSchool.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="popular-course-area section-gap">
        <div class="container-fluid">
            <div class="row justify-content-center section-title">
                <div class="col-lg-12">
                    <h2>
                        Popular Courses <br /> Available Right Now
                    </h2>
                    <p>
                        Courses yang sedang tersedia dan populer saat ini banyak di minati siswa yakni belajar bagaimana
                        membangun website mulai dari tampilan , coding , dan sistem keamanan data dari website itu
                        sendiri .
                    </p>
                </div>
            </div>
            <div class="owl-carousel popuar-course-carusel">
                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/cour1.png" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">Design Web</p>
                        </div>
                        <a href="courses_designweb.php">
                            <h4>Belajar Design Web Courses untuk membuat website lebih bagus dan menarik</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>


                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/cour2.png" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">Coding</p>
                        </div>
                        <a href="courses_coding.php">
                            <h4>Belajar Coding Courses untuk lebih memahami website yang kita kembangkan.</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">30 Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/cour3.png" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">Keamanan Data</p>
                        </div>
                        <a href="courses_keamanandata.php">
                            <h4>Belajar Keamanan Data untuk website yang kita bangun lebih aman </h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/cour2.png" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">Javascript</p>
                        </div>
                        <a href="courses_javascript.php">
                            <h4>Belajar Javascript untuk menambahkan efek khusus pada halaman web</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="video-area section-gap-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h2 class="text-white">
                            Watch Our Trainers <br> in Live Action
                        </h2>
                        <p>
                            Banyak siswa dari Alexandria School saling berkolaborasi dan bekerjasama dalam membangun
                            suatu projek contohnya membangun suatu proyek sistem informasi.
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-md-6 video-left">
                    <div class="owl-carousel video-carousel">
                        <div class="single-video">
                            <div class="video-part">
                                <img class="img-fluid" src="img/xvideo-img.jpg.pagespeed.ic.deBK2j-q7u.jpg" alt="">
                                <div class="overlay"></div>
                                <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=Gpv_ix4NlQM ">
                                    <img class="play-icon" src="img/xplay-btn.png.pagespeed.ic.xsmohhCLZ_.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-white mb-20 mt-30">What Alexandria Computing Students Think About Alexandria
                                Computing</h4>
                            <p class="text-white mb-20">
                                Ever wondered what the actual Computing students think about Computing? Same. To my
                                fellow incoming Computing Freshies, welcome to the School of Computing, where we make
                                memes about our mental torment and anguish.
                            </p>
                        </div>

                        <div class="single-video">
                            <div class="video-part">
                                <img class="img-fluid" src="img/xvideo-img.jpg.pagespeed.ic.deBK2j-q7u.jpg" alt="">
                                <div class="overlay"></div>
                                <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=Gpv_ix4NlQM">
                                    <img class="play-icon" src="img/xplay-btn.png.pagespeed.ic.xsmohhCLZ_.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-white mb-20 mt-30">What Alexandria Computing Students Think About Alexandria
                                Computing</h4>
                            <p class="text-white mb-20">
                                Ever wondered what the actual Computing students think about Computing? Same. To my
                                fellow incoming Computing Freshies, welcome to the School of Computing, where we make
                                memes about our mental torment and anguish.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="other-feature-area">
        <div class="container">
            <div class="feature-inner row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <h2>
                            Features That <br /> Can Avail By Everyone
                        </h2>
                        <p>
                            Fasilitas yang didapatkan oleh siswa Alexandria Computing School seperti Lifetime Acces,
                            Source File Include , Expert Mentors ,Student Membership , Courses , dan Live Support
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="other-feature-item">
                        <i class="ti-key"></i>
                        <h4>Lifetime Access</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--160">
                    <div class="other-feature-item">
                        <i class="ti-files"></i>
                        <h4>Source File Included</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--260">
                    <div class="other-feature-item">
                        <i class="ti-medall-alt"></i>
                        <h4>Student Membership</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="other-feature-item">
                        <i class="ti-briefcase"></i>
                        <h4>35000+ Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--160">
                    <div class="other-feature-item">
                        <i class="ti-crown"></i>
                        <h4>Expert Mentors</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--260">
                    <div class="other-feature-item">
                        <i class="ti-headphone-alt"></i>
                        <h4>Live Supports</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials-area section-gap">
        <div class="container">
            <div class="testi-slider owl-carousel" data-slider-id="1">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="item">
                            <div class="testi-item">
                                <img src="img/quote.png" alt="" />
                                <div class="mt-40 text">
                                    <p>
                                        As conscious traveling Paup ers we must always be oncerned about our dear Mother
                                        Earth. If you think about it, you travel across her face and She is the host to
                                        your journey.
                                    </p>
                                </div>
                                <h4>Fanny Spencer</h4>
                                <p>Chief Executive, Amazon</p>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6">
                        <img src="img/testimonial/xt1.jpg.pagespeed.ic.7tfgqVta75.jpg" alt="" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="item">
                            <div class="testi-item">
                                <img src="img/quote.png" alt="" />
                                <div class="mt-40 text">
                                    <p>
                                        “We always overestimate the change that will occur in the next two years and
                                        underestimate the change that will occur in the next ten. Don’t let yourself be
                                        lulled into inaction.”
                                    </p>
                                </div>
                                <h4>Bill Gates</h4>
                                <p>Chief Executive, Google</p>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6">
                        <img src="img/testimonial/xt1.jpg.pagespeed.ic.7tfgqVta75.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="registration-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="section-title text-left text-white">
                        <h2 class="text-white">
                            Let's Get <br> Registration
                        </h2>
                        <p>
                            Ayo bergabung dengan Extracurricular Alexandria Computing School , kembangkan bakat dan
                            minat mu di bidang IT .
                        </p>
                    </div>
                </div>
                <?php require 'functions_regist_course.php';

                if (isset($_POST["submit"])) {

                    if (tambah($_POST) > 0) {
                        echo "
                        <script>
                            alert('Registrasi Extracurricular BERHASIL');
                            document.location.href = '/UTS_SKD/dashboard.php';
                        </script>";
                    } else {
                        echo "
                        <script>
                            alert('Registrasi Extracurricular GAGAL');
                            document.location.href = '/UTS_SKD/dashboard.php';
                        </script>";
                    }
                }
                ?>
                <div class="offset-lg-3 col-lg-4 col-md-6">
                    <div class="course-form-section">
                        <h3 class="text-white">Registration for Extracurricular</h3>
                        <p class="text-white">It is high time for learning</p>
                        <form class="course-form-area contact-page-form course-form text-right" id="myForm"
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Name'">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email Address'">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="password" class="form-control" id="passwordd1" name="passwordd1"
                                    placeholder="Password" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="btn btn-success" type="submit" name="submit">Registrasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required type="email">
                            <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">

                    Copyright &copy;
                    <script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                </p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script
        src="js/vendor%2c_bootstrap.min.js%2bjquery.ajaxchimp.min.js%2bjquery.magnific-popup.min.js%2bparallax.min.js.pagespeed.jc.APRAhY84lf.js">
    </script>
    <script>
    eval(mod_pagespeed_ufuz5PjQPA);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script>
    eval(mod_pagespeed_kFmS7MLkTP);
    </script>
    <script>
    eval(mod_pagespeed__vGFzIyk5p);
    </script>
    <script>
    eval(mod_pagespeed_DyNN9nfq2p);
    </script>
    <script
        src="js/owl.carousel.min.js%2bjquery.sticky.js%2bhexagons.min.js%2bjquery.counterup.min.js%2bwaypoints.min.js%2bjquery.nice-select.min.js%2bmain.js.pagespeed.jc.ydTG76tfCV.js">
    </script>
    <script>
    eval(mod_pagespeed_0Go$u25iY_);
    </script>
    <script>
    eval(mod_pagespeed_9_IE1H_8qT);
    </script>
    <script>
    eval(mod_pagespeed_$nN6wRIle4);
    </script>
    <script>
    eval(mod_pagespeed_p4xZoiuSlO);
    </script>
    <script>
    eval(mod_pagespeed_6nrsJ02F_x);
    </script>
    <script>
    eval(mod_pagespeed_3sLiFmyYzI);
    </script>
    <script>
    eval(mod_pagespeed_uT5GBOVP1z);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"69f52c9b7dcf2eb3","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.9.0","si":100}'>
    </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/eclipse/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 23:47:58 GMT -->

</html>