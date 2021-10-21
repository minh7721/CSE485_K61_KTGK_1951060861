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
    <div class="container">
        <h2 class="text-info text-center">Quản lý dược phẩm</h2>
        <a href="them.php"><button class="btn btn-success mt-5">Thêm</button></a>
        <?php
        if (isset($_SESSION['addSuccess'])) {
            echo $_SESSION['addSuccess'];
            unset($_SESSION['addSuccess']);
        }
        if (isset($_SESSION['deleteSuccess'])) {
            echo $_SESSION['deleteSuccess'];
            unset($_SESSION['deleteSuccess']);
        }
        if (isset($_SESSION['updateSuccess'])) {
            echo $_SESSION['updateSuccess'];
            unset($_SESSION['updateSuccess']);
        }
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID thuốc</th>
                    <th scope="col">Tên thuốc</th>
                    <th scope="col">Loại thuốc</th>
                    <th scope="col">Hạn sử dụng</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM drugs";
                $rs = mysqli_query($conn, $sql);
                if (mysqli_num_rows($rs) > 0) {
                    while ($row = mysqli_fetch_assoc($rs)) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['expiration_date']; ?></td>
                            <td>
                                <a class="ms-3" href="chitiet.php?id=<?php echo $row['id']?>"><button class="btn btn-info">Thông tin chi tiết</button></a>
                                <a class="ms-3 fs-5" href="sua.php?id=<?php echo $row['id'] ?>"><i class="fas fa-user-edit"></i></a>
                                <a class="ms-3 fs-5" href="xoa.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>