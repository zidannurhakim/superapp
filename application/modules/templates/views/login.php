<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman Login Safira">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="@masarkan">
    <link rel="icon" href="<?= base_url('assets/other/logo.png') ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= base_url('assets/other/logo.png') ?>" type="image/x-icon" />
    <title><?= APPNAME ?>&nbsp;|&nbsp;<?= isset($page_title) ? $page_title : "Untitled Webpage"; ?></title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/erratum_login/main/waves/assets/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/erratum_login/main/waves/assets/css/fontawesome.css')?>">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/erratum_login/main/waves/assets/css/login.css')?>">
</head>

<body>
    <!-- 01 Preloader -->
    <!-- <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div> -->
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <?php if(isset($view_file)) $this->load->view($module.'/'.$view_file); ?>
    
    <!-- latest jquery-->
    <script src="<?= base_url('assets/erratum_login/main/waves/assets/js/jquery-3.5.1.min.js')?>"></script>
    <!-- Theme js-->
    <script src="<?= base_url('assets/erratum_login/main/waves/assets/js/script.js')?>"></script>
</body>

</html>