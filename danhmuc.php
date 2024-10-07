<?php
$dm="SELECT * FROM tbl_danhmuc WHERE id_danhmuc=37" ;
$bien=mysqli_query($conn,$dm);
$ten=mysqli_fetch_array($bien);

?>
<?php
$dm1="SELECT * FROM tbl_danhmuc WHERE id_danhmuc=38" ;
$bien1=mysqli_query($conn,$dm1);
$ten1=mysqli_fetch_array($bien1);

?>
<?php
$dm2="SELECT * FROM tbl_danhmuc WHERE id_danhmuc=39 " ;
$bien2=mysqli_query($conn,$dm2);
$ten2=mysqli_fetch_array($bien2);

?>
<?php
$dm3="SELECT * FROM tbl_danhmuc WHERE id_danhmuc=40" ;
$bien3=mysqli_query($conn,$dm3);
$ten3=mysqli_fetch_array($bien3);

?>
<?php
$dm4="SELECT * FROM tbl_danhmuc WHERE id_danhmuc=41" ;
$bien4=mysqli_query($conn,$dm4);
$ten4=mysqli_fetch_array($bien4);

?>

<?php
$sql1="SELECT * FROM tbl_loaisp WHERE id_danhmuc=37" ;
$query1=mysqli_query($conn,$sql1);

?>
<?php
$sql2="SELECT * FROM tbl_loaisp WHERE id_danhmuc=38" ;
$query2=mysqli_query($conn,$sql2);

?>
<?php
$sql3="SELECT * FROM tbl_loaisp WHERE id_danhmuc=39" ;
$query3=mysqli_query($conn,$sql3);

?>
<?php
$sql4="SELECT * FROM tbl_loaisp WHERE id_danhmuc=40" ;
$query4=mysqli_query($conn,$sql4);

?>
<?php
$sql5="SELECT * FROM tbl_loaisp WHERE id_danhmuc=41" ;
$query5=mysqli_query($conn,$sql5);

?>



<div class="main__menu">
                    
                    <div class="item"><i class="fa-solid fa-laptop-medical"></i><?php echo $ten['ten_danhmuc']; ?><i style="margin-left: 10px;" class="fa-solid fa-caret-down" ></i>
                        <div class="menu_laptop">
                            <?php
                             while($row1=mysqli_fetch_array($query1)){
                            ?>
                          
                           
                            <div><a href="index.php?page_layout=danhsachsp&id_loaisp=<?php echo $row1['id_loaisp'] ?>"><?php echo $row1['ten_loaisp']; ?></a></div>
                            <?php
                             }
                            ?>
                        </div>
                    </div>                      
                    <div class="item"><i class="fa-solid fa-computer"></i> <?php echo $ten1['ten_danhmuc']; ?><i style="margin-left: 10px;" class="fa-solid fa-caret-down"></i>
                        <div class="menu_maytinhdeban">
                        <?php
                             while($row2=mysqli_fetch_array($query2)){
                            ?>
                          
                           
                            <div><a href="index.php?page_layout=danhsachsp&id_loaisp=<?php echo $row2['id_loaisp'] ?>"><?php echo $row2['ten_loaisp']; ?></a></div>
                            <?php
                             }
                            ?>
                        </div>
                    </div>
                    <div class="item"><i class="fa-solid fa-tv"></i><?php echo $ten2['ten_danhmuc']; ?><i  style="margin-left: 10px;"class="fa-solid fa-caret-down"></i>
                        <div class="menu_manhinhmaytinh">
                        <?php
                             while($row3=mysqli_fetch_array($query3)){
                            ?>
                          
                           
                            <div><a href="index.php?page_layout=danhsachsp&id_loaisp=<?php echo $row3['id_loaisp'] ?>"><?php echo $row3['ten_loaisp']; ?></a></div>
                            <?php
                             }
                            ?>

                        </div>
                    </div>
                    <div class="item"><i class="fa-solid fa-headphones"></i><?php echo $ten3['ten_danhmuc']; ?><i style="margin-left: 10px;" class="fa-solid fa-caret-down"></i>
                        <div class="menu_linhkien">
                        <?php
                             while($row4=mysqli_fetch_array($query4)){
                            ?>
                          
                           
                            <div><a href="index.php?page_layout=danhsachsp&id_loaisp=<?php echo $row4['id_loaisp'] ?>"><?php echo $row4['ten_loaisp']; ?></a></div>
                            <?php
                             }
                            ?>
                        </div>
                    </div>
                    <div class="item"><i class="fa-sharp fa-solid fa-fan"></i><?php echo $ten4['ten_danhmuc']; ?><i style="margin-left: 10px;" class="fa-solid fa-caret-down"></i>
                        <div class="menu_phukien">
                        <?php
                             while($row5=mysqli_fetch_array($query5)){
                            ?>
                          
                           
                            <div><a href="index.php?page_layout=danhsachsp&id_loaisp=<?php echo $row5['id_loaisp'] ?>"><?php echo $row5['ten_loaisp']; ?></a></div>
                            <?php
                             }
                            ?>
                        </div>

                    </div>
                </div>