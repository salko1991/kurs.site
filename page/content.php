		<?php
			if (file_exists('productsArray.php')) {
			  require_once 'productsArray.php'; 
			} else {
			  require_once '../productsArray.php'; 
			}
		?>
		<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="">Главная ></a> Детские товары<br />
				<h3>Детские товары</h3>
			</div>

			<div class="row-fluid">
				<?php foreach($dataProducts_arr as $product) { ?>
					<?php if((int)$product->visible == 1){ ?>
					  <div class="col-xs-6 col-sm-6 col-md-4 productMinWidth">
					    <div class="thumbnail productMinHeight">
					   	  <div class="productDate"><?= date_create($product->created)->Format('d.m.Y'); ?></div>
					      <img src="generator.png" data-src="holder.js/300x200" alt="<?= $product->name; ?>">
					      <div class="caption">
					        <h5 class="productTextCenter"><a href="<?= 'page/product.php?product_id='.$product->variants[0]->product_id; ?>"><?= $product->name; ?></a></h5>
					        <h4 class="productTextCenter"><?= $product->variants[0]->price; ?> грн.</h4>
					        <p class="productTextCenter">На складе <?= $product->variants[0]->stock; ?> штук</p>
					        <p class="notShow"><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
					      </div>
					    </div>
					  </div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>