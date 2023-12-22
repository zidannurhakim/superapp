<section class="page-section">
    <div class="page-decoration-1"></div>
    <div class="page-decoration-2"></div>
    <div class="page-decoration-3"></div>
    <div class="full-width-screen">
        <div class="container-fluid login-page">
            <div class="content-detail">
                <!-- Login form -->
                <form class="login-form" method="post" action="<?= base_url('auth/login');?>">
                    <div class="imgcontainer">
                        <img src="<?= base_url('assets/erratum_login/main/waves/assets/images/Safira.png')?>" alt="Avatar" class="avatar">
                    </div>
                    <div class="input-control">
                        <input type="text" name="usr_name" id="usr_name" class="form-control" placeholder="Username" required>
                        <span class="password-field-show">
                            <input type="password" class="form-control" name="usr_pass" id="usr_pass" placeholder="Password" required>
                        </span>
                        <br>
                        <div class="login-btns">
                            <button type="submit" name="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>