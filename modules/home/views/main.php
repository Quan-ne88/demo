<?php
getFooter("layout/header.php");
require "modules/home/controllers/homeController.php";
$sanpham = sanphamhot();
$sanphammoi = sanphammoi();
$sanphamdienthoai = sanphamdanhmuc(1);
$sanphamlaptop = sanphamdanhmuc(2);
?>
<!-- start #main-site -->
<main id="main-site">

   <!-- Owl-carousel -->
   <section id="banner-area">
    <div class="owl-carousel owl-theme">
      <div class="item">
      <img id="banner" src="admin/assets/img/Banner1.jpg" width="100%" height="600px" alt="">
      </div>
      <div class="item">
      <img id="banner" src="admin/assets/img/Banner1.jpg" width="100%" height="600px" alt="">
          </div>
      <div class="item">
      <img id="banner" src="admin/assets/img/Banner1.jpg" width="100%" height="600px" alt="">   
       </div>
       </div>
    
    
    <script>
       var album=[];
for(var i=0;i<4;i++){
    album[i]=new Image();
    album[i].src="admin/assets/img/Banner"+i+".jpg";
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>3){
        index=1;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}

       
    </script>
  </section>
  <!-- !Owl-carousel -->

  <!-- Top Sale -->
  <section id="top-sale">
    <div class="container py-5">
      <h4 class="font-rubik font-size-20">Sản phẩm top</h4>
      <hr>
      <!-- owl carousel -->
      <div class="owl-carousel owl-theme">
        <?php if (!empty($sanpham)) {
          foreach ($sanpham as $item) {
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
                  <a href="<?php echo $item['urlAddCart'] ?>" type="submit" class="btn btn-warning font-size-12">Thêm vào giỏ hàng</a>
                </div>
              </div>
            </div>
        <?php  }
        } ?>
      </div>
      <!-- !owl carousel -->
    </div>
  </section>
  <!-- !Top Sale -->

  <!-- Special Price -->
  <section id="special-price">
    <div class="container">
      <h4 class="font-rubik font-size-20">Sản phẩm đặt biệt</h4>
      <div id="filters" class="button-group text-right font-baloo font-size-16">
        <button class="btn is-checked" data-filter="*">MSI Gaming Series MSI </button>
        <button class="btn" data-filter=".Apple">Acer Predator Series</button>
        <button class="btn" data-filter=".Samsung">Dell Alienware Series</button>
        <button class="btn" data-filter=".Redmi">Lenovo Legion Series</button>
      </div>

      <div class="grid">
        <?php if (!empty($sanphammoi)) {
          foreach ($sanphammoi as $item) {
        ?>
            <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px;">
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
                    <a href="<?php echo $item['urlAddCart'] ?>" type="submit" class="btn btn-warning font-size-12">Thêm vào giỏ hàng</a>
                  </div>
                </div>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </section><br><br><br>
  <!-- !Special Price -->

  <!-- Banner Ads  -->
  
  <!-- !Banner Ads  -->

  <!-- New Phones -->
  <section id="new-phones">
    <div class="container">
      <h4 class="font-rubik font-size-20">Laptop mới</h4>
      <hr>

      <!-- owl carousel -->
      <div class="owl-carousel owl-theme">
        <?php if (!empty($sanphamdienthoai)) {
          foreach ($sanphamdienthoai as $item) {
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
                  <a href="<?php echo $item['urlAddCart'] ?>" type="submit" class="btn btn-warning font-size-12">Thêm vào giỏ hàng</a>
                </div>
              </div>
            </div>
        <?php  }
        } ?>
      </div>
      <!-- !owl carousel -->

    </div>
  </section>
  <!-- !New Phones -->

  

</main>
<!-- !start #main-site -->
<?php
getFooter("layout/footer.php");
?>