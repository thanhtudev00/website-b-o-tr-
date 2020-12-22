<section id="them_loaihang">
    <div class="container">
            <form action="admin.php?act=qlloai" method="post" enctype="multipart/form-data">
                <h3 class="text-success text-center alert-success">QUẢN LÝ LOẠI TIN ( DANH MỤC )</h3>
                <table class="table table-borderless">
                    
                        
                  
                

                
<?php
    $string = "";
    if(isset($_GET['sua_loai'])){
    
    $ma_loai = $row['ma_loai'];
    $ten_loai = $row['ten_loai'];
    $sap_xep = $row['sap_xep'];
    $parent = $row['parent'];
    $hinh = $row['hinh'];
    $kich_hoat = $row['active'];
    $vi_tri = $row['vi_tri'];
   
   

    $string.= '<tr><th><input type="hidden"  class="form-control" name="ma_loai"  value="'.$ma_loai.'"></th>';
    $string.= '<tr><th><label>Tên loại</label><input type="text"  class="form-control" name="ten_loai"  value="'.$ten_loai.'"></th>';
    $string.= '<th><label>Sắp xếp</label><input type="text"  class="form-control" name="sap_xep"  value="'.$sap_xep.'"></th>';
    $string.= '<th><label>Parent</label><input type="text"  class="form-control" name="parent"  value="'.$parent.'"></th>';
    $string.= '<th><label>Vị trí</label><input type="text"  class="form-control" name="vi_tri"  value="'.$vi_tri.'"></th>';
    $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" value="'.$hinh.'"></th>';
    
    $string.='<tr><td><input type="submit" class="btn btn-primary" value="Cập nhật" name="update_loai"></td></tr>';
    $string.='<tr><td><input type="submit" class="btn btn-success" value="Thêm" name="add_loai"></td></tr>';
    $string.='<tr><th><label>Kích hoạt ?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="active"  value="1" >
        <label class="form-check-label" >
            Kích hoạt
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="active"  value="0" >
        <label class="form-check-label" >
            Chưa kích hoạt
        </label>
        </div></th>';
        $string.= '<tr><th><input type="hidden"  class="form-control" name="ma_loai"  value="'.$ma_loai.'"></th>';
    
    
    echo $string;   
    }
    else
    {  
      
    $string.= '<tr><th><input type="hidden"  class="form-control" name="ma_loai" ></th>';                        
    $string.= '<tr><th><label>Tên loại</label><input type="text"  class="form-control" name="ten_loai" ></th>';
    $string.= '<th><label>Sắp xếp</label><input type="text"  class="form-control" name="sap_xep"></th>';
    $string.= '<th><label>Parent</label><input type="text"  class="form-control" name="parent"  ></th>';
    $string.= '<th><label>Vị trí</label><input type="text"  class="form-control" name="vi_tri"  ></th>';
    $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control"></th>';
    
    
    $string.='<tr><td><input type="submit" class="btn btn-success" value="Thêm" name="add_loai"></td></tr>';
    
    $string.='<tr><th><label>Kích hoạt</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="active"  value="1" >
        <label class="form-check-label" >
            Kích hoạt
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="active"  value="0" checked>
        <label class="form-check-label" >
            Chưa kích hoạt
        </label>
        </div></th>';
        
        $string.='</th>';
    echo $string;
}
                        ?>
                    
                </table>

            </form>
    </div>
</section>
<hr>
<section id="ds_loai">
    <div class="container">
            <form action="admin.php?act=qlloai" method="post">
                <h5  class="text-success">DANH SÁCH LOẠI ( DANH MỤC )</h5>
                <div class="row">
                    <div class="col-sm-12"><span class="font-italic text-danger"><?php echo $error_message;?></span> 
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Sắp xếp</th>
                        <th>Parent</th>
                        <th>Vị trí</th>
                        <th>Hình</th>
                        <th>Kích hoạt</th>
                       
                    </tr>
                   <?php 
                   foreach($ds_loai as $item){
                        if($item['active'] == 0){
                            $kich_hoat = 'chua_kich_hoat';
                        } else {
                            $kich_hoat = 'da_kich_hoat';
                        }
                    echo '<tr><td>'.$item['ma_loai'].'</td>
                            <td>'.$item['ten_loai'].'</td>
                            <td>'.$item['sap_xep'].'</td>
                            <td>'.$item['parent'].'</td>
                            <td>'.$item['vi_tri'].'</td>
                            <td> <img width="100px" height="100px" src="'.$img_path_duan1.$item['hinh'].'"></td>
                            <td>'.$kich_hoat.'</td>
                            
                            <td>
        <a href="admin.php?act=qlloai&sua_loai='.$item['ma_loai'].'"><input type="button" value="Sửa" name="sua_loai" class="btn btn-info"></a> 
        <a href="admin.php?act=qlloai&xoa_loai='.$item['ma_loai'].'"><input type="button" value="Xóa" name="xoa_loai" class="btn btn-danger"></a> 
                            </td>
                        </tr>';
                }
                   ?>

                </table>
            </form>
    </div>
</section>
