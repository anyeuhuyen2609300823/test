<div id="id01" class="modal__login-form">
    <h2>Login Form</h2>

    <form action="process-login.php" method="post" class="form__login-user">
        <div class="imgcontainer">
            <a href="index.php" class="close__btn-login" title="Close Modal">&times;</a>
            <img src="https://photo-cms-kienthuc.zadn.vn/zoom/800/uploaded/thutrang/2020_11_24/2/dang-chuan-mat-dep-gai-xinh-ha-thanh-khien-dan-tinh-xao-xuyen.jpg"
                alt="Avatar" class="avatar">
        </div>

        <div class="body__container">
            <label class="form__login-label" for="email"><b>Username</b></label>
            <input class="form__login-input" type="email" placeholder="Enter Email" name="email" required>

            <label class="form__login-label" for="psw"><b>Password</b></label>
            <input class="form__login-input" type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" class="form__login-submit" name="form__login-submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <span class="forget__password-login">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    <?php if (isset($_SESSION['error_login'])) { ?>
    <div class="alert alert-danger" role="alert">
        Bạn đã sai tài khoản hoặc mật khẩu
    </div>
    <?php } ?>
</div>