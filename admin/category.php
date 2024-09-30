<?php
include('../php_files/db_connections.php');

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

$categoryData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categoryData[] = $row;
    }
} else {
    echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Users - Global Gathering</title>
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
                    <h2 class="mb-0 text-body-emphasis">Category List</h2>
                </div>
            </div>

            <!-- Change the data-sort here to make search filter active -->
            <div id="tableExample3"
                data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;category&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">

                <div class="search-box mb-3">
                    <form class="position-relative"><input class="form-control search-input search form-control-sm"
                            type="search" placeholder="Search" aria-label="Search">
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                </div>
                <div>
                    <button class="btn btn-primary my-2" type="button" data-bs-toggle="modal" data-bs-target="#add_category_modal">
                        <i class="fa fa-plus me-2"></i>
                        Add Category
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="sort border-top w-25" data-sort="category">Category Name</th>
                                <th class="sort align-middle pe-0 border-top">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php foreach ($categoryData as $category): ?>
                                <tr>
                                    <td class="align-middle ps-3 category w-25"><?php echo $category['category_name']; ?>
                                    </td>
                                    <td class="align-middle white-space-nowrap pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                type="button" data-bs-toggle="dropdown" data-boundary="viewport"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#update_category_modal"
                                                    data-category-id="<?php echo $category['category_id']; ?>"
                                                    data-category-name="<?php echo $category['category_name']; ?>">Update</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger"
                                                    href="../php_files/category_crud.php?delete_category=<?php echo $category['category_id']; ?>">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 
                        <span class="text-body-tertiary"> Items of </span>43
                    </span>
                    <div class="d-flex">
                        <button class="page-link disabled" data-list-pagination="prev" disabled=""><svg
                                class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                </path>
                            </svg>
                        </button>
                        <ul class="mb-0 pagination">
                            <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button>
                            </li>
                            <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                            <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                            <li class="disabled"><button class="page" type="button">...</button></li>
                        </ul>
                        <button class="page-link pe-0" data-list-pagination="next"><svg
                                class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


            <?php include 'components/footer.php' ?>
        </div>
    </main>



    <!-- Create Category Modal -->
    <div class="modal fade" id="add_category_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="../php_files/category_crud.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="form-label" for="exampleFormControlInput">Category Name</label>
                        <input class="form-control" id="exampleFormControlInput" type="text" placeholder="Music"
                            name="category_name" />
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="create_category" type="submit">Add</button>
                        <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Update Category Modal -->
    <div class="modal fade" id="update_category_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="../php_files/category_crud.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                        <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="category_id" id="update_category_id" />
                        <!-- Hidden field for category ID -->
                        <input type="hidden" name="category_id" id="category_id">
                        <label class="form-label" for="update_category_name">Category Name</label>
                        <input class="form-control" id="update_category_name" type="text" placeholder="Music"
                            name="category_name" />
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="update_category" type="submit">Update</button>
                        <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Scripts Start Here -->

    <?php include 'components/scripts.php' ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- Scripts End Here -->
    <script>
        $('#update_category_modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var category_id = button.data('category-id'); // Extract info from data-* attributes
            var category_name = button.data('category-name');

            var modal = $(this);
            modal.find('#category_id').val(category_id); // Populate hidden field with category ID
            modal.find('#update_category_name').val(category_name); // Populate input with category name
        });
    </script>

    <script>
        const totalBookingValueChartInit = () => { const { getColor: o, getData: t, getDates: e } = window.phoenix.utils, a = document.querySelector(".total-booking-value"); if (a) { const i = t(a, "echarts"), r = window.echarts.init(a); echartSetOption(r, i, (() => ({ tooltip: { trigger: "axis", padding: 10, backgroundColor: o("body-highlight-bg"), borderColor: o("border-color"), textStyle: { color: o("light-text-emphasis") }, borderWidth: 1, transitionDuration: 0, axisPointer: { type: "none" }, formatter: o => (o => { const t = window.dayjs(o[0].axisValue), e = window.dayjs(o[0].axisValue).subtract(1, "month"), a = o.map(((o, a) => ({ value: o.value, date: a > 0 ? e : t, color: o.color }))); let i = ""; return a.forEach(((o, t) => { i += `<h6 class="fs-9 ${t > 0 && "mb-0"}"><span class="fas fa-circle me-2" style="color:${o.color}"></span>\n      ${o.date.format("MMM DD")} : <span class="fw-normal">${o.value}</span>\n    </h6>`; })), `<div class='ms-1'>\n              ${i}\n            </div>` })(o), extraCssText: "z-index: 1000" }, xAxis: [{ type: "category", data: e(new Date("11/1/2023"), new Date("11/7/2023"), 864e5), show: !0, boundaryGap: !1, axisLine: { show: !0, lineStyle: { color: o("secondary-bg") } }, axisTick: { show: !1 }, axisLabel: { formatter: o => window.dayjs(o).format("DD MMM"), showMinLabel: !0, showMaxLabel: !1, color: o("secondary-color"), align: "left", interval: 5, fontFamily: "Nunito Sans", fontWeight: 600, fontSize: 12.8 } }], yAxis: { show: !1, type: "value", boundaryGap: !1 }, series: [{ type: "line", data: [150, 100, 300, 200, 250, 180, 250], showSymbol: !1, symbol: "circle", lineStyle: { width: 2, color: o("warning") }, emphasis: { lineStyle: { color: o("warning") } }, itemStyle: { color: o("warning") }, zlevel: 1 }], grid: { left: 5, right: 5, top: 5, bottom: 0 } }))); } };
    </script>
</body>

</html>