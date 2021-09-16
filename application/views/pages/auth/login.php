
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

    <div class="container">

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
								<div class="container">
                                    <img src="assets/img/facebook.png" alt="">
                                    <img src="assets/img/google.png" alt="">
                                    <img src="assets/img/twitter.png" alt="">
                                    <img src="assets/img/linkedin.png" alt="">
                                </div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
    </div>
