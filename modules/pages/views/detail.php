<?php
getHeader("layout/header.php");
if (isset($_GET['id'])) {
  $pageID = (int)$_GET['id'];
}
?>
<!-- Move to top button -->
<div class="scroll-top">
  <i class="fa fa-arrow-up"></i>
</div>
<!-- Move to top button -->
<?php if ($pageID === 1) {
?>
  <main>
    <section class="about" >
     
      </div>
      <div class="main-content">
        <div class="about-content">
          <!-- Group 1 -->
          <div class="about-group">
            <h2 class="about-group__heading">
              Thông tin về công ty chúng tôi
            </h2>
            <p class="about-group__desc">
            Được thành lập từ đầu năm 2010, đến nay Laptop KNQ đã trở thành một “Thương Hiệu”  uy tín hàng đầu tại TP Hồ Nội nói chung, cũng như tại Việt Nam nói riêng. Nổi bật trong lĩnh vực kinh doanh Laptop cũ chính hãng, Laptop KNQ chúng tôi luôn cam kết đảm bảo chất lượng sản phẩm từ những thương hiệu danh tiếng nhất trên toàn thế giới, bao gồm: MacBook, Thinkpad, Dell, HP, MSI, Asus, Acer, Toshiba, Samsung, Lenovo, Sony Vaio…
            </p>
          </div>
          <div class="about-row">
            <!-- Group 2 -->
            <div class="about-group">
              <h2 class="about-group__heading about-group__heading--small">
                Nhiệm vụ của chúng tôi
              </h2>
              <p class="about-group__desc">
              Tại đây, chúng tôi luôn đa dạng về mặt hàng, cũng như phong phú về mẫu mã sản phẩm, với nhiều mức giá khác nhau nhằm đem lại cho khách hàng sự lựa chọn dễ dàng, tiện lợi nhất trong khi mua sắm:

Laptop cũ chính hãng ,cam kết đảm bảo chất lượng- 100% nguyên zin chưa qua sửa chữa, chưa qua thay thế
Laptop chuyên dụng cho dân đồ họa
Laptop xách tay chính hãng từ Mỹ
Laptop mini tiện lợi
Linh kiện Laptop chất lượng cao
Cùng hàng ngàn sản phẩm mới, được cập nhật liên tục, đều đặn, chỉ có tại Laptop KNQ, số 448/9 Quang
              </p>
            </div>
            <!-- Group 3 -->
            <div class="about-group">
              <h2 class="about-group__heading about-group__heading--small">
                Nhiệm vụ của chúng tôi
              </h2>
              <p class="about-group__desc">
              Thấu hiểu được mọi lo lắng của khách hàng, Laptop KNQ không ngừng hoàn thiện nhằm mang đến những chính sách có giá trị thiết thực, giúp bạn hoàn toàn yên tâm trong quá trình sử dụng Laptop, bao gồm:

Đổi trả dễ dàng trong vòng 07 ngày, bảo hành sản phẩm lên đến 06 tháng - mở rộng 01 năm (Cộng thêm 300k-600k tùy máy) và hỗ trợ khách hàng mãi mãi trọn đời máy.
Cài đặt phần mềm miễn phí vĩnh viễn, cho máy hết hạn bảo hành
Đối với những khách hàng ở xa, chúng tôi chấp nhận hình thức ship COD, nghĩa là bạn có thể nhận hàng tại nhà >>> kiểm tra sản phẩm >>> cảm thấy hài lòng rồi mới tiến hành thanh toán.
Giao hàng miễn phí 100% khu vực TPHN.
Hình thức thanh toán tiện lợi: bạn có thể linh hoạt lựa chọn hình thức chuyển khoản, dùng thẻ (bất kì loại nào) hoặc tiền mặt.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="clients">
      <div class="main-content">
        <div class="section-top">
          <h2 class="section-top__heading">Khách hàng nói gì về chúng tôi</h2>
          <div class="section-icons">
            <div class="section-icon">
              <i class="fa fa-arrow-left"></i>
            </div>
            <div class="section-icon">
              <i class="fa fa-arrow-right"></i>
            </div>
          </div>
        </div>
        <div class="clients-body">
          <section class="clients-list">
            <!-- Item 1 -->
            <article class="clients-item">
              <div class="clients-content">
                <p class="clients-content__desc">
                  "Điều quan trọng là phải tìm hiểu sự thật, nó sẽ được theo
                  sau bởi một chương trình giáo dục. Rất nhiều nước sốt trong
                  giá. Núi sẽ buồn cho lũ trẻ kể chuyện đói."
                </p>
                <div class="clients-stars">
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                </div>
                <h3 class="clients-content__author">Lưu Văn Khánh</h3>
                <span class="clients-content__place">Khách hàng ở thành phố Hồ Nội</span>
              </div>
            </article>
            <!-- Item 2 -->
            <article class="clients-item">
              <div class="clients-content">
                <p class="clients-content__desc">
                  "Điều quan trọng là phải tìm hiểu sự thật, nó sẽ được theo
                  sau bởi một chương trình giáo dục. Rất nhiều nước sốt trong
                  giá. Núi sẽ buồn cho lũ trẻ kể chuyện đói."
                </p>
                <div class="clients-stars">
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                </div>
                <h3 class="clients-content__author">Hoàng Minh Quân</h3>
                <span class="clients-content__place">Khách hàng ở thành phố Hà Nội</span>
              </div>
            </article>
            <!-- Item 1 -->
            <article class="clients-item">
              <div class="clients-content">
                <p class="clients-content__desc">
                  "Điều quan trọng là phải tìm hiểu sự thật, nó sẽ được theo
                  sau bởi một chương trình giáo dục. Rất nhiều nước sốt trong
                  giá. Núi sẽ buồn cho lũ trẻ kể chuyện đói."
                </p>
                <div class="clients-stars">
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                  <i class="fa fa fa-star"></i>
                </div>
                <h3 class="clients-content__author">Phạm Ngọc Tuấn</h3>
                <span class="clients-content__place">Khách hàng ở thủ đô Hà Nội</span>
              </div>
            </article>
          </section>
          <ul class="clients-dots">
            <li class="clients-dot active"></li>
            <li class="clients-dot"></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="members">
      <div class="main-content">
        <div class="section-top">
          <h2 class="section-top__heading">Thành viên của chúng tôi</h2>
        </div>
        <div class="members-list">
          <!-- Item 1 -->
          <div class="members-item">
            <figure class="members-thumb">
              <img src="../assignment_PHP/assets/img/ceo-1.avif" alt="" class="members-thumb__img" />
            </figure>
            <div class="members-content">
              <h3 class="members-content__author">Lưu Văn KHánh </h3>
              <p class="members-content__career">Founder & CEO</p>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="members-item">
            <figure class="members-thumb">
              <img src="../assignment_PHP/assets/img/ceo-2.avif" alt="" class="members-thumb__img" />
            </figure>
            <div class="members-content">
              <h3 class="members-content__author">Phạm Tuấn Ngọc</h3>
              <p class="members-content__career">Founder & CEO</p>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="members-item">
            <figure class="members-thumb">
              <img src="../assignment_PHP/assets/img/ceo-3.avif" alt="" class="members-thumb__img" />
            </figure>
            <div class="members-content">
              <h3 class="members-content__author">Hoàng Minh Quân</h3>
              <p class="members-content__career">Founder & CEO</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php } else if ($pageID === 2) {
?>
  <main>
    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.44366148992!2d106.62525347495864!3d10.853821089299728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1685860741864!5m2!1svi!2s" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="form">
      <div class="form-body">
        <div class="form-info">
          <h2 class="form-info__heading">Thông tin liên hệ</h2>
          <p class="form-info__desc">
            Để đảm bảo cho khách hàng một “Trải nghiệm kỳ nghỉ tuyệt vời”,
            chúng tôi áp dụng công nghệ vào việc đọc hiểu nhu cầu của thị
            trường, nghiên cứu phát triển sản phẩm và gợi ý những sản phẩm và
            dịch vụ tốt nhất, phù hợp với từng khách hàng.
          </p>
          <ul class="form-contact">
            <!-- Link 1 -->
            <li class="form-contact__item">
              <a href="#" class="form-contact__link">
                <i class="fa fa-location-dot"></i>
                <span>FPT Polytechnic College</span>
              </a>
            </li>
            <!-- Link 2 -->
            <li class="form-contact__item">
              <a href="tel: +84121231354" class="form-contact__link">
                <i class="fa-solid fa-phone"></i>
                <span>+84121231354</span>
              </a>
            </li>
            <!-- Link 3 -->
            <li class="form-contact__item">
              <a href="mailto: email@gmail.com" class="form-contact__link">
                <i class="fa-solid fa-envelope"></i>
                <span>email@gmail.com</span>
              </a>
            </li>
          </ul>
        </div>
        <form class="form-action" autocomplete="off">
          <h2 class="form-action__heading">Gửi thông tin</h2>
          <div class="form-wrapper">
            <div class="form-group">
              <input type="text" name="name" id="form-input" required class="form-input" />
              <label for="form-input" class="form-label">Họ và tên</label>
            </div>
            <div class="form-group">
              <input type="text" name="phone" id="form-input" class="form-input" />
              <label for="form-input" class="form-label">Số điện thoại</label>
            </div>
          </div>
          <div class="form-wrapper">
            <div class="form-group">
              <input type="email" name="email" id="form-input" class="form-input" />
              <label for="form-input" class="form-label">Địa chỉ email</label>
            </div>
          </div>
          <div class="form-wrapper">
            <div class="form-group">
              <textarea name="textarea" class="form-area" id="form-area" class="form-area"></textarea>
              <label for="form-area" class="form-label">Nội dung</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            Xác nhận
            <i class="fa fa-arrow-right"></i>
          </button>
        </form>
      </div>
    </section>
  </main>
<?php } ?>
<?php
getFooter("layout/footer.php");
?>