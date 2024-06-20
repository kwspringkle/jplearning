<?php
require("includes/header.php");
?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 style="font-weight: bold; margin-bottom: 20px;">Học từ mới</h2>
                <hr>
                <br>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 text-center">
                <section class="create mb-4">
                    <button type="submit" class="btn btn-primary">Tạo folder mới</button>
                </section>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <section class="folder">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Folder Name 1</h5>
                                    <p class="card-text">Last Studied: June 20, 2024</p>
                                    <a href="#" class="btn btn-primary">View Folder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Folder Name 2</h5>
                                    <p class="card-text">Last Studied: June 19, 2024</p>
                                    <a href="#" class="btn btn-primary">View Folder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Folder Name 3</h5>
                                    <p class="card-text">Last Studied: June 18, 2024</p>
                                    <a href="#" class="btn btn-primary">View Folder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</div>

<section class="explore section" style="background-color: white; padding: 30px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 style="font-weight: bold; margin-bottom: 20px;">Khám phá</h2>
                <hr>
                <br>
            </div>
        </div>      
    </div>
</section>


<section class="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
            <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">June 21, 2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae.</p>
                        <div class="vote-buttons">
                            <button class="btn btn-outline-primary btn-sm vote-up" onclick="voteUp(this)">
                                <i class="fa fa-thumbs-up"></i>
                            </button>
                            <span class="vote-count">10</span>
                            <button class="btn btn-outline-primary btn-sm vote-down" onclick="voteDown(this)">
                                <i class="fa fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
            </div>


            <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">June 21, 2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae.</p>
                        <div class="vote-buttons">
                            <button class="btn btn-outline-primary btn-sm vote-up" onclick="voteUp(this)">
                                <i class="fa fa-thumbs-up"></i>
                            </button>
                            <span class="vote-count">10</span>
                            <button class="btn btn-outline-primary btn-sm vote-down" onclick="voteDown(this)">
                                <i class="fa fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
            </div>
                
            <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">June 21, 2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae.</p>
                        <div class="vote-buttons">
                            <button class="btn btn-outline-primary btn-sm vote-up" onclick="voteUp(this)">
                                <i class="fa fa-thumbs-up"></i>
                            </button>
                            <span class="vote-count">10</span>
                            <button class="btn btn-outline-primary btn-sm vote-down" onclick="voteDown(this)">
                                <i class="fa fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
            </div>



            </div>
        </div>
    </div>
</section>


<section class="contact-us section">
			<div class="container">
            <div class="inner">
					<div class="row"> 
						<div class="col-lg-12">
							<div class="contact-us-form">
								<h2 style="font-weight: bold;">Liên hệ với chúng tôi</h2>
								<p>Nếu như bạn có bất cứ thắc mắc, khiếu nại, đóng góp, bạn có thể liên hệ theo form dưới đây</p>
								<!-- Form -->
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Tên của bạn" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Số điện thoại" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Tiêu đề" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Nội dung" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="fa fa-envelope"></i>
								<div class="content">
									<h3>Email</h3>
									<p>info@jplearning.com</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
                        <!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>Điện thoại</h3>
									<p>0123456789</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Thời gian làm việc</h3>
									<p>T2-CN</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
</section>

<?php
require("includes/footer.php");
require("includes/script.php");
?>