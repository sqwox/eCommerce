<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

?>

<section id="advertisement">
		<div class="container">
			<img src="/images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
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
						<div class="shipping text-center"><!--shipping-->
							<img src="/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					</div>
				</div>	
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"> категория</h2>
                        <?php if (!empty($products)): ?>
                          <?php $i = 0;foreach ($products as $product) :
						  ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<?= Html::img("@web/images/products/{$product->img}", [ 'alt' => $product->name ]) ?>
										<h2>$56</h2>
										<p><?php $product -> name ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>									
								</div>
							</div>
						</div>
				<?php if($product->new): ?> 
			   <?= Html::img("@web/images/home/new.png", [ 'alt' => 'Новинка', 'class' => 'new' ]) ?>
               <?php endif; ?>
               <?php if($product->sale): ?>
               <?= Html::img("@web/images/home/sale.png", [ 'alt' => 'Распродажа', 'class' => 'new' ]) ?>
               <?php endif; ?>
			   <?php $i++ ?>
			   <?php if ($i % 3 == 0): ?>
				<div class="clearfix"></div>
				<?php endif; ?>														
						<?php endforeach; ?>
						<?php else: ?>	
							<h2>Здесь товаров пока нет</h2>
						<?php endif; ?>														
								</div>
							</div>
						</div>	
						<div class="clearfix"></div>			
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
    $( ".catalog" ).dcAccordion();
</script>