<?php session_start();
include_once 'include/class.user.php';
$user = new User(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            
            background-image: url('../../images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: var(--light-gray);
            font-family: "Roboto", sans-serif;
        }

        .well {
            margin-top: 10vh;
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
        
        #wrong_id {
            color: red;
            font-size: 12px;
        }
    </style>

    <script language="javascript" type="text/javascript">
        function submitlogin() {
            var form = document.login;
            if (form.emailusername.value == "") {
                alert("Enter email or username.");
                return false;
            } else if (form.password.value == "") {
                alert("Enter Password.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="well  ">
            <h2>Log In</h2>
            <hr>
            <form action="" method="post" name="login" onsubmit="return submitlogin();">
                <div class="form-group">
                    <label for="emailusername">Username or Email:</label>
                    <input type="text" name="emailusername" class="form-control" placeholder="Enter your username or email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                
                <!-- For showing error for wrong input -->
                <p id="wrong_id"></p>

                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

                <br>
                <p style="text-align: center; font-size: 14px;"><a href="../index.php">Back To Home</a></p>

                <?php
                if (isset($_REQUEST['submit'])) {
                    extract($_REQUEST);
                    $login = $user->check_login($emailusername, $password);
                    if ($login) {
                        echo "<script>location='../admin.php'</script>";
                    } else { ?>
                                        <script type="text/javascript">
                                            document.getElementById("wrong_id").innerHTML = "Wrong username or password";
                                        </script>
                            <?php
                    }
                } ?>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    

</body>

</html>