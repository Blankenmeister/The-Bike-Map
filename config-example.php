<?php
// add the file prod.txt in the root of the project
// to ensure that your are in online server mode
if (file_exists($_SERVER["DOCUMENT_ROOT"] . '')) {
    define("IS_PROD", TRUE);
    // Database connection
    define("DB_HOST", "");
    define("DB_PORT", "");
    define("DB_USER", "");
    define("DB_PWD", "");
    define("DB_NAME", "");
    // Domain name , Home url 
    define("HOME_URL", "");
    define("Domain", "");
    define("PREFIXE", "");
} else {
    define('IS_PROD', FALSE);
    // Database connection
    define("DB_HOST", "");
    define("DB_PORT", "");
    define("DB_USER", "");
    define("DB_PWD", "");
    define("DB_NAME", "");
    // Domain name , Home url 
    define('HOME_URL', '');
    define("Domain", "");
    define("PREFIXE", "");
}
