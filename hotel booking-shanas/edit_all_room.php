<?php
include_once 'admin/include/class.user.php';
$user = new User();

$id = $_GET['id'];

$sql = "SELECT * FROM rooms WHERE room_id='$id'";
$query = mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);


if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->edit_all_room($checkin, $checkout, $name, $phone, $id);
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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        :root {
            --navy-blue: #2C3E50;
            --gold: #F39C12;
            --white: #FFFFFF;
            --light-gray: #ECF0F1;
        }

        body {
            background-color: var(--light-gray);
            font-family: "Roboto", sans-serif;
        }

        .well {
            background: var(--navy-blue);
            border: 1px solid var(--navy-blue);
            border-radius: 0.5rem;
            padding: 2rem;
        }

        .well h2 {
            color: var(--gold);
        }
         label{
            color: var(--white);
            margin-top: 10px;
         }

        .btn-primary {
            background-color: var(--gold);
            border: none;
            margin-block: 10px;
        }

        .btn-primary:hover {
            background-color: var(--navy-blue);
            color: var(--gold);
        }
        #click_here a{
            text-decoration: none;
            color: var(--white);
        }
        #click_here:hover a{
            text-decoration: underline;
            
        }
    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
</head>

<body>
    <div class="container mt-4">
        <div class="well">
            <h2>Edit Booking for <?php echo htmlspecialchars($row['room_cat']); ?></h2>
            <hr>
            <form action="" method="post" name="edit_booking">
                <div class="form-group">
                    <label for="checkin">Check In:</label>
                    <input type="text" class="form-control datepicker" name="checkin" value="<?php echo htmlspecialchars($row['checkin']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="checkout">Check Out:</label>
                    <input type="text" class="form-control datepicker" name="checkout" value="<?php echo htmlspecialchars($row['checkout']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Full Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary" name="submit">Update</button>
                <br>
                <div id="click_here" class="mt-3">
                    <a href="admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>