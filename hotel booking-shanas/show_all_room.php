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
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Roboto", sans-serif;
        }


        .well {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid var(--navy-blue);
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        h4 {
            color: var(--gold);
        }

        h6 {
            color: var(--navy-blue);
            font-family: monospace;
        }

        .btn-primary {
            background-color: var(--gold);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--navy-blue);
            color: var(--gold);
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
        nav {
            background-color: var(--navy-blue);
        }


        .navbar {
            background-color: var(--navy-blue);
        }

        .navbar-nav li a {
            color: var(--gold) !important;
        }

        a, li, a{
            font-size: 1rem;
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
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

    <div class="container mt-4">      
        <?php
        $sql = "SELECT * FROM rooms WHERE book='true'";
        $result = mysqli_query($user->db, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                        <div class='row mb-3'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>".htmlspecialchars($row['room_cat'])."</h4>
                                <hr>
                                <h6>Checkin: ".htmlspecialchars($row['checkin'])." and Checkout: ".htmlspecialchars($row['checkout'])."</h6>
                                <h6>Name: ".htmlspecialchars($row['name'])."</h6>
                                <h6>Phone: ".htmlspecialchars($row['phone'])."</h6>
                                <h6>Booking Condition: ".htmlspecialchars($row['book'])."</h6>
                            </div>
                            <div class='col-md-2'>
                                <a href='edit_all_room.php?id=".htmlspecialchars($row['room_id'])."'>
                                    <button class='btn btn-primary'>Edit</button>
                                </a>
                            </div>
                        </div>
                    ";
                }
            } else {
                echo "<div class='alert alert-warning'>No Data Exist</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Cannot connect to server: ".$result."</div>";
        }
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
</body>

</html>