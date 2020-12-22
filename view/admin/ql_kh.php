<section id="them_khachhang">
    <div class="container">
            <form action="admin.php?act=qlkh" method="post" enctype="multipart/form-data">
                <h3 class="text-success text-center alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
                <table class="table table-borderless">
                    
                        
                  
                

                
<?php
    $string = "";
    if(isset($_GET['sua_kh'])){
    
    $ma_kh = $row['ma_kh'];
    $user_name = $row['user_name'];
    $ho_ten = $row['ho_ten'];
    $mat_khau = $row['mat_khau'];
    $email = $row['email'];
    $hinh = $row['hinh'];
    $kich_hoat = $row['kich_hoat'];
    $vai_tro = $row['vai_tro'];
   

    $string = '<tr><th><input type="hidden" class="form-control" readonly="readonly" name="ma_kh"  value="'.$ma_kh.'"></th>';
    $string.= '<tr><th><label>Username</label><input type="text"  class="form-control" name="user_name"  value="'.$user_name.'"></th>';
    $string.= '<th><label>Họ và tên</label><input type="text"  class="form-control" name="ho_ten"  value="'.$ho_ten.'"></th>';
    $string.='<th><label>Mật khẩu</label><input type="password"  class="form-control" name="mat_khau" value="'.$mat_khau.'"></th></tr>';
    
    $string.='<th><label>Email</label><input type="text"  class="form-control" name="email" value="'.$email.'"></th>';
    $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" value="'.$hinh.'"></th>';
    $string.='<tr><th><label>Kích hoạt ?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kich_hoat"  value="0" >
        <label class="form-check-label" >
            Kích hoạt
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="kich_hoat"  value="1" >
        <label class="form-check-label" >
            Chưa kích hoạt
        </label>
        </div></th>';
    $string.='<tr><th><label>Vai trò</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="vai_tro"  value="0" >
        <label class="form-check-label" >
            Khách hàng
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="vai_tro"  value="1" >
        <label class="form-check-label" >
            Nhân viên
        </label>
        </div></th>';
    $string.='<tr><td><input type="submit" class="btn btn-primary" value="Cập nhật" name="update_kh"></td></tr>';
    $string.='<tr><td><input type="submit" class="btn btn-success" value="Thêm" name="add_kh"></td></tr>';
    echo $string;
    }
    else
    {  
      
    $string = '<tr><th><input type="hidden" class="form-control" readonly="readonly" name="ma_kh"></th>';                       
    $string.='<tr><th><label>Username</label><input type="text"  class="form-control" name="user_name"  ></th>';
    $string.='<th><label>Họ và tên</label><input type="text"  class="form-control" name="ho_ten"></th>';
    $string.='<th><label>Mật khẩu</label><input type="password"  class="form-control" name="mat_khau"></th></tr>';
    $string.='<th><label>Email</label><input type="text"  class="form-control" name="email"></th>';
    $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" ></th>';
    $string.='<tr><th><label>Kích hoạt ?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kich_hoat"  value="0" >
        <label class="form-check-label" >
        Chưa kích hoạt
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="kich_hoat"  value="1" checked>
        <label class="form-check-label" >
        Kích hoạt
        </label>
        </div></th>';
    $string.='<tr><th><label>Vai trò</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="vai_tro"  value="0" >
        <label class="form-check-label" >
            Khách hàng
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="vai_tro"  value="1" checked>
        <label class="form-check-label" >
            Nhân viên
        </label>
        </div></th>';
    
    
    $string.='<tr><td><input type="submit" class="btn btn-success" value="Thêm" name="add_kh"></td></tr>';
    echo $string;
}
                        ?>
                    
                </table>

            </form>
    </div>
</section>
<hr>
<section id="ds_khachhang">
    <div class="container">
            <form action="admin.php?act=qlkh" method="post">
                <h5  class="text-success">DANH SÁCH KHÁCH HÀNG</h5>
                <div class="row">
                    <div class="col-sm-12"><span class="font-italic text-danger"><?php echo $error_message;?></span> 
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Mã khách hàng</th>
                        <th>Tên đăng nhập</th>
                        <th>Họ tên</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Hình</th>
                        <th>Kích hoạt</th>
                        <th>Vai trò</th>
                        <th>Chức năng</th>
                    </tr>
                   <?php 
                   foreach($ds_kh as $item)
                   {
                    if($item['kich_hoat'] == 0){
                        $kich_hoat = 'chua_kich_hoat';
                    } else {
                        $kich_hoat = 'da_kich_hoat';
                    }

                    if($item['vai_tro']  == 0){
                        $vai_tro = 'khach_hang';
                    } else {
                        $vai_tro = 'nhan_vien';
                    }
 
                    echo '<tr><td>'.$item['ma_kh'].'</td>
                            <td>'.$item['user_name'].'</td>
                            <td>'.$item['ho_ten'].'</td>
                            <td>'.$item['mat_khau'].'</td>
                            <td>'.$item['email'].'</td>
                            <td> <img width="100px" height="100px" src="'.$img_path_duan1.$item['hinh'].'"></td>
                            
                            
                            <td>'.$kich_hoat.'</td>
                            <td>'.$vai_tro.'</td>
                            <td>
        <a href="admin.php?act=qlkh&sua_kh='.$item['ma_kh'].'"><input type="button" value="Sửa" name="sua_kh" class="btn btn-info"></a> 
        <a href="admin.php?act=qlkh&xoa_kh='.$item['ma_kh'].'"><input type="button" value="Xóa" name="xoa_kh" class="btn btn-danger"></a> 
                            </td>
                        </tr>';
                   }
                   ?>

                </table>
            </form>
    </div>
</section>
