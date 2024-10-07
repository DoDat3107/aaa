<?php 
include "header.php";
include "slider.php";
include "class/danhmuc_class.php";


?>
<?php
$danhmuc = new danhmuc;
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $ten_danhmuc = $_POST['ten_danhmuc'];
    $insert_danhmuc = $danhmuc ->insert_danhmuc( $ten_danhmuc);
}
?>

                    <div class="database">
                        <div class="add_danhmuc">
                            <h1>thêm danh mục</h1>
                            <form action="" method="POST">
                                <input required name="ten_danhmuc" type="text" placeholder="Nhập tên danh mục">
                                <button type="submit">Thêm</button>
                            </form>
                        </div>
                
                        
                    </div>
               
            </div>
                    
                     
            
    
            
        
             
    </body>
    
</html> 
