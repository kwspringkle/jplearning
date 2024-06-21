<?php

require("includes/header.php");
?>

<?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
    <div class="alert alert-danger">Thông tin đăng nhập không chính xác. Vui lòng thử lại.</div>
<?php endif; ?>

<style>
    .highlight {
    color: #1A76D1; 
    font-weight: bold;
}
</style>				

<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row"> 
                <div class="col-lg-12">
                    <div class="contact-us-form">
                        <h1>Đăng nhập</h1>
                        <!-- Form -->
                        <form class="form" method="post" action="login_process.php"> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="username" required="" autocapitalize="none">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="mật khẩu" required="" autocapitalize="none">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Đăng nhập</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>   
                        <p>Click vào <a href="signup.php"><span class="highlight">đây</span></a> để đăng kí nếu bạn chưa có tài khoản</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require("includes/footer.php");
require("includes/script.php");
?>
