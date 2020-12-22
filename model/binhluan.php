<?php  
    function binh_luan_insert_co_login($ma_hh,$noi_dung,$ma_kh,$ngay_bl){
        $sql = "INSERT INTO binh_luan(ma_hh,noi_dung,ma_kh,ngay_bl) VALUES(?,?,?,?)";
        pdo_execute($sql,$ma_hh,$noi_dung,$ma_kh,$ngay_bl);
    }
    function binh_luan_insert($ma_tintuc,$ma_loai,$user_name,$noi_dung,$ma_kh,$ngay_bl){
        $sql = "INSERT INTO binh_luan(ma_tintuc,ma_loai,user_name,noi_dung,ma_kh,ngay_bl) VALUES(?,?,?,?,?,?)";
        pdo_execute($sql,$ma_tintuc,$ma_loai,$user_name,$noi_dung,$ma_kh,$ngay_bl);
    }
    function binh_luan_insert_khong_login($ma_tintuc,$noi_dung,$ngay_bl){
        $sql = "INSERT INTO binh_luan(ma_tintuc,noi_dung,ngay_bl) VALUES(?,?,?)";
        pdo_execute($sql,$ma_tintuc,$noi_dung,$ngay_bl);
    }
    function binh_luan_select_all($ma_tintuc){
        $sql = "SELECT * FROM binh_luan  where 1 ";
        if ($ma_tintuc> 0){
            $sql.=" AND ma_tintuc = " .$ma_tintuc;}
            $sql.=" ORDER BY ma_bl DESC";
        
        
        return pdo_query($sql);
    }
    function binh_luan_select_by_id($ma_hh){
        $sql = "SELECT * FROM binh_luan WHERE ma_hh=?";
        return pdo_query_one($sql, $ma_hh);
    }
    function binh_luan_delete($ma_bl){
        $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
        if(is_array($ma_bl)){
            foreach ($ma_bl as $ma_bl) {
                pdo_execute($sql, $ma_bl);
            }
        }
        else{
            pdo_execute($sql, $ma_bl);
        }
    }
?>