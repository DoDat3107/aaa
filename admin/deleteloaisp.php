<?php
include "class/loaisp_class.php";
$loaisp = new loaisp;

?>

<?php
if (!isset($_GET['id_loaisp']) or $_GET['id_loaisp']==NULL){
    echo "<script>window.location = 'list_loaisp.php </script>";

} 
else {
    $id_loaisp = $_GET['id_loaisp'];

}
//lệnh xóa
    $delete_loaisp = $loaisp -> delete_loaisp($id_loaisp);
?>

