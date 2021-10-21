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
        <a href="index.php"><button class="btn btn-success mt-5">Trang chủ</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Dose</th>
                    <th scope="col">Code</th>
                    <th scope="col">Cost Price</th>
                    <th scope="col">Selling Price</th>
                    <th scope="col">Expiry</th>
                    <th scope="col">Company</th>
                    <th scope="col">Production Date</th>
                    <th scope="col">Expiration Date</th>
                    <th scope="col">Place</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('config.php');
                $id = $_GET['id'];
                $rs2 = mysqli_query($conn, "SELECT * FROM drugs where id = '$id'");
                $row2 = mysqli_fetch_assoc($rs2);
                if (mysqli_num_rows($rs2) > 0) {
                ?>
                        <tr>
                        <th scope="row"><?php echo $row2['id']?></th>
                        <td><?php echo $row2['name']?></td>
                        <td><?php echo $row2['type']?></td>
                        <td><?php echo $row2['barcode']?></td>
                        <td><?php echo $row2['dose']?></td>
                        <td><?php echo $row2['code']?></td>
                        <td><?php echo $row2['cost_price']?></td>
                        <td><?php echo $row2['selling_price']?></td>
                        <td><?php echo $row2['expiry']?></td>
                        <td><?php echo $row2['company_name']?></td>
                        <td><?php echo $row2['production_date']?></td>
                        <td><?php echo $row2['expiration_date']?></td>
                        <td><?php echo $row2['place']?></td>
                        <td><?php echo $row2['quantity']?></td>
                        </tr>
                <?php
                }
        
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>