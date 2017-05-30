<div class="gallery-item sm-4-12 no-pad">
	<figure>
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
		<div class="gallery-name">
			<span>
				<?php the_title(); ?>
				<p><?php get_field('cargo') ?></p>
			</span>
		</div>
	</figure>
</div>