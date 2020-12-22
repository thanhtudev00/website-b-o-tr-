<div class="container-fluid mb-4">

    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Đăng nhập</div>
            <div class="text-center text-danger"><?=$error_message?></div>
        </div>
        <div class="row justify-content-center">
        <script>
	
</script>
            <div class="col-12 col-md-4 ">
                <form action="index.php?act=login"  method="post" name="dangnhapform" id="dangnhapform" class="row">
                    <div class="col-12 py-3">
                        <input type="text" name="user_name" class="form-control fh5co_contact_text_box" placeholder="Tên đăng nhập (username)" required/>
                    </div>
                    <div class="col-12 py-3">
                        <input type="password" name="mat_khau" class="form-control fh5co_contact_text_box" placeholder="Mật khẩu (password)" required/>
                    </div>
                    <div class="col-12 py-3 text-center"><input type="submit"  name="dangnhap" value="Đăng nhập" class="btn contact_btn"></div>
                </form>
                
                <div class="col-12 py-3 text-center"> <a href="index.php?act=signin"><h5>Đăng ký tài khoản<h5></a> </div>
            </div>
            <!--<div class="col-12 col-md-6 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3168.639290621062!2d-122.08624618469247!3d37.421999879825215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbe!4v1514861541665" class="map_sss" allowfullscreen></iframe>
            </div>-->
        </div>
    </div>
</div>
