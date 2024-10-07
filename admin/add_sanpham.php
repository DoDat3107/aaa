<?php 
include "header.php";
include "slider.php";
include "class/sanpham_class.php";



?>
<?php
$sanpham = new sanpham;
if ($_SERVER['REQUEST_METHOD']==='POST'){
    // var_dump($_POST,$_FILES);
    // echo '<pre>';
    // echo print_r($_POST);
    // echo '<pre>';

    $insert_sanpham = $sanpham ->insert_sanpham($_POST,$_FILES);
    
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
                                <input name="ten_sanpham" required type="text">
                                <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                                <select name="id_danhmuc" id="id_danhmuc">
                                    <option value="#">--Chọn--</option>
                                    <?php
                                    $show_danhmuc = $sanpham -> show_danhmuc();
                                    if($show_danhmuc) {
                                        while ($result = $show_danhmuc -> fetch_assoc()){

                                  
                                    ?>
                                    <option value="<?php echo $result['id_danhmuc'] ?>"><?php echo $result['ten_danhmuc'] ?></option>
                                    <?php
                                        }
                                    } 
                                    ?>
                                </select>
                                <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                                <select name="id_loaisp" id="id_loaisp">
                                    
                                    <option value="#">--Chọn--</option>
                                   
                                </select>
                                <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                                <input name="gia_sanpham" required type="text">
                                <label for="">Giá km sản phẩm <span style="color: red;">*</span></label>
                                <input name="giakm_sanpham"  type="text">
                                <label for="">Khuyến mãi <span style="color: red;">*</span></label>
                                <input name="km_sanpham"  style="width: 500px;height: 300px;" type="text">
                                <label for="">CẤU HÌNH CHUNG<span style="color: red;">*</span></label>
                                <textarea name="desc_sanpham" id="editor1" cols="30" rows="10"></textarea>
                                <label for="">SẢN PHẨM ĐẶC BIỆT<span style="color: red;">*</span></label>
                                    <div class="yn">
                                        <input name="dac_biet" type="radio" value="1">yes
                                        <input checked name="dac_biet" type="radio" value="0">no
                                    </div>
                                <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                                <input name="img_sanpham" required type="file" name="" id="">
                                <button type="submit">Thêm</button>
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
