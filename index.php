<?php
$page_title = "Dashboard - OnciByte";
include_once 'includes/header.php';
?>

    <!-- Main Content -->
    <main>
        <div class="container pb-5">
            <h3 class="text-brand mt-3 ms-2 mb-0">Welcome to OnicByte</h3>
            <p class="ms-2 mt-0">Measure How Fast You're Growing Monthly Recurring Revenue</p>
            <!-- status Cards -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 gap-2 g-4 status-cards mx-auto">
                <!-- Card 1 -->
                <div
                    class="col d-flex align-items-center justify-content-center flex-fill rounded-3 dashboard-status-card">
                    <div class="my-2">
                        <img class="ms-2 ps-1" src="images/icons/user.svg" alt="user">
                        <h5 class="mt-1">Users</h5>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="col d-flex align-items-center justify-content-center flex-fill rounded-3 dashboard-status-card">
                    <div class="my-2">
                        <img class="ms-2 ps-1" src="images/icons/thumb.svg" alt="icon">
                        <h5 class="mt-1">Holidays</h5>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="col d-flex align-items-center justify-content-center flex-fill rounded-3 dashboard-status-card">
                    <div class="my-2">
                        <img class="ms-2 ps-1" src="images/icons/trophy.svg" alt="icon">
                        <h5 class="mt-1">Events</h5>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="col d-flex align-items-center justify-content-center flex-fill rounded-3 dashboard-status-card">
                    <div class="my-2">
                        <img class="ms-2 ps-1" src="images/icons/payrol.svg" alt="icon">
                        <h5 class="mt-1">Payrol</h5>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="col d-flex align-items-center justify-content-center flex-fill rounded-3 dashboard-status-card">
                    <div class="my-2">
                        <img class="ms-2 ps-1" src="images/icons/accounts.svg" alt="icon">
                        <h5 class="mt-1">Accounts</h5>
                    </div>
                </div>
            </div>
            <!-- status Cards End-->

            <!-- Charts -->
            <div class="container py-3 px-0">
                <div class="row g-3">
                    <!-- Salary Chart -->
                    <div class="col-md-6 col-12">
                        <div class="rounded dashboard-chart-card p-3">
                            <p>Salary Statistics</p>
                            <div class="chart-container" id="salaryChartContainer">
                                <canvas id="salaryChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Revenue Chart -->
                    <div class="col-md-3 col-12">
                        <div class="rounded dashboard-chart-card p-3">
                            <p>Revenue</p>
                            <div class="chart-container" id="revenueChartContainer">
                                <canvas id="revenueChart"></canvas>
                                <div class="center-text" id="revenueCenterText">90%</div>
                            </div>
                        </div>
                    </div>

                    <!-- Balance Chart (no data shown, placeholder) -->
                    <div class="col-md-3 col-12">
                        <div class="rounded dashboard-chart-card p-3">
                            <p>My balance</p>
                        </div>
                    </div>

                    <!-- Employee Satisfaction Chart -->
                    <div class="col-md-6 col-12">
                        <div class="rounded dashboard-chart-card p-3">
                            <p>Employee Satisfaction</p>
                            <div class="chart-container" id="employeeSatisfactionChartContainer">
                                <canvas id="employeeSatisfactionChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Performance and Growth Charts (placeholders) -->
                    <div class="col-md-3 col-12">
                        <div class="rounded dashboard-chart-card p-3">
                            <h5>Performance</h5>
                            <p>Measure How Fast You’re Growing Monthly Recurring Revenue. Learn More</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="rounded dashboard-chart-card p-3">
                            <p>Growth</p>
                            <div class="chart-container" id="growthChartContainer">
                                <canvas  id="growthChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Charts End -->


            <!-- Project summary -->
            <div class="bg-white p-4 shadow rounded-2">
                <h2 class="fs-5 mt-2 mb-4">Project Summary</h2>
                <div class="table-responsive">
                    <table class="table table-hover border-0">
                        <thead>
                            <tr class="border-0 table-content-row">
                                <th class="border-0">#</th>
                                <th class="border-0">CLIENT NAME</th>
                                <th class="border-0">TEAM</th>
                                <th class="border-0">PROJECT</th>
                                <th class="border-0">PROJECT COST</th>
                                <th class="border-0">PAYMENT</th>
                                <th class="border-0">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-0 table-content-row">
                                <td class="border-0">#AD1245</td>
                                <td class="border-0">Sean Black</td>
                                <td class="border-0">BS Software</td>
                                <td class="border-0">Angular Admin</td>
                                <td class="border-0">$14,500</td>
                                <td class="text-center border-0">Done</td>
                                <td class="text-center border-0">
                                    <p class="btn btn-success mb-0 py-0">Deliverd</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Project summary END -->

        </div>
    </main>
    <!-- Main Content End -->

<?php
include_once 'includes/footer.php';
?>
