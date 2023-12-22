<header class="mb-3">
    <a class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $page_title;?> <?= APPNAME; ?></h3>
                <p class="text-subtitle text-muted">Sistem Administrasi Efisien, Integratif, dan Rekam Arsip</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('welcome')?>"><?= APPNAME ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $page_title?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div> 
<div class="page-content"> 
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <?php $image_url = ($this->session->usr_kelamin == 1) ? base_url('assets/adminkeceh/assets/compiled/jpg/2.jpg') : base_url('assets/adminkeceh/assets/compiled/jpg/3.jpg');?>
                        <img src="<?= $image_url?>" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="card-title">Selamat Datang <?= $this->session->usr_full ?>!</h5>
                        <h6 class="text-muted mb-0">Hak Akses : <?= $this->session->usg_name ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Masuk Panel Menu</h5>
                            <p class="card-text">Buka panel menu untuk mengelola hak akses.</p>
                        </div>
                        <div>
                            <!-- Icon from Bootstrap Icons -->
                            <i class="bi bi-arrow-right-circle" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/menu')?>" class="card-text"><b>Panel Menu</b></a>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Template Manager</h5>
                            <p class="card-text">Akses dan kelola template naskah dinas <?= APPNAME?>.</p>
                        </div>
                        <div>
                            <i class="bi bi-envelope-arrow-up-fill" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('')?>" class="card-text"><b>Template Manager</b></a>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Managemen Arsip</h5>
                            <p class="card-text">Kelola arsip <?= APPNAME?> dengan praktis dan dinamis.</p>
                        </div>
                        <div>
                            <i class="bi bi-archive-fill" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('')?>" class="card-text"><b>Arsip</b></a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/adminkeceh/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>