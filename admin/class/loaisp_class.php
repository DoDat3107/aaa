<?php 
include "database.php";
?>


<?php

class loaisp{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();

    }
    public function insert_loaisp($id_danhmuc,$ten_loaisp){
        $query = "INSERT INTO tbl_loaisp (id_danhmuc,ten_loaisp) VALUES ('$id_danhmuc','$ten_loaisp')";
        $result = $this ->db->Insert($query);
        return $result;

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
    public function delete_loaisp($id_loaisp){
        $query="DELETE FROM tbl_loaisp WHERE id_loaisp = '$id_loaisp' ";
        $result = $this ->db->delete($query);
        header('Location:list_loaisp.php');
        return $result; 

    }
    
    public function get_loaisp($id_loaisp){
        $query = "SELECT * FROM tbl_loaisp WHERE id_loaisp = '$id_loaisp'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function update_loaisp($id_danhmuc,$ten_loaisp,$id_loaisp){
        $query = "UPDATE tbl_loaisp SET ten_loaisp = '$ten_loaisp',id_danhmuc='$id_danhmuc'  WHERE id_loaisp = '$id_loaisp' ";
        $result = $this ->db->update($query);
        header('Location:list_loaisp.php');
        return $result;
    }  
   

}

?>