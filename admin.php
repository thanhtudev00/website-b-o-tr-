<?php
    session_start();
    ob_start();
    $error_message="";
    include "model/pdo.php";
    include "global_duan1.php";
    include "model/khachhang.php";
    include "model/loai.php";
    include "model/tintuc.php";
    include "model/binhluan.php";
    include "model/quangcao.php";
    include "view/admin/header.php";

    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'home':
                    header("Location:index.php");
                    break;
            // Quản lý khách hàng
            case 'qlkh':
                //them
                if(isset($_POST['add_kh'])){
                    $user_name = $_POST['user_name'];
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = md5($_POST['mat_khau']);
                    $email = $_POST['email'];
                   
                    $kich_hoat = $_POST['kich_hoat'];
                    $vai_tro = $_POST['vai_tro'];
                   
                    if($_FILES["hinh"]["name"] != ""){
                        $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                               
                        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                        $hinh = basename($_FILES["hinh"]["name"]);
                        } else {
                            $hinh = "";
                        }
                        khach_hang_insert($user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro); 
                        }
                //sua   
                if(isset($_GET['sua_kh'])){
                    $row = khach_hang_select_by_id($_GET['sua_kh']);
                }
                if(isset($_POST['update_kh'])){
                    $ma_kh = $_POST['ma_kh'];
                    $user_name = $_POST['user_name'];
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = $_POST['mat_khau'];
                    $email = $_POST['email'];
                    $kich_hoat = $_POST['kich_hoat'];
                    $vai_tro = $_POST['vai_tro'];
                    
                    if($_FILES["hinh"]["name"] != ""){
                        $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                               
                        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                        $hinh = basename($_FILES["hinh"]["name"]);
                        } else {
                                $hinh = "";
                        }
                    /* if($_FILES["hinh"]["name"] != ""){
                        $target_file = $img_path_duan1.basename($_FILES['hinh']['name']);
                         $name_file = basename($_FILES['hinh']['name']);      
                        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = $_FILES['hinh']['name'];
                        } 
                    else{
                            $hinh = "";
                        } */
                    
                      khach_hang_update($user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro,$ma_kh);
                        }
                    
                //xoa
                if(isset($_GET['xoa_kh'])){
                   khach_hang_delete($_GET['xoa_kh']);
                    }
                    $ds_kh = khach_hang_select_all();
                    include "view/admin/ql_kh.php";
                    break;

            // QUản lý loại
            case 'qlloai':
                    //them
                    if(isset($_POST['add_loai'])){
                    
                        
                        $ten_loai = $_POST['ten_loai'];
                        $sap_xep = $_POST['sap_xep'];
                        $parent = $_POST['parent'];
                        $vi_tri = $_POST['vi_tri'];
                        if($_FILES["hinh"]["name"] != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                                   
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            }
                        $kich_hoat = $_POST['active'];
                            loai_insert($ten_loai,$sap_xep,$parent,$hinh,$kich_hoat,$vi_tri);
                            }
                    //sua
                    if(isset($_GET['sua_loai'])){
                        $row = loai_select_by_id($_GET['sua_loai']);
                            }
                    if(isset($_POST['update_loai'])){
                        $ma_loai = $_POST['ma_loai'];
                        $ten_loai = $_POST['ten_loai'];
                        $sap_xep = $_POST['sap_xep'];
                        $parent = $_POST['parent'];
                        $vi_tri = $_POST['vi_tri'];
                        if($_FILES["hinh"]["name"] != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            }
                        $kich_hoat = isset($_POST['active']); 
                        loai_update($ten_loai,$sap_xep,$parent,$hinh,$kich_hoat,$vi_tri,$ma_loai);
                            }
                    //xoa
                    if(isset($_GET['xoa_loai'])){
                       loai_delete($_GET['xoa_loai']);
                            }
                    $ds_loai = loai_select_all();
                    $ds_loai_non_active = loai_select_non_active(0);
                    include "view/admin/ql_loai.php";
                    break;
            // QUản lý quảng cáo
            case 'qlquangcao':
                    //them
                    if(isset($_POST['add_quangcao'])){
                        $vi_tri = $_POST['vi_tri'];
                        $ma_loai = $_POST['ma_loai'];
                        if($_FILES["hinh"]["name"] != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                                   
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            }
                       
                            quangcao_insert($hinh,$vi_tri,$ma_loai);
                            }
                    //sua
                    if(isset($_GET['sua_quangcao'])){
                        $row = quangcao_select_by_id($_GET['sua_quangcao']);
                            }
                    if(isset($_POST['update_quangcao'])){
                        $ma_quangcao = $_POST['ma_quangcao'];
                        $ma_loai = $_POST['ma_loai'];
                        $vi_tri = $_POST['vi_tri'];
                        if($_FILES["hinh"]["name"] != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            }
                        quangcao_update($hinh,$vi_tri,$ma_loai,$ma_quangcao);
                            }
                    //xoa
                    if(isset($_GET['xoa_quangcao'])){
                       quangcao_delete($_GET['xoa_quangcao']);
                            }
                    $ds_quangcao = quangcao_select_all();
                    $ds_loai = loai_select_all();
                    
                    include "view/admin/ql_quangcao.php";
                    break;   
            // Quản lý tin tức
            case "qltintuc":
                    //them
                    if(isset($_POST['add_tintuc'])){
                        
                        $ten_tintuc = $_POST['ten_tintuc'];
                        $ma_loai = $_POST['ma_loai'];
                        $dacbiet_tintuc = $_POST['dacbiet_tintuc'];
                        $hot_tintuc = $_POST['hot_tintuc'];
                        $noi_dung = $_POST['noi_dung'];
                        $ngay_dang= $_POST['ngay_dang'];
                        $tag = $_POST['tag'];
                        if($_FILES["hinh"]["name"] != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                                   
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            } 
                            /*   $hinh = $_FILES['hinh']['name']; */
                                
                            tin_tuc_insert($ten_tintuc,$ma_loai,$hinh,$dacbiet_tintuc,$hot_tintuc,$tag,$ngay_dang,$noi_dung);
                        /*    if($_FILES["img"]["name"] != ""){
                                $target_file = "upload/". basename($_FILES["img"]["name"]);
                                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                                $hinh = $_FILES["img"]["name"];
                            } else{ $hinh = "";	}
                            
                            addCatalog($ten,$hinh,$home); 
                            
                        }
                        */
                            }   
                    //sua
                    if(isset($_GET['sua_tintuc'])){
                        $row = tin_tuc_select_by_id($_GET['sua_tintuc']);
                    }
                    if(isset($_POST['update_tintuc'])){
                        $ma_tintuc = $_POST['ma_tintuc'];
                        $ten_tintuc = $_POST['ten_tintuc'];
                        $ma_loai = $_POST['ma_loai'];
                        
                        $dacbiet_tintuc = $_POST['dacbiet_tintuc'];
                        $hot_tintuc = $_POST['hot_tintuc'];
                        $noi_dung = $_POST['noi_dung'];
                        $ngay_dang= $_POST['ngay_dang'];
                        $tag = $_POST['tag'];
                        if($_FILES["hinh"]["name"] != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]);
                                   
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            }          
                            
                        tin_tuc_update($ten_tintuc,$ma_loai,$hinh,$dacbiet_tintuc,$hot_tintuc,$tag,$ngay_dang,$noi_dung,$ma_tintuc);
                    }
                    //xoa
                    if(isset($_GET['xoa_tintuc'])){
                    tin_tuc_delete($_GET['xoa_tintuc']);
                    }
                            $ds_tintuc = tin_tuc_select_all(0);
                            $ds_loai = loai_select_all();
                            $ds_loai_non_active = loai_select_non_active(0);
                            include "view/admin/ql_tintuc.php";
                            break;
            //Quản lý bình luận (xoá)
            case 'qlbl':
                    if(isset($_GET['xoa_bl'])){
                        binh_luan_delete($_GET['xoa_bl']);
                    }
                    $ds_bl = binh_luan_select_all(0);
                    include "view/admin/ql_binhluan.php";
                    break;
            default:
                    include "view/admin/home.php";
            }
}else{
        include "view/admin/home.php";
}
    include "view/admin/footer.php";
?>