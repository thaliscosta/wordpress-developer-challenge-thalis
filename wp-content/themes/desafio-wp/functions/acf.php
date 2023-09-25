<?php

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_6509dc26a3143',
		'title' => 'Video',
		'fields' => array(
			array(
				'key' => 'field_650a4ea327ea6',
				'label' => 'Tipo de Vídeo',
				'name' => 'video_type',
				'aria-label' => '',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'taxonomy' => 'video_type',
				'add_term' => 1,
				'save_terms' => 1,
				'load_terms' => 1,
				'return_format' => 'id',
				'field_type' => 'checkbox',
				'bidirectional' => 0,
				'multiple' => 0,
				'allow_null' => 0,
				'bidirectional_target' => array(
				),
			),
			array(
				'key' => 'field_6509dc26c03df',
				'label' => 'Tempo de Duração',
				'name' => 'bx_play_video_duration',
				'aria-label' => '',
				'type' => 'number',
				'instructions' => 'Minutos',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'min' => '',
				'max' => '',
				'placeholder' => '',
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6509dc8199de2',
				'label' => 'ID do Vídeo',
				'name' => 'bx_play_video_ID',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => 'ID do vídeo no YouTube',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_650e69d9a62c2',
				'label' => 'Sinopse',
				'name' => 'bx_play_text',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => 'Aparece após ao vídeo',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'rows' => '',
				'placeholder' => '',
				'new_lines' => 'wpautop',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'video',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
			1 => 'excerpt',
			2 => 'discussion',
			3 => 'comments',
			4 => 'revisions',
			5 => 'slug',
			6 => 'author',
			7 => 'format',
			8 => 'page_attributes',
			9 => 'categories',
			10 => 'tags',
			11 => 'send-trackbacks',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );
} );

add_action( 'init', function() {
	register_post_type( 'video', array(
		'labels' => array(
			'name' => 'Vídeos',
			'singular_name' => 'Vídeo',
			'menu_name' => 'Vídeos',
			'all_items' => 'Todos os Vídeos',
			'edit_item' => 'Editar Vídeo',
			'view_item' => 'Ver Vídeo',
			'view_items' => 'Ver Vídeos',
			'add_new_item' => 'Adicionar novo Vídeo',
			'new_item' => 'Novo Vídeo',
			'parent_item_colon' => 'Vídeo ascendente:',
			'search_items' => 'Pesquisar Vídeos',
			'not_found' => 'Não foi possível encontrar vídeos',
			'not_found_in_trash' => 'Não foi possível encontrar vídeos na lixeira',
			'archives' => 'Arquivos de Vídeo',
			'attributes' => 'Atributos de Vídeo',
			'insert_into_item' => 'Inserir no vídeo',
			'uploaded_to_this_item' => 'Enviado para este vídeo',
			'filter_items_list' => 'Filtrar lista de vídeos',
			'filter_by_date' => 'Filtrar vídeos por data',
			'items_list_navigation' => 'Navegação na lista de Vídeos',
			'items_list' => 'Lista de Vídeos',
			'item_published' => 'Vídeo publicado.',
			'item_published_privately' => 'Vídeo publicado de forma privada.',
			'item_reverted_to_draft' => 'Vídeo revertido para rascunho.',
			'item_scheduled' => 'Vídeo agendado.',
			'item_updated' => 'Vídeo atualizado.',
			'item_link' => 'Link de Vídeo',
			'item_link_description' => 'Um link para um vídeo.',
		),
		'public' => true,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-format-video',
		'supports' => array(
			0 => 'title',
			1 => 'editor',
			2 => 'thumbnail',
		),
		'taxonomies' => array(
			0 => 'video_type',
		),
		'delete_with_user' => false,
	) );
} );

add_action( 'init', function() {
	register_taxonomy( 'video_type', array(
		0 => 'video',
	), array(
		'labels' => array(
			'name' => 'Tipos de Vídeos',
			'singular_name' => 'Tipo de Vídeo',
			'menu_name' => 'Tipos de Vídeo',
			'all_items' => 'Todos os Tipos de Vídeo',
			'edit_item' => 'Editar Tipos de Vídeo',
			'view_item' => 'Ver Tipos de Vídeo',
			'update_item' => 'Atualizar Tipos de Vídeo',
			'add_new_item' => 'Adicionar novo Tipos de Vídeo',
			'new_item_name' => 'Novo nome de Tipos de Vídeo',
			'search_items' => 'Pesquisar Tipos de Vídeo',
			'popular_items' => 'Tipos de Vídeo populares',
			'separate_items_with_commas' => 'Separe tipos de vídeo com vírgulas',
			'add_or_remove_items' => 'Adicionar ou remover tipos de vídeo',
			'choose_from_most_used' => 'Escolha entre tipos de vídeo mais comuns',
			'not_found' => 'Não foi possível encontrar tipos de vídeo',
			'no_terms' => 'Não há tipos de vídeo',
			'items_list_navigation' => 'Navegação na lista de Tipos de Vídeo',
			'items_list' => 'Lista de Tipos de Vídeo',
			'back_to_items' => '← Ir para tipos de vídeo',
			'item_link' => 'Link de Tipos de Vídeo',
			'item_link_description' => 'Um link para um tipos de vídeo',
		),
		'public' => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
		'meta_box_cb' => false,
	) );
} );


add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_6511a33da1738',
		'title' => 'Ordem dos Filmes',
		'fields' => array(
			array(
				'key' => 'field_6511a33d226c3',
				'label' => 'Ordem',
				'name' => 'term_order',
				'aria-label' => '',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'min' => '',
				'max' => '',
				'placeholder' => '',
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'video_type',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );
} );

