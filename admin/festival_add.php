<?php
include('../php_files/db_connections.php');

$sql = "SELECT * FROM festivals";
$cate = "SELECT * FROM categories";
$result = $conn->query($sql);
$result2 = $conn->query($cate);

$festivalData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $festivalData[] = $row;
    }
} else {
    echo "0 results";
}


$categoryData = [];
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $categoryData[] = $row;
    }
} else {
    echo "0 results";
}

$pageName = "Add Festivals";

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
                    <h2 class="mb-0 text-body-emphasis">Festival Add</h2>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="card mb-3">
                        <div class="card-header bg-primary">
                            <h5 class="text-white">Festival Details</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="../php_files/festival_crud.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label" for="category_id">Category</label>
                                    <select name="category_id" class="form-select" aria-label="Select category"
                                        required>
                                        <option selected disabled>Select a category</option>
                                        <?php foreach ($categoryData as $category) { ?>
                                            <option value="<?php echo $category['category_id']; ?>">
                                                <?php echo $category['category_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="festival_name">Festival Name</label>
                                    <input type="text" class="form-control" id="festival_name" name="festival_name"
                                        placeholder="Enter event name" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="start_date">Festival Start Date</label>
                                    <input class="form-control datetimepicker" id="datepicker" name="start_date"
                                        type="text" placeholder="dd/mm/yyyy" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="end_date">Festival End Date</label>
                                    <input class="form-control datetimepicker" id="datepicker" name="end_date"
                                        type="text" placeholder="dd/mm/yyyy" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="venue">Venue</label>
                                    <input class="form-control" name="venue" id="venue" type="text"
                                        placeholder="Enter venue" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="price">Price</label>
                                    <input class="form-control" name="price" id="price" type="number" step="0.01"
                                        placeholder="Enter price" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="festival_description">Festival Description</label>
                                    <textarea class="form-control" id="festival_description" name="festival_description"
                                        placeholder="Describe the festival" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="image">Upload Festival Image</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        required>
                                </div>

                                <button type="submit" name="create_festival"
                                    class="btn btn-primary my-3 btn-block font-weight-bold">Create Festival</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>




            <?php include 'components/footer.php' ?>
        </div>
    </main>




    <!-- Scripts Start Here -->

    <?php include 'components/scripts.php' ?>
    <!-- Scripts End Here -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const totalBookingValueChartInit = () => { const { getColor: o, getData: t, getDates: e } = window.phoenix.utils, a = document.querySelector(".total-booking-value"); if (a) { const i = t(a, "echarts"), r = window.echarts.init(a); echartSetOption(r, i, (() => ({ tooltip: { trigger: "axis", padding: 10, backgroundColor: o("body-highlight-bg"), borderColor: o("border-color"), textStyle: { color: o("light-text-emphasis") }, borderWidth: 1, transitionDuration: 0, axisPointer: { type: "none" }, formatter: o => (o => { const t = window.dayjs(o[0].axisValue), e = window.dayjs(o[0].axisValue).subtract(1, "month"), a = o.map(((o, a) => ({ value: o.value, date: a > 0 ? e : t, color: o.color }))); let i = ""; return a.forEach(((o, t) => { i += `<h6 class="fs-9 ${t > 0 && "mb-0"}"><span class="fas fa-circle me-2" style="color:${o.color}"></span>\n      ${o.date.format("MMM DD")} : <span class="fw-normal">${o.value}</span>\n    </h6>`; })), `<div class='ms-1'>\n              ${i}\n            </div>` })(o), extraCssText: "z-index: 1000" }, xAxis: [{ type: "category", data: e(new Date("11/1/2023"), new Date("11/7/2023"), 864e5), show: !0, boundaryGap: !1, axisLine: { show: !0, lineStyle: { color: o("secondary-bg") } }, axisTick: { show: !1 }, axisLabel: { formatter: o => window.dayjs(o).format("DD MMM"), showMinLabel: !0, showMaxLabel: !1, color: o("secondary-color"), align: "left", interval: 5, fontFamily: "Nunito Sans", fontWeight: 600, fontSize: 12.8 } }], yAxis: { show: !1, type: "value", boundaryGap: !1 }, series: [{ type: "line", data: [150, 100, 300, 200, 250, 180, 250], showSymbol: !1, symbol: "circle", lineStyle: { width: 2, color: o("warning") }, emphasis: { lineStyle: { color: o("warning") } }, itemStyle: { color: o("warning") }, zlevel: 1 }], grid: { left: 5, right: 5, top: 5, bottom: 0 } }))); } };
    </script>
</body>

</html>