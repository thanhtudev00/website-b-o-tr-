<!--2 tin dac biet-->
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
<?php
    $i = 0;
    foreach($ds_tintuc as $tintuc){
        if($tintuc['dacbiet_tintuc'] == 1){
        $i++;
        $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
        echo  ' <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height"><img src="'.$img_path_duan1.$tintuc['hinh'].'" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font">
                            <div class=""><p class="color_fff mb-1"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;'.$tintuc['ngay_dang'].'
                            </p>
                            <a href="'.$linkchitiet.'" class="fh5co_good_font">'. $tintuc['ten_tintuc'] .'</a></div>
                        </div>
                    </div>
                </div>';
        if($i>=2 || $tintuc['dacbiet_tintuc'] != 1) break;
    }
}
?>       
    </div>
</div>
 <!-- BEGIN .wrapper -->

<div class="container">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> 
            <?php  foreach($loai_vi_tri_1 as $loai){
                $ten_loai = $loai['ten_loai'];
                $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                        echo '<a href="'.$linktintuc.'">Tin '.$ten_loai.'</a>';
                    }
                
            ?>
        </div>
    </div>
        <div class="column-3">
        <?php
        
        $i=0;
            foreach($ds_tintuc3_1 as $tintuc){
                $linkchitiet = "index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
                $i++;
                echo'<div>
                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>
                                    <div></div>
                                </div>
                                
                    <div class="mt-3">
                <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-bold"><span>'.$tintuc['ten_tintuc'].'</span></a>
                <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                    </div>
                </div>';
                if ($i>=3) echo'</div>';

}
?>
<br>
        </div>
</div>
<br>
<div class="container">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> 
        <?php  foreach($loai_vi_tri_2 as $loai){
                $ten_loai = $loai['ten_loai'];
                $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                        echo '<a href="'.$linktintuc.'">Tin '.$ten_loai.'</a>';
                    }
                
            ?>
        </div>
    </div>
        <div class="column-3">
        <?php
        
        $i=0;
            foreach($ds_tintuc3_2 as $tintuc){
                $linkchitiet = "index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
                $i++;
                echo'<div>
                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>
                                    <div></div>
                                </div>
                                
                    <div class="mt-3">
                <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-bold"><span>'.$tintuc['ten_tintuc'].'</span></a>
                <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                    </div>
                </div>';
                if ($i>=3) echo'</div>';
}
?>
    </div>
</div>
<br>
<br>

         
<br>
<!--quangcao-->
<div class="container">
        <br>
        <div class="row">
            <div class="col">
                <?php
                foreach($quangcao_vi_tri_1 as $qc){
                    echo '<img class="mx-auto d-block img-fluid" src="'.$img_path_duan1.$qc['hinh'].'">';
                }
                ?>
            </div>
        </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin mới</div>
                </div>
                <?php
                
                foreach($ds_tintuc10 as $tintuc){
                    
                   
                    $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
                    echo       '<div class="row pb-4">
                                    <div class="col-md-5">
                                        <div class="fh5co_hover_news_img">
                                            <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>                                    
                                        </div>
                                    </div>
                                    <div class="col-md-7 animate-box">
                                        <a href="'.$linkchitiet.'" class="fh5co_magna py-2 ">'. $tintuc['ten_tintuc'] .'</a>
                                        <div class="fh5co_consectetur pt-1">
                                            <p  class="fh5co_mini_time "> '.$tintuc['ngay_dang'].' </p>
                                            <div>'.mysubstr($tintuc['noi_dung'],200).'</div>
                                    
                                        </div>
                                    </div>
                                </div>';
                    
                }
                ?>
                <!--</div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore.
                        </div>
                        <ul class="fh5co_gaming_topikk pt-3">
                            <li> Why 2017 Might Just Be the Worst Year Ever for Gaming</li>
                            <li> Ghost Racer Wants to Be the Most Ambitious Car Game</li>
                            <li> New Nintendo Wii Console Goes on Sale in Strategy Reboot</li>
                            <li> You and Your Kids can Enjoy this News Gaming Console</li>
                        </ul>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img src="images/photo-1449157291145-7efd050a4d0e-578x362.jpg" alt=""/>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/office-768x512.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Dannh mục</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php
                    foreach($ds_loai as $loai){
                        $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                        echo '<a href="'.$linktintuc.'" class="fh5co_tagg">'.$loai['ten_loai'].'</a>';
                    }
                    ?>
                    <!--<a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>-->
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Nổi bật</div>
                </div>
                <?php
                    foreach($ds_tintuc4 as $tintuc){
                        if ($tintuc['hot_tintuc'] == 1){
                        $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
                        echo '<div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="'.$img_path_duan1.$tintuc['hinh'].'" alt="img" class="fh5co_most_trading"/>
                        </div>
                        
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"><a href="'.$linkchitiet.'">'.$tintuc['ten_tintuc'].'</a></div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>';
                    }
                }
                ?>
                
                
                
                <!--quang cao-->
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Quảng cáo</div>
                </div>
                <div class="row pb-3">
                    <div class="col-12 align-self-center">
                    <?php
                        foreach($quangcao_vi_tri_2 as $qc){
                            echo '<img class="mx-auto d-block img-fluid" src="'.$img_path_duan1.$qc['hinh'].'">';
                        }
                    ?>
                    </div> 
                </div>
                
                <div class="row pb-3">
                    <div class="col-12 align-self-center">
                    <?php
                        foreach($quangcao_vi_tri_3 as $qc){
                            echo '<img class="mx-auto d-block img-fluid" src="'.$img_path_duan1.$qc['hinh'].'">';
                        }
                    ?>
                    </div> 
                </div>
                
                <!--<div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                                                              class="fh5co_most_trading"/></div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>-->
            </div>
        </div>
        <!--<div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Trang trước</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Trang sau <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>-->
    </div>
</div>
<hr>
<!--quangcao-->
<div class="container">
        
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
<br>
<div class="container">
    <div class="row">
    <div class="col-sm-3">
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">
            <?php  foreach($loai_vi_tri_3 as $loai){
                $ten_loai = $loai['ten_loai'];
                $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                        echo '<a href="'.$linktintuc.'">Tin '.$ten_loai.'</a>';
                    }
                
            ?>
        </div>
        <?php
        $i=0;
        
        foreach($ds_tinhot4_3 as $tintuc){
            $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
            if($i<1){
            echo'<div class="">
            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>
                                <div></div>
                            </div>
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-bold"><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }elseif($i>=1) {echo
            '<div>
            
                                
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-normal"><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }
            $i++;
            

}
?>
        </div>
        <div class="col-sm-3 ">
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> 
            <?php  foreach($loai_vi_tri_4 as $loai){
                    $ten_loai = $loai['ten_loai'];
                    $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                            echo '<a href="'.$linktintuc.'">Tin '.$ten_loai.'</a>';
                        }
                
            ?>
        </div>
        <?php
        $i=0;
        
        foreach($ds_tinhot4_4 as $tintuc){
            $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
            if($i<1){
            echo'<div class="">
            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>
                                <div></div>
                            </div>
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-bold"><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }elseif($i>=1) {echo
            '<div class="">
            
                                
            
                <div class="mt-3">
                    <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading "><span>'.$tintuc['ten_tintuc'].'</span></a>
                    <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }
            $i++;
            

}
?>
        </div>
        <div class="col-sm-3">
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> 
            <?php  foreach($loai_vi_tri_5 as $loai){
                    $ten_loai = $loai['ten_loai'];
                    $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                            echo '<a href="'.$linktintuc.'">Tin '.$ten_loai.'</a>';
                        }
                
            ?>
        </div>
        <?php
        $i=0;
        
        foreach($ds_tinhot4_5 as $tintuc){
            $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
            if($i<1){
            echo'<div class="">
            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>
                                <div></div>
                            </div>
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-bold"><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }elseif($i>=1) {echo
            '<div class="">
            
                                
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading "><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }
            $i++;
            

}
?>
        </div>
        <div class="col-sm-3">
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> 
            <?php  foreach($loai_vi_tri_6 as $loai){
                    $ten_loai = $loai['ten_loai'];
                    $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                            echo '<a href="'.$linktintuc.'">Tin '.$ten_loai.'</a>';
                        }
                
            ?>
        </div>
        <?php
        $i=0;
        
        foreach($ds_tinhot4_6 as $tintuc){
            
            $linkchitiet="index.php?act=tintuc_chitiet&ma_tintuc=".$tintuc['ma_tintuc']."&ma_loai=".$tintuc['ma_loai'];
            if($i<1){
            echo'<div class="">
            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><a href="'.$linkchitiet.'" class="fh5co_news_img"><img  src="'.$img_path_duan1.$tintuc['hinh'].'" alt=""/></a></div>
                                <div></div>
                            </div>
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading font-weight-bold"><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }elseif($i>=1) {echo
            '<div class="">
            
                                
                            
                <div class="mt-3">
            <a href="'.$linkchitiet.'" class="d-block fh5co_small_post_heading "><span>'.$tintuc['ten_tintuc'].'</span></a>
            <div class="c_g"><i class="fa fa-clock-o "></i> '.$tintuc['ngay_dang'].'</div>
                </div>
            </div>
            <hr>';
        }
            $i++;
            

}
?>
        </div>
       
    </div>
</div>