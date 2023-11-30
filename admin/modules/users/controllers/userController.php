<?php
require "modules/users/models/usersModel.php";
function loginUser($username, $password)
{
  global $error;
  if (isset($_POST['adminLoginButton'])) {
    $error = array();
    // Check input password
    if (empty($_POST['password'])) {
      $error['password'] = 'Không được để trống password';
    } else {
      if (!is_password($_POST['password'])) {
        $error['password'] = 'Mật khẩu không đúng định dạng';
      } else {
        $password = md5($_POST['password']);
      }
    }
    // Check input username
    if (empty($_POST['username'])) {
      $error['username'] = 'Không được để trống username';
    } else {
      $username = $_POST['username'];
    }
    # Final
    if (empty($error)) {
      if (checkLogin($username, $password)) {
        $_SESSION['is_login'] = true;
        $_SESSION['admin_login'] = $username;
        // Notify
        redirect_to();
      } else {
        if (infoUserLogin($username, $password)) {
          $infoUser = infoUserLogin($username, $password);
          $roles = $infoUser['ma_vai_tro'];
          $text = "Thông tin của tài khoản $username - vai trò ($roles) bị sai, không tồn tại hoặc sai vai trò (Cho phép: vai trò - 1)";
          echo "<script>";
          echo "alert('$text')";
          echo "</script>";
        } else {
          $error['account'] = "Thông tin tài khoản sai hoặc không tồn tại trên hệ thống";
        }
      }
    }
  }
}
function createUser($username, $email, $password, $fullname, $roles)
{
  global $error, $notify;
  if (isset($_POST['button-create-user'])) {
    $error = array();
    $notify = array();
    // Check input fullname
    if (empty($fullname)) {
      $error['fullname'] = 'Không được để trống họ tên';
    } else {
      $fullname = $_POST['fullname'];
    }
    // Check input username
    if (empty($username)) {
      $error['username'] = 'Không được để trống tên đăng nhập';
    } else {
      if (!is_username($username)) {
        $error['username'] = 'Tên đăng nhập không đúng định dạng';
      } else {
        $username = $_POST['username'];
      }
    }
    // Check input password
    if (empty($password)) {
      $error['password'] = 'Không được để trống password';
    } else {
      if (!is_password($password)) {
        $error['password'] = 'Mật khẩu không đúng định dạng';
      } else {
        $password = md5($_POST['password']);
      }
    }
    // Check input email
    if (empty($email)) {
      $error['email'] = 'Không được để trống email';
    } else {
      if (!is_email($email)) {
        $error['email'] = 'Email không đúng định dạng';
      } else {
        $email = $_POST['email'];
      }
    }
    // Check input roles
    if (empty($roles)) {
      $error['roles'] = 'Không được để trống vai trò';
    } else {
      $roles = $_POST['roles'];
    }
    # Final
    if (empty($error)) {
      if (!userExists($username, $email)) {
        $data = array(
          'ho_va_ten' => $fullname,
          'ten_dang_nhap' => $username,
          'email' => $email,
          'ma_vai_tro' => $roles,
          'mat_khau' => $password,
        );
        db_insert("khachhang", $data);
        $notify['add'] = "Thêm người dùng thành công";
      } else {
        $error['add'] = "Thêm người dùng thất bại";
      }
    }
  }
}
function updateUser($fullname, $username, $email, $roles, $active, $id)
{
  global $error, $notify;
  if (isset($_POST['button-edit-user'])) {
    $error = array();
    $notify = array();
    // Check input fullname
    if (empty($fullname)) {
      $error['fullname'] = 'Không được để trống họ tên';
    } else {
      $fullname = htmlspecialchars($fullname);
    }
    // Check input username
    if (empty($username)) {
      $error['username'] = 'Không được để trống tên đăng nhập';
    } else {
      $username = htmlspecialchars($username);
    }
    // Check input email
    if (empty($email)) {
      $error['email'] = 'Không được để trống email';
    } else {
      if (!is_email($email)) {
        $error['email'] = "Email không đúng định dạng";
      } else {
        $email = $_POST['email'];
      }
    }
    // Check input roles
    if (empty($roles)) {
      $error['roles'] = 'Không được để trống vai trò';
    } else {
      $roles = $_POST['roles'];
    }
    if (empty($active)) {
      $error['active'] = 'Không được để trống trạng thái';
    } else {
      $active = $_POST['active'];
    }
    # Final
    if (empty($error)) {
      $data = array(
        'ho_va_ten' => $fullname,
        'ten_dang_nhap' => $username,
        'email' => $email,
        'ma_vai_tro' => $roles,
        'kich_hoat' => $active,
      );
      db_update("khachhang", $data, "`id` = '{$id}'");
      $notify['add'] = "Chỉnh sửa người dùng thành công";
    } else {
      $error['add'] = "Chỉnh sửa người dùng thất bại";
    }
  }
}
function updateAdmin($email, $fullname)
{
  global $error, $notify;
  if (isset($_POST['btn-update-admin'])) {
    $error = [];
    $notify = [];
    if (empty($email)) {
      $error['email'] = 'Không được để trống email';
    } else {
      if (!is_email($email)) {
        $error['email'] = "Email không đúng định dạng";
      } else {
        $email = htmlspecialchars($email);
      }
    }
    if (empty($fullname)) {
      $error['fullname'] = "Không được để trống họ và tên";
    } else {
      $fullname = htmlspecialchars($fullname);
    }
    if (empty($error)) {
      $data = array(
        'ho_va_ten' => $fullname,
        'email' => $email,
      );
      db_update("khachhang", $data, "`email` = '{$email}'");
      $notify['update'] = "Chỉnh sửa thông tin thành công";
    } else {
      $error['update'] = "Chỉnh sửa thông tin thất bại";
    }
  }
}
function changePassword($password, $newPassword, $confirmPassword)
{
  global $error, $notify;
  if (isset($_POST['btn-password-admin'])) {
    $error = array();
    $notify = array();
    if (empty($password)) {
      $error['password'] = "Vui lòng nhập vào mật khẩu cũ";
    } else {
      if (!isExistPassword(setNameForUser(), md5($password))) {
        $error['password'] = "Mật khẩu không đúng với trên hệ thống!";
      } else {
        $password = md5($_POST['password']);
      }
    }
    if (empty($newPassword)) {
      $error['newPassword'] = "Vui lòng nhập vào mật khẩu mới";
    } else {
      if (!is_password($newPassword)) {
        $error['newPassword'] = "Mật khẩu không đúng định dạng";
      } else {
        $newPassword = md5($_POST['newPassword']);
      }
    }
    if (empty($confirmPassword)) {
      $error['confirmPassword'] = 'Vui lòng nhập lại mật khẩu mới';
    } else {
      if (!is_match_password_client($confirmPassword, 'newPassword')) {
        $error['confirmPassword'] = 'Mật khẩu nhập lại không khớp. Vui lòng nhập lại!';
      } else {
        $confirmPassword = md5($_POST['confirmPassword']);
      }
    }
    if (empty($error)) {
      $data = array(
        'mat_khau' => $newPassword
      );
      updatePassword(setNameForUser(), $data);
      $notify['update'] = "Đổi mật khẩu thành công";
    } else {
      $error['update'] = "Đổi mật khẩu thất bại";
    }
  }
}
