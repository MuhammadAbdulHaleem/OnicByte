<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- css links -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- css links end -->

    <script src="https://kit.fontawesome.com/3361b8e662.js" crossorigin="anonymous"></script>

    <!-- Chart.js links -->
    <script src="./assets/js/chart.js"></script>
    <script src="./assets/js/chartjs-plugin-datalabels.js"></script>
    <!-- Chart.js links End -->

</head>

<body class="dashboard-body">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <img class="navbar-brand registration-form-navbar-brand" src="images/OnicByte_logo.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="form-action-links collapse navbar-collapse d-md-flex justify-content-center w-100" id="navbarNav">
                <ul class="navbar-nav gap-md-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="form-action-buttons d-flex flex-md-row flex-column gap-md-3 ">
                    <div class="social-links pt-2 d-none d-md-block">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <a class="btn login rounded-5" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content -->
    <div class="container">
        <!-- header -->
        <div class="form-content-header d-md-flex justify-content-start mt-3 row">
            <div class="col-md-6 mx-auto">
                <h2 class=" text-brand text-center mb-2 mt-3" id="registration-form-main-heading">Registration For Students!</h2>
            </div>
        </div>

        <p class="text-brand text-center fw-bold">to be a part of the OnicByte...</p>
        <h3 class="text-brand text-center mb-0">Fill the Information Carefully</h3>
        <!-- header End -->

        <div class="form row p-5 pt-3 mx-auto">
            <h5 class="text-brand" id="personal_info_form">Personal Information</h5>
            <div class="form-group col-md-5 col-12 ms-auto pt-2">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group col-md-5 col-12 me-auto pt-2">
                <label class="form-label" for="fname">Father Name</label>
                <input class="form-control" type="text" id="fname" placeholder="Enter your father name">
            </div>
            <div class="form-group col-md-5 col-12 ms-auto pt-2">
                <label class="form-label" for="phone">Phone</label>
                <input class="form-control" type="number" id="phone" placeholder="Enter your Phone No">
            </div>
            <div class="form-group col-md-5 col-12 me-auto pt-2">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" placeholder="Enter your Email">
            </div>
            <div class="form-group col-md-5 col-12 ms-auto pt-2">
                <label class="form-label" for="education">Education</label>
                <input class="form-control" type="text" id="education" placeholder="Enter your Education">
            </div>
            <div class="form-group col-md-5 col-12 me-auto pt-2">
                <label class="form-label" for="institute">Institute</label>
                <input class="form-control" type="text" id="institute" placeholder="Enter your Institute">
            </div>
            <div class="form-group col-md-10 col-12 mx-auto pt-2">
                <label class="form-label" for="address">Address</label>
                <input class="form-control" type="text" id="address" placeholder="Enter your Address">
            </div>
            <div class="form-group col-md-5 col-12 ms-auto pt-2">
                <label class="form-label" for="role">Select Role</label>
                <select class="form-select" name="role" id="role">
                    <option value="placeholder" selected disabled>Select your role</option>
                    <option value="student">Student</option>
                    <option value="internee">Internee</option>
                </select>
            </div>
            <div class="form-group col-md-5 col-12 me-auto pt-2">
                <label class="form-label" for="picture">Profile Picture</label>
                <input class="form-control" type="file" id="picture">
            </div>
            <div class="form-group col-md-5 col-12 ms-auto pt-2">
                <label class="form-label" for="start-date">Start Date</label>
                <input class="form-control" type="date" id="start-date" placeholder="Start Date">
            </div>
            <div class="form-group col-md-5 col-12 me-auto pt-2">
                <label class="form-label" for="course">Select Course</label>
                <select class="form-select" name="course" id="course">
                    <option value="placeholder" selected disabled>Select your Course</option>
                    <option value="1">Web Devilopment with PHP</option>
                    <option value="2">Frontend Development</option>
                    <option value="3">Graphics Designing</option>
                    <option value="4">SEO</option>
                </select>
            </div>
            <div class="submit-button text-center pt-4">
                <button class="btn btn-primary px-4 text-center" type="submit">Submit</button>
            </div>
        </div>


    </div>
    <!-- Coontent -->

    <!-- js links -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>