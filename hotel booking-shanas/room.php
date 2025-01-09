<?php
include_once 'admin/include/class.user.php'; 
$user=new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Hotel Booking</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap');

        :root {
            --navy-blue: #2C3E50;
            --gold: #F39C12;
            --white: #FFFFFF;
            --light-gray: #ECF0F1;
        }
        body {
            font-family: "Roboto", sans-serif;
            background-color: var(--light-gray);
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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

        .container {
            margin-top: 2rem;
            
        }

        .room-card {
            background: var(--navy-blue);
            padding: 1rem;
            border-radius: 0.5rem;
            margin: 1rem 0;
        }

        .room-card h4, .room-card h6 {
            color: var(--white);
        }

        footer {
            background-color: var(--navy-blue);
            color: var(--white);
            padding: 2rem 0;
            text-align: center;
        }

        footer a {
            color: var(--gold);
            text-decoration: none;
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="room.php">Rooms</a></li>
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

    <!-- Room Categories -->
    <div class="container">
        <?php
        $sql = "SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "
                    <div class='row'>
                        <div class='col-md-6 offset-md-2 room-card'>
                            <h4>{$row['roomname']}</h4>
                            <h6>No of Beds: {$row['no_bed']} {$row['bedtype']} bed.</h6>
                            <h6>Facilities: {$row['facility']}</h6>
                            <h6>Price: {$row['price']} LKR/night.</h6>
                            <a href='./booknow.php?roomname={$row['roomname']}' class='btn btn-warning text-dark mt-2'>Book Now</a>
                        </div>
                    </div>
                ";
            }
        } else {
            echo "<div class='alert alert-warning text-center'>No rooms available at the moment. Please check back later.</div>";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>Address: Kandy, UpHill | Email: Luxury.EmeraldValley@gmail.com</p>
        <p>&copy; Developed by <a href="#">M.F.F.Shanas BSc.MIT</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>