<?php
    if($_SESSION["role"] != 3){
        echo "<script>alert('Bạn không có quyền truy cập')</script>";
        header("refresh: 0; url='/PTUD_DD'");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/nvyt.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="../public/css/nvyt.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Nhân Viên Y Tế</title>
</head>

<body>
    <!-- header -->
    <?php include "blocks/header.php" ?>

    <div class="main">
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-md-2 p-3 border-end">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Chức năng</h5>
                            <div class="list-group">
                                <a href="/PTUD_DD/NVYT"><button class="tab_btn" id="a">Xử lý hóa đơn</button></a>
                                <a href="/PTUD_DD/NVYT/LichKham"><button class="tab_btn" id="a">Sửa lịch khám</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 p-3">
                    <div class="card mb-4">
                        <div class="table-panel">
                            <div class="content active" id="a1">
                                <?php include "./mvc/views/pages/".$data["Page"].".php" ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script>
    function selectPayment(method) {
                                // Remove 'selected' class from all cells
                                document.querySelectorAll('.payment-table td').forEach(cell => {
                                    cell.classList.remove('selected');
                                });

                                // Add 'selected' class to the clicked cell
                                event.currentTarget.classList.add('selected');

                                // Hide all action sections
                                document.querySelectorAll('.action-section').forEach(section => {
                                    section.style.display = 'none';
                                });

                                // Show the selected action section
                                document.getElementById(method + 'Action').style.display = 'block';
                            }

    function initializeTabs(tabClass, contentClass) {
        const tabs = document.querySelectorAll(tabClass);
        const allContent = document.querySelectorAll(contentClass);

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                allContent.forEach(content => content.classList.remove('active'));
                allContent[index].classList.add('active');
            });
        });
    }

    // Initialize tabs for each section
    initializeTabs('#a', '#a1');



    function onlyOneCheckbox(checkbox) {
    // Lấy tất cả các checkbox có cùng tên
    const checkboxes = document.getElementsByName('paymentOption');
    checkboxes.forEach((item) => {
        // Nếu checkbox không phải là checkbox đang được chọn, bỏ chọn nó
        if (item !== checkbox) item.checked = false;
    });
}

    </script>
</body>

</html>