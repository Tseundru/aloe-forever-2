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
define('DB_NAME', 'votre_nom_de_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'votre_utilisateur_de_bdd');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'votre_mdp_de_bdd');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * URL de la page d'accueil
 *
 * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#Adresse_du_Blog_.28URL.29
 */
define( 'WP_HOME', rtrim( 'put_your_home_url_here', '/' ) );
/**
 * URL vers le dossier contenant le code source de WordPress
 *
 * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#Adresse_WordPress_.28URL.29
 * @link https://www.php.net/manual/fr/language.constants.php
 */
define( 'WP_SITEURL', WP_HOME  . '/wp' );

/**
 * URL vers le dossier wp-content
 *
 * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#D.C3.A9placer_le_R.C3.A9pertoire_wp-content
 */
define( 'WP_CONTENT_URL', WP_HOME . '/content' );
/**
 * Chemin vers le dossier wp-content
 *
 * __DIR__ contient le chemin vers le dossier du fichier wp-config.php. C'est également le dossier du dossier wp-content.
 *
 * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#D.C3.A9placer_le_R.C3.A9pertoire_wp-content
 * @link https://www.php.net/manual/fr/language.constants.predefined.php
 */
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );

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

/**
 * WordPress ne fait pas la différence entre les environnements de travail (local, production, pré-production). Je décide donc de créer ma propre constante
 */
// define( 'ENVIRONMENT', 'development' );
// define( 'ENVIRONMENT', 'staging' );
define( 'ENVIRONMENT', 'production' );

/**
 * On vérifie que la constante ENVIRONMENT existe bien
 *
 * @link http://php.net/defined
 */
if ( ! defined( 'ENVIRONMENT' ) ) {
    echo 'La constante ENVIRONMENT n\'est pas définie.';
    exit;
}

if ( ENVIRONMENT === 'development' ) {
    // Environnement local de développment
    /**
     * Gestion des erreurs
     * Les constantes WP_DEBUG_LOG et WP_DEBUG_DISPLAY sont utilisées uniquement lorsque WP_DEBUG est à true
     *
     * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#D.C3.A9boggage
     */
    // Désactivation de l'ajout des erreurs dans le fichier de log
    define( 'WP_DEBUG_LOG', false );

    // Affichage des erreurs dans le navigateur
    define( 'WP_DEBUG_DISPLAY', true );

    /**
     * Autorisation de téléchargement direct des fichiers
     *
     * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#Les_Constantes_des_Mises_.C3.80_Jour_WordPress
     */
    define( 'FS_METHOD', 'direct' );

    /**
     * Modification du comportement de la corbeille des contenus supprimés
     *
     * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#Vider_la_Corbeille
     */
    define( 'EMPTY_TRASH_DAYS', 0 );
} elseif ( ENVIRONMENT === 'staging' ) {
    // Environnment de pré-production

    define( 'WP_DEBUG_LOG', true );

    define( 'WP_DEBUG_DISPLAY', true );

    /**
     * Suppresion des boutons d'ajout de thèmes et de plugins
     *
     * Les traductions ne seront plus téléchargée non plus...
     *
     * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#D.C3.A9sactiver_l.E2.80.99Installation_d.27Extensions_et_de_Th.C3.A8mes
     */
    define( 'DISALLOW_FILE_MODS', true );

    // Conservation des contenus de la corbeille pendant 7 jours
    define( 'EMPTY_TRASH_DAYS', 7 );
} elseif ( ENVIRONMENT === 'production' ) {
    // Environnement de production
    define( 'WP_DEBUG_LOG', true );

    define( 'WP_DEBUG_DISPLAY', false );

    define( 'DISALLOW_FILE_MODS', true );

    // Conservation des contenus de la corbeille pendant 60 jours
    define( 'EMPTY_TRASH_DAYS', 60 );
} else {
    // Environnement incorrect
    echo 'L\'environnement n\'est pas correct. Les valeurs possibles sont development, staging ou production.';
    exit; // On stoppe le traitement
}

/**
 * Supprimer l'éditeur de thèmes et de plugins du backoffice de WordPress
 *
 * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#D.C3.A9sactiver_l.E2.80.99.C3.89diteur_d.27Extension_et_de_Th.C3.A8me
 */
define( 'DISALLOW_FILE_EDIT', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
