<?php
include_once 'admin/include/class.user.php';
$user = new User();

$roomname = $_GET['roomname'];

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->booknow($checkin, $checkout, $name, $phone, $roomname);
    if ($result) {
        echo "<script type='text/javascript'>
                    alert('" . $result . "');
                </script>";
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    

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

        .container {
            margin-top: 2rem;
        }

        .booking-container {
            background: var(--navy-blue);
            color: var(--white);
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: left;
            margin: 2rem auto;
        }

        h2 {
            color: var(--gold);
        }

        label {
            color: var(--gold);
            font-size: 0.875rem;
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--gold);
            color: var(--navy-blue);
            border: none;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background-color: var(--navy-blue);
            color: var(--gold);
        }

        #click_here a {
            color: var(--gold);
            text-decoration: none;
        }

        #click_here a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="booking-container col-md-6 offset-md-3">
            <h2>Book Now:
                <?php echo $roomname; ?>
            </h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="mb-3">
                    <label for="checkin">Check In:</label>
                    <input type="text" class="form-control datepicker" name="checkin" required>
                </div>
                <div class="mb-3">
                    <label for="checkout">Check Out:</label>
                    <input type="text" class="form-control datepicker" name="checkout" required>
                </div>
                <div class="mb-3">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="0123456789" required>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="submit">Book Now</button>
                <div id="click_here" class="mt-3">
                    <a href="index.php">Back to Home</a>
                </div>
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>