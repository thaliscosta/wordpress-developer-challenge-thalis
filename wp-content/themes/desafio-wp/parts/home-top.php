<?php 
$args =  [
	'post_type' => 'video',
	'numberposts' => 1,
	'fields' => 'ids',
];
$lastPost = get_posts($args);

if(!empty($lastPost)){

	$lastPost = $lastPost[0];
	$lastPostDuration = get_field('bx_play_video_duration', $lastPost);
	$lastPostVideoType = wp_get_post_terms($lastPost, 'video_type');

	$lastPostthumb = get_the_post_thumbnail_url($lastPost);
	if (!$lastPostthumb) {
		$lastPostthumb = get_placeholder_image();
	}
	?>
	<section class="s-top" style="background-image: url('<?= $lastPostthumb ?>')">
		<div class="container">
			<div class="info">

				<div class="info__tags">

					<?php if ($lastPostVideoType) : ?>
						<a href="<?= get_term_link($lastPostVideoType[0]) ?>" class="cat"><?= $lastPostVideoType[0]->name ?></a>
					<?php endif; ?>

					<?php if ($lastPostDuration) : ?>
						<div class="tag"><?= $lastPostDuration ?>m</div>
					<?php endif; ?>

				</div>

				<h2><?= get_the_title($lastPost); ?></h2>

				<a href="<?= get_the_permalink($lastPost); ?>" class="info__red-btn visible-desktop">Mais informações</a>
				<a href="<?= get_the_permalink($lastPost); ?>" class="info__red-btn visible-mobile">Assistir</a>

			</div>
		</div>
	</section>

	<?php } ?>