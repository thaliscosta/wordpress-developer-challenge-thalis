<?php 
$bx_play_video_duration = get_field('bx_play_video_duration', $video);
$bx_play_text = get_field('bx_play_text', $video);
$thumb = get_the_post_thumbnail_url($video, 'medium');

if(empty($thumb)){
	$thumb = get_placeholder_image();
}
?>
<a href="<?= get_the_permalink($video); ?>" class="video-item">
	<div class="video-item__img">
		<img src="<?= $thumb ?>" alt="<?= get_the_title($video); ?>" loading="lazy">

		<?php if($bx_play_text) : ?>

			<div class="video-item__img-resume">
				<?= limitString($bx_play_text, 100) ?>
			</div>

		<?php endif; ?>

	</div>
	<div class="video-item__info">
		<?php if($bx_play_video_duration): ?>
			<div class="tag"><?= $bx_play_video_duration ?>m</div>
		<?php endif; ?>
		<h3><?= get_the_title($video); ?></h3>
	</div>
</a>