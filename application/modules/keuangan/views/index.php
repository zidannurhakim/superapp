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
                <p class="text-subtitle text-muted">Managemen Keuangan Lights</p>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h5 class="card-title">PT. Global Light Solution</h5>
                        <p class="text-subtitle">www.lights.co.id</p>
                        <span>Total Saldo :</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h5 class="card-title">Portal Bank BRI</h5>
                        <p class="text-subtitle">Managemen Keuangan Tabungan BRI</p>
                        <a href="<?= base_url('keuangan/bri') ?>" class="btn btn-outline-danger">Klik disini</a>
                    </div>
                    <div class="card-footer">
                        <span>Bank BRI Cabang MT. Hariyono</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h5 class="card-title">Portal Bank BNI</h5>
                        <p class="text-subtitle">Managemen Keuangan Tabungan BNI</p>
                        <a href="" class="btn btn-outline-danger">Klik disini</a>
                    </div>
                    <div class="card-footer">
                        <span>Bank BRI Cabang Universitas Brawijaya</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h5 class="card-title">Portal Bank BTN</h5>
                        <p class="text-subtitle">Managemen Keuangan Tabungan BTN</p>
                        <a href="" class="btn btn-outline-danger">Klik disini</a>
                    </div>
                    <div class="card-footer">
                        <span>Bank BRI Cabang Sumbersari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>