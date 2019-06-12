<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'online@2017' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=2R{MZxrF-rK$,)[.PpRTG8&zKm@[U)SgwqqJmv&VJ@K>4468>KB+49df,=ambi)' );
define( 'SECURE_AUTH_KEY',  'Ps86&h*YGgI$Gkn?7cVFlLchy|d@BawVFAa`hQ1/knB.T7`Y*cMIixHv:J M6O`.' );
define( 'LOGGED_IN_KEY',    '$A>GlSO!-I~tN9$bN~:|}@0>MV`;].o~,CR.b-C*iJOs|)h@=>`0E=3q(}{`e;:,' );
define( 'NONCE_KEY',        '7f<,(ikWTT=fa{cBL5oj<{AR3K*:r]#J%5Zs?|w$OxfK!1yq+M!qX3:;rI|Io9z$' );
define( 'AUTH_SALT',        'E4nBIy<(bhbNinH`&F`T5B^=MLymLJIS0F1+@uqG1NS!y:RsG;)542Lw1dlji[=f' );
define( 'SECURE_AUTH_SALT', 'aj~t=u/i16,9dC9cT6Q+H7w!uOg&$>D@s@0=&/[ILQv2[$]Bh=YaKQdOljGXth&0' );
define( 'LOGGED_IN_SALT',   'A%Y!B_A.}Nh9SR3@0j:AEP^hl4)7v38f3+9ur6N$p:SwCjDyU{gD[S@IlHgBRAQ5' );
define( 'NONCE_SALT',       'H.a{-=)8nLUpJ J*0QTuO0ihh7 Cg:{?|@pE~t.rqIf7#:|JcgeYQj,/+ew7Qakk' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
