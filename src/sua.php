<?php
session_start();
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Quản lý dược phẩm</title>
</head>

<body>
<?php
    $result = mysqli_query($conn, "SELECT * FROM drugs");
    $row = mysqli_fetch_assoc($result);

?>

<?php
 if(isset($_POST['btnSua'])){
     $id = $_GET['id'];
    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Type = $_POST['Type'];
    $Barcode = $_POST['Barcode'];
    $Dose = $_POST['Dose'];
    $Code = $_POST['Code'];
    $giaNhap = $_POST['giaNhap'];
    $giaBan = $_POST['giaBan'];
    $trangThai = $_POST['trangThai'];
    $Company = $_POST['Company'];
    $ngaySX = $_POST['ngaySX'];
    $hanSD = $_POST['hanSD'];
    $Place = $_POST['Place'];
    $soLuong = $_POST['soLuong'];

    $rs = mysqli_query($conn, "UPDATE drugs set id = '$ID',name = '$Name',type = '$Type',barcode = '$Barcode',dose = '$Dose',
         code = '$Code', cost_price = '$giaNhap', selling_price = '$giaBan', expiry = '$trangThai', company_name = '$Company', production_date = '$ngaySX', expiration_date = '$hanSD', place = '$Place', quantity = '$soLuong'
         where id = '$id'");
  if($rs){
        $_SESSION['updateSuccess'] = "<h3 class='text-success'>Sửa thành công</h3>";
        header('location: index.php');
    }
    else {
        header('location: errol.php');
    }
}
?>



    <div class="container">
     <form action="" method="POST">
     <h3 class="text-success text-center">Cập nhật dược phẩm</h3>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['id']?>" name="ID" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">ID</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['name']?>" name="Name" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Tên dược phẩm</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['type']?>" name="Type" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Loại</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['barcode']?>" name="Barcode" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Barcode</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['dose']?>" name="Dose" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Liều lượng</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['code']?>" name="Code" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">code</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['cost_price']?>" name="giaNhap" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Giá nhập</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['selling_price']?>" name="giaBan" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Giá bán</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['expiry']?>" name="trangThai" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Trạng thái</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['company_name']?>" name="Company" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Công ty</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['production_date']?>" name="ngaySX" type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Ngày sản xuất</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['expiration_date']?>" name="hanSD" type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Hạn sử dụng</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['place']?>" name="Place" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nơi sản xuất</label>
        </div>
        <div class="form-floating mb-3">
            <input value="<?php echo $row['quantity']?>" name="soLuong" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Số lượng</label>
        </div>
        <button name="btnSua" class="btn btn-success">Cập nhật</button>
     </form>
    </div>
</body>

</html>