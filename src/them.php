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
 if(isset($_POST['btnAdd'])){
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

    $rs = mysqli_query($conn, "INSERT INTO drugs(id,name,type,barcode,dose, code, cost_price, selling_price, expiry, company_name, production_date, expiration_date, place, quantity)
                                    values('$ID','$Name','$Type','$Barcode','$Dose','$Code','$giaNhap','$giaBan','$trangThai','$Company','$ngaySX','$hanSD','$Place','$soLuong')");
    if($rs){
        $_SESSION['addSuccess'] = "<h3 class='text-success'>Thêm thành công</h3>";
        header('location: index.php');
    }
    else {
        header('location: errol.php');
    }
}
?>



    <div class="container">
     <form action="" method="POST">
     <h3 class="text-success text-center">Thêm dược phẩm</h3>
        <div class="form-floating mb-3">
            <input name="ID" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">ID</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Name" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Tên dược phẩm</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Type" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Loại</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Barcode" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Barcode</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Dose" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Liều lượng</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Code" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">code</label>
        </div>
        <div class="form-floating mb-3">
            <input name="giaNhap" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Giá nhập</label>
        </div>
        <div class="form-floating mb-3">
            <input name="giaBan" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Giá bán</label>
        </div>
        <div class="form-floating mb-3">
            <input name="trangThai" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Trạng thái</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Company" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Công ty</label>
        </div>
        <div class="form-floating mb-3">
            <input name="ngaySX" type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Ngày sản xuất</label>
        </div>
        <div class="form-floating mb-3">
            <input name="hanSD" type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Hạn sử dụng</label>
        </div>
        <div class="form-floating mb-3">
            <input name="Place" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nơi sản xuất</label>
        </div>
        <div class="form-floating mb-3">
            <input name="soLuong" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Số lượng</label>
        </div>
        <button name="btnAdd" class="btn btn-success">Thêm</button>
     </form>
    </div>
</body>

</html>