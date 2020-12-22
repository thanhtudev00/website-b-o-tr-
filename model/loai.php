<?php
require_once 'pdo.php';
function loai_load($des){
    global $conn;
    $sql="select * from loai";
    if($des==1){
        $sql.=" order by ma_loai desc";
      }else{
          $sql.=" order by ma_loai";
          }
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
    return $result;
  }
/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($ten_loai,$sap_xep,$parent,$hinh,$kich_hoat,$vi_tri){
    $sql = "INSERT INTO loai(ten_loai,sap_xep,parent,hinh,active,vi_tri) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql,$ten_loai,$sap_xep,$parent,$hinh,$kich_hoat,$vi_tri);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function loai_update($ten_loai,$sap_xep,$parent,$hinh,$kich_hoat,$ma_loai,$vi_tri){
    $sql = "UPDATE loai SET ten_loai=?,sap_xep=?,parent=?,hinh=?,active=?,vi_tri=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai,$sap_xep,$parent,$hinh,$kich_hoat,$ma_loai,$vi_tri);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function loai_delete($ma_loai){
    $sql = "DELETE FROM loai WHERE ma_loai=?";
    if(is_array($ma_loai)){
        foreach ($ma_loai as $ma_loai) {
            pdo_execute($sql, $ma_loai);
        }
    }
    else{
        pdo_execute($sql, $ma_loai);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loai_select_all(){
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
    return pdo_query($sql);
}
function loai_select_active(){
    $sql = "SELECT * FROM loai WHERE active=1 ORDER BY ma_loai DESC";
    return pdo_query($sql);
}
function loai_select_non_active(){
    $sql = "SELECT * FROM loai WHERE active!=1 ORDER BY ma_loai DESC";
    return pdo_query($sql);
}

function loai_select_7(){
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC LIMIT 7";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại phụ
 */
function loai_select_non_active_2(){
    $sql = "SELECT * FROM loai WHERE active=0 ORDER BY ma_loai DESC LIMIT 2";
    return pdo_query($sql);
}
function loai_select_non_active_3(){
    $sql = "SELECT * FROM loai WHERE active=0 ORDER BY ma_loai DESC LIMIT 3";
    return pdo_query($sql);
}
/**Truy vấn một loại theo vị trí */
function loai_select_vi_tri_1(){
    $sql = "SELECT * FROM loai WHERE vi_tri=1";
    return pdo_query($sql);
}
function loai_select_vi_tri_2(){
    $sql = "SELECT * FROM loai WHERE vi_tri=2";
    return pdo_query($sql);
}
function loai_select_vi_tri_3(){
    $sql = "SELECT * FROM loai WHERE vi_tri=3";
    return pdo_query($sql);
}
function loai_select_vi_tri_4(){
    $sql = "SELECT * FROM loai WHERE vi_tri=4";
    return pdo_query($sql);
}
function loai_select_vi_tri_5(){
    $sql = "SELECT * FROM loai WHERE vi_tri=5";
    return pdo_query($sql);
}
function loai_select_vi_tri_6(){
    $sql = "SELECT * FROM loai WHERE vi_tri=6";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
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