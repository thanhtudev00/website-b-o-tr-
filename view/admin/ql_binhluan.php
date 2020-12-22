<section id="ds_binhluan">
    <div class="container">
            <form action="admin.php?act=qlbl" method="post">
                <h5  class="text-success text-center alert-success">QUẢN LÝ BÌNH LUẬN</h5>
                <table class="table table-striped">
                    <tr>
                        
                        <th>Mã bình luận</th>
                        <th>Mã khách hàng</th>
                        <th>Mã tin tức</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Chức năng</th>
                       
                        
                    </tr>
                   <?php 
                   foreach($ds_bl as $item)
                   {
                   
 
                    echo '<tr>
                            <td>'.$item['ma_bl'].'</td>
                            <td>'.$item['ma_kh'].'</td>
                            <td>'.$item['ma_tintuc'].'</td>
                          
                            <td>'.$item['noi_dung'].'</td>
                            
                            <td>'.$item['ngay_bl'].'</td>
                            >
                            <td>
     
        <a href="admin.php?act=qlbl&xoa_bl='.$item['ma_bl'].'"><input type="button" value="Xóa" name="xoa_bl" class="btn btn-danger"></a> 
                            </td>
                        </tr>';
                   }
                   ?>

                </table>
            </form>
    </div>
</section>
