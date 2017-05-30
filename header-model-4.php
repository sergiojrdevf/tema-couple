<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title><?php echo bloginfo('name')?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="woocommerce-top-bar">
		<div class="container">
			<a href="<?php echo home_url('/loja') ?>"><i class="fa fa-gift" aria-hidden="true"></i> <span>Lista de presente</span> </a>
	        <a href="<?php echo home_url('/carrinho') ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Carrinho</span> (<?php echo WC()->cart->get_cart_contents_count(); ?>)</a>
		</div>
	</div>
	<?php 
		$page_id = get_page_by_path( 'Banner' )->ID;
		$noiva = get_field('nome_noiva', $page_id);
		$noivo = get_field('nome_noivo', $page_id);
		$img = get_field('background', $page_id);
	?>
	<section class="main auto-h apresentation overlay"
		<?php if($img) { ?> style="background-image: url(<?php echo $img ?>)" <?php } ?>
	>
		<header class="default transparent vertical">
 			<div class="container">
 				<div class="nav">
 					<button class="hamburger hamburger--collapse" type="button">
 					  <span class="hamburger-box">
 					    <span class="hamburger-inner"></span>
 					  </span>
 					</button>
					<div class="clearfix"></div>
						<?php $let = array(
							'menu' => 'primary',
							'menu_class' => 'nav-list',
							'container' => 'nav',
							'container_class' => 'nav-content'
						);
						wp_nav_menu($let);
						?>
 				</div>
 			</div>
 		</header>
		<div class="container">
			<div class="descr">
				<h2 class="names rotate a-left style_font">Bem Vindo</br> ao nosso</br>casamento...</h2>
			</div>
			<div class="down a-center no-bg animate">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
		</div>
	</section>