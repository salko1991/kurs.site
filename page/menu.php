<?php
if (file_exists('pagesArray.php')) {
  require_once 'pagesArray.php'; 
} else {
  require_once '../pagesArray.php'; 
}
?>
<!--menu-->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
          <ul class="nav navbar-nav">
            <?php foreach($dataPages_arr as $page) { ?>
				<?php if((int)$page->visible == 1 && (int)$page->menu_id == 1){ ?>
					<li><a href="<?php echo ($page->url)?$page->url:'../task_six.php'; ?>"><?php echo $page->name; ?></a></li>
				<?php } ?>
			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
<!--menu-->
  <div class="row-fluid">
    <div class="allCart">
      <span class="glyphicon glyphicon-shopping-cart cartImage"></span>
      <div class="cartText">
        <div><strong>Корзина</strong></div>
        <div>Корзина пуста</div>
      </div>
    </div>
  </div>