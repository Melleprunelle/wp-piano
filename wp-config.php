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
define('DB_NAME', 'wppiano');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'facesimplon');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2(7?YHoygc0EDSLFHn~b;gr+#r;7`%8!~A6W7/8]c9{`>W!iYfwNQ|FF=+Ot5=Ow');
define('SECURE_AUTH_KEY',  '%r^rB+XX4k0Ko=:]8u B@IOEzf.i$+Ox<KGtp`}%0x0P;|1hk[Y,59.Xq<5K4ikx');
define('LOGGED_IN_KEY',    '%wte-r&Y[o7aCIC:8}}/=3xcGcr0dZB}V7yIB6dG~[<muv(OKz)sS<8{y58Dwsw$');
define('NONCE_KEY',        'u2x*Yx 6j>[3HiXZcjPC2vtL}{)xLXO#-cTgtk4cBp/;%!9x0%yM>dCn)=2m8d),');
define('AUTH_SALT',        '4/`WpK]:(@TP=78Oi.=2Ku(F*JzKn{8xZ96/qVU.63rLQTdq#26]:Pw.2bqbj__k');
define('SECURE_AUTH_SALT', 'Q?:#%#93CWTeq{eV2lWw?lvNeIJycs9r$0E=b%,pR|ktB05:_C_~-5Q(*h2K6*$U');
define('LOGGED_IN_SALT',   '%uO+?Fk|$+( ]DngzaO<]H$1~sU4Bl%KCl*,6aZ`8UJb g$/lnGcZaMmxC:KC_,-');
define('NONCE_SALT',       'A]v62I<HP0j@LtNMSOBu%YloTDR%-d<3 ~Akjnq:PTq_3@1065SsiKb/t0/-GIGZ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
