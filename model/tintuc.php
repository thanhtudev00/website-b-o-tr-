<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function tin_tuc_insert($ten_tintuc,$ma_loai,$hinh,$dacbiet_tintuc,$hot_tintuc,$tag,$ngay_dang,$noi_dung){
    $sql = "INSERT INTO tin_tuc(ten_tintuc,ma_loai,hinh,dacbiet_tintuc,hot_tintuc,tag,ngay_dang,noi_dung) VALUES(?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ten_tintuc,$ma_loai,$hinh,$dacbiet_tintuc,$hot_tintuc,$tag,$ngay_dang,$noi_dung);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function tin_tuc_update($ten_tintuc,$ma_loai,$hinh,$dacbiet_tintuc,$hot_tintuc,$tag,$ngay_dang,$noi_dung,$ma_tintuc){
    $sql = "UPDATE tin_tuc SET ten_tintuc=?,ma_loai=?,hinh=?,dacbiet_tintuc=?,hot_tintuc=?,tag=?,ngay_dang=?,noi_dung=? WHERE ma_tintuc=?";
    pdo_execute($sql,$ten_tintuc,$ma_loai,$hinh,$dacbiet_tintuc,$hot_tintuc,$tag,$ngay_dang,$noi_dung,$ma_tintuc);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function tin_tuc_delete($ma_tintuc){
    $sql = "DELETE FROM tin_tuc WHERE ma_tintuc=?";
    if(is_array($ma_tintuc)){
        foreach ($ma_tintuc as $ma_tintuc) {
            pdo_execute($sql, $ma_tintuc);
        }
    }
    else{
        pdo_execute($sql, $ma_tintuc);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function tin_tuc_select_all($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = " .$ma_loai;}
        $sql.=" ORDER BY ma_tintuc DESC";
    
    
    return pdo_query($sql);
}

function tin_tuc_select_2($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 2";
    
    
    return pdo_query($sql);
}
function tin_tuc_select_3($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 3";
    
    
    return pdo_query($sql);
}
function tin_tuc_select_4($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 4";
    
    
    return pdo_query($sql);
}
function tin_tuc_select_8($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 8";
    
    
    return pdo_query($sql);
}
function tin_tuc_select_10($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 10";
    
    
    return pdo_query($sql);
}

//Tin hot theo danh muc
function tin_tuc_hot_select_1($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;
        $sql.=" AND hot_tintuc = 1";}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 1";
    
    
    return pdo_query($sql);
}
function tin_tuc_hot_select_4($ma_loai){
    $sql = "SELECT * FROM tin_tuc  where 1 ";
    if ($ma_loai > 0){
        $sql.=" AND ma_loai = ".$ma_loai;
        $sql.=" AND hot_tintuc = 1";}
        $sql.=" ORDER BY ma_tintuc DESC LIMIT 4";
    
    
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function tin_tuc_select_by_id($ma_tintuc){
    $sql = "SELECT * FROM tin_tuc WHERE ma_tintuc=?";
    return pdo_query_one($sql, $ma_tintuc);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function hang_hoa_exist($ma_hh){
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}
    function hh_thong_ke(){
        $sql = "SELECT loai.ma_loai, loai.ten_loai,
        COUNT(*) so_luong,
        MIN(hang_hoa.don_gia) gia_min,
        MAX(hang_hoa.don_gia) gia_max,
        AVG(hang_hoa.don_gia) gia_avg
        FROM hang_hoa  
        JOIN loai  ON loai.ma_loai=hang_hoa.ma_loai 
        GROUP BY loai.ma_loai, loai.ten_loai";
        return pdo_query($sql);
    }
function hang_hoa_thong_ke(){
    $sql = "SELECT  hang_hoa.ma_hh, hang_hoa.ten_hh,
            (SELECT count(*) 
            FROM binh_luan
            WHERE binh_luan.ma_hh = hang_hoa.ma_hh
            GROUP BY hang_hoa.ma_hh) so_bl,
            (SELECT max(binh_luan.ngay_bl)
            FROM binh_luan
            WHERE binh_luan.ma_hh = hang_hoa.ma_hh) ngay_moi_nhat,
            (SELECT min(binh_luan.ngay_bl)
            FROM binh_luan
            WHERE binh_luan.ma_hh = hang_hoa.ma_hh) ngay_cu_nhat
            FROM hang_hoa";
            return pdo_query($sql);
            
}
function hang_hoa_theo_loai_hang(){
    $sql = "SELECT hang_hoa.ma_loai, loai.ten_loai, count(*) so_luong FROM hang_hoa, loai 
            WHERE hang_hoa.ma_loai = loai.ma_loai GROUP BY ma_loai";
    return pdo_query($sql);
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM loai WHERE parent = ".intval($parent)." ORDER BY tenloai"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('ma_loai'=>$rs['ma_loai'],'tenloai'=>$space.$rs['tenloai']); 
//		$trees = Menu($rs['ma_loai'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 