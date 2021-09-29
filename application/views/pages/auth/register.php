
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Register</h2>
						
						<ul class="breadcrumb">
							<li><a href="<?= base_url();?>" title="Home">Home</a></li>
							<li><span>Register</span></li>
						</ul>
					</div>
				</div>

    <div class="container mb">
					<div class="login-page">
						<div class="login-form form">
							<div class="block-title">
								<h2 class="title"><span>Register</span></h2>
							</div>
						
							<?= form_open('register', ['method' => 'POST']) ?>
                                <div class="form-group">
									<label>Nama Lengkap</label>
									<!-- Param 1: name, 2: default values, 3: atribut -->
                                    <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                                    <?= form_error('name') ?>
								</div>

								<div class="form-group">
									<label>Email</label>
									<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan alamat email aktif', 'required' => true]) ?>
                                    <?= form_error('email') ?>
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Password minimal 8 karakter', 'required' => true]) ?>
                                    <?= form_error('password') ?>
								</div>
                                
                                <div class='form-group'>
                                    <label>Konfirmasi Password</label>
                                    <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password yang sama', 'required' => true]) ?>
                                    <?= form_error('password_confirmation') ?>
								
								<div class="form-group text-center">
									<input type="submit" class="btn btn-primary" value="Sign Up">
								</div>

                                <div class="form-group text-center">
									<div class="link">
                                        <text class="title">Sudah memiliki akun?</text>
										<a href="<?= base_url('login');?>">Login</a>
									</div>
								</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
    </div>

	<hr>