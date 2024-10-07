<?php 
include "header.php";
include "slider.php";
include "class/danhmuc_class.php";


?>
<?php
$danhmuc = new danhmuc;
$show_danhmuc = $danhmuc ->show_danhmuc();  
?>

                    <div class="database">
                
                        <div class="danhsach_danhmuc">
                            <h1>Danh sách danh mục</h1>
                            <table>
                                <tr>
                                    <th>Stt</th>
                                    <th>Id danh mục</th>
                                    <th>Danh mục</th>
                                    <th>hành động</th>
                                </tr>
                                <?php
                                if($show_danhmuc){
                                        $i=0;
                                    while($result = $show_danhmuc->fetch_assoc()) {
                                        $i++;
                                
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $result['id_danhmuc'] ?></td>
                                    <td><?php echo $result['ten_danhmuc'] ?></td>
                                    <td><a href="editdanhmuc.php?id_danhmuc=<?php echo $result['id_danhmuc'] ?>"><i style="padding-right: 10px;color: green;" class="fa-solid fa-wrench"></i></a> | <a href="deletedanhmuc.php?id_danhmuc=<?php echo $result['id_danhmuc'] ?>"><i style="padding-left: 10px;color: red;" class="fa-solid fa-trash"></i></a></td>
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
