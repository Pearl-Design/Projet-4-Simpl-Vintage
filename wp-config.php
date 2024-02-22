<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'simplvintage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x]G7KIM6(o(dD9Rz%9XCOO6!n+U&JYD3NA)me$|->@.o&o@(HlAjiQJ^VZ#w}QFf' );
define( 'SECURE_AUTH_KEY',  'FhT[B%+tO:Qm:[Go5ccnY,g3ZfGDQK})[)Wt? !p#2vC&?uFxD5$oPbVd.5id9el' );
define( 'LOGGED_IN_KEY',    'uka((j-u9+npZ~*Z`T,@rjlbYC1F>vf<6M%cc;krq8Rk5=+w?ySV>2V6ZaV#S{>e' );
define( 'NONCE_KEY',        ';PC?~m{jv~mb1-a=4 $ws[n/qE?ABy{SH<{VJFUi[T7lmBsL?Ixgm@Ojgy$`xrFE' );
define( 'AUTH_SALT',        '` 5T;GVriO(Es&6=X&I1dhQhC#a5.esh21Ao) @(9xKr/G|y_q9e]eV!P/2[[j2P' );
define( 'SECURE_AUTH_SALT', ')}b 4GNnrD[j)cc8pLg|J^!drS.oPsD(XOjf1MW/sx/[Wktxm~+k0,#VhvzLIS?#' );
define( 'LOGGED_IN_SALT',   '}W/csfIKOTd,esM[c]=Mw)hdqr):S~4gO$:XT{FFN|=Kc]`wS2M#|}8[ITcz7P5.' );
define( 'NONCE_SALT',       'eWVW~q1$&ifJ6-d1CdjmA~/sUlGcb1XMNJy9Ch GfG[`bg`f<Q2yFm,T!6v.2l:+' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
