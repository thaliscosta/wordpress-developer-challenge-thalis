<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<title><?php wp_title();?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Language" content="pt-br">
	<meta name="language" content="portuguese, BR, PT">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	<?php wp_head(); ?>
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="theme-color" content="#000000">
	<link rel="shortcut icon" type="image/png" href="<?= image_path('favicon.png'); ?>"/>
</head>
<body <?php body_class(); ?>>

	<header class="clearfix">
		<div class="container">

			<div class="top-site">

				<a href="<?= site_url('/') ?>" title="Ir para home" class="logo">
					<img src="<?= image_path('logo.svg'); ?>" alt="Play">
				</a>
				
				<?php get_template_part('parts/menu', 'desktop'); ?>

			</div>

		</div>
	</header>