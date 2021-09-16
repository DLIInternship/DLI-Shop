<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Shopping Cart</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-checkout">
						<div class="row">

							<div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<form action="<?= base_url('checkout/create') ?>" method="POST">
									<div class="panel-group" id="accordion">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
														Address
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
												<div class="panel-body">
														<div class="form-group">
															<div class="col-md-12">
																<label>Full Name</label>
																<input type="text" class="form-control" name="name" placeholder="Masukan nama penerima" value="<?= $input->name ?>">
																<?= form_error('name') ?>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<label>Company Name</label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<label>Address </label>
																<textarea name="address" cols="30" rows="5" class="form-control"><?= $input->address ?></textarea>
																<?= form_error('address') ?>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<label>City </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label for="">Telepon</label>
																<input type="text" class="form-control" name="phone" placeholder="Masukan nomor telepon penerima" value="<?= $input->phone ?>">
																<?= form_error('phone') ?>
															</div>
														</div>
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
														Payment
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
												<div class="panel-body">
													<table class="cart-summary table table-bordered">
														<thead>
															<tr>
																<th class="width-80 text-center">Image</th>
																<th>Name</th>
																<th class="width-100 text-center">Unit price</th>
																<th class="width-100 text-center">Qty</th>
																<th class="width-100 text-center">Total</th>
															</tr>
														</thead>
														
														<tbody>
															<?php foreach ($cart as $row) : ?>
																<tr>
																
																	<td>
																		<a href="product-detail-left-sidebar.html">
																			<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top">
																		</a>
																	</td>
																	<td>
																		<a href="product-detail-left-sidebar.html" class="product-name"><?= $row->title ?></a>
																	</td>
																	<td class="text-center">
																		Rp.<?= number_format($row->price, 0, ',', '.') ?>,-
																	</td>
																	<td class="text-center">
																		<?= $row->qty ?>
																	</td>
																	<td class="text-center">
																		Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-
																	</td>
																	
																</tr>
															<?php endforeach ?>
														</tbody>
													</table>

													<h4 class="heading-primary">Cart Total</h4>
													<table class="table cart-total">
														<tbody>
															<tr>
																<th>
																	<strong>Order Total</strong>
																</th>
																<td class="total">
																	<strong>Rp.<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</strong>
																</td>
															</tr>
														</tbody>
													</table>

												</div>
											</div>
										</div>
									</div>

									<div class="pull-right">
										<input type="submit" value="Place Order" class="btn btn-primary">
									</div>
								</form>
							</div>
							
							<div class="checkout-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<h4 class="title">Cart Total</h4>
								<table class="table cart-total">
									<tbody>
                                        <?php foreach ($cart as $row) : ?>
                                            <tr class="cart-subtotal">
                                                <td><?= $row->title ?></td>
                                                <td>
                                                    <strong><span class="amount">Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</span></strong>
                                                </td>
                                            </tr>
                                           
                                        <?php endforeach ?>
                                 
										<tr class="total">
											<th>
												<strong>Order Total</strong>
											</th>
											<td>
												<strong><span class="amount">Rp.<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</span></strong>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>