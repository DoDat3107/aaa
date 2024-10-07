<?php
include "class/sanpham_class.php";
$sanpham = new sanpham;
$id_danhmuc = $_GET['id_danhmuc'];


?>




    <?php
    $show_loaisp_ajax = $sanpham -> show_loaisp_ajax($id_danhmuc);
    if($show_loaisp_ajax){ while ($result = $show_loaisp_ajax -> fetch_assoc()){    

                                  
    ?>
    <option value="<?php echo $result['id_loaisp'] ?>"><?php echo $result['ten_loaisp'] ?></option>
    <?php
        }
    } 
    ?>