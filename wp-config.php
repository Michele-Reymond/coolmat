<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'coolmat' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r%EOoNLhBs.#9Z%ifpZz&}LAZYz~ g`sQY-fR}!ko<CS$VK4O,~Lk[p,X*4g9<zZ' );
define( 'SECURE_AUTH_KEY',  'y]/+tH6mnao7|AtxlxFH:beaS2FZFalG;`cu_Ura:*89:i@qy./[IB*rhk)0RW{6' );
define( 'LOGGED_IN_KEY',    'cXzB@bW>K}JdJntnUF6g`UDx})6L=5loc)IqY?X6X%c]G(Yae|1F2m0-Jwn:!U~a' );
define( 'NONCE_KEY',        'yE~ewdRH[SN#Qdkf>M,%oxRtqj[B0m(,8PJENdXgCqQnIrktF`y&65#J!Yb^nes.' );
define( 'AUTH_SALT',        'H~zt11a!P#OZPI=pCN71DT;66;+]X=hnxMH>fF#r}Q8fwF#m%H>zZ;Zynw+QtUN5' );
define( 'SECURE_AUTH_SALT', 'c{ZjY~k]g,wPB9 RtTTp_t*D=zrQ:PY aU:f;xri%[]cU.,*zwJI]C?s>BL&@3<}' );
define( 'LOGGED_IN_SALT',   '<VC<vVbn<w}WAenQ<+T@C .N&~bCSx[L_1S)PXY$HGOUm8n}u[s~>_a6h8?6!H/g' );
define( 'NONCE_SALT',       'F*|&{{>kl7=D%]yH*rY*8s=I1!%.A(4c.pHsG0)A*aOt.wuZkpd#GEAKZRhby~%H' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
