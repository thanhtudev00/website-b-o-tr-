<?php
    session_start();
    ob_start();
    $error_message="";
    include "model/pdo.php";
    include "model/loai.php";
    include "model/tintuc.php";
    include "model/khachhang.php";
    include "model/binhluan.php";
    include "model/quangcao.php";
    include "global_duan1.php";
    $ds_loai_active = loai_select_active(0);
    $ds_loai_non_active = loai_select_non_active(0);
    include "view/header.php";
    $ds_tintuc = tin_tuc_select_all(0);
    $ds_loai = loai_select_all();
    $ds_loai_active = loai_select_active(0);
    $ds_loai_non_active = loai_select_non_active(0);
    $ds_loai_non_active_2 = loai_select_non_active_2(0);
    $ds_loai_non_active_3 = loai_select_non_active_3(0);                   
    $ds_tintuc2 = tin_tuc_select_2(0);                   
    $ds_tintuc4 = tin_tuc_select_4(0);
    $ds_tintuc4 = tin_tuc_select_4(0);
    $ds_tintuc8 = tin_tuc_select_8(0);
    $ds_tintuc10 = tin_tuc_select_10(0);
    $quangcao_vi_tri_1 = quangcao_select_vi_tri_1(0);
    $quangcao_vi_tri_2 = quangcao_select_vi_tri_2(0);
    $quangcao_vi_tri_3 = quangcao_select_vi_tri_3(0);
    $quangcao_vi_tri_4 = quangcao_select_vi_tri_4(0);
    $loai_vi_tri_1=loai_select_vi_tri_1(0);
    $loai_vi_tri_2=loai_select_vi_tri_2(0);
    $loai_vi_tri_3=loai_select_vi_tri_3(0);
    $loai_vi_tri_4=loai_select_vi_tri_4(0);
    $loai_vi_tri_5=loai_select_vi_tri_5(0);
    $loai_vi_tri_6=loai_select_vi_tri_6(0);
    foreach($loai_vi_tri_1 as $loai){
            $ma_loai_vi_tri_1 = $loai['ma_loai'];
    }
    $ds_tintuc3_1 = tin_tuc_select_3($ma_loai_vi_tri_1);
    foreach($loai_vi_tri_2 as $loai){
        $ma_loai_vi_tri_2 = $loai['ma_loai'];
    }
    $ds_tintuc3_2 = tin_tuc_select_3($ma_loai_vi_tri_2);
    foreach($loai_vi_tri_3 as $loai){
        $ma_loai_vi_tri_3 = $loai['ma_loai'];
    }
    $ds_tinhot4_3 = tin_tuc_hot_select_4($ma_loai_vi_tri_3);
    foreach($loai_vi_tri_4 as $loai){
    $ma_loai_vi_tri_4 = $loai['ma_loai'];
    }
    $ds_tinhot4_4 = tin_tuc_hot_select_4($ma_loai_vi_tri_4);
    foreach($loai_vi_tri_5 as $loai){
    $ma_loai_vi_tri_5 = $loai['ma_loai'];
    }
    $ds_tinhot4_5 = tin_tuc_hot_select_4($ma_loai_vi_tri_5);
    foreach($loai_vi_tri_6 as $loai){
    $ma_loai_vi_tri_6 = $loai['ma_loai'];
    }
    $ds_tinhot4_6 = tin_tuc_hot_select_4($ma_loai_vi_tri_6);
    $ds_tintuc = tin_tuc_select_all(0);
    $ds_loai = loai_select_all();
    $ds_tintuc2 = tin_tuc_select_2(0);
    $ds_tintuc4 = tin_tuc_select_4(0);
        if(isset($_GET['act'])){
            switch($_GET['act']){
                //trang chủ
                case 'home':
                    
               
                    include "view/home.php";
                    break;
                //trang danh sách
                case 'tintuc':
                    if(isset($_GET['ma_loai'])){
                        $ma_loai = $_GET['ma_loai'];}
                        else{ $ma_loai = 0;
                        }
                    $ds_loai = loai_select_all($ma_loai);
                    $ds_tintuc4 = tin_tuc_select_4($ma_loai);
                    $ds_tintuc = tin_tuc_select_all(0);   
                    $ds_tintuc_loai = tin_tuc_select_all($ma_loai);
                    $loai_by_id = loai_select_by_id($ma_loai);
                    $quangcao_vi_tri_1_ma_loai = quangcao_select_vi_tri_1_ma_loai($ma_loai);    
                    include "view/tintuc.php";
                    break;
                // trang chi tiết
                case 'tintuc_chitiet':
                    if(isset($_GET['ma_tintuc'])){
                        $ma_tintuc = $_GET['ma_tintuc'];}
                        else{ $ma_tintuc = 0;
                        }
                    if(isset($_GET['ma_loai'])){
                        $ma_loai = $_GET['ma_loai'];
                    }else{$ma_loai = 0;}
                        $ct_tintuc = tin_tuc_select_by_id($ma_tintuc);
                        $ds_tintuc = tin_tuc_select_all(0);
                        $ds_loai = loai_select_all();
                        $ds_tintuc2 = tin_tuc_select_2(0);
                        $ds_tintuc4 = tin_tuc_select_4($ma_loai);
                        $ds_bl = binh_luan_select_all($ma_tintuc);
                        $quangcao_vi_tri_1_ma_loai = quangcao_select_vi_tri_1_ma_loai($ma_loai); 
                    include "view/tintuc_chitiet.php";
                    break;
                
                /* if(isset($_POST['dangnhap'])){
					$ho_ten=$_POST['ho_ten'];
                    $mat_khau=$_POST['mat_khau'];
                    
					$logininfo = checkUser($ho_ten,$mat_khau);
					session_start();
						$_SESSION['ma_kh'] = $logininfo['ma_kh'];
						$_SESSION['ho_ten'] = $logininfo['ho_ten'];
						$_SESSION['mat_khau'] = $logininfo['mat_khau'];
						$_SESSION['vai_tro'] = $logininfo['vai_tro'];
						if($logininfo['vai_tro']==1){
							//header('Location : admin.php');
							header('Location: admin.php');
						}else{ 
							header('Location: index.php');
						
					}else{
						$error_message = "Sai mật khẩu hoặc tên đăng nhập";
						//header('Location: index.php?act=login');
					
					
                } */
                //đăng nhập
                case 'login':
				if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
					$user_name=$_POST['user_name'];
                    $mat_khau=md5($_POST['mat_khau']);
                  /*  if(empty($user_name)){
                        $error_message="Xin vui lòng nhập user_name (Tên đăng nhập)!";
                        include "view/dangnhap.php";
                        break;
                    }                    
                    if(empty($mat_khau)){
                        $error_message="Xin vui lòng nhập password (Mật khẩu)!";
                        include "view/dangnhap.php";
                        break;
                    } */
					$logininfo = checkUser($user_name,$mat_khau);
					if($logininfo['ma_kh']>0){
                         
						$_SESSION['ma_kh'] = $logininfo['ma_kh'];
						$_SESSION['user_name'] = $logininfo['user_name'];
						$_SESSION['mat_khau'] = $logininfo['mat_khau'];
						$_SESSION['vai_tro'] = $logininfo['vai_tro'];
                        $_SESSION['hinh'] = $logininfo['hinh'];                                               
                            header('Location: index.php');
                                $message = "Đăng nhập thành công";
                                echo "<script type='text/javascript'>alert('$message');</script>";                                   
						}
					else{
                        $error_message = 'Sai tên đăng nhập hoặc mật khẩu';
                        
						//header('Location: index.php?act=login');
					}
					
				}
				include "view/dangnhap.php";
				break;

                case 'logout':
				unset($_SESSION['ma_kh']);
				unset($_SESSION['user_name']);
				unset($_SESSION['mat_khau']);
                unset($_SESSION['vai_tro']);
                unset($_SESSION['hinh']);
                header('Location: index.php');
                
                break;
                //đăng ký
                case 'signin':
                    if(isset($_POST['dangky'])){
                        $user_name = $_POST['user_name'];
                        $ho_ten = $_POST['ho_ten'];
                        $mat_khau = md5($_POST['mat_khau']);
                        $xn_mat_khau = md5($_POST['xn_mat_khau']);
                        $email = $_POST['email'];
                        $kich_hoat = $_POST['kich_hoat'];
                        $vai_tro = $_POST['vai_tro'];
                        if(empty($user_name)){
                            $error_message="Xin vui lòng nhập user_name (Tên đăng nhập)!";
                            include "view/dangky.php";
                            break;
                        }
                        if(user_name_exist($user_name)){
                            $error_message="User_name (Tên đang nhập) nay da ton tai";
                            include "view/dangky.php";
                            break;
                        }
                       
                        
                        if(empty($mat_khau)){
                            $error_message="Xin vui lòng nhập password (Mật khẩu)!";
                            include "view/dangky.php";
                            break;
                        } 
                        if($xn_mat_khau != $mat_khau){
                            $error_message = "Mật khẩu không trùng khớp";
                            include "view/dangky.php";
                            break;
                        }
                        if(empty($email)){
                            $error_message="Xin vui lòng nhập email !";
                            include "view/dangky.php";
                            break;
                        }
                        if(empty($ho_ten)){
                            $error_message="Xin vui lòng nhập họ tên !";
                            include "view/dangky.php";
                            break;
                        }
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $error_message="Xin vui lòng nhập email đúng định dạng!";
                            include "view/dangky.php";
                            break;
                        }                      
                        if(isset($_FILES["hinh"]["name"]) != ""){
                            $target_file = $img_path_duan1.basename($_FILES["hinh"]["name"]); 
                            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file); 
                            $hinh = basename($_FILES["hinh"]["name"]);
                            } else {
                                $hinh = "";
                            }
                            $success_message='Đăng ký thành công!';
                            khach_hang_insert($user_name,$ho_ten,$mat_khau,$hinh,$email,$kich_hoat,$vai_tro); 
                            }
                        
                include "view/dangky.php";
                break;
                //bình luận
                case "binhluan": 
                    if(isset($_POST['add_bl'])){
                        $ma_tintuc = $_POST['ma_tintuc'];
                        $ma_loai = $_POST['ma_loai'];
                        $noi_dung = $_POST['noi_dung'];
                        $ngay_bl  = date("y,m,d");
                        if(isset($_SESSION['ma_kh'])&&($_SESSION['ma_kh']>0)){
                        $user_name = $_SESSION['user_name'];
                        $ma_kh = $_SESSION['ma_kh'];
                        $ma_tintuc = $_POST['ma_tintuc'];
                        $ma_loai = $_POST['ma_loai'];
                        $noi_dung = $_POST['noi_dung'];
                        $ngay_bl  = date("y,m,d");
                        } else {
                                $user_name = 'anonymous';
                                $ma_kh = 0;
                                $ma_tintuc = $_POST['ma_tintuc'];
                                $noi_dung = $_POST['noi_dung'];
                                $ngay_bl  = date("y,m,d");
                                }
                        binh_luan_insert($ma_tintuc,$ma_loai,$user_name,$noi_dung,$ma_kh,$ngay_bl);}
                        $url = "index.php?act=tintuc_chitiet&ma_tintuc=".$_POST['ma_tintuc']."&ma_loai=".$_POST['ma_loai'];
                        $ds_bl = binh_luan_select_all(0);
                        $ct_tintuc = tin_tuc_select_by_id($ma_tintuc);
                        header("Refresh:0;url=$url");
                     
                    break;

                default:
                    
                    include "view/home.php";
                    break;
            }
        } else{
    include "view/home.php";}
    include "view/footer.php";
    ob_end_flush();
?>