<?php
$message_error = "";
if (isset($_POST['add'])) {
  $tennv = $_POST['tennv'];
  $matkhau = $_POST['matkhau'];
  $chucvu = $_POST['chucvu'];
  $sdt = $_POST['sdt'];
  $diachi = $_POST['diachi'];
  $insert_query = "INSERT INTO nhanvien (HoTenNV, ChucVu, DiaChi, SoDienThoai, NVpass) VALUES ('$tennv','$chucvu','$diachi','$sdt','$matkhau')";
  $insert_success = db_insert($conn, $insert_query);

  if (!$insert_success) {
    $message_error = "<div class='alert alert-danger' role='alert'>
      Thêm nhân viên thất bại.</div>";
  } else {
    $message_error = '<div class="alert alert-success" role="alert">
    Thêm nhân viên mới thành công.
  </div>';
  }
}


?>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Thêm mới nhân viên</h4>
      <p class="card-description">
        <?php echo $message_error; ?>
      </p>
      <form action="" method="POST">
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="tennv">Tên nhân viên </label>
                <span class="text-warning" data-toggle="tooltip" data-placement="left" title="" data-original-title="Thông tin bắt buộc nhập">(*)</span>
                <input type="text" class="form-control" name="tennv" id="tennv" placeholder="Tên nhân viên">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="matkhau">Mật khẩu </label>
                <span class="text-warning" data-toggle="tooltip" data-placement="left" title="" data-original-title="Thông tin bắt buộc nhập">(*)</span>
                <input type="password" class="form-control" name="matkhau" id="matkhau" placeholder="Mật khẩu">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="chucvu">Chức vụ</label>
                <span class="text-warning" data-toggle="tooltip" data-placement="left" title="" data-original-title="Thông tin bắt buộc nhập">(*)</span>
                <input type="text" name="chucvu" class="form-control" placeholder="Chức vụ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="sdt">Số điện thoại</label>
                <span class="text-warning" data-toggle="tooltip" data-placement="left" title="" data-original-title="Thông tin bắt buộc nhập">(*)</span>
                <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label" for="diachi">Địa chỉ</label>
                <span class="text-warning" data-toggle="tooltip" data-placement="left" title="" data-original-title="Thông tin bắt buộc nhập">(*)</span>
                <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Địa chỉ">
              </div>
            </div>
          </div>
        </div>
        <button type="submit" name="add" class="btn btn-primary">Thêm</button>
        <a href="nhanvien.php" class="btn btn-light">Huỷ bỏ</a>
      </form>
    </div>
  </div>
</div>