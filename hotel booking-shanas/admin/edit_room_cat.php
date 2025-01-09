<?php
include_once 'include/class.user.php';
$user = new User();

$room_cat = $_GET['roomname'];

$sql = "SELECT * FROM room_category WHERE roomname='$room_cat'";
$query = mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);


if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->edit_room_cat($roomname, $room_qnty, $no_bed, $bedtype, $facility, $price, $room_cat);
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
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
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
            background-color: var(--light-gray);
            font-family: "Roboto", sans-serif;
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



        h2 {
            color: var(--gold);
            font-size: 2.5rem;
        }

        label {
            color: var(--white);
        }

        .btn-primary {
            background-color: var(--gold);
            border: none;
            width: 100px;
        }

        .btn-primary:hover {
            background-color: var(--white);
            color: var(--gold);
        }

        #click_here a {
            color: var(--white);
            font-size: 1.5rem;
        }

        #click_here a:hover {
            color: var(--gold);
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="well">
            <h2>Edit Room Category</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Room Type Name:</label>
                    <input type="text" class="form-control" name="roomname" value="<?php echo htmlspecialchars($row['roomname']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="qty">No of Rooms:</label>
                    <select name="room_qnty" class="form-control">
                        <option value="<?php echo $row['room_qnty']; ?>"><?php echo $row['room_qnty']; ?></option>
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bed">No of Beds:</label>
                    <select name="no_bed" class="form-control">
                        <option value="<?php echo $row['no_bed']; ?>"><?php echo $row['no_bed']; ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bedtype">Bed Type:</label>
                    <select name="bedtype" class="form-control">
                        <option value="<?php echo $row['bedtype']; ?>"><?php echo $row['bedtype']; ?></option>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="facility">Facility:</label>
                    <textarea class="form-control" rows="5" name="facility" required><?php echo htmlspecialchars($row['facility']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price Per Night:</label>
                    <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary" name="submit">Update</button>
                <br><br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>