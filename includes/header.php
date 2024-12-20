<?php
// Get the current page name (e.g., index.php, about.php, etc.)
$current_page = basename($_SERVER['PHP_SELF']); 

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'OnicByte';?></title>

    <!-- css links -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- css links end -->

    <!-- Chart.js links -->
    <script src="./assets/js/chart.js"></script>
    <script src="./assets/js/chartjs-plugin-datalabels.js"></script>
    <!-- Chart.js links End -->

</head>

<body class="dashboard-body">

    <!-- header -->
    <nav class="navbar d-none d-md-block fixed-top navbar-dark z-1">
        <div class="container-fluid">
            <div class="w-100 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand fs-2 fw-bold ms-5 me-4 me-lg-5 pe-lg-5" href="#">OnicByte</a>
                    <form class="d-flex ms-lg-5 ms-2" role="search">
                        <input class="form-control me-2 my-2 rounded-3" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                </div>
                <div class="d-flex align-items-center gap-3 gap-lg-5">
                    <ul class="navbar-nav d-flex flex-row gap-3 ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Language</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                    </ul>
                    <div class="icons d-flex align-items-center gap-2 me-2 ms-lg-5">
                        <a href="#"><svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.53149 0.839844C6.77633 0.839844 5.41205 0.839844 4.35002 0.968065C3.27586 1.09885 2.42518 1.36983 1.74645 1.98187C1.04953 2.61101 0.723803 3.42907 0.570028 4.46082C0.423828 5.44556 0.423828 6.69872 0.423828 8.26131V8.41774C0.423828 9.94101 0.423828 10.995 0.575331 11.7806C0.657142 12.2037 0.785919 12.5713 0.988175 12.9115C1.18816 13.2466 1.44268 13.5287 1.74645 13.8022C2.22444 14.2339 2.78803 14.4946 3.45388 14.657V16.8675C3.45397 16.9799 3.48021 17.0902 3.52997 17.1875C3.57973 17.2848 3.65126 17.3656 3.73741 17.4218C3.82356 17.4781 3.92129 17.5078 4.02083 17.5081C4.12037 17.5083 4.21821 17.479 4.30457 17.4232C4.74847 17.1368 5.14162 16.8248 5.50144 16.5308L5.73172 16.3418C5.98795 16.1254 6.24965 15.9173 6.5165 15.7178C7.15584 15.2494 7.7664 14.9442 8.56709 14.9442H8.60269C10.3578 14.9442 11.7221 14.9442 12.7842 14.816C13.8583 14.6852 14.709 14.4142 15.3877 13.8022C15.6907 13.5287 15.946 13.2466 16.1452 12.9115C16.3483 12.5713 16.477 12.2037 16.5588 11.7806C16.7103 10.995 16.7104 9.94101 16.7104 8.41774V8.26131C16.7104 6.69872 16.7103 5.44556 16.5641 4.46168C16.4104 3.42907 16.0846 2.61101 15.3877 1.98187C14.709 1.36897 13.8583 1.09885 12.7842 0.96892C11.7221 0.839844 10.3578 0.839844 8.60269 0.839844H8.53149Z"
                                    fill="white" />
                            </svg></a>
                        <a href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.17646 0.839844C6.48505 0.839844 4.86292 1.40337 3.66691 2.40646C2.47091 3.40954 1.799 4.77002 1.799 6.1886V8.88437C1.79913 9.0029 1.76638 9.11983 1.70334 9.22592L0.139035 11.8491C0.0626208 11.9773 0.0265385 12.1197 0.0342156 12.2628C0.0418926 12.406 0.0930739 12.5451 0.182899 12.667C0.272723 12.7888 0.398208 12.8894 0.547436 12.9592C0.696664 13.029 0.86468 13.0656 1.03552 13.0656H15.3174C15.4882 13.0656 15.6563 13.029 15.8055 12.9592C15.9547 12.8894 16.0802 12.7888 16.17 12.667C16.2599 12.5451 16.311 12.406 16.3187 12.2628C16.3264 12.1197 16.2903 11.9773 16.2139 11.8491L14.6505 9.22592C14.5871 9.1199 14.5541 9.00296 14.5539 8.88437V6.1886C14.5539 4.77002 13.882 3.40954 12.686 2.40646C11.49 1.40337 9.86787 0.839844 8.17646 0.839844ZM8.17646 15.3579C7.61101 15.3581 7.05938 15.2113 6.5976 14.9376C6.13582 14.6639 5.78663 14.2768 5.59815 13.8297H10.7548C10.5663 14.2768 10.2171 14.6639 9.75533 14.9376C9.29355 15.2113 8.74192 15.3581 8.17646 15.3579Z"
                                    fill="white" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- header End -->

    <!-- Sidebar -->
    <nav class="navbar sidebar navbar-expand-md navbar-dark fixed-top z-0">
        <div class="container px-0 h-100">
            <a class="navbar-brand d-md-none" href="#">OnicByte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex flex-md-column h-100 justify-content-between mt-3 mt-md-0"
                id="navbarNav">
                <ul class="navbar-nav sidebar-active d-flex flex-column w-100 align-items-start">
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="index.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/overview tab.svg" alt="img">Overview</a>
                    </li>
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'teachers.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="teachers.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/teacher tab.svg" alt="img">Teachers</a>
                    </li>
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'students.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="students.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/student tab.svg" alt="img">Students</a>
                    </li>
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'employee.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="employee.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/employ tab.svg" alt="img">Employee</a>
                    </li>
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'interns.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="interns.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/employ tab.svg" alt="img">Interns</a>
                    </li>
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'projects.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="projects.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/employ tab.svg" alt="img">Projects</a>
                    </li>
                    <li class="nav-item w-100 ps-5 <?php echo ($current_page == 'courses.php') ? 'active' : ''; ?>">
                        <a class="nav-link " href="courses.php"><img class="pe-2 d-none d-md-inline"
                                src="images/icons/employ tab.svg" alt="img">Courses</a>
                    </li>
                </ul>
                <div class="support d-flex flex-column mb-5">
                    <a class="nav-link d-none d-md-inline" href="#"><img class="pe-2" src="images/icons/help.svg"
                            alt="img">Help</a>
                    <a class="nav-link d-none d-md-inline" href="#"><img class="pe-2" src="images/icons/support.svg"
                            alt="img">Support</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar End -->
