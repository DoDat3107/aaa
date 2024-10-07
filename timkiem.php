
<script>
    function searchFocus(){
        if(document.sform.stext.value=='Bạn cần tìm sản phẩm...'){
            document.sform.stext.value='';
        }

    }
    function searchBlur(){
        if(document.sform.stext.value==''){
            document.sform.stext.value='Bạn cần tìm sản phẩm...';
        }

    }

</script>


<style>
    .timkiem  form input{
    width: 400px;
    height: 30px;
    border-radius: 3px;
}  
</style>

<div class="timkiem">
    <form method="post" name="sform" action="index.php?page_layout=danhsachtimkiem">
         <input onfocus="searchFocus()" onblur="searchBlur()" type="text" name="stext"  value="Bạn cần tìm sản phẩm..." >
         <button>TÌM KIẾM</button>
    </form>
   
        
</div>  