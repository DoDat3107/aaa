<?php
include "class/danhmuc_class.php";
$danhmuc = new danhmuc;

?>

<?php
if (!isset($_GET['id_danhmuc']) or $_GET['id_danhmuc']==NULL){
    echo "<script>window.location = 'list_danhmuc.php </script>";

} 
else {
    $id_danhmuc = $_GET['id_danhmuc'];

}
    $delete_danhmuc = $danhmuc -> delete_danhmuc($id_danhmuc);
?>

