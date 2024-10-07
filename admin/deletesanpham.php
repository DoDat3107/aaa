<?php
include "class/sanpham_class.php";
$sanpham = new sanpham;

?>

<?php
if (!isset($_GET['id_sanpham']) or $_GET['id_sanpham']==NULL){
    echo "<script>window.location = 'list_sanpham.php </script>";

} 
else {
    $id_sanpham = $_GET['id_sanpham'];

}
//lệnh xóa
    $delete_sanpham = $sanpham -> delete_sanpham($id_sanpham);
?>

