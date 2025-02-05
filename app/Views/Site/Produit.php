			<div role="main" class="main shop py-4">

				<div class="container">

					<div class="row">
						
						<div class="col-lg-9">

							<div class="row">
								<div class="col-lg-6">

									<div class="thumb-gallery-wrapper">
										<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
											<div>
												<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg" data-zoom-image="img/products/product-grey-7.jpg">
											</div>
										</div>
									</div>

								</div>

								<div class="col-lg-6">

									<div class="summary entry-summary position-relative">

										
										<form enctype="multipart/form-data" method="post" class="cart" action="<?=base_url("Site/panier/save/".$tableProduit["product_id"])?>">

										<h1 class="mb-0 font-weight-bold text-7"><?=$tableProduit['product_name']?></h1>


										<div class="divider divider-small">
											<hr class="bg-color-grey-scale-4">
										</div>

										<p class="price mb-3">
											<span class="sale text-color-dark"><?=$tableProduit['price']?></span>
										</p>

										<p class="text-3-5 mb-3"><?=$tableProduit['Description']?></p>

										<ul class="list list-unstyled text-2">
											<li class="mb-0">Disponibilité: <strong class="text-color-dark"><?php if($tableProduit["Disponibility"] == 1){ echo "EN STOCK";}else{ echo "RUPTURE DE STOCK";}?></strong></li>
											
										</ul>


										
											<hr>
											<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</button>
											<hr>
										</form>

									

									</div>

								</div>
							</div>
							

							<h4 class="mb-3">Related <strong>Products</strong></h4>
							<div class="products row">
							<div class="col">
							<div class="owl-carousel owl-theme show-nav-title nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false,'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">
							<?php if(isset($prodSimilaire)):
								foreach($prodSimilaire as $produit):
									$categorie = $tableCategorie->where("category_id",$produit["category_id"])->first(); ?>

										<div class="product mb-0">
											<div class="product-thumb-info border-0 mb-3">


												<div class="addtocart-btn-wrapper">
													<a href="<?=base_url("Site/produit/index/".$produit["product_id"])?>" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
														<i class="icons icon-bag"></i>
													</a>
												</div>
												<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
													QUICK VIEW
												</a>
												<a href="<?=base_url("Site/produit/index/".$produit["product_id"])?>">
													<div class="product-thumb-info-image">
														<img alt="" class="img-fluid" src="<?=base_url("Site/img/products/product-grey-1.jpg")?>">

													</div>
												</a>
											</div>
											<div class="d-flex justify-content-between">
                                                <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1"><?=$categorie["category_name"]?></a>
                                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary"><?=$produit['product_name']?></a></h3>
                                        	</div>
											<div title="Rated 5 out of 5">
												<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
											</div>
											<p class="price text-5 mb-3">
												<span class="sale text-color-dark font-weight-semi-bold"><?=$produit['price']?></span>
										
											</p>
										</div>
						<?php endforeach;
						endif ?>		
						</div>
						</div>
						</div>
						</div>
					</div>
				</div>

			</div>  