<?php
define("DB_NAME", getenv("MARIADB_DATABASE"));
define("DB_USER", getenv("MARIADB_USER"));
define("DB_PASSWORD", getenv("MARIADB_PASSWORD"));
define("DB_HOST", getenv("WORDPRESS_MARIADB_HOST") . ":3306");
define("DB_CHARSET", getenv("MARIADB_CHARSET"));
define("DB_COLLATE", getenv("MARIADB_COLLATE"));

define('AUTH_KEY', '6E@iLhkO{G+V#88S|Tt_>sYJSK8dqZ/+D<LH2Z#x]A>.H~H#YF)jQ1>aLz]M4Gt*');
define('SECURE_AUTH_KEY', '-3A~@QF-r<]H}F9p{sNT4<d-2*fjdFw=|K*%V06^2U2)HICs.8v-_E-GZ7jbV(l2');
define('LOGGED_IN_KEY', 'Wq:I+u5{nU6yYet_yw858uia9J(-AhXtA?x+yIrF}@)*p,GOe`:x5}Vsek,PYUEM');
define('NONCE_KEY', ':mLrz!jSvi_O%5p:|l||,/dzHKU^E+G}|-g(W?`0v e/Q7eh1V4H>K i-Pb=<Fot');
define('AUTH_SALT', '@Cpv;Ld;d5iPBH~hlnh-R].}!dnI9wF!aa@&Q|:] <t7ir+Q(J:D2_MxlTHe)oLJ');
define('SECURE_AUTH_SALT', 't8ZEqv6kap!dA#qt<>wVGOcIh`#fbG,:@+Tzw^C#x6*/B[+0-lP-&PH }b`>v>b^');
define('LOGGED_IN_SALT', 'mb@R@<q^%nB8epD`GMQ-9azkM;?u|SHaXur|.se-vW!j|;K _T+M4$ri.-PZb8RE');
define('NONCE_SALT', 'G<O77i2SHOF[I!k5D{J=-LPss|5xCgzyq|j-/WI-|n`kHMdN9/S4&;JF*D;z-Uob');
define("CONCATENATE_SCRIPTS", false);

$table_prefix =	getenv("MARIADB_PREFIX");

define("WP_DEBUG", true);
if (!defined("ABSPATH"))
	define("ABSPATH", __DIR__ . "/");

require_once ABSPATH . "wp-settings.php";
