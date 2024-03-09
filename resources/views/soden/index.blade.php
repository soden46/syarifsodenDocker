<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Syarif Siden - Panduan Belajar Pemrograman Untuk Pemula</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Panduan Lengkap Belajar Java, Javascript, Laravel, C++, dasn Web Developer " name="keywords">
    <meta content="Belajar Pemrograman" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../animate/animate.min.css" rel="stylesheet">
    <link href="../owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="https://syarifsoden.xyz/" class="navbar-brand" target="_blank" rel=”dofollow”>
                    <h1 class="text-white fw-bold d-block">Syarif<span class="text-secondary">Soden</span> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="https://www.syarifsoden.xyz/p/pemrograman.html" class="nav-item nav-link active text-secondary" target="_blank" rel=”dofollow”>Pemrograman Dasar</a>
                        <a href="https://www.syarifsoden.xyz/search/label/javascript" class="nav-item nav-link" target="_blank" rel=”dofollow”>Belajar Javascript</a>
                        <a href="https://www.syarifsoden.xyz/search/label/laravel" class="nav-item nav-link" target="_blank" rel=”dofollow”>Belajar Laravel</a>
                        <a href="https://www.syarifsoden.xyz/search/label/java" class="nav-item nav-link" target="_blank" rel=”dofollow”>Belajar Java</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('carousel-1.jpg')}}" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Syarif Soden</h6>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Panduan belajar pemrograman untuk pemula, disertai dengan langkah-langkah dan tips yang berguna untuk memulai perjalanan Anda dalam dunia pemrograman. Temukan panduan lengkap belajar java, javascript, laravel, c++, web developer di sini.</p>
                            <a href="https://www.syarifsoden.xyz/" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft" target="_blank" rel=”dofollow”>Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('carousel-2.jpg')}}" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Syarif Soden</h6>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Panduan belajar pemrograman untuk pemula, disertai dengan langkah-langkah dan tips yang berguna untuk memulai perjalanan Anda dalam dunia pemrograman. Temukan panduan lengkap belajar java, javascript, laravel, c++, web developer di sini.</p>
                            <a href="https://www.syarifsoden.xyz/" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft" target="_blank" rel=”dofollow”>Belajar Pemrograman Dasar Untuk Pemula</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">100</h1>
                        <h5 class="text-white mt-1">Tutorial Pemrograman Dasar</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">100</h1>
                        <h5 class="text-white mt-1">Tutorial Javascript Untuk Pemula</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">100</h1>
                        <h5 class="text-white mt-1">Tutorial Laravel Untuk Pemula</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">100</h1>
                        <h5 class="text-white mt-1">Tutorial Java Untuk Pemula</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Artikel Belajar Pemrograman</h5>
                <h1>Tutorial Pemrograman Dasar</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Laravel</h4>
                                <p class="mb-4">Selamat datang di blog kami yang akan membimbing Anda melalui dasar-dasar pengembangan web menggunakan Laravel! Dengan tutorial-tutorial yang disajikan secara langkah demi langkah, Anda akan mempelajari konsep-konsep dasar Laravel mulai dari instalasi hingga pembuatan aplikasi sederhana. Mari kita jelajahi bersama dan bangun keahlian Anda dalam pengembangan web dengan framework PHP yang powerful ini!</p>
                                <a href="https://www.syarifsoden.xyz/search/label/laravel" class="btn btn-secondary text-white px-5 py-3 rounded-pill" target="_blank" rel=”dofollow”>Belajar Laravel Untuk Pemula</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Javascript</h4>
                                <p class="mb-4">Selamat datang di blog kami yang menghadirkan tutorial dasar JavaScript! Di sini, Anda akan menemukan panduan praktis untuk mempelajari dasar-dasar bahasa pemrograman JavaScript secara menyeluruh. Mulai dari konsep dasar hingga penggunaan variabel, fungsi, loop, dan struktur kontrol lainnya, blog kami akan membantu Anda memahami JavaScript dengan mudah. </p>
                                <a href="https://www.syarifsoden.xyz/search/label/javascript" class="btn btn-secondary text-white px-5 py-3 rounded-pill" target="_blank" rel=”dofollow”>Belajar Javascript Untuk Pemula</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Java</h4>
                                <p class="mb-4">Selamat datang di blog kami yang akan membimbing Anda melalui tutorial dasar Java! Mulai dari konsep dasar bahasa pemrograman Java, struktur dasar program, hingga pemahaman tentang tipe data, loop, percabangan, dan fungsi. Dengan langkah-langkah yang mudah dipahami dan contoh kode yang jelas, Anda akan memperoleh dasar yang kuat untuk memulai perjalanan Anda dalam mempelajari bahasa pemrograman Java. Ayo bergabung dengan kami dan tingkatkan skill pemrograman Anda!</p>
                                <a href="https://www.syarifsoden.xyz/search/label/java" class="btn btn-secondary text-white px-5 py-3 rounded-pill" target="_blank" rel=”dofollow”>Belajar Java Untuk Pemula</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">C++</h4>
                                <p class="mb-4">Selamat datang di blog kami yang akan membantu Anda mempelajari dasar-dasar pemrograman C++ dengan mudah. Dengan panduan langkah demi langkah, Anda akan diajak untuk memahami konsep dasar bahasa pemrograman ini, mulai dari sintaksis dasar hingga struktur kontrol, fungsi, dan penggunaan objek. Mari kita jelajahi bersama-sama dunia pemrograman C++ dan tingkatkan kemampuan pemrograman Anda!</p>
                                <a href="https://www.syarifsoden.xyz/search/label/kode-program-c" class="btn btn-secondary text-white px-5 py-3 rounded-pill" target="_blank" rel=”dofollow”>Belajar C++ Untuk Pemula</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid blog py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Blog</h5>
                    <h1>Latest Blog & News</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">24 March 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Development</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white ">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">23 April 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Mobile App</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white ">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">30 jan 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Blog End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="https://www.syarifsoden.xyz" target="_blank" rel=”dofollow”>
                        <h1 class="text-white fw-bold d-block">Syarif<span class="text-secondary">Soden</span> </h1>
                    </a>
                    <p class="mt-4 text-light">Panduan belajar pemrograman untuk pemula, disertai dengan langkah-langkah dan tips yang berguna untuk memulai perjalanan Anda dalam dunia pemrograman. Temukan panduan lengkap belajar java, javascript, laravel, c++, web developer di sini.</p>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Syarif Soden</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../wow/wow.min.js')}}"></script>
    <script src="../easing/easing.min.js')}}"></script>
    <script src="../waypoints/waypoints.min.js')}}"></script>
    <script src="../owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="../main.js"></script>
</body>

</html>