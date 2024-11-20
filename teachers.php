<?php
$page_title = "Teachers - OnciByte";
include_once 'includes/header.php';
?>

    <!-- Main Content -->
    <main>
        <div class="container pb-5">
            <h3 class="text-brand mt-3 ms-2">Teachers List</h3>
            <!-- status Cards -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 gap-2 g-4 status-cards mt-2 mx-auto">
                <!-- Card 1 -->
                <div class="col flex-fill card-border rounded-3">
                    <div class="row my-2">
                        <div class="col-6">
                            <img class="card-border p-1 rounded-3" src="images/icons/briefcase.svg" alt="briefcase">
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <p class="small-text"><span class="text-success small-text">10%</span> vs last</p>
                        </div>
                    </div>
                    <p class="text-brand mb-0">Total Teachers</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-brand fw-bold fs-2 pt-2">150</p>
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <img class="ms-4 img-fluid me-2" src="images/icons/chart.svg" alt="briefcase">
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col flex-fill card-border rounded-3">
                    <div class="row my-2">
                        <div class="col-6">
                            <img class="card-border p-1 rounded-3" src="images/icons/chair.svg" alt="icon">
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <p class="small-text"><span class="text-success small-text">10%</span> vs last</p>
                        </div>
                    </div>
                    <p class="text-brand mb-0">Present Teachers</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-brand fw-bold fs-2 pt-2">125</p>
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <img class="ms-4 img-fluid me-2" src="images/icons/chart.svg" alt="briefcase">
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col flex-fill card-border rounded-3">
                    <div class="row my-2">
                        <div class="col-6">
                            <img class="card-border p-1 rounded-3" src="images/icons/alert.svg" alt="icon">
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <p class="small-text"><span class="text-danger small-text">10%</span> vs last</p>
                        </div>
                    </div>
                    <p class="text-brand mb-0">Absent Teachers</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-brand fw-bold fs-2 pt-2">15</p>
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <img class="ms-4 img-fluid me-2" src="images/icons/chart.svg" alt="briefcase">
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col flex-fill card-border rounded-3">
                    <div class="row my-2">
                        <div class="col-6">
                            <img class="card-border p-1 rounded-3" src="images/icons/clock.svg" alt="icon">
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <p class="small-text"><span class="text-success small-text">10%</span> vs last</p>
                        </div>
                    </div>
                    <p class="text-brand mb-0">Late Arrivals</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-brand fw-bold fs-2 pt-2">5</p>
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <img class="ms-4 img-fluid me-2" src="images/icons/chart.svg" alt="briefcase">
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col flex-fill card-border rounded-3">
                    <div class="row my-2">
                        <div class="col-6">
                            <img class="card-border p-1 rounded-3" src="images/icons/beach.svg" alt="icon">
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <p class="small-text"><span class="text-success small-text">10%</span> vs last</p>
                        </div>
                    </div>
                    <p class="text-brand mb-0">On Leave</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-brand fw-bold fs-2 pt-2">5</p>
                        </div>
                        <div class="col-6 text-end pe-4 pe-md-1">
                            <img class="ms-4 img-fluid me-2" src="images/icons/chart.svg" alt="briefcase">
                        </div>
                    </div>
                </div>
            </div>
            <!-- status Cards End-->

            <!-- actions -->
            <div class="row my-4 justify-content-between">
                <div class="col-lg-4 col-md-6 col-8">
                    <form class="d-flex ms-2" role="search">
                        <input class="form-control me-2 my-2 rounded-3" type="search" placeholder="Search"
                            aria-label="Search">
                        <select name="filter" id="filter" class="form-select me-2 my-2 rounded-3">
                            <option selected disabled>Filter</option>
                            <option></option>
                        </select>
                    </form>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <button class="btn btn-primary px-md-4 ms-md-5">Add +</button>
                </div>
            </div>
            <!-- actions End -->

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover border-0">
                    <thead class="table-header">
                        <tr>
                            <th class="border-0">Teachers Name</th>
                            <th class="border-0">Phone</th>
                            <th class="border-0">Education</th>
                            <th class="border-0">Institute</th>
                            <th class="border-0">Experties</th>
                            <th class="border-0">Experience Year</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-0 table-content-row gy-2">
                            <td class="border-0">Hilal Ahmed</td>
                            <td class="border-0">03297707733</td>
                            <td class="border-0">BS Software</td>
                            <td class="border-0">Iqra National University</td>
                            <td class="border-0">Web Development</td>
                            <td class= border-0">4</td>
                            <td class="border-0">
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table End -->
        </div>
    </main>
    <!-- Main Content End -->


<?php
include_once 'includes/footer.php';
?>



