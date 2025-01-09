<?php session_start();
include_once 'admin/include/class.user.php';
$user = new User();
$uid = $_SESSION['uid'];
if (!$user->get_session()) {
    header("location:admin/login.php");
}
if (isset($_GET['q'])) {
    $user->user_logout();
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    
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
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        nav {
            background-color: var(--navy-blue);
        }

        .well {
            background: var(--navy-blue);
            border: none;
            color: var(--gold);
            border-radius: 0.5rem;
            margin: 1rem 0;
            max-width:500px;
            padding:1.5rem;
        }

        .well h4 {
            color: var(--gold);
        }

        ul {
            font-size: 14px;
            list-style-type: none;
            padding-left: 0;
        }

        ul li a {
            color: var(--white);
            text-decoration: none;
        }

        .well ul li a:hover {
            color: var(--light-gray);
            text-decoration: underline;
        }

        .btn-danger {
            background-color: var(--gold);
            color: var(--navy-blue);
            border: none;
            transition: background 0.3s;
        }

        .btn-danger:hover {
            background-color: var(--navy-blue);
            color: var(--gold);
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
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Emerald Valley</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
                    <li class="nav-item   active"><a class="nav-link" href="admin.php">Admin</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right ms-auto">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Room Category</h4>
                <hr>
                <ul>
                    <li><a href="admin/addroom.php">Add Room Category</a></li>
                    <li><a href="show_room_cat.php">Show All Room Category</a></li>
                    <li><a href="show_room_cat.php">Edit Room Category</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li><a href="room.php">Book Now</a></li>
                    <li><a href="show_all_room.php">Show All Booked Rooms</a></li>
                    <li><a href="show_all_room.php">Edit Booked Room</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Add Manager</h4>
                <hr>
                <ul>
                    <li><a href="admin/registration.php">Add Manager</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>