<?php 
get_header();

$video_type = wp_get_post_terms($post->ID, 'video_type');
$bx_play_video_duration = get_field('bx_play_video_duration', $post->ID);
$bx_play_video_ID = get_field('bx_play_video_ID', $post->ID);
$bx_play_text = get_field('bx_play_text', $post->ID);
$thumb = get_the_post_thumbnail_url($post->ID);

if (empty($thumb)) {
	$thumb = get_placeholder_image();
}
?>

<main id="single-video">
	<div class="container">
		<div class="info">
			<div class="info__tags">

				<?php if ($video_type) : ?>
					<a href="<?= get_term_link($video_type[0]) ?>" class="cat"><?= $video_type[0]->name ?></a>
				<?php endif; ?>

				<?php if ($bx_play_video_duration) : ?>
					<div class="tag"><?= $bx_play_video_duration ?>m</div>
				<?php endif; ?>
				
			</div>
			<h1><?php the_title(); ?></h1>
		</div>

		<?php if ($bx_play_video_ID) : ?>
			<a href="https://www.youtube.com/watch?v=<?= $bx_play_video_ID ?>" data-fancybox class="player" style="background-image: url('<?= $thumb ?>');">
				<svg xmlns="http://www.w3.org/2000/svg" width="89.563" height="89.563" viewBox="0 0 89.563 89.563">
					<path class="a" d="M45.781,1A44.781,44.781,0,1,0,90.563,45.781,44.834,44.834,0,0,0,45.781,1ZM64.325,49.168,39.9,65.452a4.07,4.07,0,0,1-6.33-3.387V29.5a4.068,4.068,0,0,1,6.326-3.387L64.321,42.394a4.07,4.07,0,0,1,0,6.774Z" transform="translate(-1 -1)"/>
				</svg>
			</a>
		<?php endif; ?>

		<?php if ($bx_play_text) : ?>
			<div class="info">
				<div class="info__text">
					<?= $bx_play_text ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
</main>

<?php get_footer(); ?>
