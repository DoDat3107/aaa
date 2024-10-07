<?php 
include "header.php";
include "slider.php";
include "class/danhmuc_class.php";


?>
<?php
$danhmuc = new danhmuc;
if (!isset($_GET['id_danhmuc']) or $_GET['id_danhmuc']==NULL){
    echo "<script>window.location = 'list_danhmuc.php </script>";

} 
else {
    $id_danhmuc = $_GET['id_danhmuc'];
}
    $get_danhmuc = $danhmuc -> get_danhmuc ($id_danhmuc);
    if($get_danhmuc){
        $result = $get_danhmuc -> fetch_assoc();  
    }

?>
<?php

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $ten_danhmuc = $_POST['ten_danhmuc'];
    $update_danhmuc = $danhmuc ->update_danhmuc( $ten_danhmuc,$id_danhmuc);
}
?>

<div class="database">
                        <div class="add_danhmuc">
                            <h1>thêm danh mục</h1>
                            <form action="" method="POST">
                                <input required name="ten_danhmuc" type="text" placeholder="Nhập tên danh mục" value="<?php echo $result['ten_danhmuc'] ?>">
                                <button type="submit">SỬA</button>
                            </form>
                        </div>

                            </p>
                        </div>
                        
                    </div>
                </div>
              

                </div>
            </div>
                    
                     
            
    
            
        
             
    </body>
    
</html> 
