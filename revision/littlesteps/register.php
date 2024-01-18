<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins:ital,wght@0,300;1,100;1,200;1,400;1,900&family=Urbanist:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <!-- Content Start -->
    <div>
        <p class="fontLoginLeftSideOne">Sign Up</p>
        <p class="fontLoginTwoLeftSideTwo">“Mom`s Guide To Happiness”</p>
        <img src="img/LSteps.png" alt="LittleSteps" class="imageOne">
    </div>
    <div class="wrapper">
        <div class="form">
            <div id="signUp">

                <?php 
                    include("php/config.php");
                    if(isset($_POST['submit'])){
                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        $email = $_POST['email'];
                        $phoneNumber = $_POST['phoneNumber'];
                        $password = $_POST['password'];

                    $verify_query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

                    if(mysqli_num_rows($verify_query) != 0){
                        echo "<div class='message'>
                                <p>The email address is already in use, try a different email address!</p>
                            </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn1'>Go Back</button>";
                    } 
                    else {
                        mysqli_query($con,"INSERT INTO users (firstName,lastName,email,phoneNumber,password) VALUES('$firstName','$lastName','$email','$phoneNumber','$password')") or die("Error Occured");
                        echo "<div class='message'>
                                <p>Registration Success</p>
                            </div> <br>";
                        echo "<a href='index.php'><button class='btn1'>Login Now</button>";
                    }

                    } else {
                    
                ?>

                <h1 class="fontTitle">Sign Up Now</h1>
                <form action="#" method="post">
                    <div class="top-row">
                        <div class="control-form">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" value="" name="firstName" autocomplete="off" required>
                        </div>
                        <div class="control-form">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" value="" name="lastName" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="data">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" value="" name="email" autocomplete="off" required>
                    </div>
                    <div class="data">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" id="phoneNumber" value="" name="phoneNumber" autocomplete="off" required>
                    </div>
                    <div class="data">
                        <label for="password">Password</label>
                        <input type="password" id="password" value="" name="password" autocomplete="off" required>
                        <label>Use 8 or more characters with a mix of letters, numbers & symbols</label>
                    </div>
                    <div class="policy">
                        <input type="checkbox" required>
                        <p>By creating an account, I agree to our <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>
                    </div>
                    <div class="policy">
                        <input type="checkbox" required>
                        <p>By creating an account, I am also consenting to receive SMS messages and emails, including product new feature updates, events, and marketing promotions.</p>
                    </div>
                    <div class="butt">
                        <div class="btn">
                            <button type="submit" name="submit" value="SignUp">Sign Up</button>
                        </div>
                        <div class="links">
                            <p>Already have an ccount? <a href="index.php">Log in</a></p>
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