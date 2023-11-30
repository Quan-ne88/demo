<?php
getHeader("layout/header.php");
require "modules/products/models/productsModel.php";
$madanhmuc = isset($_GET['catid']) ? intval($_GET['catid']) : "";
if (empty($madanhmuc) && $madanhmuc == "") {
  $tatcasanpham = tatcasanpham();
} else {
  if ($madanhmuc === 1) {
    $tatcasanpham = sanphamtheodanhmuc($madanhmuc);
  } else {
    $tatcasanpham = sanphamtheodanhmuc($madanhmuc);
  }
}
$danhmuc = danhsachdanhmuc();
?>
<main id="main-site">
  <section id="top-sale">
    <div class="container py-5">
      <h4 class="font-rubik font-size-20">Tất cả sản phẩm</h4>
      <div id="filters" class="button-group text-right font-baloo font-size-16">
        <?php if (!empty($danhmuc)) {
          foreach ($danhmuc as $item) {
        ?>
            <a href="?mod=products&act=main&catid=<?php echo $item['id'] ?>" class="btn"><?php echo $item['tieu_de'] ?></a>
        <?php }
        } ?>
      </div>
      <p class="font-size-16">Có <?php echo count($tatcasanpham) ?> sản phẩm</p>
      <hr>
      <!-- owl carousel -->
      <div class="owl-carousel owl-theme">
        <?php if (!empty($tatcasanpham)) {
          foreach ($tatcasanpham as $item) {
        ?>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="<?php echo $item['urlDetail'] ?>"><img src="admin/assets/img/products/<?php echo $item['hinh_anh'] ?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6><?php echo $item['ten'] ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span><?php echo currency_format($item['gia']) ?></span>
                  </div>
                  <a href="<?php echo $item['urlAddToCart'] ?>" type="submit" class="btn btn-warning font-size-12">Thêm vào giỏ hàng</a>
                </div>
              </div>
            </div>
        <?php  }
        } ?>
      </div>
      <!-- !owl carousel -->
    </div>
  </section>
</main>
<?php
getFooter("layout/footer.php")
?>