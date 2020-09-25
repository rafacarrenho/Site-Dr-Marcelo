<?php

/********************\
 * Adicionar suporte a imagens
\********************/
add_theme_support('post-thumbnails', array(
	'post',
	'page',
));

/********************\
 * Adicionar suporte a imagens
\********************/
// require_once get_template_directory() . '/inc/customizer.php';

/********************\
 * Carregar arquivos CSS e JS
\********************/

function load_scripts()
{
	/********************\
	 * Fontes
		\********************/

	wp_enqueue_style('lato-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', false);

	wp_enqueue_style('cinzel-google-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel&display=swap', false);

	/********************\
	 * Arquivos CSS
		\********************/

	//Bootstrap
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');

	//Font Awesome
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');

	//OWL Carousel
	wp_enqueue_style('Owl-Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

	//OWL Theme
	wp_enqueue_style('Owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');


	//Custom
	wp_enqueue_style('styles', get_template_directory_uri() . '/dist/css/styles.css');

	/********************\
	 * Arquivos JS
		\********************/

	if (is_admin() || is_customize_preview()) {
		return;
	} else {
		wp_deregister_script('jquery');
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery-migrate');
	}

	//Jquery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, null, true);

	//Bootstrap JS
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true);

	//OWL Carousel
	wp_enqueue_script('owl-js', get_template_directory_uri() . '/dist/js/owl.min.js', array('jquery'), null, true);

	//Custom JS
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/dist/js/app.js', array('jquery', 'owl-js'), null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

/********************\
 * Suporte a Widgets Sidebar
\********************/

function theme_widgets_init()
{
	register_sidebar(array(
		'name'          => 'Right Sidebar',
		'id'            => 'sidebar-primary',
		'before_widget' => '<div class="widget-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
}

add_action('widgets_init', 'theme_widgets_init');

/********************\
 * Paginação
\********************/

function pagination_bar()
{
	global $wp_query;
	$total_pages = $wp_query->max_num_pages;
	if ($total_pages > 1) {
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '/page/%#%',
			'current' => $current_page,
			'total' => $total_pages,
		));
	}
}

/* ************** *\
 * Mascara
\* ************** */

function mascara($str, $type)
{

	// Checa o tipo
	switch ($type) {
		case 'cep':
			if (strlen($str < 8)) {
				return false;
			}
			$str = substr($str, 0, 8);
			$mask = '#####-###';
			break;
		case 'telefone':
			switch (strlen($str)) {
				case 10:
					$mask = '(##) ####-####';
					break;
				case 11:
					$mask = '(##) #####-####';
					break;
				default:
					return false;
			}
		default:
			// return false;
	}

	// Faz a magica
	$str = str_replace(" ", "", $str);
	for ($i = 0; $i < strlen($str); $i++) {
		$mask[strpos($mask, "#")] = $str[$i];
	}

	echo $mask;
	return;
}

/* ************** *\
 * Limita o tamanho do conteudo a ser exibido
\* ************** */

function get_excerpt($tamanho = 300)
{
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $tamanho);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt . '...';

	return $excerpt;
}

/* ************** *\
 * Custom Title
\* ************** */

function add_custom_filter_wp_title($title)
{
	if ('' == $title) {
		return get_bloginfo('name');
	}
	return $title;
}

add_filter('wp_title', 'add_custom_filter_wp_title');

/* ************** *\
 * Registrar custom NavWalker
\* ************** */
function register_navwalker()
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
	'primary' => __('Menu Primário', 'Main Menu'),
	'secondary' => __('Menu Footer', 'Footer Menu'),
	'tertiary' => __('Menu Terciario', 'Menu Terciario')
));

/* ------------------------------------------------------------------------ */
/* Automatic Plugin Activation */
require_once(trailingslashit(get_template_directory()) . 'inc/class-tgm-plugin-activation.php');
/* ------------------------------------------------------------------------ */
// Recommended plugins activation
if (!function_exists('shantal_register_required_plugins')) {
	add_action('tgmpa_register', 'shantal_register_required_plugins');
	function shantal_register_required_plugins()
	{
		$plugins = array(
			array(
				'name'      => esc_html__('Contact Form 7', 'shantal'),
				'slug'      => 'contact-form-7',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('Contact Form CFDB7', 'shantal'),
				'slug'      => 'contact-form-cfdb7',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('Date Time Picker Field', 'shantal'),
				'slug'      => 'date-time-picker-field',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('Masks Form Fields', 'shantal'),
				'slug'      => 'masks-form-fields',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('Smush', 'shantal'),
				'slug'      => 'wp-smushit',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('Yoast SEO', 'shantal'),
				'slug'      => 'wordpress-seo',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('Advanced Custom Fields', 'shantal'),
				'slug'      => 'advanced-custom-fields',
				'required' 	=> true,
			),
			array(
				'name'      => esc_html__('WP Fastest Cache', 'shantal'),
				'slug'      => 'wp-fastest-cache',
				'required' 	=> true,
			)
		);

		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain,
		 * leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 */
		$config = array(
			'domain'       		=> 'shantal',         	// Text domain - likely want to be the same as your theme.
			'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
			'menu'         		=> 'install-required-plugins', 	// Menu slug
			'has_notices'      	=> true,                       	// Show admin notices or not
			'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
			'message' 			=> '',							// Message to output right before the plugins table
			'strings'      		=> array(
				'page_title'                       			=> esc_html__('Instalar plugins necessários e recomendados', 'shantal'),
				'menu_title'                       			=> esc_html__('Instalar Plugins', 'shantal'),
				'installing'                       			=> esc_html__('Instalando Plugin: %s', 'shantal'), // %1$s = plugin name
				'oops'                             			=> esc_html__('
				Ocorreu um problema com a API do plug-in.', 'shantal'),
				'return'                           			=> esc_html__('Voltar para instalador de Plugins necessários', 'shantal'),
				'plugin_activated'                 			=> esc_html__('Plugin ativado com sucesso.', 'shantal'),
				'complete' 									=> esc_html__('Todos os plugins instalados e ativados com sucesso. %s', 'shantal'), // %1$s = dashboard link
				'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
			)
		);
		tgmpa($plugins, $config);
	}
}
