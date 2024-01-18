<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins:ital,wght@0,300;1,100;1,200;1,400;1,900&family=Urbanist:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Content Start -->
    <div>
        <p class="fontLoginLeftSideOne">Log In</p>
        <p class="fontLoginTwoLeftSideTwo">“Mom`s Guide To Happiness”</p>
        <img src="img/LSteps.png" alt="LittleSteps" class="imageOne">
    </div>
    <div class="wrapper">
        <div class="form">
            <div id="signUp">
                <?php 
                    include("php/config.php");
                    if(isset($_POST['submit'])) {
                        $email = mysqli_real_escape_string($con,$_POST['email']);
                        $password = mysqli_real_escape_string($con,$_POST['password']);

                        $result = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'") or die("Error");
                        $row = mysqli_fetch_assoc($result);

                        if(is_array($row) && !empty($row)) {
                            $_SESSION['valid'] = $row['email'];
                            $_SESSION['firstName'] = $row['firstName'];
                            $_SESSION['lastName'] = $row['lastName'];
                            $_SESSION['phoneNumber'] = $row['phoneNumber'];
                            $_SESSION['id'] = $row['Id'];
                        } else {
                            echo "<div class='message'>
                                    <p>Wrong Email or Password</p>
                                </div> <br>";
                            echo "<a href='index.php'><button class='btn1'>Go Back</button>";
                        }
                        if(isset($_SESSION['valid'])) {
                            header("Location: dashboard.php");
                        }
                    } else {
                
                ?>
                <h1 class="fontTitle">Log In Now</h1>
                <form action="#" method="post">
                    <div class="data">
                        <label for="email">Email</label>
                        <input type="text" id="email" value="" name="email" required>
                    </div>
                    <div class="data">
                        <label for="password">Password</label>
                        <input type="password" id="password" value="" name="password" required>
                        <label><a href="#" style="text-decoration: none;">Forgot Password?</a></label>
                    </div>
                    <div class="butt">
                        <div class="btn">
                            <button type="submit" name="submit" value="Login">Log In</button>
                        </div>
                        <div class="links">
                            <p>Don’t have account? <a href="register.php">Sign Up</a></p>
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Content End -->
</body>
</html>