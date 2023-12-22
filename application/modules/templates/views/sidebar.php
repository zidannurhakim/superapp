<ul class="menu">
    <li class="sidebar-item">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Akses</span>
            </div>
            <input class="form-control" type="text" value="<?= $this->session->usg_name;?>" disabled>
        </div>
    </li>
    <li class="sidebar-item">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Logout</span>
            </div>
            <a href="<?= base_url('auth/logout')?>" id="logoutButton" class="btn btn-danger">Klik untuk logout &nbsp;&nbsp;</a>
        </div>
    </li>
    <hr>
    <li class="sidebar-item <?php if($this->uri->segment(1)=='beranda')echo'active'?>">
        <a href="<?= base_url('beranda')?>" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-title">Sistem Keuangan</li>
    <li class="sidebar-item has-sub <?php if($this->uri->segment(1)=='keuangan')echo'active'?>">
        <a href="#" class='sidebar-link'><i class="bi bi-wallet-fill"></i><span>Administrasi</span></a>
        <ul class="submenu">
            <li class="submenu-item <?php if($this->uri->uri_string() == 'keuangan/bri') echo 'active'; ?>">
                <a href="<?= base_url('keuangan/bri')?>" class="submenu-link">BRI</a>
            </li>
        </ul>
    </li>
</ul>
<script>
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault();

        // Menampilkan alert window
        var confirmation = confirm('Anda yakin ingin logout?');

        // Jika pengguna mengklik "OK", lakukan logout
        if (confirmation) {
            window.location.href = this.getAttribute('href');
        }
    });
</script>