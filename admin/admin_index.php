<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Global Gathering</title>
    <?php include 'components/head.php' ?>
</head>

<body>
    <main class="main" id="top">

        <!-- Side Bar Start Here -->
        <?php include 'components/sidebar.php' ?>
        <!-- Side Bar End Here -->

        <!-- Top NavBar Start Here -->
        <?php include 'components/topNav.php' ?>
        <!-- Top NavBar End Here -->

        <!-- Top NavBar Start Here -->
        <?php include 'components/themeSetupScript.php' ?>
        <!-- Top NavBar End Here -->

        <div class="content">

            <div class="row mb-4 mb-xl-6 mb-xxl-4 gy-3 justify-content-between">
                <div class="col-auto">
                    <h2 class="mb-0 text-body-emphasis">Dashboard</h2>
                </div>
            </div>

            <div class="row gx-3">
                <div class="col-xxl-7">
                    <div class="row gx-7 pe-xxl-3">
                        <div class="col-12 col-xl-5 col-xxl-12">
                            <div class="row g-0">
                                <!-- Booking Box -->
                                <div class="col-6 col-xl-12 col-xxl-6 border-bottom border-end border-end-xl-0 border-end-xxl pb-4 pt-4 pt-xl-0 pt-xxl-4 pe-4 pe-sm-5 pe-xl-0 pe-xxl-5">
                                    <h5 class="text-body mb-4">Total Bookings</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="echart-booking-value order-1 order-sm-0 order-md-1" style="height:54px; width: 90px"></div>
                                        <div class="mt-4 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">350</h3>
                                            <span class="fs-9 text-body-secondary d-block d-sm-inline mt-1">From last month</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Users Box -->
                                <div class="col-6 col-xl-12 col-xxl-6 border-bottom py-4 ps-4 ps-sm-5 ps-xl-0 ps-xxl-5">
                                    <h5 class="text-body mb-4">Users</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="total-users-value order-1 order-sm-0 order-md-1" style="height:54px; width: 90px"></div>
                                        <div class="mt-3 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">530</h3>
                                            <span class="fs-9 text-body-secondary text-nowrap d-block d-sm-inline mt-1">From last month</span>
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                                <div
                                    class="col-6 col-xl-12 col-xxl-6 border-bottom-xl border-bottom-xxl-0 border-end border-end-xl-0 border-end-xxl py-4 pe-4 pe-sm-5 pe-xl-0 pe-xxl-5">
                                    <h5 class="text-body mb-4">Events</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="echart-commission order-sm-0 order-md-1"
                                            style="height: 54px; width: 54px"></div>
                                        <div class="mt-3 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">16</h3>
                                            <!-- <span class="fs-9 text-body-secondary d-block d-sm-inline mt-1">From last month</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-12 col-xxl-6 py-4 ps-4 ps-sm-5 ps-xl-0 ps-xxl-5">
                                    <h5 class="text-body mb-4">Festivals</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="festival-chart order-sm-0 order-md-1" style="height: 54px; width: 54px"></div>
                                        <div class="mt-3 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">14</h3>
                                            <!-- <span class="fs-9 text-body-secondary d-block d-sm-inline mt-1">From last month</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-5">
                    <div class="row g-3">

                        <div class="col-12 col-md-6 col-xxl-12">
                            <div class="card h-100" data-list='{"valueNames":["country","users","status"],"page":4}'>
                                <div class="card-header border-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="text-body-highlight ">Visitors</h3>
                                        <!-- <p class="mb-0 text-body-tertiary">Users across countries</p> -->
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <h4 class="d-flex align-items-center gap-2 text-body-highlight mb-4"><span
                                            class="real-time-user" data-countup='{"endValue":119}'>0</span><span
                                            class="fs-9 fw-normal">User per second</span></h4>
                                    <div class="echart-country-wise-visitors" style="height: 100px; width: 100%"></div>
                                    <div class="table-responsive scrollbar mt-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 pb-9 bg-body-emphasis border-top mt-3">
                <div
                    data-list='{"valueNames":["flightNo","vendor","weather","route","destination","status","time"],"page":4}'>

                    <!-- Booking table heading -->
                    <div class="row gx-0 gy-3 align-items-center py-4">
                        <div class="col-xl-auto">
                            <h3 class="mb-0">Bookings</h3>
                        </div>

                        <div class="col-auto flex-1">
                            <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center">
                                    <div class="search-box ms-xl-6 w-auto">
                                        <form class="position-relative"><input class="form-control search-input search"
                                                type="search" placeholder="Search by Flight no." aria-label="Search" />
                                            <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                    </div><button class="btn btn-phoenix-secondary px-3 ms-2 me-3"><span
                                            class="fa-solid fa-filter text-body-secondary"
                                            data-fa-transform="down-2"></span></button>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="pagination d-none"></div>
                                    <p class="mb-0 d-none d-md-block me-3 fw-semibold text-body text-nowrap"
                                        data-list-info="data-list-info"></p><a
                                        class="fw-semibold text-nowrap d-none d-sm-block" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a
                                        class="fw-semibold d-none text-nowrap" href="#!" data-list-view="less">View
                                        Less</a><button class="btn btn-phoenix-primary px-3 me-1 ms-sm-4" type="button"
                                        title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"
                                            data-fa-transform="down-1"></span></button><button
                                        class="btn btn-phoenix-primary px-3" type="button" title="Next"
                                        data-list-pagination="next"><span class="fas fa-chevron-right"
                                            data-fa-transform="down-1"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Booking table data here -->
                    <div class="table-responsive scrollbar mx-n1 px-1 mb-4">
                        <table class="table fs-9 mb-0 border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap px-0 py-1">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                id="checkbox-bulk-flights-select" type="checkbox"
                                                data-bulk-select='{"body":"table-flights-body"}' /></div>
                                    </th>
                                    <th class="sort white-space-nowrap align-middle text-body-tertiary ps-0" scope="col"
                                        data-sort="flightNo">FLIGHTS NO.</th>
                                    <th class="sort align-middle text-body-tertiary" scope="col" data-sort="vendor"
                                        style="width:170px;">VENDOR</th>
                                    <th class="sort text-start align-middle text-body-tertiary" scope="col"
                                        data-sort="weather" style="width:250px;">WEATHER</th>
                                    <th class="sort align-middle text-body-tertiary" scope="col" data-sort="route"
                                        style="width:180px;">ROUTE</th>
                                    <th class="sort align-middle text-body-tertiary" scope="col"
                                        style="min-width:280px;" data-sort="destination">DESTINATION</th>
                                    <th class="sort text-end align-middle text-body-tertiary" scope="col"
                                        data-sort="status" style="min-width:120px;">STATUS</th>
                                    <th class="sort align-middle text-end text-body-tertiary" scope="col"
                                        data-sort="time" style="min-width:200px;">TIME</th>
                                    <th class="text-end pe-0" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-flights-body">
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#24349","vendor":{"image":"/img/brands/phoenix-firelines.png","name":"Phoenix Firelines"},"route":{"from":{"flag":"/img/country/usa.png","airport":"LAX"},"to":{"flag":"/img/country/canada.png","airport":"YVR"}},"destination":{"currentPosition":"180 km, 00h:15m ago","target":"955 km, in 01h:25m","percent":25},"weather":{"temperature":15,"weather":"Stormy","icon":"fa-solid fa-cloud-bolt","color":"text-body-tertiary"},"time":{"time":"08:26 PM","date":"Sunday, Nov 06, 2022"},"status":{"label":"Delayed","type":"warning"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#24349</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/phoenix-firelines.png" alt=""
                                                width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Phoenix Firelines</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">15°C</p><span
                                                class="me-2 fa-solid fa-cloud-bolt text-body-tertiary"></span>
                                            <p class="mb-0 text-body-tertiary">Stormy</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/usa.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">LAX</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">YVR</p><img
                                                src="../assets/img/country/canada.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 25%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">180 km, 00h:15m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">955 km, in 01h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-warning">Delayed</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">08:26 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Sunday, Nov 06, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#23421","vendor":{"image":"/img/brands/qatar-airways.png","name":"Qatar Airways"},"route":{"from":{"flag":"/img/country/denmark.png","airport":"EBJ"},"to":{"flag":"/img/country/south-korea.png","airport":"CDG"}},"destination":{"currentPosition":"600 km, 02h:15m ago","target":"1,200 km, in 02h:25m","percent":60},"weather":{"temperature":28,"weather":"Sunny","icon":"fa-solid fa-sun","color":"text-warning"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"On Time","type":"primary"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#23421</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/qatar-airways.png" alt=""
                                                width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Qatar Airways</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-danger"></span>
                                            <p class="mb-0 text-body-tertiary me-3">28°C</p><span
                                                class="me-2 fa-solid fa-sun text-warning"></span>
                                            <p class="mb-0 text-body-tertiary">Sunny</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/denmark.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">EBJ</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">CDG</p><img
                                                src="../assets/img/country/south-korea.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="60" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 60%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">600 km, 02h:15m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">1,200 km, in 02h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-primary">On Time</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#23132","vendor":{"image":"/img/brands/jal.png","name":"Japan Airlines"},"route":{"from":{"flag":"/img/country/china.png","airport":"GOT"},"to":{"flag":"/img/country/usa.png","airport":"BCN"}},"destination":{"currentPosition":"500 km, 00h:56m ago","target":"3,455 km, in 03h:25m","percent":25},"weather":{"temperature":22,"weather":"Wind","icon":"fa-solid fa-wind","color":"text-info"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"Departure","type":"success"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#23132</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/jal.png" alt="" width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Japan Airlines</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">22°C</p><span
                                                class="me-2 fa-solid fa-wind text-info"></span>
                                            <p class="mb-0 text-body-tertiary">Wind</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/china.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">GOT</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">BCN</p><img
                                                src="../assets/img/country/usa.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 25%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">500 km, 00h:56m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">3,455 km, in 03h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-success">Departure</span>
                                    </td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#22267","vendor":{"image":"/img/brands/emirates.png","name":"Emirate"},"route":{"from":{"flag":"/img/country/qatar.png","airport":"DIA"},"to":{"flag":"/img/country/norway.png","airport":"OSL"}},"destination":{"currentPosition":"00 km, 00h:00m ago","target":"00 km, in 00h:00m","percent":0},"weather":{"temperature":5,"weather":"Heavy rain","icon":"fa-solid fa-cloud-showers-heavy","color":"text-danger"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"Cancelled","type":"danger"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#22267</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/emirates.png" alt="" width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Emirate</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">5°C</p><span
                                                class="me-2 fa-solid fa-cloud-showers-heavy text-danger"></span>
                                            <p class="mb-0 text-body-tertiary">Heavy rain</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/qatar.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">DIA</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">OSL</p><img
                                                src="../assets/img/country/norway.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="0" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 0%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-quaternary">00 km, 00h:00m ago</p>
                                            <p class="mb-0 fs-10 text-body-quaternary">00 km, in 00h:00m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-danger">Cancelled</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#41242","vendor":{"image":"/img/brands/emirates.png","name":"Emirate"},"route":{"from":{"flag":"/img/country/qatar.png","airport":"DIA"},"to":{"flag":"/img/country/norway.png","airport":"OSL"}},"destination":{"currentPosition":"26512 km, .02h:56m ago","target":"3,455 km, in 03h:25m","percent":75},"weather":{"temperature":5,"weather":"Heavy rain","icon":"fa-solid fa-cloud-showers-heavy","color":"text-danger"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"On Time","type":"primary"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#41242</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/emirates.png" alt="" width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Emirate</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">5°C</p><span
                                                class="me-2 fa-solid fa-cloud-showers-heavy text-danger"></span>
                                            <p class="mb-0 text-body-tertiary">Heavy rain</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/qatar.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">DIA</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">OSL</p><img
                                                src="../assets/img/country/norway.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 75%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">26512 km, .02h:56m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">3,455 km, in 03h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-primary">On Time</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<?php include 'components/footer.php' ?>
        </div>
    </main>




    <!-- Scripts Start Here -->

    <?php include 'components/scripts.php' ?>
    <!-- Scripts End Here -->


    <script>
        const totalBookingValueChartInit = () => { const { getColor: o, getData: t, getDates: e } = window.phoenix.utils, a = document.querySelector(".total-booking-value"); if (a) { const i = t(a, "echarts"), r = window.echarts.init(a); echartSetOption(r, i, (() => ({ tooltip: { trigger: "axis", padding: 10, backgroundColor: o("body-highlight-bg"), borderColor: o("border-color"), textStyle: { color: o("light-text-emphasis") }, borderWidth: 1, transitionDuration: 0, axisPointer: { type: "none" }, formatter: o => (o => { const t = window.dayjs(o[0].axisValue), e = window.dayjs(o[0].axisValue).subtract(1, "month"), a = o.map(((o, a) => ({ value: o.value, date: a > 0 ? e : t, color: o.color }))); let i = ""; return a.forEach(((o, t) => { i += `<h6 class="fs-9 ${t > 0 && "mb-0"}"><span class="fas fa-circle me-2" style="color:${o.color}"></span>\n      ${o.date.format("MMM DD")} : <span class="fw-normal">${o.value}</span>\n    </h6>`; })), `<div class='ms-1'>\n              ${i}\n            </div>` })(o), extraCssText: "z-index: 1000" }, xAxis: [{ type: "category", data: e(new Date("11/1/2023"), new Date("11/7/2023"), 864e5), show: !0, boundaryGap: !1, axisLine: { show: !0, lineStyle: { color: o("secondary-bg") } }, axisTick: { show: !1 }, axisLabel: { formatter: o => window.dayjs(o).format("DD MMM"), showMinLabel: !0, showMaxLabel: !1, color: o("secondary-color"), align: "left", interval: 5, fontFamily: "Nunito Sans", fontWeight: 600, fontSize: 12.8 } }], yAxis: { show: !1, type: "value", boundaryGap: !1 }, series: [{ type: "line", data: [150, 100, 300, 200, 250, 180, 250], showSymbol: !1, symbol: "circle", lineStyle: { width: 2, color: o("warning") }, emphasis: { lineStyle: { color: o("warning") } }, itemStyle: { color: o("warning") }, zlevel: 1 }], grid: { left: 5, right: 5, top: 5, bottom: 0 } }))); } };
    </script>
</body>

</html>