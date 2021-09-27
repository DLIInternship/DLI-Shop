			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Slideshow -->		
				<div class="section slideshow">
					<div class="tiva-slideshow-wrapper">
						<div id="tiva-slideshow" class="nivoSlider">
							<a href="#">
								<img class="img-responsive" src="<?= base_url();?>assets/img/slideshow/slide1.png" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive" src="<?= base_url();?>assets/img/slideshow/slide2.png" alt="Slideshow Image">
							</a>
						</div>
					</div>
				</div>
				
<!-- Product - Best Sellers -->
				<div id="category" class="section products-block product-tab nav-color show-hover nav-round best-sellers">
					<div class="block-title" data-aos="zoom-in-down" data-aos-duration="2000">
						<h2 class="title">Kategori <span>Produk</span></h2>
						<div class="sub-title">Disini kamu bisa menemukan berbagai pilihan menarik yang kami sediakan</div>
					</div>
					
					<div class="block-content">
						<!-- Tab Navigation -->
						<div class="tab-nav" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="300">
							<ul>
								<li class="active">
									<a data-toggle="tab" href="#platform_open_learning" class="mb text-center">
										<span>Platform Open</span>
										<span>Learning</span>
								</a>
									
								</li>
								<li>
									<a data-toggle="tab" href="#media_pembelajaran">
										<span>Media</span>
										<span>Pembelajaran</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#buku_digital">
										<span>Buku</span>
										<span>Digital</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#aplikasi_pembelajaran">
										<span>Aplikasi</span>
										<span>Pembelajaran</span>
									</a>
								</li>
							</ul>
						</div>
						
						<!-- Tab Content -->
						<div class="tab-content" data-aos="fade-up" data-aos-duration="2000">
							
							<!-- Platform Open Learning -->
							<div role="tabpanel" class="tab-pane fade in active" id="platform_open_learning">
								<div class="products owl-theme owl-carousel">
									<?php foreach ($content as $row) : ?>
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top">
												</a>
											</div>
											
											<div class="product-title">
												<a href="<?= base_url('details') ?>">
													<?= $row->product_title ?>
												</a>
											</div>
													
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
													
											<div class="product-price">
												<strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong>
											</div>
															
											<div class="product-buttons">
												<form action="<?= base_url('cart/add') ?>" method="POST">
												<input type="hidden" name="id_product" value="<?= $row->id ?>">
													<input type="number" name="qty" value="1" class="form-control">
													<button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart"></i></button>
												</form>
											</div>
										</div>
									<?php endforeach ?>	
									
								</div>
							</div>
							
							<!-- Media Pembelajaran -->
							<div role="tabpanel" class="tab-pane fade" id="media_pembelajaran">
								<div class="products owl-theme owl-carousel">
									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="img/product/4.jpg" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>
												
										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>
												
										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>
														
										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>
											
											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>												
											</a>
											
											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>
									
								</div>
							</div>
							
							<!-- Buku Digital -->
							<div role="tabpanel" class="tab-pane fade" id="buku_digital">
								<div class="products owl-theme owl-carousel">
									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="img/product/4.jpg" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>
												
										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>
												
										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>
														
										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>
											
											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>												
											</a>
											
											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>
									
								</div>
							</div>
							
							<!-- Aplikasi Pembelajaran -->
							<div role="tabpanel" class="tab-pane fade" id="aplikasi_pembelajaran">
								<div class="products owl-theme owl-carousel">
									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="img/product/4.jpg" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>
												
										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>
												
										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>
														
										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>
											
											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>												
											</a>
											
											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

<!-- Partners -->
				<div id="partners" class="section partners mb" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
					<div class="block-content">
						<div class="container">
							<div class="partners-wrap owl-theme owl-carousel">
								<a href="#"><img src="<?= base_url();?>assets/img/Logo/dli-eduventure1.png" alt="Partner 1"></a>
								<a href="#"><img src="<?= base_url();?>assets/img/Logo/logo-kemdikbud-official1.png" alt="Partner 2"></a>
								<a href="#"><img src="<?= base_url();?>assets/img/Logo/logo-puipt1.png" alt="Partner 3"></a>
								<a href="#"><img src="<?= base_url();?>assets/img/Logo/LogoUM2.png" alt="Partner 4"></a>
								<a href="#"><img src="<?= base_url();?>assets/img/Logo/dli-logo1.png" alt="Partner 5"></a>
							</div>
						</div>
					</div>
				</div>

				
				<!-- Testimonial -->
				<div id="testimonial" class="section testimonial">
					<div class="container">
						<div class="row">
							<div class="testimonial-wrap owl-theme owl-carousel">
								<div class="item">
									<div class="image"><img src="img/testimonial-1.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
								
								<div class="item">
									<div class="image"><img src="img/testimonial-2.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
								
								<div class="item">
									<div class="image"><img src="img/testimonial-3.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
							</div>
						</div>
					</div>
				</div>