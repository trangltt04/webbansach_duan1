<div class="row">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxTitle">Sản phẩm</div>
            <div class="boxContent row">
            <?php
            foreach ($listSp as $key => $value) {
                # code...
                echo '<div class="boxSp mr">
                        <div class="img row">
                            <img src="./uploads/' . $value["image"] . '"
                                    alt="">
                            </div>
                            <p>' . $value["price"] . '</p>
                            <a href="">' . $value["tenSanPham"] . '</a>
                    </div>';
            }
            ?>
            </div>
        </div>

    </div>
    <div class="boxright">
        <?php include("boxRight.php"); ?>
    </div>
</div>