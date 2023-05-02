<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CSS stylesheet -->
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* Navbar */

        .navbar {
            background-color: #050a12;
            width: 100%;
            z-index: 10;
        }

        .logo {
            width: 60px;
        }


        /* Landing Page */

        .landing-page {
            background: url(./imgs/home.avif);
            background-size: cover;
            color: white;

        }

        .landing-page>div {
            padding-top: 8%;
        }

        .landing-page form {
            background-color: #43679f;
        }


        /* Product features */

        .main-title::after {
            content: '';
            width: 120px;
            height: 2px;
            background-color: #43679f;
            position: absolute;
            bottom: -20px;
            transform: translateX(-50%);
            left: 50%;
        }

        .icon-holder {
            padding-top: 200px;
        }

        .icon-holder i {
            transform: translateX(-50%);
        }

        .icon-holder .number {
            color: #eff7fa;
        }

        .icon-holder .icon {
            color: #43679f;
        }


        /* pricing table */

        .pricing-table {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            margin: 50px 0;
        }

        .pricing-plan {
            flex-basis: 300px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }


        /* slider */

        .slider .carousel-indicators {
            bottom: -50px;
        }

        .slider .carousel .card {
            border: none;
            margin-bottom: 10px;
        }

        .slider .carousel .card .play-icon {
            color: white;
            cursor: pointer;
        }

        .slider .carousel .card img {
            height: 200px;
        }

        .slider .carousel .card-body {
            background-color: black;
        }

        .slider .carousel .card-body p {
            color: white;
        }



        /* testimonials */
        .custom-image {
            height: 250px;
            width: 90%;
        }

        .testimonials .card {
            height: 420px;
        }


        /* footer */
        footer {
            background-color: black;
        }

        footer a {
            right: 3%;
            top: 30px;
        }



        @media (max-width: 575px) {
            .landing-page {
                height: calc(50vh);
            }

            .page-text {
                width: 285px;
                text-align: center;
            }

            .page-text h1,
            .page-text p {
                width: 285px;
            }
        }

        @media (min-width: 576px) {
            .landing-page {
                height: calc(60vh);
            }

            .page-text {
                width: 285px;
            }

            .page-text h1,
            .page-text p {
                width: 250px;
            }

        }


        @media (min-width: 768px) {
            .landing-page {
                height: calc(90vh);
            }

            .page-text {
                width: 400px;
            }

            .page-text h1 {
                width: 400px;
            }

            .page-text p {
                width: 352px;
            }

            .news-input {
                width: 50%;
            }

        }



        @media (min-width: 992px) {

            .slider .carousel .card {
                transition: all 0.3s ease-in-out;
                z-index: 1;

            }

            .slider .carousel .card:hover {
                transform: scale(1.1);
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                z-index: 2;

            }

            .slider .carousel-item.active .card:first-of-type:hover {
                margin-left: 4%;
            }

        }

        @media (min-width: 1200px) {
            .landing-page {
                height: calc(100vh);
            }


        }
    </style>
    <title>FrontEnd Assignment</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('imgs/logo.png') }}" alt="">AquaSphere</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#landing-page">Home</a>
                    <a class="nav-link" href="#features">Features</a>
                    <a class="nav-link" href="#documentaries">Documentaries</a>
                    <a class="nav-link" href="#pricing">Subscribe</a>
                    <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Landing page -->
    <section id="landing-page" class="landing-page">
        <div class="d-flex justify-content-evenly align-items-center">
            <div class="col-sm-6 text-sm-center text-md-start ps-sm-3 pe-sm-3 mt-sm-5 mt-md-0 page-text">
                <h1 class="mb-3">This will be the main headline you can edit</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In maiores cumque tenetur deserunt!
                    Reiciendis distinctio quisquam, cum autem sunt consequuntur.</p>
            </div>


            <form class="rounded-3 p-5 d-none d-md-block">
                <h3 class="text-center mb-3">Contact Us</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                    <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="btn btn-warning w-100 mt-4">Submit</button>
            </form>
        </div>

    </section>

    <!-- Newsletter -->
    <section class="bg-dark text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Your Email">
                    <button class="btn btn-primary btn-lg" type="button">Button</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Product feature -->
    <section id="features" class="features text-center pt-5 pb-5">
        <div class="container">
            <div class="main-title mb-5 position-relative">
                <h2>AVAILABLE ON ALL DEVICES</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div>
                        <div class="icon-holder position-relative">
                            <i class="fa-solid fa-10x fa-1 position-absolute bottom-0 number"></i>
                            <i class="fa-solid fa-4x fa-computer position-absolute bottom-0 icon"></i>
                            <!-- <i class="fa-regular fa-4x fa-image position-absolute bottom-0 icon"></i> -->
                        </div>
                        <h4 class="mt-3 mb-3 text-uppercase text-warning">Computers</h4>
                        <p class="text-black-50 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquam aliquid nesciunt eum est ab
                            ullam?
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div>
                        <div class="icon-holder position-relative">
                            <i class="fa-solid fa-10x fa-2 position-absolute bottom-0 number"></i>
                            <i class="fa-solid fa-4x fa-tv position-absolute bottom-0 icon"></i>
                        </div>
                        <h4 class="mt-3 mb-3 text-uppercase text-warning">Smart TVs</h4>
                        <p class="text-black-50 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquam aliquid nesciunt eum est ab
                            ullam?
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div>
                        <div class="icon-holder position-relative">
                            <i class="fa-solid fa-10x fa-3 position-absolute bottom-0 number"></i>
                            <i class="fa-solid fa-4x fa-mobile-screen-button position-absolute bottom-0 icon"></i>
                        </div>
                        <h4 class="mt-3 mb-3 text-uppercase text-warning">Smart Phones</h4>
                        <p class="text-black-50 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquam aliquid nesciunt eum est ab
                            ullam?
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Slider -->
    <section id="documentaries" class="slider bg-dark text-light p-5">
        <div class="main-title mt-3 mb-5 position-relative text-center">
            <h2>OUR LATEST DOCUMENTARIES</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide container">
            <div class="carousel-indicators position-absolute top-5">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/R.01804b239c83dfdefa519495a227a0c4?rik=pxCwJqPQuskf5Q&riu=http%3a%2f%2fk46.kn3.net%2f6%2f3%2fC%2f8%2f8%2f0%2f869.jpg&ehk=vsG3hrV1p1%2fSLvAHsL7YypPfb9uN8aSs8OMyZPqlUDs%3d&risl=&pid=ImgRaw&r=0"
                                    class="d-block w-100 card-img-top position-relative" alt="...">
                                <div class="card-body p-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <p class="d-inline">9.1</p>
                                    </div>
                                    <p class="card-text mb-0">Video description goes here</p>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play fa-2x play-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/R.2234a41ca390db7bf7de385266812e1b?rik=6%2bR4rhzRaho%2bUA&riu=http%3a%2f%2fimages2.fanpop.com%2fimage%2fphotos%2f14300000%2fBeautiful-Wallpaper-random-14312356-2560-1600.jpg&ehk=5m%2ffM32BaViYe8wCwbWZEry%2b%2fKQxZl2rha0ON8RfiCc%3d&risl=&pid=ImgRaw&r=0"
                                    class="d-block w-100 card-img-top position-relative" alt="...">
                                <div class="card-body p-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <p class="d-inline">9.1</p>
                                    </div>
                                    <p class="card-text mb-0">Video description goes here</p>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play fa-2x play-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/R.4c5f09288d4bdff3a1dd9357856700e1?rik=M3kDqtMcjDVSnQ&riu=http%3a%2f%2fk33.kn3.net%2f1%2f4%2fB%2f8%2f5%2f4%2fDD7.jpg&ehk=wSGwHf6byC1Zq7utdeyULOVLIDSosHfBoup8yXw%2fo58%3d&risl=&pid=ImgRaw&r=0"
                                    class="d-block w-100 card-img-top position-relative" alt="...">
                                <div class="card-body p-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <p class="d-inline">9.1</p>
                                    </div>
                                    <p class="card-text mb-0">Video description goes here</p>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play fa-2x play-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row d-flex">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/R.26710428c39a4534968a5b842d1c9872?rik=VaNgOCw0qHYMpQ&riu=http%3a%2f%2fi.imgur.com%2f8MxkWRq.jpg&ehk=eZr6SBdTBQJp2yoS6GRUUbUqUUsdo3DJybI4SgKrA2I%3d&risl=&pid=ImgRaw&r=0"
                                    class="d-block w-100 card-img-top position-relative" alt="...">
                                <div class="card-body p-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <p class="d-inline">9.1</p>
                                    </div>
                                    <p class="card-text mb-0">Video description goes here</p>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play fa-2x play-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/R.4c5f09288d4bdff3a1dd9357856700e1?rik=M3kDqtMcjDVSnQ&riu=http%3a%2f%2fk33.kn3.net%2f1%2f4%2fB%2f8%2f5%2f4%2fDD7.jpg&ehk=wSGwHf6byC1Zq7utdeyULOVLIDSosHfBoup8yXw%2fo58%3d&risl=&pid=ImgRaw&r=0"
                                    class="d-block w-100 card-img-top position-relative" alt="...">
                                <div class="card-body p-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <p class="d-inline">9.1</p>
                                    </div>
                                    <p class="card-text mb-0">Video description goes here</p>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play fa-2x play-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/R.2234a41ca390db7bf7de385266812e1b?rik=6%2bR4rhzRaho%2bUA&riu=http%3a%2f%2fimages2.fanpop.com%2fimage%2fphotos%2f14300000%2fBeautiful-Wallpaper-random-14312356-2560-1600.jpg&ehk=5m%2ffM32BaViYe8wCwbWZEry%2b%2fKQxZl2rha0ON8RfiCc%3d&risl=&pid=ImgRaw&r=0"
                                    class="d-block w-100 card-img-top position-relative" alt="...">
                                <div class="card-body p-3">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <p class="d-inline">9.1</p>
                                    </div>
                                    <p class="card-text mb-0">Video description goes here</p>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play fa-2x play-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev d-none d-lg-flex" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-lg-flex" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Subscription -->
    <section id="pricing" class="pt-5 pb-5">
        <div class="container">
            <div class="main-title mb-5 position-relative text-center">
                <h2>CHOOSE YOUR PLAN</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Basic</h5>
                            <h6 class="card-price text-center">$19.99<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited
                                    Private Projects</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated
                                    Phone Support</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free
                                    Subdomain</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly
                                    Status Reports</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                            <h6 class="card-price text-center">$39.99<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly
                                    Status Reports</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Ultra</h5>
                            <h6 class="card-price text-center">$59.99<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>10 Users</strong>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-check"></i></span>Monthly
                                    Status Reports</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>

    </section>


    <!-- Testimonials -->
    <section class="p-5 bg-dark text-light testimonials">
        <div class="main-title mb-5 position-relative text-center">
            <h2>TESTIMONIALS</h2>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic2.jpeg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic3.jpeg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic4.jpeg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic5.jpg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic5.jpg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic4.jpeg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic3.jpeg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('imgs/pic2.jpeg') }}" alt=""
                                            class="mb-3 img-fluid custom-image rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white text-center p-4 position-relative">
        <div class="container d-flex align-items-center justify-content-center">
            <p class="lead pe-5">Copyright &copy; 2023 AquaSphere</p>
            <a href="#" class="position-absolute">
                <i class="fa-solid fa-2x fa-circle-arrow-up"></i>
            </a>
        </div>
    </footer>





    <!-- Bootstrap JS -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Fontawesome JS -->
    <script src="https://kit.fontawesome.com/5a65d644f0.js" crossorigin="anonymous"></script>
    <!-- main JS file -->
    <script>
    // testimonial card
    const cardBodies = document.querySelectorAll(".testimonials .card-body");

    // fetch the name of the users from a dummy API
    fetch("https://dummyjson.com/users")
        .then((response) => response.json())
        .then((data) => {
            displayName(data.users)
        })
        .catch(err => console.log(err));


    // fetch their comments
    fetch("https://dummyjson.com/comments")
        .then((response) => response.json())
        .then(data => {
            displayComments(data.comments)
        })
        .catch(err => console.log(err));


    // the function that is responsible for inserting each name inside the testimonial card
    const displayName = (arr) => {

        cardBodies.forEach((cardBody) => {
            // creating an h3 element for storing the name
            const cardName = document.createElement("h3");
            // adding some classes to this h3 tag
            cardName.classList.add("card-title", "mb-3", "user-name");
            // selecting the card image
            const imgElement = cardBody.querySelector("img");
            // adding the h3 tag just after the image
            cardBody.insertBefore(cardName, imgElement.nextSibling);
        });

        const testimonialCardName = document.querySelectorAll(".testimonials .card-body .user-name");

        for (let i = 0; i < cardBodies.length; i++) {
            testimonialCardName[i].innerText = arr[i].firstName + " " + arr[i].lastName;
        }

    }

    // the function that is responsible for inserting each comment inside the testimonial card
    const displayComments = (arr) => {

        cardBodies.forEach((cardBody) => {
            const cardComment = document.createElement("p");

            cardComment.classList.add("card-text");

            const nameElement = cardBody.querySelector("h3");

            cardBody.insertBefore(cardComment, nameElement.nextSibling);
        })

        const testimonialCardComment = document.querySelectorAll(".testimonials .card-body .card-text");

        for (let i = 0; i < cardBodies.length; i++) {
            testimonialCardComment[i].innerText = arr[i].body;
        }

    }


    // form validation 

    const form = document.querySelector('form');

    // add an event listener for the form submit event
    form.addEventListener('submit', (event) => {
        // prevent the default form submission behavior
        event.preventDefault();

        const formData = new FormData(event.target);


        fetch('/contact', {
                method: 'POST',
                body: formData
            })
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Failed to submit form');
                }
                return response.json();
            })
            .then((data) => {
                if (data.success) {
                    alert('Form submitted successfully');
                } else {
                    alert('Form submission failed');
                    console.error("Form submission failed");
                }
            })
            .catch((error) => {
                console.error(error);
            });
    });
    </script>
</body>

</html>