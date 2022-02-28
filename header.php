<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="gia sư, tphcm, hồ chí minh, gia sư tiểu học, gia sư cấp 2, gia sư cấp 3" 
        name="keywords">
    <meta
        content="CLB gia sư chính thức và duy nhất trực thuộc trường Đại học Bách khoa ĐHQG - HCM, dưới sự giám sát của Trung tâm hỗ trợ sinh viên & việc làm. Chúng tôi hỗ trợ tư vấn, tìm kiếm gia sư có chuyên môn cao, 100% là sinh viên Bách Khoa. CLB hỗ trợ tìm các gia sư dạy các môn Tiểu Học, THCS, THPT, chương trình quốc tế, Anh Văn, Đại học, Dạy theo yêu cầu,..."
        name="description">

    <!-- Favicon -->
    <link href="<?php echo get_theme_file_uri('assets/img/favicon.ico');?>" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <!--SCRIPT FACEBOOK MESSENGER START-->
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "168523016688437");
        chatbox.setAttribute("attribution", "setup_tool");

        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--SCRIPT FACEBOOK MESSENGER END-->
    
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">

            <?php if (is_front_page()) : ?>
                <a href="<?php echo './' ?>" class="navbar-brand">GS<span>BK</span></a>
            <?php else : ?>
                <a href="<?php echo '../' ?>" class="navbar-brand">GS<span>BK</span></a>
            <?php endif; ?>


            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">

                    <?php if (is_front_page()) : ?>
                        <a href="<?php echo './' ?>" class="nav-item nav-link">Trang chủ</a>
                        <a href="<?php echo './thong-tin-chi-tiet' ?>" class="nav-item nav-link">Thông tin chi tiết</a>
                        <a href="<?php echo './cac-hoat-dong' ?>" class="nav-item nav-link">Các hoạt động</a>
                        <a href="<?php echo './blog' ?>" class="nav-item nav-link">Blog</a>
                        <a href="<?php echo './lien-he' ?>" class="nav-item nav-link">Liên hệ</a>
                    <?php else : ?>
                        <a href="<?php echo '../' ?>" class="nav-item nav-link">Trang chủ</a>
                        <a href="<?php echo '../thong-tin-chi-tiet' ?>" class="nav-item nav-link">Thông tin chi tiết</a>
                        <a href="<?php echo '../cac-hoat-dong' ?>" class="nav-item nav-link">Các hoạt động</a>
                        <a href="<?php echo '../blog' ?>" class="nav-item nav-link">Blog</a>
                        <a href="<?php echo '../lien-he' ?>" class="nav-item nav-link">Liên hệ</a>
                    <?php endif; ?>


                </div>

                
                
                
                <!-- Thanh nav động, thêm trang là thêm nav, nhưng mà chưa bít làm :v -->
                <!-- <?php wp_nav_menu( 
                    array(
                        'theme_location' => 'menu',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-between',
                        'container_id' => 'navbarCollapse',
                        'menu_class' => 'navbar-nav ml-auto',
                        'items_wrap' => '',
                    )
                ); ?> -->
                
            </div>
            
        </div>
    </div>
        <!-- Nav Bar End -->

