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
define( 'DB_NAME', 'wp_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'abouhlel' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'asma' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '^[]W77CM08~RUoY8RlaFL:pTEN=mRJC!KaOJ{QMgkr>kDXK$f_6G>K>#g<s+$~vm' );
define( 'SECURE_AUTH_KEY',  ',H>ApRf6|u,P:V04ixtt59upaA>Ln] e`/,]ENT^{,Q-^,.9,B<3Sr%LVn)gz,:/' );
define( 'LOGGED_IN_KEY',    'DCbPhv^/h M3b:r(=<7aF:]9Eg&jvf@ZbGJV:+$snR0m~qGeM{Djqf<#R*^go7{^' );
define( 'NONCE_KEY',        'p]P|803SrC#lFHZr?eDY<QLmmh+nFP0k,PXk#A:(pJ;YxRbdu.>#|Vnn2XV;3,Kh' );
define( 'AUTH_SALT',        'FIY<:T%Sacf*ynb=W)7JlwYZqEbM]`w}P^J&0W[62N7zv<E]I6I@Lr&*pm^nGkSA' );
define( 'SECURE_AUTH_SALT', 'PC:YBj`$9Z)?@li_xPXbvH9?ESxX{_Bxen}.35|tw`<$MwyRnRi !ie*@))a6wgE' );
define( 'LOGGED_IN_SALT',   'gw)w?OwK|>Gjct![F*PoLUV8t;@,/kvf `-c.<x6. RYTs2^7s=%by![n!#P%bhw' );
define( 'NONCE_SALT',       'jf0=h=Y^^&bnH!P+)R%0F|DtPMBW!iNbitb>11)Zq{>k+IEa<b/<jITY~W^O^}bZ' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
