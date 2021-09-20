
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Login</h2>
						
						<ul class="breadcrumb">
							<li><a href="<?= base_url();?>" title="Home">Home</a></li>
							<li><span>Login</span></li>
						</ul>
					</div>
				</div>

    <div class="container mb">

					<div class="login-page">
						<div class="login-form form mb">
							<div class="block-title">
								<h2 class="title"><span>Login</span></h2>
							</div>
						
							<?= form_open('login', ['method' => 'POST']) ?>
								<div class="form-group">
									<label>Email</label>
									<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan email', 'required' => true]) ?>
                                    <?= form_error('email') ?>
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                                    <?= form_error('password') ?>
								</div>
								
								<div class="form-group text-center">
									<input type="submit" class="btn btn-primary" value="Sign In">
								</div>

                                <div class="form-group text-center">
									<div class="link">
                                        <text class="title">Anda belum memiliki akun?</text>
										<a href="<?= base_url('register');?>">Register</a>
									</div>
								</div>
								<div class="text-center"> 
									<h3 class="title">Login dengan : </h3>
								</div>
								<div class="container">
									<div class="col-md-3"><img src="assets/img/icon/icon-google.png" alt=""></div>
									<div class="col-md-3"><img src="assets/img/icon/icon-facebook.png" alt=""></div>
									<div class="col-md-3"><img src="assets/img/icon/icon-linkedin.png" alt=""></div>
									<div class="col-md-3"><img src="assets/img/icon/icon-twitter.png" alt=""></div>
                                </div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
    </div>
