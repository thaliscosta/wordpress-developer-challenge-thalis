<?php 
get_header(); 
$taxonomy = get_queried_object();
?>

<main id="video-type">
	<div class="container">
		<div class="grid">

			<div class="info">
				<div class="sticky">
					<h2 class="title"><?= $taxonomy->name ?></h2>

					<?php if ($taxonomy->description) : ?>
						
						<div class="text">
							<p><?= $taxonomy->description ?></p> 
						</div>

					<?php endif; ?>

				</div>
			</div>
			
			<div class="grid-videos">

				<?php
				$args = array(
					'post_type' => 'video', 
					'numberposts' => -1,
					'fields' => 'ids',
					'tax_query' => array(
						array(
							'taxonomy' => 'video_type', 
							'field'    => 'slug', 
							'terms'    => $taxonomy->slug, 
						),
					),
				);
				$videos = get_posts($args);
				foreach($videos as $video){

					include(get_template_directory() . '/parts/post-video.php');

				} 
				?>

			</div>

		</div>
	</div>
</main>

<?php get_footer(); ?>