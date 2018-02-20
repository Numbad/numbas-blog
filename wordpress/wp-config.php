<?php

$tmptab = explode(";", $_SERVER['MYSQLCONNSTR_localdb']);
$list = array();
for($i = 0; $i < sizeof($tmptab); $i++) {
        array_push($list, explode("=",$tmptab[$i])[1]);
}

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus ▒|  leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C▒~@~Yest votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d▒~@~Yinstallation. Vous n▒~@~Yavez pas ▒|  utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', $list[0]);

/** Utilisateur de la base de données MySQL. */
define('DB_USER', $list[2]);

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', $list[3]);

/** Adresse de l▒~@~Yhébergement MySQL. */
define('DB_HOST', $list[1]);

/** Jeu de caractères ▒|  utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N▒~@~Yy touchez que si vous savez ce que vous faites.
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
define('AUTH_KEY',         'K);LGsuLV+JQRcsb)c$L>dY%n!3;|srFqfM=n^S]_f)Aq1@T9WaKn>4-[qdYc>5z');
define('SECURE_AUTH_KEY',  '*dgH~(yMtYSRZ5o y(UZx <|26G@%p5SX>5=.s#2^7~cj]!-Q3CUzv8;&noTqcIo');
define('LOGGED_IN_KEY',    'Be#-hmFg3!ExJ+T4;8+WNa3+#~<]i2x9x[;+5p.X3<12[ED.R4_+$g{FR1^+-6IZ');
define('NONCE_KEY',        '|$7qDM9g$NlZo++z6NGgTE^BG/|1n-HbD,SFZ}xajhRj!4@/DXL7i.Nt0`>^y|Wp');
define('AUTH_SALT',        ' N-<O0~|$Y7gfo<B{0nu;+Ykdbx~YgC}6j%!YM/8+H@2!mv6@nC0_ J`2a%QLZQj');
define('SECURE_AUTH_SALT', '2>+FlhtmV0C>T<}>E_9W5Lk *,1=a`/fRJnX)n+e<@kK=p6<I)kT/{g>cZ@m;!>s');
define('LOGGED_IN_SALT',   '<CjVsk4:[qTZ$7+<X=!Oyh-RPiW2K |T9Jt>[W}*X%!ZXe(2=*P(rpyc?7yFt/V5');
define('NONCE_SALT',       'to7kuq-Y;+|i7~GDCG}kPJ[0++P8j.1`I8+g b Nw{Ad`>KgcQzp%*,1|VEWz+4Y');
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