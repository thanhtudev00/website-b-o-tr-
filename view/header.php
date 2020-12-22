<!DOCTYPE html>
<!--
	index duan1
-->
<html lang="vi" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>88 News — Báo điện tử Tri thức trực tuyến</title>
    <link href="view/html/css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="view/html/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="view/html/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
    <link href="view/htmlcss/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="view/html/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <link href="view/html/css/slider.css" rel="stylesheet" type="text/css"/>
    <link href="view/html/css/subnav.css" rel="stylesheet" type="text/css"/>
    <link href="view/html/css/3columns.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    

    <!--<link type="text/css" rel="stylesheet" href="view/css/reset.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/material.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/shortcodes.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/ot-lightbox.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/custom-styles.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/main-stylesheet.min.css" />
    <link type="text/css" rel="stylesheet" href="view/css/otgrid.min.css" />-->
    
    
    <!-- Bootstrap CSS -->
    <link href="view/html/css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="view/html/js/modernizr-3.5.0.min.js"></script>
    <script src="view/html/js/slider.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
</head>
<body>
<!-- <div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with black-and-white app</a>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="view/image/logo88news.jpg" alt="img" class="fh5co_logo_width"/>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="row">

                    <div class="col-md-8">
                        <div class="form-group-big-search">
                            <form class="form-inline" action="/action_page.php">
                                <input class="form-control form-search-width mr-sm-2" type="text" placeholder="Nhập từ khoá">
                                <button class="btn btn-warning" type="submit">Tìm kiếm</button>
                              </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <?php	
                    if(isset($_SESSION['ma_kh'])&&($_SESSION['ma_kh']>0)){
                        if($_SESSION['vai_tro'] == 1){
                        echo'
                            <div class="text-right d-inline-block">
                            <ul style="list-style-type:none;">
                            <li class="text-success"><h4>'.$_SESSION['user_name'].'</h4></li>
                            <li><a  href="admin.php" target="_blank">Quan ly</a></li>
                            <li><a  href="index.php?act=logout" >Log out</a></li>
                            </ul>
                            </div>    
                            <div class="text-right d-inline-block">
                        
                                <div class="fh5co_verticle_middle">
                                <li style="list-style-type:none;"><img width="65" height="65"src="'.$img_path_duan1.$_SESSION['hinh'].'"
                                </li></div>                             
                            </div>
                            ';
                                                     
                    } else {
                        echo'
                            <li class="text-success"><h4>'.$_SESSION['user_name'].'</h4></li>
                            <li><a  href="?act=logout" >Log out</a></li>';
                            
                    }
                    }
                    else{
                        echo'<div class="text-right d-inline-block">
                            <a href="index.php?act=login" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-user fa-3x"></i></div>
                            </a>
                            </div>
                                       ';
                        
                        }
			       
			    ?>
                        
                      
                        <div class="clearfix">
                            
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link active" href="index.php?act=home">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                        foreach($ds_loai_active as $loai){
                            $ten_loai=$loai['ten_loai'];
                            $linktintuc="index.php?act=tintuc&ma_loai=".$loai['ma_loai'];
                            echo '<li class="nav-item">
                                  <a class="nav-link" href="'.$linktintuc.'">'.$ten_loai.'<span class="sr-only">(current)</span></a>
                                  </li>';
                                                  }
                    ?>
                   
                    
            <!--        <li class="nav-item active">
                        <a class="nav-link" href="index.html">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="blog.html">Công nghệ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Y tế <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Giải trí <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Kinh doanh <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Khoa học <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Thể thao <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact_us.html">Thế giới <span class="sr-only">(current)</span></a>
                    </li> -->
                </ul>
            </div>
</div>


