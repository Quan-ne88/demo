<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
$listUsers = getListUsers();
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2 class="mainWrapper-heading">Quản lý người dùng</h2>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Danh sách người dùng
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table" class="table table-striped data-table w-100">
                  <thead>
                    <tr>
                      <th>ÌD khách hàng</th>
                      <th>Tên đăng nhập</th>
                      <th>Email</th>
                      <th>Họ và tên</th>
                      <th>Vai trò</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($listUsers)) {
                      foreach ($listUsers as $item) {
                    ?>
                        <tr>
                          <td><?php echo $item['id'] ?></td>
                          <td><?php echo $item['ten_dang_nhap'] ?></td>
                          <td><?php echo $item['email'] ?></td>
                          <td><?php echo $item['ho_va_ten'] ?></td>
                          <td><?php echo $roles = (int)$item['ma_vai_tro'] === 1 ? "Admin" : "User" ?></td>
                          <td>
                            <a href="<?php echo $item['urlEdit'] ?>" class="btn btn-primary">Sửa</a>
                            <a href="<?php echo $item['urlAdd'] ?>" class="btn btn-secondary">Thêm</a>
                            <a href="<?php echo $item['urlDelete'] ?>" class="btn btn-danger">Ngừng active</a>
                          </td>
                        </tr>
                    <?php  }
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<!--Main layout-->
<?php
getFooter("layout/footer.php")
?>