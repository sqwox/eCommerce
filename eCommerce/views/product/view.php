<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
?>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
                        <ul class="catalog category-products">
                                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                                        </ul>
					
						
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								 <?= Html::img("@web/images/products/{$product->img}", ['alt' => $product->name])?>
								 
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								   

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
				
								<?php if($product->new): ?> 
			   <?= Html::img("@web/images/home/new.png", [ 'alt' => 'Новинка', 'class' => 'newarrival' ]) ?>
               <?php endif; ?>
               <?php if($product->sale): ?>
               <?= Html::img("@web/images/home/sale.png", [ 'alt' => 'Распродажа', 'class' => 'newarrival' ]) ?>
               <?php endif; ?>
								<h2><?= $product->name ?></h2>
								<p>Артикл: <?= $product->article ?></p>
								<img src="/images/product-details/rating.png" alt="" />
								<span>
									
									<label>Остаток :</label>
									<input type="text" value="<?= $product->quantity ?>" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Доступно в магазине: </b><?= $product->availability?></p>						
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
						
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										
									</ul>
									<p><?= $product->description ?></p>
									
									
								
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
				</div>
			</div>
		</div>
	</section>