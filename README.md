# Contexte du projet

The Bike Map

## Prérequis

Il sera nécessaire d'avoir :

- **PHP** : Version 8.3 ou moins
- **MySQL** : Version 8.2 ou moins

## Instructions

Ne pas oublier de configurer le fichier `config.php` pour qu'il corresponde à votre base de données :

```php
if (file_exists($SERVER["DOCUMENT_ROOT"] . '/prod.txt')) {
    define("IS_PROD", TRUE);
    // Connexion à la base de données
    define("DB_HOST", "nom_de_votre_hôte");
    define("DB_PORT", "3306");
    define("DB_USER", "nom_utilisateur_base_de_données");
    define("DB_PWD", "mot_de_passe_base_de_données");
    define("DB_NAME", "nom_de_votre_base_de_données");
    // Nom de domaine, URL de base
    define("HOME_URL", "/");
    define("Domain", "votre_nom_de_domaine");
    define("PREFIXE", "transport");
} else {
    define('ISPROD', FALSE);
    // Connexion à la base de données
    define("DB_HOST", "localhost");
    define("DB_PORT", "3306");
    define("DB_USER", "nom_utilisateur_base_de_données");
    define("DB_PWD", "mot_de_passe_base_de_données");
    define("DB_NAME", "nom_de_votre_base_de_données");
    // Nom de domaine, URL de base
    define('HOME_URL', '/');
    define("Domain", "votre_nom_de_domaine");
    define("PREFIXE", "transport");
}
```
