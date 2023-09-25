<footer>
	<div class="container">
		<div class="content">
			<a href="<?= site_url('/') ?>" title="Play" class="logo">
				<img src="<?= image_path('logo.svg'); ?>" alt="Play">
			</a>
			<div class="copy">© <?= date('Y') ?> — <a href="https://buildbox.com.br/" target="_blank">Play</a> — Todos os direitos reservados.</div>
		</div>
	</div>
</footer>

<?php get_template_part('parts/menu', 'mobile'); ?>

<?php wp_footer(); ?>

</body>
</html>


