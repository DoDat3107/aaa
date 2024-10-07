<?php 
include "database.php";
?>


<?php

class sanpham{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();

    }
    public function show_danhmuc(){
        $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_loaisp(){
        //$query = "SELECT * FROM tbl_loaisp ORDER BY id_loaisp DESC";
         $query= "SELECT tbl_loaisp.*,tbl_danhmuc.ten_danhmuc FROM tbl_loaisp INNER JOIN tbl_danhmuc ON tbl_loaisp.id_danhmuc = tbl_danhmuc.id_danhmuc
         ORDER BY tbl_loaisp.id_loaisp DESC";
         $result = $this ->db->select($query);
         return $result;
     }
     public function show_sanpham(){
       // $query = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
        $query= "SELECT tbl_sanpham.*,tbl_loaisp.ten_loaisp,tbl_danhmuc.ten_danhmuc FROM tbl_sanpham INNER JOIN tbl_loaisp ON tbl_sanpham.id_loaisp = tbl_loaisp.id_loaisp INNER JOIN tbl_danhmuc ON tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
        ORDER BY tbl_sanpham.id_sanpham DESC";
        $result = $this ->db->select($query);
        return $result;
        
    }
   
     
  
     
     public function show_loaisp_ajax($id_danhmuc){
        $query = "SELECT * FROM tbl_loaisp WHERE id_danhmuc = '$id_danhmuc'";
        $result = $this ->db->select($query);
        return $result;
    }


    public function insert_sanpham(){
        $ten_sanpham = $_POST['ten_sanpham'];
        $id_danhmuc = $_POST['id_danhmuc'];
        $id_loaisp = $_POST['id_loaisp'];
        $gia_sanpham = $_POST['gia_sanpham'];
        $giakm_sanpham = $_POST['giakm_sanpham'];
        $km_sanpham = $_POST['km_sanpham'];
        $desc_sanpham = $_POST['desc_sanpham'];
        $dac_biet=$_POST['dac_biet'];
        $img_sanpham = $_FILES['img_sanpham']['name'];
        move_uploaded_file($_FILES['img_sanpham']['tmp_name'],"uploads/".$_FILES['img_sanpham']['name']);
        $query = "INSERT INTO tbl_sanpham (
            ten_sanpham,
            id_danhmuc,
            id_loaisp,
            gia_sanpham,
            giakm_sanpham,
            km_sanpham,
            desc_sanpham,
            dac_biet,
            img_sanpham) VALUES (
            '$ten_sanpham',
            '$id_danhmuc',
            '$id_loaisp',
            '$gia_sanpham',
            '$giakm_sanpham',
            '$km_sanpham',
            '$desc_sanpham',
            '$dac_biet',
            '$img_sanpham')";
        $result = $this ->db->insert($query);
        return $result;

    }
    public function get_sanpham($id_sanpham){
        $query = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id_sanpham'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function update_sanpham($id_danhmuc,$ten_sanpham,$id_sanpham,$id_loaisp,$gia_sanpham,$giakm_sanpham,$km_sanpham,$desc_sanpham,$dac_biet,$img_sanpham){
        if($img_sanpham!="")
            $query = "UPDATE tbl_sanpham SET ten_sanpham = '$ten_sanpham',id_danhmuc='$id_danhmuc',id_loaisp='$id_loaisp',gia_sanpham='$gia_sanpham',giakm_sanpham='$giakm_sanpham',km_sanpham='$km_sanpham',desc_sanpham='$desc_sanpham',dac_biet='$dac_biet',img_sanpham='$img_sanpham' WHERE id_sanpham = '$id_sanpham' ";  
        else  
            $query = "UPDATE tbl_sanpham SET ten_sanpham = '$ten_sanpham',id_danhmuc='$id_danhmuc',id_loaisp='$id_loaisp',gia_sanpham='$gia_sanpham',giakm_sanpham='$giakm_sanpham',km_sanpham='$km_sanpham',desc_sanpham='$desc_sanpham',dac_biet='$dac_biet' WHERE id_sanpham = '$id_sanpham' ";
        $result = $this ->db->update($query);
        header('Location:list_sanpham.php');
        return $result;
    }  
    
    public function delete_sanpham($id_sanpham){
        $query="DELETE FROM tbl_sanpham WHERE id_sanpham = '$id_sanpham' ";
        $result = $this ->db->delete($query);
        header('Location:list_sanpham.php');
        return $result; 

    }
}  

?>