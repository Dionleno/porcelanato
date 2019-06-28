<?php

function porcelanato_setup() {
    add_theme_support( 'title-tag' );

   // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 450, 450 );
        
        // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
        );
        
        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
        );
        
        /**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
        );
        
        	// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
}

add_action( 'after_setup_theme', 'porcelanato_setup' );

function custom_short_excerpt($excerpt){
	$limit = 115;

	if (strlen($excerpt) >= $limit) {
		return substr($excerpt, 0, strpos($excerpt, ' ', $limit))."[...]";
	}

	return $excerpt;
}

add_filter('the_excerpt', 'custom_short_excerpt');

function create_portfolio_type() {
  register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => 'Projetos',
                'singular_name' => 'Projeto',
                'add_new' => 'Adicionar novo',
                'add_new_item' => 'Adicionar novo projeto',
                'edit' => 'Editar',
                'edit_item' => 'Editar projeto',
                'new_item' => 'Novo projeto',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar projeto',
                'search_items' => 'Buscar projeto',
                'not_found' => 'Nenhum projeto encontrado',
                'not_found_in_trash' => 'Nenhum projeto excluido',
                'parent' => 'Parent projeto Review'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'show_in_rest' => true,
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-hammer',
            'has_archive' => true
        )
    );
}
function create_text_description_type() {
  register_post_type( 'sections',
        array(
            'labels' => array(
                'name' => 'Descrições',
                'singular_name' => 'Descrições',
                'add_new' => 'Adicionar novo',
                'add_new_item' => 'Adicionar nova Descrições',
                'edit' => 'Editar',
                'edit_item' => 'Editar Descrições',
                'new_item' => 'Nova Descrições',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar',
                'search_items' => 'Buscar',
                'not_found' => 'Nenhuma Descrição encontrada',
                'not_found_in_trash' => 'Nenhum descrição excluido',
                'parent' => 'Parent projeto Review'
            ),
 
            'public' => true,
            'menu_position' => 16,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies' => array('post_tag'),
            'menu_icon' => 'dashicons-align-right',
            'has_archive' => true
        )
    );
}

add_action( 'init', 'create_portfolio_type' );
add_action( 'init', 'create_text_description_type' );

function get_post_description_id ($id){
    $post   = get_post( $id );
    $output =  apply_filters( 'the_content', $post->post_content );
    echo $output;
}

add_action('description_by_id', 'get_post_description_id');

 if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     global $wp_query;
     $pager = 999999999; // need an unlikely integer
 
        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
        ) );
   }
endif;