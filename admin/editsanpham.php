<?php 
include "header.php";
include "slider.php";
include "class/sanpham_class.php";
$sanpham = new sanpham;

?>
<?php
//lệnh chỉnh sửa
    $id_sanpham = $_GET['id_sanpham'];
    $get_sanpham = $sanpham -> get_sanpham($id_sanpham);
    if($get_sanpham){
        $resultB = $get_sanpham -> fetch_assoc();  
    }

?>
<?php

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $id_danhmuc = $_POST['id_danhmuc'];
    $ten_sanpham = $_POST['ten_sanpham'];
    $id_loaisp = $_POST['id_loaisp'];
    $gia_sanpham = $_POST['gia_sanpham'];
    $giakm_sanpham = $_POST['giakm_sanpham'];
    $km_sanpham = $_POST['km_sanpham'];
    $desc_sanpham = $_POST['desc_sanpham'];
    $dac_biet=$_POST['dac_biet'];
    $img_sanpham = $_FILES['img_sanpham']['name'];
    $update_sanpham = $sanpham ->update_sanpham($id_danhmuc,$ten_sanpham,$id_sanpham,$id_loaisp,$gia_sanpham,$giakm_sanpham,$km_sanpham,$desc_sanpham,$dac_biet,$img_sanpham);
}
?>
<style>
    .yn {
        display: flex;
        width: 200px;
    }


</style>


   
<div class="database">
                    <div class="add_sanpham">
                            <h1>thêm sản phẩm</h1>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                                <input name="ten_sanpham" required type="text"  value="<?php echo $resultB['ten_sanpham'] ?>">
                                <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                                <select name="id_danhmuc" id="id_danhmuc">
                                    <option value="#">--Chọn--</option>
                                    <?php
                                    $show_danhmuc = $sanpham -> show_danhmuc();
                                    if($show_danhmuc) {
                                        while ($result = $show_danhmuc -> fetch_assoc()){   

                                  
                                    ?>
                                    <option <?php if($resultB['id_danhmuc']==$result['id_danhmuc']) {echo "SELECTED";} ?> value="<?php echo $result['id_danhmuc'] ?>"><?php echo $result['ten_danhmuc'] ?></option>
                                    <?php
                                        }
                                    } 
                                    ?>
                                </select>
                                <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                                <select name="id_loaisp" id="id_loaisp">
                                    
                                    <option value="#">--Chọn--</option>
                                    <?php
                                    $show_loaisp = $sanpham -> show_loaisp();
                                    if($show_loaisp) {
                                        while ($result = $show_loaisp -> fetch_assoc()){

                                  
                                    ?>
                                    <option <?php if($resultB['id_loaisp']==$result['id_loaisp']) {echo "SELECTED";} ?> value="<?php echo $result['id_loaisp'] ?>"><?php echo $result['ten_loaisp'] ?></option>
                                    <?php
                                        }
                                    } 
                                    ?>
                                   
                                </select>
                                <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                                <input name="gia_sanpham" required type="text" value="<?php echo $resultB['gia_sanpham'] ?>">
                                <label for="">Giá km sản phẩm <span style="color: red;">*</span></label>
                                <input name="giakm_sanpham" type="text" value="<?php echo $resultB['giakm_sanpham'] ?>">
                                <label for="">Khuyến mãi <span style="color: red;">*</span></label>
                                <input name="km_sanpham" style="width: 500px;height: 300px;" type="text" value="<?php echo $resultB['km_sanpham'] ?>">
                                <label for="">CẤU HÌNH CHUNG<span style="color: red;">*</span></label>
                                <textarea name="desc_sanpham" id="editor1" cols="30" rows="10" ><?php echo $resultB['desc_sanpham'] ?></textarea>
                                <label for="">SẢN PHẨM ĐẶC BIỆT<span style="color: red;">*</span></label>
                                    <div class="yn">
                                        <input name="dac_biet" type="radio" value="1" <?php if($resultB['dac_biet']==1){echo 'checked';} ?>>yes
                                        <input checked name="dac_biet" type="radio" value="0" <?php if($resultB['dac_biet']==0){echo 'checked';} ?>>no
                                    </div>
                                <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                                <input name="img_sanpham"  type="file" name="" id="" value="<?php echo $resultB['img_sanpham']?>">
                                <img name="img_sanpham" src="uploads/<?php echo $resultB['img_sanpham'] ?>" alt="" width="100" height="100">
                                <button type="submit">Sửa</button>
                            </form>
                        </div>
                
                        
                    </div>
               
            </div>
                    
                     
            
    
            
        
             
    </body>


    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
         // instance, using default configuration.
         CKEDITOR.replace( 'editor1', {
         filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
         filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
         filebrowserWindowWidth: '1000',
         filebrowserWindowHeight: '700'
                
} );
    </script>
    <script>
        $(document).ready(function(){
            $("#id_danhmuc").change(function(){
                // alert($(this).val())
                var x = $(this).val()
                $.get("add_sanpham_ajax.php",{id_danhmuc:x},function(data){
                    $("#id_loaisp").html(data);
                    
                })
            })
        })
          
        
     

    
    </script>
    
</html> 
