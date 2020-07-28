<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
<<<<<<< HEAD
define( 'DB_NAME', 'dr-repeca' );
=======
define( 'DB_NAME', 'rebecca' );
>>>>>>> 29854f00e72c65835d1a9ea0d7c3bf36ae469b07

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
<<<<<<< HEAD
define( 'AUTH_KEY',         '*-/G<]/!2LtIt+q~j@{y}2-2`|Phm|{4_kG,>tBqgB@noEsF;3L<r:6>OHgLn29I' );
define( 'SECURE_AUTH_KEY',  '_Krs4la:UI)39h#j_.gU>1M]V4|Ws!^f9`TG@UvviFtTRUPM6N!(iBNP~MZniKBY' );
define( 'LOGGED_IN_KEY',    '3%<R6NC]Mh<{o:Kti#K(oV?SO%G|u/pjcd5,G`]^m)wl5^`wFQf*Xafh#_?]%a|a' );
define( 'NONCE_KEY',        'ymcmDZU# KR3=HyK;K4 3FPY;^[~j[_p- ou,H_(X$YiEjPPO;F5NPWmD%#ltjLR' );
define( 'AUTH_SALT',        'z#IK4Tu3hRi$Z(I3Te8VqRVrb?}5O_M_CM:hD9Dn)J<?d+`)|M$-b1Bjn![STsd;' );
define( 'SECURE_AUTH_SALT', 'cx)+|1dS=plydk>>GlixA/T$EzfDO`:{M`|N&Zpl#k|IxfYMF&M9KJ]!kE9$MQ8r' );
define( 'LOGGED_IN_SALT',   '?*.W:W|<%T&RI.<Odaj|x_/0*!Q$UV+%w[mcg#^_$mYdc*>.U8U?SjW`:0fP/bow' );
define( 'NONCE_SALT',       'J:TH?T*<boy7&i9e.?#S$):Q9#5>i2p7M<GDIOy2+G=BgZCER974;+m@$MK8]ezL' );
=======
define( 'AUTH_KEY',         '):a.aZOb%H+/xz5SCh7^,rmYoiS CB*%,h%;*d-D0G}UhHk{}V19IncS&q6nRP!r' );
define( 'SECURE_AUTH_KEY',  'aRi9}rX|TJE!C.@x81wmX1P}|;eF0?Tl-1f(~18y=/||V 4#JozQ;VA,~XBC6FI(' );
define( 'LOGGED_IN_KEY',    'amHs2sa.ya:zq*|Y`xAt?bTSKqSR,`}5%Gj)UDHF-PY,k>]{R2CA5Go508e#VU=V' );
define( 'NONCE_KEY',        'u-0)1^p=R>i9>62qJX})BD:0qC-Mk BDynLfw@o/F{}BqLJH^B]na32+fL?SP]ZM' );
define( 'AUTH_SALT',        '$J9lfm^]-*)to%(gD]E:j6pfb&6o;B5G#KL.dH.AANWI[T+ 5_.KY<kT}7[yBZg^' );
define( 'SECURE_AUTH_SALT', ')/nG-jnV%ULeJZmkc6=Ea4-*!9|g)L{)+#Wf|cNe^|=nFB}-5He#^yI}!-dDe)DI' );
define( 'LOGGED_IN_SALT',   'F5R&26><aWym|!:7bv,/ZCwew(hhKmco7gH_-d.iC1UJxLSg4nv!irY$rI]C$o<O' );
define( 'NONCE_SALT',       '=5}/__Qd#!>E2u7_wR<@vDS|Llj=UpSK=t {rsJa,mF~];!(}RG40E5bdO)PdaT>' );
>>>>>>> 29854f00e72c65835d1a9ea0d7c3bf36ae469b07

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
