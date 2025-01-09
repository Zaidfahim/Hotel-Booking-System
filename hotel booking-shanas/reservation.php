<?php
include_once 'admin/include/class.user.php';
$user = new User();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->check_available($checkin, $checkout);
    if (!($result)) {
        echo $result;
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>

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
        section{
            width: 100%;
            min-height: 100vh;
            margin-top:10vh;
        }
        .well {
            background: var(--navy-blue);
            border: 1px solid var(--navy-blue);
            border-radius: 0.5rem;
            padding: 2rem;
            max-width: 500px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .well h2 {
            color: var(--gold);
        }
        .well label{
            color: var(--white);
        }

        .form-container,
        .room-card {
            background: var(--navy-blue);
            color: var(--white);
            padding: 1rem;
            border-radius: 0.5rem;
            margin: 1rem 0;
        }

        .form-container label {
            color: var(--gold);
            font-size: 0.875rem;
            font-weight: 500;
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="reservation.php">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="http://www.facebook.com"><img
                                src="images/facebook.png" alt="Facebook"></a></li>
                    <li class="nav-item"><a class="nav-link" href="http://www.twitter.com"><img src="images/twitter.png"
                                alt="Twitter"></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Reservation Form -->
    <section>
        
    <div class="container">
        <div class="well">
            <div class=" form-container">
                <form action="" method="post" name="room_category">
                    <div class="mb-3">
                        <label for="checkin">Check In:</label>
                        <input type="text" class="form-control datepicker" name="checkin">
                    </div>
                    <div class="mb-3">
                        <label for="checkout">Check Out:</label>
                        <input type="text" class="form-control datepicker" name="checkout">
                    </div>
                    <button type="submit" class="btn btn-warning text-dark w-100" name="submit">Check
                        Availability</button>
                </form>
            </div>
        </div>

        <?php
        if (isset($_REQUEST['submit']) && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $room_cat = $row['room_cat'];
                $sql = "SELECT * FROM room_category WHERE roomname='$room_cat'";
                $query = mysqli_query($user->db, $sql);
                $row2 = mysqli_fetch_array($query);
                echo "
                    <div class='row' styl='margin-block: 10px;'>
                        <div class='col-md-6 offset-md-3 room-card'>
                            <h4>{$row2['roomname']}</h4>
                            <h6>No of Beds: {$row2['no_bed']} {$row2['bedtype']} bed.</h6>
                            <h6>Available Rooms: {$row2['available']}</h6>
                            <h6>Facilities: {$row2['facility']}</h6>
                            <h6>Price: {$row2['price']} LKR/night.</h6>
                            <a href='./booknow.php?roomname={$row2['roomname']}' class='btn btn-warning text-dark mt-2'>Book Now</a>
                        </div>
                    </div>
                ";
            }
        }
        ?>
    </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>Address: Kandy, UpHill | Email: Luxury.EmeraldValley@gmail.com</p>
        <p>&copy; Developed by <a href="#">M.F.F.Shanas BSc.MIT</a></p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>