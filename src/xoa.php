<?php
include('config.php');

$id = $_GET['id'];

$rs = mysqli_query($conn, "DELETE FROM drugs where id = '$id'");
if($rs){
    header('location: index.php');
}
else {
    header('location: errol.php');

}
?>