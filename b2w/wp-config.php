<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'b2wdb' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1pGu|&`(fGM|zis~3{=c)gms-C`//N?|j97[qQ8bG7grfaZ,%k>%e%mx&kBTL96I' );
define( 'SECURE_AUTH_KEY',  'v))hPlr)sGEvt-f(-y8T@z}k@66=(QzR?&W(VsiLA({?$|zj+BY8n>?<6m/HM9]e' );
define( 'LOGGED_IN_KEY',    'q4j$vbqQit&jMP~/)41aRjfSg+jY_M_/UwUV& MT_^WFhb8GG.,{>NO|`E6YC5S3' );
define( 'NONCE_KEY',        'Avs4>{B50N?3s~k079b`XQz#s(`y[h%_v!7P=i`p~.)7jv-APx-6C7-,^YT.Om{3' );
define( 'AUTH_SALT',        ':m(`^3iDT4K[)^_C ]awa> %q=F^h_k`lYggG1j*uM3>Ae>c$7HWF6:gB=fbPXFd' );
define( 'SECURE_AUTH_SALT', 'E1c6XOt:JxuyEu2UwF(1MEGB!ER*gj!IB<soQ{aw7)@&{s$*U&w%yrB~yv}no@_#' );
define( 'LOGGED_IN_SALT',   '3x24=oyVoI_]*3j:%x_]6fQ~_JT%;S|sdj^)+n)oDAg<OL<|qZ2caAj:Kk3*LVWG' );
define( 'NONCE_SALT',       '/H7R$_7pE0QOC40D5RPCH}4~Z60e:cZn*sS1i]:A>BFpT4*:<c5(-brmgr( `-#B' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';