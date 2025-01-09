<?php
include_once 'include/class.user.php'; 
$user=new User(); 
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $register=$user->reg_user($fullname, $uname, $upass, $uemail); 
    if($register) 
    { 
        echo "
<script type='text/javascript'>
    alert('Your Manager has been Added Successfully');
</script>"; 
        echo "
<script type='text/javascript'>
    window.location.href = '../admin.php';
</script>"; 
    } 
    else 
    {
        echo "
<script type='text/javascript'>
    alert('Registration failed! username or email already exists');
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
   
    <link rel="stylesheet" href="css/reg.css" type="text/css">
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

        .btn-primary {
            background-color: var(--gold);
            border: none;
            margin-block:10px;
        }

        .btn-primary:hover {
            background-color: var(--navy-blue);
            color: var(--gold);
        }
        #click_here a{
            color: var(--white);
        }
        
    </style>

    <script language="javascript" type="text/javascript">
        function submitreg() {
            var form = document.reg;
            if (form.fullname.value == "") {
                alert("Enter Full Name.");
                return false;
            } else if (form.uname.value == "") {
                alert("Enter Username.");
                return false;
            } else if (form.upass.value == "") {
                alert("Enter Password.");
                return false;
            } else if (form.uemail.value == "") {
                alert("Enter Email.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container mt-4">
        <div class="well">
            <h2>Add Your Manager</h2>
            <hr>
            <form action="" method="post" name="reg">
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" placeholder="example: John Wiki" required>
                </div>
                <div class="form-group">
                    <label for="uname">User Name:</label>
                    <input type="text" class="form-control" name="uname" placeholder="example: witchbug" required>
                </div>
                <div class="form-group">
                    <label for="uemail">Email:</label>
                    <input type="email" class="form-control" name="uemail" placeholder="example: john@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="upass">Password:</label>
                    <input type="password" class="form-control" name="upass" placeholder="abc123" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary" name="submit" value="Add Manager" onclick="return(submitreg());">Submit</button>

                <br>
                <div id="click_here" class="mt-3">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>

</html>