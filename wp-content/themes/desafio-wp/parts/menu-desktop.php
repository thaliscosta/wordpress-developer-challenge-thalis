<nav>
	<ul>
		<?php 
		$args = array(
			'taxonomy' => 'video_type',
			'hide_empty' => false, 
			'orderby' => 'meta_value_num', 
			'meta_key' => 'term_order', 
			'order' => 'ASC', 
		);
		$video_types = get_terms($args);

		if(!empty($video_types)){
			foreach($video_types as $term){
				?>
				<li>
					<a href="<?= get_term_link($term); ?>" <?= is_tax('video_type', $term->slug) ? 'class="active"' : ''; ?>><?= $term->name ?></a>
				</li>
			<?php } 
		}
		?>
	</ul>
</nav>
