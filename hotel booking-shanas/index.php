<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        :root {
            --navy-blue: #2C3E50;
            --gold: #F39C12;
            --white: #FFFFFF;
            --light-gray: #ECF0F1;
        }
        body {
            font-family: "Roboto", sans-serif;
            background-color: var(--light-gray);
            color: var(--navy-blue);
        }

        .navbar {
            background-color: var(--navy-blue);
        }

        .navbar-nav li a {
            color: var(--gold);
        }

        .navbar-nav li a:hover{
            background-color: var(--light-gray);
            border-radius: 7px;
            color: var(--navy-blue);
        }
        .navbar-nav .active a{
            color: var(--light-gray);
        }
        .hero-section {
            background-image: url('images/home_bg.jpg'); 
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 5rem 0;
            text-align: center;
        }

        .hero-section h1 {
            font-family: "Lora", serif;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .jumbotron {
            background-color: var(--navy-blue);
            color: var(--white);
            padding: 2rem;
            border-radius: 0.5rem;
        }

        .features-section {
            padding: 2rem 0;
        }

        .feature {
            text-align: center;
            margin: 1.5rem 0;
        }

        .feature h5 {
            color: var(--gold);
            font-weight: bold;
            margin-top: 1rem;
        }

        .testimonials-section {
            background-color: var(--gold);
            color: var(--white);
            padding: 2rem;
            text-align: center;
        }

        footer {
            background-color: var(--navy-blue);
            color: var(--white);
            padding: 2rem 0;
            margin-top: 10px;
        }

        footer a {
            color: var(--gold);
            text-decoration: none;
        }
        .navbar .navbar-brand{
            font-size: 1.5rem;
        }
        
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Emerald Valley</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="http://www.facebook.com"><img src="images/facebook.png" alt="Facebook" class="pro_pic"></a></li>
                    <li class="nav-item"><a class="nav-link" href="http://www.twitter.com"><img src="images/twitter.png" alt="Twitter" class="pro_pic"></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to Emerald Valley </h1>
            <p>Your comfort is our priority. Book your dream vacation today and enjoy an unforgettable experience.</p>
            <a href="reservation.php" class="btn btn-warning text-dark">Book Now</a>
        </div>
    </section>

    <!-- Jumbotron Section -->
    <div class="container my-4">
        <div class="jumbotron text-center">
            <div class="w3-content w3-section">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/9.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/10.jpeg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/7.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/8.jpg" style="width:100%;">
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features-section text-center">
        <div class="container">
            <h2>Why Choose Us</h2>
            <div class="row">
                <div class="col-md-4 feature">
                    <img src="images/luxury.jpg" alt="Luxury" width="150px" class="img-fluid">
                    <h5>Luxury Rooms</h5>
                    <p>Indulge in comfort with our elegantly designed rooms, each equipped with premium amenities.</p>
                </div>
                <div class="col-md-4 feature">
                    <img src="images/dining.jpg" alt="Dining" width="150px" class="img-fluid">
                    <h5>Gourmet Dining</h5>
                    <p>Experience world-class dining with a variety of culinary delights prepared by top chefs.</p>
                </div>
                <div class="col-md-4 feature">
                    <img src="images/spa.jpg" alt="Spa" width="150px" class="img-fluid">
                    <h5>Relaxing Spa</h5>
                    <p>Recharge and rejuvenate at our luxurious spa, offering a range of treatments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2>What Our Guests Say</h2>
            <p>"A wonderful experience! The staff was attentive, and the rooms were top-notch."</p>
            <p>Sarah W., California</p>
        </div>
        
    </section>

    <!-- Footer -->
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-md-4 contact-info">
                <h4>Contact Us</h4>
                <p>Address : Kandy, UpHill</p>
                <p>Email : Luxury.EmeraldValley@gmail.com</p>
            </div>
            <div class="col-md-4 social-icons">
                <a href="http://www.facebook.com"><img src="images/facebook.png" alt="Facebook" class="pro_pic"></a>
                <a href="http://www.twitter.com"><img src="images/twitter.png" alt="Twitter" class="pro_pic"></a>
            </div>
            <div class="col-md-4 developer-info">
                <h4>Developed By</h4>
                <a href="#">M.F.F.Shanas BSc.MIT</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="my_js/slide.js"></script>
    
</body>

</html>