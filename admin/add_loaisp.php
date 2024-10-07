<?php 
include "header.php";
include "slider.php";
include "class/loaisp_class.php";


?>
<?php
$loaisp = new loaisp;
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $id_danhmuc = $_POST['id_danhmuc'];
    $ten_loaisp =  $_POST['ten_loaisp'];
    $insert_loaisp = $loaisp ->insert_loaisp($id_danhmuc,$ten_loaisp);
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

                                    <option value="<?php echo $result['id_danhmuc'] ?>"><?php echo $result['ten_danhmuc'] ?></option>
                                    <?php
                                          }
                                        
                                        }
                                    ?>
                                    
                                </select>
                                
                                <input required name="ten_loaisp" type="text" placeholder="Nhập tên loại sản phẩm">
                                <button type="submit">Thêm</button>
                            </form>
                        </div>
                
                        
                    </div>
               
            </div>
                    
                     
            
    
            
        
             
    </body>
    
</html> 
