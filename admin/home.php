<?php include("../model/countModel.php"); ?>
<div class="row g-3 my-2">
    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">
                    <?php 
                    $sp = select_CountSanpham();
                    echo $sp;
                     ?>
                </h3>
                <p class="fs-5">Sản Phẩm</p>
            </div>
            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">
                    <?php 
                    $dm = select_Countdanhmuc();
                    echo $dm;
                     ?></h3>
                <p class="fs-5">Danh mục</p>
            </div>
            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">
                    <?php 
                    $bl = select_CountBinhluan();
                    echo $bl;
                     ?></h3>
                <p class="fs-5">Bình Luận</p>
            </div>
            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">
                    <?php 
                    $tk = select_CountTaikhoan();
                    echo $tk;
                     ?></h3>
                <p class="fs-5">Khách hàng</p>
            </div>
            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
</div>


<div class="row my-5">
    <h1>Control panel </h1>
    <p>Trang chủ admin</p>
</div>