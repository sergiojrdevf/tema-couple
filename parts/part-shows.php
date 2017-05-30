<div class="shows-item">
	<a href="<?php the_permalink(); ?>">
		<h2 class="shows-title"><?php the_title(); ?></h2>
		<div class="shows-icon">
			<i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo get_field('data') ?> <?php echo '- '. get_field('horario') ?>
		</div>
		<div class="shows-p">
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_field('local') ?></p>
		</div>
	</a>
</div>