<?php
include "dbConnection.php";
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BSWO</title>
</head>

<body class="home">
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-lg-5 ps-lg-5 pb-lg-0" href="home.html">
                    <img src="images/logo1.png" style="width: 240px; height:135px" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="min-width: 1000px;">
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#"
                                style="text-decoration: none; display: inline-flex; margin-top: 0.2rem; margin-left: 1rem;">Banaful
                                Family</a>
                            <a class="nav-link dropdown-toggle ps-0" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="display: inline-flex;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="executive_committee.html">Executive Committee</a></li>
                                <li><a class="dropdown-item" href="general_committee.html"
                                        style="color: #990000;">General Committee</a></li>
                                <li><a class="dropdown-item" href="staff.html">Officers and
                                        staff</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="activities.html"
                                style="text-decoration: none; display: inline-flex; margin-top: 0.2rem; margin-left: 1rem;">Activities</a>
                            <a class="nav-link dropdown-toggle ps-0" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="display: inline-flex;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="microfinance.html">Microfinance</a></li>
                                <li><a class="dropdown-item" href="others.html">Others</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="download.html">Download</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="notice.html">Notice</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        <li class="nav-item">
                            <button class="btn" type="submit"
                                style="background-color:#990000; color:white; font-weight:bold; padding: .2rem 1rem;">Bangla</button>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto me-lg-5 pe-lg-5" style="font-size: 30px;">
                        <li class="nav-item px-2">
                            <a href="https://www.behance.net/fahmid07" style="color:#3b5998;"> <i
                                    class="fa fa-facebook-square"></i> </a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="https://www.instagram.com/fahmid_orpon/" style="color:	#1DA1F2;"> <i
                                    class="fab fa-twitter"></i> </a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="https://www.facebook.com/fahmidorpon07/" style="color:#0077b5;"> <i
                                    class="fab fa-linkedin-in"></i> </a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="https://www.facebook.com/fahmidorpon07/" style="color:	#FF0000;"> <i
                                    class="fab fa-youtube"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row justify-content-center text-center">
            <h2 class="mb-3 font-weight-bold">General Committee</h2>
            <hr allign="center"
                style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
        </div>
    </div>

    <div class="container">
        <div class="row m-2">

            <?php
                $query = "SELECT * FROM `general_committee` ORDER BY `general_committee`.`GC_CODE` ASC";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
            ?>

            <div class="col-lg-6 mb-4">
                <div class="container p-4 text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                    15px;">
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img src="images/general/<?php echo $row['GC_IMAGE']?>" alt="image" class="mb-4" style="width: 200px; height: 200px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                            15px;">
                        </div>
                        <div class="col-lg-8 text-start ps-5">
                            <h5 style="font-weight: bold;"><?php echo $row['GC_IMAGE']?></h5>
                            <h6 style="color: #7A7A87; font-weight: 600;"><?php echo $row['GC_POST']?></h6>
                            <hr allign="center"
                                style="height:3px; width:15%; background-color:#990000; margin-top: 4px; margin-bottom:20px;">
                            <p style="color: #0da026; font-weight: bold;">Occupation&nbsp;&nbsp;&nbsp;<span
                                    style="color: #7A7A87; font-weight: 600;"><?php echo $row['GC_OCCUP']?></span></p>
                            <p style="color: #0da026; font-weight: bold;">Educational
                                Qualification&nbsp;&nbsp;&nbsp;<span style="color: #7A7A87; font-weight: 600;"><?php echo $row['GC_EDU']?></span></p>
                            <p style="color: #0da026; font-weight: bold;">Address&nbsp;&nbsp;&nbsp;<span
                                    style="color: #7A7A87; font-weight: 600;"><?php echo $row['GC_ADDRESS']?></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>

    <footer class="text-white py-3 mt-5" style="background-color: #9C344A;">

        <div class="container-fluid me-lg-5 px-lg-5">

            <div class="row px-lg-5">

                <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mt-3" style="padding: 0rem 4rem;">
                    <h5 class="text-uppercase mb-3 font-weight-bold">ABOUT US</h5>
                    <p>Banaful Social Welfare Organization (BSWO) was established in 1986. This NGO is a non-profit,
                        non-political and non-partisan and women-led organization. It has a large healthcare
                        program. It
                        started a microfinance program in Chittagong City Corporation in 1997 and now serves about
                        13,000 members.</p>
                    <br>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Click to learn more >></a>
                    </p>

                </div>

                <div class="col-md-5 col-lg-5 col-xl-3 mx-auto mt-3" style="padding: 0rem 4rem;">
                    <h5 class="text-uppercase mb-3 font-weight-bold">Communication</h5>
                    <p>
                    <h6 class="text-white">Address:</h6>
                    <i class="fas fa-home mr-3"></i> 1st Floor, RFH Hosneara, Mohammadpur Chittagong - 4212,
                    Bangladesh
                    </p>
                    <p>
                    <h6 class="text-white">Phone:</h6>
                    <i class="fas fa-phone mr-3"></i> +6023344452622
                    </p>
                    <p>
                    <h6 class="text-white">Email:</h6>
                    <i class="fas fa-envelope mr-3"></i> info@bswo.org.bd
                    </p>
                    <p>
                    <h6 class="text-white">Social Media:</h6>

                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                    class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                    </ul>

                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mt-3" style="padding: 0rem 4rem;">
                    <h5 class="text-uppercase mb-3 font-weight-bold">Menu</h5>
                    <p>
                        <a href="home.html" class="text-white" style="text-decoration: none;"> First Page</a>
                        <br>
                        <a href="about.html" class="text-white" style="text-decoration: none;"> About Us</a>
                        <br>
                        <a href="#" class="text-white" style="text-decoration: none;"> Banaful Family</a>
                        <br>
                        <a href="#" class="text-white" style="text-decoration: none;"> Executive Council</a>
                        <br>
                        <a href="#" class="text-white" style="text-decoration: none;"> General Assembly</a>
                        <br>
                        <a href="activities.html" class="text-white" style="text-decoration: none;"> Activities</a>
                        <br>
                        <a href="microfinance.html" class="text-white" style="text-decoration: none;">
                            Microfinance</a>
                        <br>
                        <a href="#" class="text-white" style="text-decoration: none;"> Gallery</a>
                        <br>
                        <a href="#" class="text-white" style="text-decoration: none;"> Download</a>
                        <br>
                        <a href="#" class="text-white" style="text-decoration: none;"> Notice</a>
                        <br>
                        <a href="contact.html" class="text-white" style="text-decoration: none;"> Contact</a>
                    </p>
                </div>

            </div>

            <hr class="mb-4">

            <div class="row px-lg-5">

                <div class="col-md-7 col-lg-8 ps-lg-5">
                    <p> ©2022 Banaful Social Welfare Organization. All Rights Reserved
                    </p>

                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>