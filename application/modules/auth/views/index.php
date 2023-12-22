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
                        <label class="label-container">Ingat saya
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <span class="psw"><a href="" class="forgot-btn">Lupa password?</a></span>
                        <div class="login-btns">
                            <button type="submit" name="login">Login</button>
                        </div>
                        <div class="division-lines">
                            <p>Alternatif Login</p>
                        </div>
                        <div class="login-with-btns">
                            <button type="button" class="google"><i class="fab fa-google"></i></button>
                            <button type="button" class="facebook"><i class="fab fa-facebook-f"></i></button>
                            <button type="button" class="twitter"><i class="fab fa-twitter"></i></button>
                            <button type="button" class="linkedin"><i class="fab fa-linkedin-in"></i></button>
                            <span class="already-acc">Belum terdaftar? <a href="<?= base_url('')?>" class="signup-btn">Registrasi Akun</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>