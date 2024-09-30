<?php
include('../php_files/db_connections.php');

// $sql = "SELECT * FROM booking";
$sql = "SELECT b.*, e.event_name, f.festival_name 
        FROM booking b 
        LEFT JOIN events e ON b.event_id = e.event_id 
        LEFT JOIN festivals f ON b.festival_id = f.festival_id";
$result = $conn->query($sql);

$bookingData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookingData[] = $row;
    }
} else {
    echo "0 results";
}

$pageName = "Booking";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - <?php echo $pageName ?> - Global Gathering</title>
    <?php include 'components/head.php' ?>

    <style>
        .custom-width {
            display: inline-block;
            /* Use Flexbox for display */
            -webkit-box-orient: vertical;
            /* Vertical orientation */
            -webkit-line-clamp: 1;
            /* Show only one line */
            overflow: hidden;
            /* Hide overflowed text */
            text-overflow: ellipsis;
            /* Show ellipsis */
            max-width: 150px;
            /* Adjust to your desired width */
            white-space: nowrap;
            /* Allow normal wrapping */
        }
    </style>
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
                    <h2 class="mb-0 text-body-emphasis">Bookings</h2>
                </div>
            </div>

            <!-- Change the data-sort here to make search filter active -->
            <div id="tableExample3"
                data-list="{&quot;valueNames&quot;:[&quot;full_name&quot;,&quot;email&quot;,&quot;mobile_no&quot;,&quot;address&quot;,&quot;city&quot;,&quot;event_id&quot;,&quot;festival_id&quot;,&quot;ticket_price&quot;,&quot;booking_date&quot;,&quot;quantity&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">

                <div class="search-box mb-3">
                    <form class="position-relative">
                        <input class="form-control search-input search form-control-sm" type="search"
                            placeholder="Search" aria-label="Search">
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                </div>

                <div id="tableExample3"
                    data-list="{&quot;valueNames&quot;:[&quot;id&quot;,&quot;full_name&quot;,&quot;email&quot;,&quot;mobile_no&quot;,&quot;address&quot;,&quot;city&quot;,&quot;event_id&quot;,&quot;festival_id&quot;,&quot;ticket_price&quot;,&quot;booking_date&quot;,&quot;quantity&quot;,&quot;status&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center sort border-top border-translucent ps-3"
                                        data-sort="full_name">Full Name
                                    </th>
                                    <th class="text-center sort border-top" data-sort="email">Email</th>
                                    <th class="text-center sort border-top" data-sort="mobile_no">Mobile No</th>
                                    <th class="text-center sort border-top" data-sort="address">Address</th>
                                    <th class="text-center sort border-top" data-sort="city">City</th>
                                    <th class="text-center sort border-top" data-sort="event_id">Event</th>
                                    <th class="text-center sort border-top" data-sort="festival_id">Festival</th>
                                    <th class="text-center sort border-top" data-sort="ticket_price">Ticket Price</th>
                                    <th class="text-center sort border-top" data-sort="booking_date">Booking Date</th>
                                    <th class="text-center sort border-top" data-sort="quantity">Quantity</th>
                                    <!-- <th class="sort border-top" data-sort="status">Status</th> -->
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php foreach ($bookingData as $booking) { ?>
                                    <tr>
                                        <td class="align-middle ps-3 full_name"><?php echo $booking['full_name']; ?></td>
                                        <td class="align-middle email"><?php echo $booking['email']; ?></td>
                                        <td class="align-middle mobile_no"><?php echo $booking['mobile_no']; ?></td>
                                        <td class="align-middle address"><?php echo $booking['address']; ?></td>
                                        <td class="align-middle city"><?php echo $booking['city']; ?></td>
                                        <td class="align-middle event_name">
                                            <?php echo $booking['event_name'] ? $booking['event_name'] : '-'; ?>
                                        </td>
                                        <td class="align-middle festival_name">
                                            <?php echo $booking['festival_name'] ? $booking['festival_name'] : '-'; ?>
                                        </td>
                                        <td class="align-middle ticket_price"><?php echo $booking['ticket_price']; ?></td>
                                        <td class="align-middle booking_date">
                                            <?php echo date('d-m-Y', strtotime($booking['booking_date'])); ?>
                                        </td>
                                        <td class="align-middle quantity text-center"><?php echo $booking['quantity']; ?>
                                        </td>
                                        <!-- <td class="align-middle status"><?php echo $booking['status']; ?></td> -->
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent">
                                                    <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item text-danger"
                                                        href="../php_files/booking_crud.php?delete_booking=<?php echo $booking['booking_id'] ?>">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span
                            class="text-body-tertiary"> Items of </span>43</span>
                    <div class="d-flex">
                        <button class="page-link disabled" data-list-pagination="prev" disabled="">
                            <svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                </path>
                            </svg>
                        </button>

                        <ul class="mb-0 pagination">
                            <li class="active">
                                <button class="page" type="button" data-i="1" data-page="5">1</button>
                            </li>
                            <li>
                                <button class="page" type="button" data-i="2" data-page="5">2</button>
                            </li>
                            <li>
                                <button class="page" type="button" data-i="3" data-page="5">3</button>
                            </li>
                            <li class="disabled">
                                <button class="page" type="button">...</button>
                            </li>
                        </ul>

                        <button class="page-link pe-0" data-list-pagination="next">
                            <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5 12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                </path>
                            </svg>
                        </button>
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