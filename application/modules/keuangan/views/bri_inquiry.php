<header class="mb-3">
    <a class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $page_title;?></h3>
                <p class="text-subtitle text-muted">Trial API Bank BRI</p>
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
                    <div class="card-body justify-content-center">
                        <h5 class="card-title text-center">Menu Bank BRI</h5>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-sm btn-outline-primary">Mutasi</a> &nbsp;&nbsp;
                            <a href="" class="btn btn-sm btn-outline-primary">Create VA</a>&nbsp;&nbsp;
                            <a href="" class="btn btn-sm btn-outline-primary">Mutasi VA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Rekening</h5>
                    <div class="table-responsive">
                    <?php
                        if($result['responseCode'] == '0100') {
                            $data = $result['Data'];
                            echo "<table class='table' id='table1'><tbody>";
                                echo "<tr><td><b>Account</b></td><td>".$data['sourceAccount']."</td></tr>";
                                echo "<tr><td><b>Name</b></td><td>".$data['sourceAccountName']."</td></tr>";
                                echo "<tr><td><b>Status</b></td><td>".$data['sourceAccountStatus']."</td></tr>";
                                echo "<tr><td><b>Balance</b></td><td>Rp. ".number_format($data['sourceAccountBalace'], 0, ',','.')."</td></tr>";
                                echo "<tr><td><b>Registration</b></td><td>".$data['registrationStatus']."</td></tr>";
                            echo "</tbody></table>";
                        } else {
                            echo "<p class='text-danger'><b>Error : </b>".$result['responseDescription']."</p>";
                        }
                    ?>
                </div>
            </div>  
        </div>
    </div>
</div>

<script src="<?= base_url('assets/adminkeceh/assets/extensions/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/adminkeceh/assets/extensions/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/adminkeceh/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')?>"></script>
<script src="<?= base_url('assets/adminkeceh/assets/static/js/pages/datatables.js')?>"></script>