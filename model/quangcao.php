<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function quangcao_insert($hinh,$vi_tri,$ma_loai){
    $sql = "INSERT INTO quang_cao(hinh,vi_tri,ma_loai) VALUES(?,?,?)";
    pdo_execute($sql,$hinh,$vi_tri,$ma_loai);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function quangcao_update($hinh,$vi_tri,$ma_loai,$ma_quangcao){
    $sql = "UPDATE quang_cao SET hinh=?,vi_tri=?,ma_loai=? WHERE ma_quangcao=?";
    pdo_execute($sql,$hinh,$vi_tri,$ma_loai,$ma_quangcao);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function quangcao_delete($ma_quangcao){
    $sql = "DELETE FROM quang_cao WHERE ma_quangcao=?";
    if(is_array($ma_quangcao)){
        foreach ($ma_quangcao as $ma_quangcao) {
            pdo_execute($sql, $ma_quangcao);
        }
    }
    else{
        pdo_execute($sql, $ma_quangcao);
    }
}
function quangcao_select_all(){
    $sql = "SELECT * FROM quang_cao ORDER BY ma_quangcao DESC";
    return pdo_query($sql);
}
/**quang cao select by vi tri */
function quangcao_select_by_id($ma_quangcao){
    $sql = "SELECT * FROM quang_cao WHERE ma_quangcao=?";
    return pdo_query_one($sql, $ma_quangcao);
}
function quangcao_select_vi_tri_1(){
    $sql = "SELECT * FROM quang_cao WHERE vi_tri=1 AND ma_loai = 0 ORDER BY ma_quangcao DESC LIMIT 1";
    return pdo_query($sql);
}
function quangcao_select_vi_tri_2(){
    $sql = "SELECT * FROM quang_cao WHERE vi_tri=2";
    return pdo_query($sql);
}
function quangcao_select_vi_tri_3(){
    $sql = "SELECT * FROM quang_cao WHERE vi_tri=3";
    return pdo_query($sql);
}
function quangcao_select_vi_tri_4(){
    $sql = "SELECT * FROM quang_cao WHERE vi_tri=4";
    return pdo_query($sql);
}
/**quang cao select by vi tri & ma loai*/
function quangcao_select_vi_tri_1_ma_loai($ma_loai){
    $sql = "SELECT * FROM quang_cao WHERE vi_tri=1 AND ma_loai=$ma_loai ORDER BY ma_quangcao DESC LIMIT 1";
    return pdo_query($sql);
}