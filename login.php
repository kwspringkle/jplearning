<?php
require("includes/header.php");
?>
<style>
    .highlight {
    color: #1A76D1; /* Chuyển màu chữ thành màu xanh */
    font-weight: bold; /* In đậm chữ */
}
</style>				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-12">
							<div class="contact-us-form">
								<h1>Đăng nhập</h1>
								<!-- Form -->
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="username" placeholder="Username" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="password" placeholder="Mật khẩu" required="">
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
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->


<?php
require("includes/footer.php");
require("includes/script.php");
?>
