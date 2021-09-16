			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Shopping Cart</h2>
						
						<ul class="breadcrumb">
							<li><a href="<?= base_url('');?>" title="Home">Home</a></li>
							<li><span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-80 text-center">Image</th>
										<th>Name</th>
										<th class="width-100 text-center">Unit price</th>
										<th class="width-100 text-center">Qty</th>
										<th class="width-100 text-center">Total</th>
									</tr>
								</thead>
								
								<tbody>
                                    <?php foreach ($content as $row) : ?>
									<tr>
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="#">
												<form action="<?= base_url("cart/delete/$row->id") ?>" method="POST">
                                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                                    <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></button>
                                                    
                                                </form>
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html">
												<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top">
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html" class="product-name">Ini Handphone</a>
										</td>
										<td class="text-center">
											Rp.<?= number_format($row->price, 0, ',', '.') ?>,-
										</td>
										<td>
											<div class="product-quantity">
												<div class="qty">
													<form action="<?= base_url("cart/update/$row->id") ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <div class="input-group">
                                                <input type="number" name="qty" class="form-control text-center" value="<?= $row->qty ?>">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i></button>
                                                </div>
                                            </div>
                                        </form>
											</div>
										</td>
										<td class="text-center">
											Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-
										</td>
									</tr>
									<?php endforeach ?>
								</tbody>
								
								<tfoot>
									<tr class="cart-total">
                                        <td rowspan="3" colspan="3"></td>
										<td colspan="2" class="total text-right">Total</td>
										<td colspan="1" class="total text-center"><strong>Rp.<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
									</tr>
								</tfoot>
							</table>
						</div>
						
						<div class="checkout-btn">
							<a href="<?= base_url('checkout') ?>" class="btn btn-primary pull-right" title="Proceed to checkout">
								<span>Proceed to checkout</span>
								<i class="fa fa-angle-right ml-xs"></i>
							</a>
						</div>
					</div>
				</div>
			</div>