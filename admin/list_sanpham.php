<?php 
include "header.php";
include "slider.php";
include "class/sanpham_class.php";


?>
<?php
$sanpham = new sanpham;
$show_sanpham = $sanpham ->show_sanpham();  
?>

<style>
    table th,td{
        width: auto;
        height: auto;  
    }
</style>


                    <div class="database">
            
                        <div class="danhsach_danhmuc">
                            <h1>Danh sách sản phẩm</h1> 
                            <table>
                                <tr>
                                    <th>Stt</th>
                                    <th>Id sản phẩm</th>
                                    <th>Id loại sản phẩm</th>
                                    <th>Id danh mục</th>
                                    <th>Danh mục</th>
                                    <th>loại sản phẩm</th>
                                    <th>tên sản phẩm</th>
                                    <th>giá </th>
                                    <th>khuyến mãi</th>
                                    <th>cấu hình </th>
                                    <th>hình ảnh</th>
                                    <th>hành động</th>
                                </tr>
                                <?php
                                if($show_sanpham){
                                        $i=0;
                                    while($result = $show_sanpham->fetch_assoc()) {
                                        $i++;

                                        
                                
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $result['id_sanpham'] ?></td>
                                    <td><?php echo $result['id_loaisp'] ?></td>
                                    <td><?php echo $result['id_danhmuc'] ?></td>
                                    <td><?php echo $result['ten_danhmuc'] ?></td>
                                    <td><?php echo $result['ten_loaisp'] ?></td>
                                    <td><?php echo $result['ten_sanpham'] ?></td>
                                    <td><?php echo $result['gia_sanpham'] ?></td>
                                    <td><?php echo $result['km_sanpham'] ?></td>
                                    <td><?php echo $result['desc_sanpham'] ?></td>
                                    <td><img src="uploads/<?php echo $result['img_sanpham'] ?>" alt="" width="100" height="100"></td>
                                    <td style="width:100px"><a href="editsanpham.php?id_sanpham=<?php echo $result['id_sanpham'] ?>"><i style="padding-right: 10px;color: green;" class="fa-solid fa-wrench"></i></a> | <a href="deletesanpham.php?id_sanpham=<?php echo $result['id_sanpham'] ?>"><i style="padding-left: 10px;color: red;" class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                <?php   
                                     }
                                }
                                ?>
                            </table>
                        </div>  
                        
                        
                    </div>
                     
            
    
            
        
             
    </body>
    
</html> 
