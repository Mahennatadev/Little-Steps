<?php 
    session_start();
    include("php/config.php");
    if(!isset($_SESSION['valid'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins:ital,wght@0,300;1,100;1,200;1,400;1,900&family=Urbanist:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">LITTLE STEPS</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li>
                        <a href="#" class="nav-link" aria-current="page">NutriWise & Vitalnsight</a>
                    </li>
                    <li>
                        <a href="articles.php" class="nav-link mx-5">ParentPro Tips</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Wise Guard</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link mx-5">Mom's Connect</a>
                    </li>
                </ul>

                <?php 
                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");
                while($result = mysqli_fetch_assoc($query)) {
                    $res_firstName = $result['firstName'];
                    $res_id = $result['Id'];
                }
                
                ?>
                <main>
                    <div class="greetings">
                        <p>Hello <b><?php echo $res_firstName ?></b>, Welcome</p>
                    </div>
                </main>
                <div class="btn">
                    <a href="php/logout.php" style="text-decoration: none;">
                        <button type="button" class="btn btn-success me-3 btn">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
    <!-- Content -->
    <div class="content">
        <div>
            <p class="captionOne">“ MOM’S GUIDE TO<br>HAPPINES “</p>
            <p class="captionTwo">the platform provides accessible<br>mental health information and support<br>to help mothers cope with depression<br>during pregnancy, post-natally, and<br>while caring for children.</p>
        </div>
        <div class="parent">
            <img class="image1" src="img/DashboardFirst.png" alt="mom&child">
            <img class="image2" src="img/DashboardSecond.png" alt="mom&child">
        </div>
    </div>
    <div id="outer">
        <video width="640" height="360" class="video" autoplay>
            <source src="video/littlesteps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <!-- End of Content -->
    <!-- Footer -->
    <div class="container-fluid">
        <footer>
            <div>
                <section class="s1">
                    <div class="row">
                        <div class="col-9">
                            <div class="left">
                                <h6>
                                    LITTLE STEPS
                                </h6>
                                <p class="pt-2">Connect with us</p>
                                <ul class="list-unstyled d-flex flex-row pt-2">
                                    <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="px-5"><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="px-5"><i class="bi bi-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="right">
                                <h5>Header Text</h5>
                                <hr>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M1 0.5L7.15 6.65C7.19783 6.69489 7.23595 6.74911 7.26201 6.80931C7.28807 6.8695 7.30152 6.9344 7.30152 7C7.30152 7.0656 7.28807 7.1305 7.26201 7.19069C7.23595 7.25089 7.19783 7.30511 7.15 7.35L1 13.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>&nbsp;&nbsp;NutriWise</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M1 0.5L7.15 6.65C7.19783 6.69489 7.23595 6.74911 7.26201 6.80931C7.28807 6.8695 7.30152 6.9344 7.30152 7C7.30152 7.0656 7.28807 7.1305 7.26201 7.19069C7.23595 7.25089 7.19783 7.30511 7.15 7.35L1 13.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>&nbsp;&nbsp;Vitalnsight</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M1 0.5L7.15 6.65C7.19783 6.69489 7.23595 6.74911 7.26201 6.80931C7.28807 6.8695 7.30152 6.9344 7.30152 7C7.30152 7.0656 7.28807 7.1305 7.26201 7.19069C7.23595 7.25089 7.19783 7.30511 7.15 7.35L1 13.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>&nbsp;&nbsp;ParentPro Tips</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M1 0.5L7.15 6.65C7.19783 6.69489 7.23595 6.74911 7.26201 6.80931C7.28807 6.8695 7.30152 6.9344 7.30152 7C7.30152 7.0656 7.28807 7.1305 7.26201 7.19069C7.23595 7.25089 7.19783 7.30511 7.15 7.35L1 13.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>&nbsp;&nbsp;Wise Guard</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="s2">
                    <div class="row d-flex">
                        <div class="col-6 leftFooter">
                            <p>LITTLE STEPS</p>
                        </div>
                        <div class="col-4 rightFooter">
                            <h5>© 2024 Beast Team. All Rights Reserved.</h5>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
    </div>
    <!-- End of Footer -->
</body>
</html>