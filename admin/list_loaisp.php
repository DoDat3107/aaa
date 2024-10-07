<?php 
include "header.php";
include "slider.php";
include "class/loaisp_class.php";


?>
<?php
$loaisp = new loaisp;
$show_loaisp = $loaisp ->show_loaisp();  
?>

<style>
    table th,td{
        width: auto;
        height: auto;  
    }
</style>


                    <div class="database">
            
                        <div class="danhsach_danhmuc">
                            <h1>Danh sách loại sản phẩm</h1> 
                            <table>
                                <tr>
                                    <th>Stt</th>
                                    <th>Id loại sản phẩm</th>
                                    <th>Id danh mục</th>
                                    <th>tên danh mục</th>
                                    <th>loại sản phẩm</th>
                                    <th>hành động</th>
                                </tr>
                                <?php
                                if($show_loaisp){
                                        $i=0;
                                    while($result = $show_loaisp->fetch_assoc()) {
                                        $i++;
                                
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $result['id_loaisp'] ?></td>
                                    <td><?php echo $result['id_danhmuc'] ?></td>
                                    <td><?php echo $result['ten_danhmuc'] ?></td>
                                    <td><?php echo $result['ten_loaisp'] ?></td>
                                    <td><a href="editloaisp.php?id_loaisp=<?php echo $result['id_loaisp'] ?>"><i style="padding-right: 10px;color: green;" class="fa-solid fa-wrench"></i></a> | <a href="deleteloaisp.php?id_loaisp=<?php echo $result['id_loaisp'] ?>"><i style="padding-left: 10px;color: red;" class="fa-solid fa-trash"></i></a></td>
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
