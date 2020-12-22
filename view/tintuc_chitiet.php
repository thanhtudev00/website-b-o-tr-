<!--quangcao-->
<div class="container">
        <br>
        <div class="row">
            <div class="col">
            <?php
                foreach($quangcao_vi_tri_1_ma_loai as $qc){
                    
                    echo '<img class="mx-auto d-block img-fluid" src="'.$img_path_duan1.$qc['hinh'].'">';


            }
                ?>
            </div>
        </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <?php
            echo'<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <h3 class="page-title text-justify-center font-weight-bold">'.$ct_tintuc['ten_tintuc'].'</h3>
                <br>
                <div>
                     <img class="img-fluid mx-auto d-block" src="'.$img_path_duan1.$ct_tintuc['hinh'].'" alt=""/>
                </div>
                <br>
                <p>'.$ct_tintuc['noi_dung'].'</p>
                <br>               
            </div>';
        
            ?>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Danh mục</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                <?php
                    foreach($ds_loai as $loai){
                        $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                        echo '<a href="'.$linktintuc.'" class="fh5co_tagg">'.$loai['ten_loai'].'</a>';
                    }
                    ?>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Bài viết cùng loại</div>
                </div>
                <?php
                    
                    foreach($ds_tintuc4 as $tintuc){
                        
                        $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
                            
                        echo '  <div class="row pb-3">
                                    <div class="col-5 align-self-center">
                                        <img src="'.$img_path_duan1.$tintuc['hinh'].'" alt="img" class="fh5co_most_trading"/>
                                    </div>
                                    <div class="col-7 paddding">
                                        <div class="most_fh5co_treding_font"><a href="'.$linkchitiet.'">'.$tintuc['ten_tintuc'].'</a></div>
                                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                                    </div>
                                </div>';
                                                                                                   }
                                                                             
                                                            
                ?>
                
            </div>
            
        </div>
    </div>
   
    <div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Bình luận</div>
        </div>
        <div class="row description_row">
            <div class="col">
                <script>/*
                    $(document).ready(function(){
                        $('#dsbl').load('binhluan.php');
                        $('#guibinhluan').click(function(event){
                            var ma_kh = ('#ma_kh').val().trim();
                            var ma_tintuc = ('#ma_tintuc').val().trim();
                            var ma_loai = ('#ma_loai').val().trim();
                            var ma_bl = ('#ma_bl').val().trim();
                            var user_name = ('#user_name').val().trim();
                            var noi_dung = ('#noi_dung').val().trim();
                            var ngay_bl = ('#ngay_bl').val().trim();
                                if(isset($_SESSION['ma_kh'])&&($_SESSION['ma_kh']>0)){
                                    $.ajax({
                                        url:'binhluan.php',
                                        type:"post",
                                        data:{ma_tintuc:ma_tintuc,ma_loai:ma_loai,user_name:user_name,noi_dung:noi_dung,ma_kh:ma_kh,ngay_bl:ngay_bl},
                                        success:function(response){
                                            var msg="";
                                            if(response != ""){
                                                $('#user_name').val('');
                                                $('#noi_dung').val('');
                                                $('#ngay_bl').val('');
                                                msg = "Thanh cong";
                                                $('#dsbl').html(response);
                                            }else {
                                                msg="Loi";
                                            }
                                            $('#errormes').html(msg);
                                        }
                                    });
                                } 
                        });
                    }); */
                </script>
                    <form action="?act=binhluan" method="post" id="contact_form" class="contact_form">
                    
                <div class="form-group">
                
                <input type = "hidden" id="ma_kh" name="ma_kh" value= "<?php echo $_SESSION['ma_kh'] ?>">
                <input type = "hidden" id="ma_tintuc" name="ma_tintuc" value= "<?php echo $ct_tintuc['ma_tintuc'] ?>">
                <input type = "hidden" id="ma_loai" name="ma_loai" value= "<?php echo $ct_tintuc['ma_loai'] ?>">
                <input type = "hidden" id="ma_bl" name="ma_bl">
                <input type = "hidden" id="ngay_bl" name="ngay_bl" value="<?php date('d,m,y')?>">  
                <input type = "hidden" id="user_name" name="user_name" value="<?php echo $_SESSION['user_name']?>">                                                                                  
                <textarea id="noi_dung" name="noi_dung" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
                <input type="submit"  name="add_bl" class="btn btn-primary" value="Gửi bình luận">
                <div id="errormes"></div>
                </form>
            </div>
</div>
<br>
        <table class="table table-striped">
            
	<tr>
		
		<th>Tên người dùng</th>
		<th>Nội dung</th>
		<th>Ngày bình luận</th>
		
	</tr>
    <?php
            foreach($ds_bl as $bl){
                            
                            echo '   <tr>
                                        <td>'.$bl['user_name'].'</td>
                                        <td>'. $bl['noi_dung'] .'</td>
                                        <td>'. $bl['ngay_bl'] .'</td>
                                    </tr>';
                    }
            
            ?>
    
    
        </table>
            </div>
        </div>            
    </div>


<!--quangcao-->
<div class="container">
        <br>
        <div class="row">
            <div class="col">
            <?php
                foreach($quangcao_vi_tri_4 as $qc){
                    echo '<img class="mx-auto d-block img-fluid" src="'.$img_path_duan1.$qc['hinh'].'">';
                }
            ?>
            </div>
        </div>
</div>
<hr>