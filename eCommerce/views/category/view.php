<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<section id="advertisement">
		<div class="container">
			<img src="/images/shop/1.jpg" alt="" />
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
						
				
						
						<div class="shipping text-center"><!--shipping-->
							<img src="/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
						<div class="col-sm-9 padding-right">
				<div class="clearfix"></div>	
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
									<p><a href="<?= Url::to(['product/view', 'id' => $product->id]) ?>"></p>
										<?= $product->name ?></a></p>
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
						<div class="clearfix"></div>	
		
						<?php
                                                        echo LinkPager::widget(['pagination' => $pages]);
                                                    ?>

                     
						<?php else: ?>	
							<h2>ничего не найдено</h2>
						<?php endif; ?>														
								</div>
							</div>
						</div>	
						<div class="clearfix"></div>			
					
					</div>
				</div>
				</div>
			</div>
		</div>
</section>
<script>
    $( ".catalog" ).dcAccordion();
</script>
