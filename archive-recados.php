<?php get_header(); ?>
<!-- 	<section class="pad-space single-top single-banner">
	</section> -->
	<div class="pad-space">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Recados</a></li>
			</ul>
		</div>
	</div>
	<div class="pad-space archive-recados centered single-z">
		<div class="container">
			<div class="column">
				<div class="md-8-12">
					<h2>Recados</h2>
					<div class="column">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="sm-12-12">
								<div class="notes-item">
									<p class="notes-p first-letter"><?php echo get_the_content(); ?></p>
									<p class="notes-author"><?php the_field('nome')?> </p>
									<p class="notes-connect"><?php the_field('aproximidade')?></p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="md-4-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
