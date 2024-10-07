<?php 
include "database.php";
?>


<?php

class danhmuc{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();

    }
    public function insert_danhmuc($ten_danhmuc){
        $query = "INSERT INTO tbl_danhmuc(ten_danhmuc) VALUES ('$ten_danhmuc')";
        $result = $this ->db->Insert($query);
        return $result;

    }
    public function show_danhmuc(){
        $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function get_danhmuc($id_danhmuc){
        $query = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$id_danhmuc'";
        $result = $this ->db->select($query);
        return $result;
    }  
    public function update_danhmuc( $ten_danhmuc,$id_danhmuc){
        $query = "UPDATE tbl_danhmuc SET ten_danhmuc = '$ten_danhmuc' WHERE id_danhmuc = '$id_danhmuc' ";
        $result = $this ->db->update($query);
        header('Location:list_danhmuc.php');
        return $result;
    }
    public function delete_danhmuc($id_danhmuc){
        $query="DELETE FROM tbl_danhmuc WHERE id_danhmuc = '$id_danhmuc' ";
        $result = $this ->db->delete($query);
        header('Location:list_danhmuc.php');
        return $result;

    }

}

?>