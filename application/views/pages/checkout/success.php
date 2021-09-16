
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
							<div class="card">
                                <div class="card-header">
                                    Checkout berhasil
                                </div>
                                <div class="card-body">
                                    <h5>Nomor order: <?= $content->invoice ?></h5>
                                    <p>Terima kasih sudah berbelanja.</p>
                                    <p>Silahkan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
                                    <ol>
                                        <li>Lakukan pembayaran pada rekening <strong>BCA 123901249421</strong> a/n DLI</li>
                                        <li>Sertakan keterangan dengan nomor order: <strong><?= $content->invoice ?></strong></li>
                                        <li>Total pembayaran: <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                                    </ol>
                                    <p>Jika sudah silahkan kirimkan bukti transfer di halaman konfirmasi atau bisa <a href="<?= base_url("myorder/detail/$content->invoice") ?>">klik disini</a></p>
                                    <a href="<?= base_url() ?>" class="btn btn-primary"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
    </div>
