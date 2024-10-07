<?php 
include "header.php";
include "slider.php";
include "class/loaisp_class.php";
$loaisp = new loaisp;

?>
<?php
//lệnh chỉnh sửa
    $id_loaisp = $_GET['id_loaisp'];
    $get_loaisp = $loaisp -> get_loaisp ($id_loaisp);
    if($get_loaisp){
        $resultA = $get_loaisp -> fetch_assoc();  
    }

?>
<?php

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $id_danhmuc = $_POST['id_danhmuc'];
    $ten_loaisp = $_POST['ten_loaisp'];
    $update_loaisp = $loaisp ->update_loaisp($id_danhmuc,$ten_loaisp,$id_loaisp);
}
?>

<style>
    select{
        height: 30px;
        width: 200px;
    }
    input {
        display: block;
    }    
</style>

                    <div class="database">
                        <div class="add_danhmuc">
                            <h1>thêm loại sản phẩm</h1>
                            <form action="" method="POST">
                                <select name="id_danhmuc" id="">
                                    <option value="#">---Chọn danh mục</option>
                                    <?php
                                    $show_danhmuc = $loaisp ->show_danhmuc();
                                        if($show_danhmuc){while($result = $show_danhmuc -> fetch_assoc()){

                                     
                                    ?>

                                    <option <?php if($resultA['id_danhmuc']==$result['id_danhmuc']) {echo "SELECTED";} ?> value="<?php echo $result['id_danhmuc'] ?>"><?php echo $result['ten_danhmuc'] ?></option>
                                    <?php
                                          }
                                        
                                        }
                                    ?>
                                    
                                </select>
                                
                                <input required name="ten_loaisp" type="text" placeholder="Nhập tên loại sản phẩm" 
                                value="<?php echo $resultA['ten_loaisp'] ?>">
                                <button type="submit">SỬA</button>
                            </form>
                        </div>
                
                        
                    </div>
               
            </div>
                    
                     
            
    
            
        
             
    </body>
    
</html> 