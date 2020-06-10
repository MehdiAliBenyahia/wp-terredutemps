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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']4$zyh#2Vidfoa?/JJyVnPiZ^2tI5YAnV_7<F}9=@B1eX(rZw[QAz<#IWC8>J$.7' );
define( 'SECURE_AUTH_KEY',  'y76`a,$+L|$_:(uPHtP~[X@g2qM/L_X)tTZ. pN}bENV<zMyc|8m&ck=XR[F puG' );
define( 'LOGGED_IN_KEY',    'g},mH.-T&!TLNz_#9,^G033!#_`jP>Z~d1{jR$%G2hq8@>H6q=~K|Qj4FziJ*a:&' );
define( 'NONCE_KEY',        '} <xLe%R9oiqC~~[mWw_dk1+6Z3$Ey(GP+>r_$1*Q^f%|0ZjP4hY/}?4{97uHBR/' );
define( 'AUTH_SALT',        '#hAe+G<fzh@x=uf|J6K~WXzL&I8]W&In1=*V;&HkWY_DN}DAPljU[[Q[I!z56mM]' );
define( 'SECURE_AUTH_SALT', 'rTf;!TO=1Q#V)9lQC0mu&_Uoq[;:8M}b1dx<0vd7:# 2woFOQ$ICV>,xTrX|&7vd' );
define( 'LOGGED_IN_SALT',   '-A6z:MV6Ua$lCXKWaY%8z1~lL-`Kd<Bp}Z!Nvjne<tvvf2ZL?1wDlAOk$9A`L8ep' );
define( 'NONCE_SALT',       ',R`{q$+RU|YuR+m`{U`D7uh!NDi0H!+REW0DK*OqHaR*.P&.srTh}h|~~`7t6[;S' );
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
define ('WP_MEMORY_LIMIT', '512M');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
