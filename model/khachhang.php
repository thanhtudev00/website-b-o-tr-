<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function khach_hang_insert($user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro){
    $sql = "INSERT INTO khach_hang(user_name,ho_ten,mat_khau,hinh,email,kich_hoat,vai_tro) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql,$user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function khach_hang_update($user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro,$ma_kh){
    $sql = "UPDATE khach_hang SET user_name=?,ho_ten=?,mat_khau=?,hinh=?,email=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql,$user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro,$ma_kh);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma_kh) {
            pdo_execute($sql, $ma_kh);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh DESC";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function khach_hang_select_by_id($ma_kh){
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}
function user_name_exist($user_name){
    $sql = "SELECT count(*) FROM khach_hang WHERE user_name=?";
    return pdo_query_value($sql, $user_name) > 0;
}
/* dang nhap 
function checkUser($ho_ten,$mat_khau){
    global $conn;
    $sql="SELECT * from khach_hang where ho_ten='".$ho_ten."' AND mat_khau='".$mat_khau."'";
     $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      $result = $stmt->fetch();
      return $result;
        
    
}
*/
function checkUser($user_name,$mat_khau) {
    $sql = "select * from khach_hang where user_name = '$user_name' and mat_khau= '$mat_khau'";

    return pdo_query_one($sql);

  }
  function khach_hang_login($ma_kh,$mat_khau){
    $sql= "SELECT count(*) FROM khach_hang WHERE ma_kh=? and mat_khau=?";
    return pdo_query_one($sql,$ma_kh,$mat_khau) > 1;
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