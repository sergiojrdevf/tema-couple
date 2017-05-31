<?php 

setlocale(LC_TIME, "pt_BR", "ptb");

// Add Thumbnails
add_theme_support('post-thumbnails');

add_action('wp_head', 'registerJquery');

function registerJquery() {
	$jquery = array(
		'depends' => array(),
		'version' => '1.0',
		'in_footer' => true,
	);
if(	!file_exists(dirname( __FILE__ ).'/plugins/jquery.js')) {
		$jquery['dir'] = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js";
		$jquery['version'] = '3.1.0';
	} else {
		$jquery['dir'] = get_template_directory_uri().'/js/script.js';
	}

	echo wp_enqueue_script('jQuery', $jquery['dir'], $jquery['depends'],  $jquery['version'],$jquery['in_footer']);		
}

// Add scripts
add_action('wp_enqueue_scripts', 'loadScripts');
function loadScripts() {
$scripts = [
	'Script' => [
		'dir' =>  get_template_directory_uri().'/dist/js/script-min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'AnimateCss' => [
		'dir' =>  get_template_directory_uri().'/plugins/scroll-animate/scroll-animate.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'owlCarousel' => [
		'dir' =>  get_template_directory_uri().'/plugins/owlcarousel/owl.carousel.min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'formvalidation' => [
		'dir' =>  get_template_directory_uri().'/plugins/jquery-validation/jquery.validate.min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'lightboxjs' => [
		'dir' =>  'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js',
		'depends' => array('jQuery'),
		'version' => '3.0.47',
		'in_footer' => true,
 	],
];

$styles = [
	'Style' => [
		'dir' => get_stylesheet_uri(),
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Animate' => [
		'dir' => get_template_directory_uri().'/plugins/scroll-animate/scroll-animate.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Styles' => [
		'dir' => get_template_directory_uri().'/dist/css/style.css',
		'depends' => '',
		'version' => '2',
		'in_footer' => false,
	],
	'hamburger' => [
		'dir' => get_template_directory_uri().'/plugins/hamburger.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Font-Awesome' => [
		'dir' => get_template_directory_uri().'/plugins/font-awesome/css/font-awesome.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Google-Fonts' => [
		'dir' => 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Dancing+Script:400,700|Rochester|Petit+Formal+Script',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselCss' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/assets/owl.carousel.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselTheme' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/assets/owl.theme.default.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'ligthboxcss' => [
		'dir' => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css',
		'depends' => '',
		'version' => '3.0.47',
		'in_footer' => false,
	],
];


	if($scripts) {
		foreach($scripts as $key => $script) {
			echo wp_enqueue_script($key, $script['dir'], $script['depends'],  $script['version'],$script['in_footer']);
		}
	}

	if($styles) {
		foreach($styles as $key => $style) {
			echo wp_enqueue_style($key, $style['dir'], $style['depends'],  $style['version'],$style['in_footer']);
		}
	}
};

add_action('wp_head', 'configHead');
function configHead() {
	$configs = array(
		'charset' => "<meta charset='UTF-8'>",
		'viewport' => "<meta name='viewport' content='width=device-width'>",
	);

	foreach($configs as $config) {
		echo $config . "\n";
	}
}


// Add Menu
add_action( 'after_setup_theme', 'registerMenu' );
function registerMenu() {
  register_nav_menu( 'primary', __( 'Menu principal', 'theme-slug' ) );
};

/*
 * Register a custom menu page.

function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Custom Menu Title', 'textdomain' ),
        'Informações do Casal',
        'manage_options',
        'info',
        'my_custom_menu_page',
        'dashicons-admin-home',
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page

function my_custom_menu_page(){ ?> 
	<div class="wrap">
		<h1>Configurações gerais</h1>
		<form method="post" action="options.php" novalidate="novalidate">
			<input type="hidden" name="option_page" value="general"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="a3457fe4c2"><input type="hidden" name="_wp_http_referer" value="/default/wp-admin/options-general.php">
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="blogname">Título do site</label></th>
						<td>
							<input name="blogname" type="text" id="blogname" value="Nosso casamento" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="blogname">Título do site</label></th>
						<td>
							 <?php wp_editor( '', 'editor_id', $settings = array() ); ?> 
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
<?php }

 */


// RSVP
add_action('init', 'sendRsvp');
function sendRsvp() {
	if(isset($_REQUEST['send_rsvp'])) {
		// $nome = $_REQUEST['rsvp_name'];
		$nome = 'Sérgio';
		$guests = $_REQUEST['guests'];
		// if(get_field('convidados', 272)) {
		// 	$names = [];
		//     while (has_sub_field('convidados', 272)):
		//     	$names[] = get_sub_field('nome');
		//   		$names[] = get_sub_field('e-mail');
		//     endwhile;
		//     foreach($names as $name) {
		//     	echo utf8_encode(strtolower($name));
		//     	// if(preg_match('/Sérgio/', strtolower($name))) {
		//     	// 	echo 'tem';
		//     	// }
		//     }
		// }
	}
}


// // Create Role Usuário
// add_action('init', 'createRole');
// function createRole() {
// 	remove_role('noivo');
// 	if(!get_role('noivos')) {
// 		$args = array(
// 			'delete_others_pages'		=> true,
// 			'delete_others_posts'		=> true,
// 			'delete_pages'				=> true,
// 			'delete_posts'				=> true,
// 			'delete_private_pages'		=> true,
// 			'delete_private_posts'		=> true,
// 			'delete_published_pages'	=> true,
// 			'delete_published_posts'	=> true,
// 			'edit_others_pages'			=> true,
// 			'edit_others_posts'			=> true,
// 			'edit_pages'				=> true,
// 			'edit_posts'				=> true,
// 			'edit_private_pages'		=> true,
// 			'edit_private_posts'		=> true,
// 			'edit_published_pages'		=> true,
// 			'edit_published_posts'		=> true,
// 			'manage_categories'			=> true,
// 			'manage_links'				=> true,
// 			'moderate_comments'			=> true,
// 			'publish_pages'				=> true,
// 			'publish_posts'				=> true,
// 			'read'						=> true,
// 			'read_private_pages'		=> true,
// 			'read_private_posts'		=> true,
// 			'upload_files'				=> true,
// 			'edit_themes' 				=> false, 
// 			'install_plugins' 			=> false, 
// 			'update_plugin' 			=> false, 
// 			'update_core' 				=> false,
// 			'create_sites'        		=> false,
// 			'delete_sites'        		=> false,
// 			'manage_network'        	=> false,
// 			'manage_sites'        		=> false,
// 			'manage_network_users'      => false,
// 			'manage_network_plugins'    => false,
// 			'manage_network_themes'     => false,
// 			'manage_network_options'    => false,
// 		);
// 		add_role(
// 		    'noivos',
// 		    __( 'Noivo(a)' ),
// 		    $args
// 		);
// 		echo 'usuário criado!';
// 	}
// }


add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;
	$homepgname = get_the_title($post_id);
	if($homepgname == 'Sobre o Casal' || $homepgname == 'Eventos' || $homepgname == 'Banner'){ 
		remove_post_type_support('page', 'editor');
	}
}

// Post Type
require dirname( __FILE__ ).'/includes/post_type.php';

// SEO
require dirname( __FILE__ ).'/includes/seo_function.php';

// Length dos posts
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);

	}
}


// WooCommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Hook in
// add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// // Our hooked in function - $fields is passed via the filter!
// function custom_override_checkout_fields( $fields ) {

// 	unset($fields['order']['order_comments']);
// 	unset($fields['billing']['billing_city']);
// 	unset($fields['billing']['billing_postcode']);
// 	unset($fields['billing']['billing_country']);
// 	unset($fields['billing']['billing_state']);
// 	unset($fields['billing']['billing_address_1']);
// 	unset($fields['billing']['billing_company']);
// 	unset($fields['billing']['billing_address_2']);

// 	unset($fields['shipping']['shipping_city']);
// 	unset($fields['shipping']['shipping_postcode']);
// 	unset($fields['shipping']['shipping_country']);
// 	unset($fields['shipping']['shipping_state']);
// 	unset($fields['shipping']['shipping_address_1']);
// 	unset($fields['shipping']['shipping_company']);
// 	unset($fields['shipping']['shipping_address_2']);


//      return $fields;
// }



// Sidebar

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Produtos',
		'id'            => 'sidebar_products',
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_action( 'pre_get_posts', function ( $query ) 
{
    if (    !is_admin() 
         && $query->is_main_query() 
         && $query->is_tax() 
    ) {
        $query->set( 'posts_per_page', '9'   );
    }
});




?>