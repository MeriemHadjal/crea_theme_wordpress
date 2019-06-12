<?php

/**
 * Enregistrer une nouvelle zone de widget
 **/
function arphabet_widgets_init() {
    register_sidebar( array(
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
    ) );
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/script.js' );
}


//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
    register_nav_menu('footer-menu',__( 'Menu Footer' ));
  }
  add_action( 'init', 'register_my_menu' );

//   // s'il y a plusieurs menus à rajouter, voici le code :
// function register_my_menus() {
//     register_nav_menus(
//     array(
//     'private-menu' => __( 'Menu Privé' ),
//     'footer-menu' => __( 'Menu Footer' ),
//     )
//     );
//    }
//    add_action( 'init', 'register_my_menus' );

function shortcode_bonjour($sexe){
    extract(shortcode_atts(
        array(
    	    'sexe' => ''
    ), $sexe));

    if($sexe == "F"){
        $text = "Bonjour Madame ";
    }

    else if($sexe == "M"){
    	$text = "Bonjour Monsieur";
    }
    else {
        $text = "Bonjour tout le monde";
    }
    return '<h2>' . $text . '</h2>';
}
add_shortcode('bonjour', 'shortcode_bonjour');



function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Recette', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Recette', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Recette'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les recettes'),
		'view_item'           => __( 'Voir les recettes'),
		'add_new_item'        => __( 'Ajouter une nouvelle recette'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la recette'),
		'update_item'         => __( 'Modifier la recette'),
		'search_items'        => __( 'Rechercher une recette'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Recettes'),
		'description'         => __( 'Tous sur la recette'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'recettes'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'recettes', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );


function wpc_excerpt_pages() {
    add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
    }
    add_action( 'admin_menu', 'wpc_excerpt_pages' );



    function shortcode_recette($recette){
        extract(shortcode_atts(
            array(
                'recette' => ''
        ), $srecette));
    
        if($recette == "Tajine"){
            $text = "Recette du Tajine ";
        }
    
        else if($recette == "Boeuf Mongolien"){
            $text = "Recette du Boeuf Mongolien";
        }
        else if ($recette == "Fraisier"){
            $text = "Recette du Fraisier";
        }
        return '<li>' . $text . '</li>';
    }
    add_shortcode('recette', 'shortcode_recette');

    // create shortcode to list all clothes which come in blue
add_shortcode( 'list-recette', 'rmcc_post_listing_shortcode1' );
function rmcc_post_listing_shortcode1( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'recettes',
        //'color' => 'blue',
        'posts_per_page' => -1,
        //-1 = INFINY  donc tous les post type de la bdd qui s'appelle recette
        'order' => 'ASC',
        // = classement par ordre alphabétique / DESC = sens contraire de l'ordre alphabétique
        'orderby' => 'title',
        //défini l'objet à classer = titre ici
    ) );
    if ( $query->have_posts() ) { //si la requête a des post il va faire la suite ?>
    
        <ul class="recette-listing"> <!-- injection de format liste à puce-->
            <?php while ( $query->have_posts() ) : $query->the_post(); //creation de la boucle "while" tant qu'il y a des rectte tu continue la boucle?> 
            <li id="post-<?php the_ID(); //pour chaque rectte il va mettre l'id du post qui est dans la bdd, ID auto-incrementé dès création de la bdd ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
