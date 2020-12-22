<section id="them_quangcao">
    <div class="container">
            <form action="admin.php?act=qlquangcao" method="post" enctype="multipart/form-data">
                <h3 class="text-success text-center alert-success">QUẢN LÝ QUẢNG CÁO</h3>
                <table class="table table-borderless">
                    
                        
                  
                

                
<?php
    $string = "";
    if(isset($_GET['sua_quangcao'])){   
    $ma_quangcao = $row['ma_quangcao'];
    $hinh = $row['hinh'];
    $vi_tri = $row['vi_tri'];
    $ma_loai = $row['ma_loai'];
   

            
        $string.= '<th><label>Vị trí</label><input type="text"  class="form-control" name="vi_tri"  value="'.$vi_tri.'"></th>';
        $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" >'.$row['hinh'].'</th>';
        $string.='<th><label class="my-1 mr-2">Loại tin</label><select name="ma_loai" class="custom-select my-1 mr-sm-2" id="loaitin" >';
            foreach($ds_loai as $loai){
                if ($loai['ma_loai']==$ma_loai){ 
                    $string.='<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                    break;}
            }
            foreach($ds_loai as $loai){
                if ($loai['ma_loai']!=$ma_loai)    
                                $string.='<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                            }
        $string.='</select></th>';
        $string.= '<tr><th><input type="hidden"  class="form-control" name="ma_quangcao"  value="'.$ma_quangcao.'"></th>';
        $string.='<tr><td><input type="submit" class="btn btn-primary" value="Cập nhật" name="update_quangcao"></td></tr>';
        $string.='<tr><td><input type="submit" class="btn btn-success" id="btnvalidate" value="Thêm" name="add_quangcao"></td></tr>';
    
    echo $string;   
    }
    else
    {  
      
           
        $string.= '<th><label>Vị trí</label><input type="text"  class="form-control" name="vi_tri"  ></th>';
        $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" ></th>';
        $string.='<th><label class="my-1 mr-2">Loại tin</label><select name="ma_loai" class="custom-select my-1 mr-sm-2" id="loaitin" >';
        foreach($ds_loai as $loai){
                
                            $string.='<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                        }
        $string.='</select></th>';
        $string.= '<tr><th><input type="hidden"  class="form-control" name="ma_quangcao"></th>'; 
        $string.='<tr><td><input type="submit" class="btn btn-success" id="btnvalidate" value="Thêm" name="add_quangcao"></td></tr>';
        
    
   
       
    echo $string;
}
                        ?>
                    
                </table>

            </form>
    </div>
</section>
<hr>
<section id="ds_quangcao">
    <div class="container">
            <form action="admin.php?act=qlquangcao" method="post">
                <h5  class="text-success">DANH SÁCH QUẢNG CÁO</h5>
                <div class="row">
                    <div class="col-sm-12"><span class="font-italic text-danger"><?php echo $error_message;?></span> 
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Mã quảng cáo</th>
                        <th>Mã loại</th>
                        <th>Vị trí</th> 
                        <th>Hình</th>                     
                    </tr>
                   <?php 
                   foreach($ds_quangcao as $item){
                    echo '<tr><td>'.$item['ma_quangcao'].'</td>
                            <td>'.$item['ma_loai'].'</td>
                            <td>'.$item['vi_tri'].'</td>
                            <td> <img width="100px" height="100px" src="'.$img_path_duan1.$item['hinh'].'"></td>                            
                            <td>
        <a href="admin.php?act=qlquangcao&sua_quangcao='.$item['ma_quangcao'].'"><input type="button" value="Sửa" name="sua_quangcao" class="btn btn-info"></a> 
        <a href="admin.php?act=qlquangcao&xoa_quangcao='.$item['ma_quangcao'].'"><input type="button" value="Xóa" name="xoa_quangcao" class="btn btn-danger"></a> 
                            </td>
                        </tr>';
                }
                   ?>

                </table>
            </form>
    </div>
</section>
