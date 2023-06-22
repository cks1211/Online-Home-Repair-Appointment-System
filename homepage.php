<?php
include("./handler.php");
$userData = userCheckLogin($_SESSION['userId']);
print_r($userData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://www.apu.edu.my/sites/all/themes/APU/favicon.ico" type="image/vnd.microsoft.icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="homepage.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>APU Home Repair Service</title>
    <script>
        $(document).load(function() {
            alert("<?php echo $Name ?>,Welcome to Admin Login");
        })
    </script>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="picture/logo2.png" alt="company logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#downl-app">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#appointment">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Section 1 -->
    <section id="begin-sec">
        <div class="container-fluid body-content">
            <div class="headers-content">
                <div class="header-main fade-in-out">
                    <h1>Welcome Using APU Home Repair</h1>
                </div>
                <div class="header-icon fade-in-out">
                    <a href="#about-us">
                        <p>Learn More</p>
                        <i class="fa-solid fa-angle-down fa-2x"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!--About Us-->
    <section id="about-us">
        <div class="container-fluid body-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-img-container">
                        <img class="about-us-img" src="picture/Img 4.jpeg" alt="about-us">
                    </div>
                </div>
                <div class="col-lg about-us-content">
                    <h1>About Us</h1>
                    <hr>
                    <p>Welcome to our home repair appointment page. Our purpose is so that the poor and homeless
                        can now have a place to call home where they too can enjoy a better quality of life.
                        <br>Therefore, we designed the website to be user-friendly and easy to navigate, you
                        only
                        need a few clicks to make an appointment, and you can check your appointment time at any
                        time.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-->
    <section id="feature">
        <div class="container-fluid body-content">
            <h1>Feature</h1>
            <hr>
            <div class="wrapper">
                <div class="tab-item">
                    <ul class="feature-list">
                        <div class="row">
                            <div class="col-4 fea-box">
                                <li class="feature-f-content">
                                    <div class="fea-icon">
                                        <i class="fa-solid fa-calendar-days fa-2xl"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="title">Accept Online Booking</h3>
                                        <p>Your own mobile-optimised booking
                                            <span class="hidden-content">website or integration with your existing
                                                site. Also, accept bookings directly via Facebook, Instagram, Google or
                                                your
                                                own branded client app.
                                            </span>
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class="col-4 fea-box">
                                <li class="feature-f-content">
                                    <div class="fea-icon">
                                        <i class="fa-solid fa-comment-sms fa-2xl"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="title">Notifications via SMS/Email</h3>
                                        <p>Reminders to staff and clients whenever
                                            <span class="hidden-content">appointments are booked, cancelled or
                                                rescheduled. With push notifications on your mobile for new booking
                                                information via the admin app.</span>
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class="col-4 fea-box">
                                <li class="feature-f-content">
                                    <div class="fea-icon">
                                        <i class="fa-solid fa-door-open fa-2xl"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="title">door-to-door service</h3>
                                        <p>We will assign the nearest maintenance personnel
                                            <span class="hidden-content">to provide on-site service.
                                                If you are not satisfied with the maintenance personnel, you can also
                                                apply
                                                to the company to assign other maintenance personnel to provide on-site
                                                service.</span>
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class="col-6 fea-box down-box">
                                <li class="feature-f-content">
                                    <div class="fea-icon">
                                        <i class="fa-regular fa-credit-card fa-2xl"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="title">Accept Payments</h3>
                                        <p>Accept online payments & deposits
                                            <span class="hidden-content">through a range of payment processors like
                                                PayPal, Stripe and more or accept cash or card onsite via our POS
                                                system.
                                            </span>
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class="col-6 fea-box down-box">
                                <li class="feature-f-content">
                                    <div class="fea-icon">
                                        <i class="fa-solid fa-user-gear fa-2xl"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="title">Custom Function</h3>
                                        <p>Features like; Coupons & gift cards,
                                            <span class="hidden-content">customisable emails, sale of products,
                                                Membership, classes, Waiting list, Loyalty System, HIPAA, SOAP, Intake
                                                forms, File Uploader, Packages, POS, Deposits, Related resources, Make
                                                me
                                                look busy, Google Reviews, Tickets and more.</span>
                                        </p>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Download App-->
    <section id="download-app">
        <div class="container-fluid">
            <h1>Download App</h1>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="download-img-container">
                        <img class="downloadapp-img" src="picture/downloadapp.png" alt="dowenloadapp">
                    </div>
                </div>
                <div class="col-lg-6 dowenloadapp-content">
                    <h2><b>Step 1</b></h2>
                    <hr>
                    <p>Using Google Play Store/App Store to search APP and download it</p>
                    <h2><b>Step 2</b></h2>
                    <hr>
                    <p>After Downloading, Sign up an account</p>
                    <h2><b>Step 3</b></h2>
                    <hr>
                    <p>Now,You can use app to do appointment</p>
                    <br>
                    <img class="downloadapp-icon" src="picture/downloadapp2.png" alt="dowenloadapp">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team -->
    <section id="our-team">
        <div class="container-fluid body-content">
            <h1 class="team-title">
                Our Team
            </h1>
            <hr>
            <div class="p-5">
                <div class="container-fluid">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <img class="member-img" src="picture/our_team2.png" alt="team-member">
                            <div class="card-content">
                                <div class="card-text">
                                    <h1>Chai Zheng Lam</h1>
                                    <p class="card-text2">TP064194<br>UCDF2107ICT(ITR)<br>He is mainly responsible for
                                        developing some functions of the webpage and assigning work to his teammates.
                                    </p>
                                    <div>
                                        <a><i class="fa-solid fa-envelope fa-2x team-icon"></i></a>
                                        <a><i class="fa-solid fa-phone fa-2x team-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img class="member-img" src="picture/our_team2.png" alt="team-member">
                            <div class="card-content">
                                <div class="card-text">
                                    <h1>Soo Chen Kang</h1>
                                    <p class="card-text2">TP065578<br>UCDF2107ICT<br>He is mainly responsible for
                                        designing and developing web pages, and developing some web page functions
                                    </p>
                                    <div>
                                        <a><i class="fa-solid fa-envelope fa-2x team-icon"></i></a>
                                        <a><i class="fa-solid fa-phone fa-2x team-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img class="member-img" src="picture/our_team2.png" alt="team-member">
                            <div class="card-content">
                                <div class="card-text">
                                    <h1>Woon Wei Liang</h1>
                                    <p class="card-text2">TP065819<br>UCDF2107ICT(ITR)<br>He is mainly responsible for
                                        developing the back-end webpage, which is used to connect data
                                    </p>
                                    <div>
                                        <a><i class="fa-solid fa-envelope fa-2x team-icon"></i></a>
                                        <a><i class="fa-solid fa-phone fa-2x team-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Appointment -->
    <section id="appointment">
        <div class="container-fluid">
            <h1>Appointment</h1>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, labore ullam. Illo omnis
                        reprehenderit aliquam recusandae, at enim blanditiis nam reiciendis, iure aliquid eveniet
                        suscipit cupiditate magni ipsam repellat. Magni consequatur odio voluptas explicabo in. Culpa
                        fugit reiciendis a tempore rem expedita explicabo reprehenderit blanditiis nostrum consequuntur.
                        Magni, nulla maiores?</p>
                </div>
                <div class="col-lg-6 booking-form">
                    <form method="POST" action="./requestHandler.php">
                        <input type="hidden" name="Name" style="display:none;" value="<?php echo $userData['Last Name'] . $userData['First Name']; ?>">
                        <input type="hidden" name="CNum" style="display:none;" value="<?php echo $userData['Contact Number']; ?>">
                        <label for="address">Address:</label>
                        <input id="address" type="text" name="Address" placeholder="Adrress" class="form-control">
                        <label for="date">Date:</label>
                        <input id="date" type="date" name="Date" class="form-control">
                        <label for="time">Time:</label>
                        <input id="time" type="time" name="Time" class="form-control">
                        <input type="submit" value="Book Appointment" class="btn btn-dark" name="book-appo">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Review -->
    <section id="review">
        <div class="container-fluid review-body-content">
            <h1>Review</h1>
            <hr>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div id="our-review">
                            <div class="container-fluid review-content2">
                                <div class="review-container row">
                                    <div class="col-lg-12">
                                        <div class="user-image-container">
                                            <img class="user-image" src="picture/customer5.jpg" alt="customer image">
                                        </div>
                                        <div class="customer-content">
                                            <p>
                                                The website was easy to navigate and allowed me to find a provider that fit
                                                my
                                                needs. Scheduling the appointment was quick and painless. The appointment
                                                itself
                                                was great - the staff was friendly and the office was clean. I will
                                                definitely
                                                be using this website for all of my future Home Repair appointments.
                                                <br>
                                                <cite>Rose, 2010</cite>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="our-review">
                            <div class="container-fluid review-content2">
                                <div class="review-container row">
                                    <div class="col-lg-12"></div>
                                    <div class="user-image-container">
                                        <img class="user-image" src="picture/customer3.png" alt="customer image">
                                    </div>
                                    <div class="customer-content">
                                        <p>
                                            The website was easy to navigate and allowed me to find a provider that fit my
                                            needs. Scheduling the appointment was quick and painless. The appointment itself
                                            was great - the staff was friendly and the office was clean. I will definitely
                                            be using this website for all of my future medical appointments.
                                            <br>
                                            <cite>Jisoo, 2010</cite>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="our-review">
                            <div class="container-fluid review-content2">
                                <div class="review-container row">
                                    <div class="col-lg-12">
                                        <div class="user-image-container">
                                            <img class="user-image" src="picture/customer4.png" alt="customer image">
                                        </div>
                                        <div class="customer-content">
                                            <p>
                                                The website was easy to navigate and allowed me to find a provider that fit
                                                my
                                                needs. Scheduling the appointment was quick and painless. The appointment
                                                itself
                                                was great - the staff was friendly and the office was clean. I will
                                                definitely
                                                be using this website for all of my future medical appointments.
                                                <br>
                                                <cite>Lisa , 2010</cite>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rw-button" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon rw-button" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section>
    <!-- FAQ -->
    <section id="faq">
        <div class="container-fluid body-content">
            <h1>FAQ</h1>
            <hr>
            <div class="accordion accordion-flush faq-content" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            How to make a appoinment?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">After you log in, you can go to the reservation page to make
                            detailed reservations. Then, the company will assign a repairman to come and repair your
                            house</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            When do maintenance personnel usually arrive?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">The maintenance person will try to arrive at your property
                            within
                            the time of your appointment and will not take more than 10 minutes.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Can you help people who want to age in place?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Absolutely! We provide all the maintenance, repairs, and
                            improvements for our customers, many of whom are able to stay in their homes and age in
                            place. Many of our clients use home healthcare and related services. When those services
                            are
                            coupled with ours, these clients can live in their homes for as long as possible and
                            have
                            peace of mind knowing everything is cared for.
                            We have your home covered with our maintenance program, so you don’t need to climb
                            ladders
                            or exert yourself as you work on your home. We take care of all of that for you. It’s
                            time
                            for you to enjoy your home, not worry about it. Let us take it from here, so you can
                            relax.
                            EncompassOne Home Solutions is a member of and accredited by the
                            Age Safe America Council</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseTwo">
                            What are the hardest house repairs to do yourself?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Electrical and plumbing repairs or upgrades are easily the most
                            difficult to perform because the knowledge and skills required are gained from many
                            years of
                            training and experience. Also, there’s always the risk that the electrical and plumbing
                            work
                            you do may not pass safety code requirements. Additionally, plumbing and electric work
                            can
                            get out of hand fast and lead to bigger (and more expensive) problems.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Which home improvement projects are illegal to DIY?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anything that requires a license or a permit. Work performed by
                            a
                            do-it-yourselfer also may not be covered by insurance if there is an accident, flood,
                            injury, or fire.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Can I hire you to build an addition onto my home, finish my basement, or fully remodel
                            my
                            kitchen or bathroom?
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">We have the capabilities to perform any type of home repair or
                            improvement project. From small remodels to room additions, we do it all. Our
                            contractors
                            are the best in the industry and have an outstanding reputation for customer service and
                            performance.
                            <a href="#contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact US -->
    <section id="contact-us">
        <div class="container-fluid body-content">
            <h1>Contact Us</h1>
            <hr>
            <div class="row">
                <div class="map-container col-lg-6">
                    <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=No.1,%20Jalan%20Raja%20Chulan%20Kuala%20Lumpur+(APU%20Home%20Repair)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="contact-container">
                        <p><b>Phone Number:</b></p>
                        <p>012-345678(ChenKang)</p>
                        <p>018-765432(Weiliang)</p>
                        <span><button class="btn btn-dark"><a>Call Now</a></button></span>
                    </div>
                    <div class="contact-container">
                        <p><b>Email:</b></p>
                        <p>chenkang11@gmail.com(ChenKang)</p>
                        <p>weliang11@gmail.com(weiliang)</p>
                        <button class="btn btn-dark">Chat Now</button>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>