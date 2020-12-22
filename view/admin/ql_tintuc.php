
<!--<section id="them_hanghoa">
    <div class="container">
            <form action="admin.php?act=qlloai" method="post" enctype="multipart/form-data">
                <h3 class="text-success text-center alert-success">QUẢN LÝ HÀNG HOÁ</h3>
                <table class="table table-borderless">
                    <tr>
                        <th><label>Mã hàng hoá</label>
        <input type="text" readonly class="form-control" id="mahh"  placeholder="Auto number"></th>
                        <th><label>Tên hàng hoá</label>
        <input type="text"  class="form-control" id="tenhh"  ></th>
                        <th><label>Đơn giá</label>
        <input type="text"  class="form-control" id="dongia"  ></th>
                    </tr>
                    <tr>
                        <th><label>Giảm giá</label>
        <input type="text"  class="form-control" id="giamgia"  ></th>
                        <th><label>Hình ảnh</label>
        <input type="file"  class="form-control" id="hinhanh"  ></th>
                        <th><label class="my-1 mr-2">Loại hàng</label>
                            <select class="custom-select my-1 mr-sm-2" id="loaihang">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select></th>
                    </tr>
                    <tr>
                        <th><label>Hàng đặc biệt ?</label>
                        <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="db" value="option1" >
                    <label class="form-check-label" >
                        Đặc biệt
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="bt" value="option2" checked>
                    <label class="form-check-label" >
                        Bình thường
                    </label>
                    </div></th>
                        <th><label>Ngày nhập</label>
                    <input class="form-control" type="date" id="ngaynhap"></th>
                        <th><label>Số lượt xem</label>
                    <input type="text" readonly class="form-control" id="soluotxem"  placeholder="0"></th>
                    </tr>
                    <tr>
                      <th colspan="3">  
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </th> 
                    </div>
                    </tr>
                    <tr>
                        <td>
                    <input type="submit" value="Them" name="add">
                    <input type="submit" value="Nhập lại" name="add">
                    <input type="submit" value="Danh sách" name="add">
                        <td>
                    </tr>
                    <tr>  
                        
                  
                

                <h5 class="text-success">THÊM LOẠI HÀNG HÓA</h5>
                <div class="row">
                    <div class="col-sm-12"><span class="font-italic text-danger"></span> 
                </div>
                <table>
                    <tr>
                        <th>Mã loại hàng hóa</th>
                        <th>Tên loại hàng hóa</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                      
                    </tr>
                </table>

            </form>
    </div>
</section>
<hr>
<section id="ds_hh">
    <div class="container">
            <form action="admin.php?act=qlloai" method="post">
                <h5  class="text-success">DANH SÁCH HÀNG HÓA</h5>
                <table class="table table-striped">
                    <tr>
                        <th>Mã hàng hóa</th>
                        <th>Tên hàng hóa</th>
                        <th>Chức năng</th>
                    </tr>
              

                </table>
            </form>
    </div>
</section>-->
<section id="them_tintuc">
<script>
	$(document).ready(function() {
		$("#validation").validate({
			rules: {
				ten_hh: {   // đây là trường name của input
					required: true,
                    maxlength: 20  // không được để trống
				},
                don_gia: {
                    required:true,
                    number: true,
                    digits:true
                },
                giam_gia: {
                    required:true,
                    number: true,
                    digits:true
                },
				
			},
			messages: {
				ten_hh: {
					required: "Xin vui lòng nhập tên hàng hoá!",
                    maxlength : "Tên hàng hoá không được nhập quá 20 ký tự !"
					},
                don_gia: {
                    required: "Xin vui lòng nhập đơn giá hàng hoá!",
                    number: "Đơn giá bắt buộc là kiểu số !",
                    digits: "Đơn giá không được nhập số âm !",
                },
                giam_gia: {
                    required: "Xin vui lòng nhập giảm giá hàng hoá!",
                    number: "Giảm giá bắt buộc là kiểu số !",
                    digits: "Giảm giá không được nhập số âm !",
                },
				
			}
		});
	});
</script>
    <div class="container">
            <form action="admin.php?act=qltintuc" id="validation" method="post" enctype="multipart/form-data">
                <h3 class="text-success text-center alert-success">QUẢN LÝ TIN TỨC ( BÀI VIẾT )</h3>
                <div class="row">
                    <div class="col-sm-12"><span class="font-italic text-danger"><?php echo $error_message;?></span> 
                </div>
                <table class="table table-borderless">
                    
                        
                  
                

                
<?php
    $string = "";
    if(isset($_GET['sua_tintuc'])){
    $ma_tintuc = $row['ma_tintuc'];
    $ten_tintuc = $row['ten_tintuc'];
    $ma_loai = $row['ma_loai'];
    $hinh = $row['hinh'];
    $dacbiet_tintuc = $row['dacbiet_tintuc'];
    $hot_tintuc = $row['hot_tintuc'];
    $tag = $row['tag'];
    $ngay_dang = $row['ngay_dang'];
    $so_luot_xem = $row['so_luot_xem'];
    $noi_dung = $row['noi_dung'];
   


    $string.= '<tr><th><input type="hidden" class="form-control" readonly name="ma_tintuc"  value="'.$ma_tintuc.'"></th>';
    $string.= '<tr><th><label>Tên tin tức</label><input type="text" class="form-control" name="ten_tintuc"  value="'.$ten_tintuc.'"></th>';
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
    $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" >'.$row['hinh'].'</th>';
   
    $string.='<tr><th><label>Tin đặc biệt ?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="dacbiet_tintuc" id="db" value="1" >
        <label class="form-check-label" >
            Đặc biệt
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="dacbiet_tintuc" id="bt" value="0" checked>
        <label class="form-check-label" >
            Bình thường
        </label>
        </div></th>';
        $string.='<tr><th><label>Tin hot ?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hot_tintuc" id="hot" value="1" >
            <label class="form-check-label" >
                Hot
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="hot_tintuc" id="bt" value="0" checked>
            <label class="form-check-label" >
                Bình thường
            </label>
            </div></th>';
    $string.='<th><label>Tag</label><input type="text"  class="form-control" name="tag" value="'.$tag.'"></th>';
    $string.='<th><label>Ngày đăng</label>
    <input class="form-control" name="ngay_dang" type="date" id="ngaydang" value="'.$ngay_dang.'"></th>
        <th><label>Số lượt xem</label>
    <input type="text" readonly class="form-control" id="soluotxem"  placeholder="0"></th></tr>';
    $string.='<tr><th colspan="3">  
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Nội dung</label>
    <textarea name="noi_dung" class="form-control" id="exampleFormControlTextarea1" rows="3" >'.$noi_dung.'</textarea>
      </th></tr>';
    $string.='<tr><td><input type="submit" class="btn btn-primary" value="Cập nhật" name="update_tintuc"></td></tr>';
    $string.='<tr><td><input type="submit" class="btn btn-success" id="btnvalidate" value="Thêm" name="add_tintuc"></td></tr>';
    echo $string;
    }
    else
    {  
      
                            
    
    $string.= '<tr><th><input type="hidden" class="form-control" readonly name="ma_tintuc"  ></th>';
    $string.= '<tr><th><label>Tên tin tức</label><input type="text" class="form-control" name="ten_tintuc"  ></th>';
    $string.='<th><label class="my-1 mr-2">Loại tin</label><select name="ma_loai" class="custom-select my-1 mr-sm-2" id="loaitin" >';
    foreach($ds_loai as $loai){
            
                        $string.='<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                    }
    $string.='</select></th>';
    
    $string.='<th><label>Hình ảnh</label><input type="file" name="hinh" class="form-control" ></th>';
   
    $string.='<tr><th><label>Tin đặc biệt ?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="dacbiet_tintuc" id="db" value="1" >
        <label class="form-check-label" >
            Đặc biệt
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="dacbiet_tintuc" id="bt"  value="0" checked>
        <label class="form-check-label" >
            Bình thường
        </label>
        </div></th>';
        $string.='<tr><th><label>Tin hot ?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hot_tintuc" id="hot"  value="1">
            <label class="form-check-label" >
                Hot
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="hot_tintuc" id="bt" value="0"checked>
            <label class="form-check-label" >
                Bình thường
            </label>
            </div></th>';
    $string.='<th><label>Tag</label><input type="text"  class="form-control" name="tag" ></th>';
    $string.='<th><label>Ngày đăng</label>
    <input class="form-control" name="ngay_dang" type="date" id="ngaydang" ></th>
        <th><label>Số lượt xem</label>
    <input type="text" readonly class="form-control" id="soluotxem"  placeholder="0"></th></tr>';
    $string.='<tr><th colspan="3">  
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Nội dung</label>
    <textarea name="noi_dung" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </th></tr>';
    
    $string.='<tr><td><input type="submit" class="btn btn-success" id="btnvalidate" value="Thêm" name="add_tintuc"></td></tr>';
    echo $string;
}
                        ?>
                    
                </table>

            </form>
    </div>
</section>
<hr>
<section id="ds_tintuc">
    <div class="container">
            <form action="admin.php?act=qltintuc" method="post">
                <h5  class="text-success">DANH SÁCH TIN TỨC</h5>
                
                <th><label class="my-1 mr-2">Loại tin</label><select onchange="newDoc()" name="ma_loai" class="custom-select my-1 mr-sm-2" id="loaitin2">
                <?php 
                foreach($ds_loai as $loai){
                    
                   
                     echo  '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';}
                    ?>
                </select></th>
                
                <table class="table table-striped">
                    <tr>
                        <th>Mã  tin tức</th>
                        <th>Tên tin tức</th>
                        <th>Mã loại</th>
                        
                        <th>Hình</th>
                        <th>Tin đặc biệt</th>
                        <th>Tin hot</th>
                        <th>Ngày đăng</th>
                        <th>Nội dung</th>
                        <th>Số lượt xem</th>
                        <th>Tag</th>
                    </tr>
                   <?php 
                   foreach($ds_tintuc as $item)
                   {
                   if($item['dacbiet_tintuc']  == 0){
                       $dacbiet_tintuc = 'binh_thuong';
                   } else {
                       $dacbiet_tintuc = 'dac_biet';
                   }
                   if($item['hot_tintuc'] == 0){
                       $hot_tintuc = 'binh_thuong';
                    } else {
                        $hot_tintuc = 'hot';
                    }
 
                    echo '<tr><td>'.$item['ma_tintuc'].'</td>
                            <td>'.$item['ten_tintuc'].'</td>
                            <td>'.$item['ma_loai'].'</td>
                            <td><img width="100px" height="100px" src="'.$img_path_duan1.$item['hinh'].'"></td>
                            <td>'.$dacbiet_tintuc.'</td>
                            <td>'.$hot_tintuc.'</td>
                            <td>'.$item['ngay_dang'].'</td>
                            <td>'.$item['noi_dung'].'</td>
                            <td>'.$item['so_luot_xem'].'</td>
                            <td>'.$item['tag'].'</td>
                            <td>
        <a href="admin.php?act=qltintuc&sua_tintuc='.$item['ma_tintuc'].'"><input type="button" value="Sửa" name="sua_tintuc" class="btn btn-info"></a> 
        <a href="admin.php?act=qltintuc&xoa_tintuc='.$item['ma_tintuc'].'"><input type="button" value="Xóa" name="xoa_tintuc" class="btn btn-danger"></a> 
                            </td>
                        </tr>';
                   }
                   ?>

                </table>
            </form>
    </div>
</section>
<script>
    function newDoc() {
        
    window.location.assign("22");
    }
</script>
