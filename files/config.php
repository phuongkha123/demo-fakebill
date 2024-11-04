<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

DB::$user = 'fakebil1_bsdz69';
DB::$password = 'fakebil1_bsdz69';
DB::$dbName = 'fakebil1_bsdz69';
DB::$encoding = 'utf8'; 
$webinfo = DB::queryFirstRow("SELECT * FROM settings");
$user_new;
if (isset($_SESSION['username'])){
    $user_new = DB::queryFirstRow("SELECT * FROM users WHERE username=%s", $_SESSION['username']);
}

ob_start();
function xss_clean($data)
{
// Fix &entity\n;
$data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
$data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
$data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
$data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

// Remove any attribute starting with "on" or xmlns
$data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

// Remove javascript: and vbscript: protocols
$data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

// Remove namespaced elements (we do not need them)
$data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

do
{
    // Remove really unwanted tags
    $old_data = $data;
    $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
}
while ($old_data !== $data);

// we are done...
return $data;
}

$domain = 'https://billfake.com';
if($webinfo['fakebillfree'] > 0){


    $tiengoc = 0;
$tiengoc1 = 0;
$tiengoc2 = 0;
$tiengoc3 = 0;
// Kiểm tra nếu thời điểm hiện tại đã tới ngày hết hạn hay chưa

} else {
$array = array();

// Kiểm tra xem giá trị của $_POST['key'] có tồn tại trong mảng hay không
if (isset($_POST['key']) && in_array($_POST['key'], $array)) {
    $tiengoc = 5000;
$tiengoc1 = 10000;
$tiengoc2 = 10000;
$tiengoc3 = 0;
} else {
    $tiengoc = 5000;
$tiengoc1 = 10000;
$tiengoc2 = 10000;
$tiengoc3 = 0;
}
   

 $timestampHetHan = strtotime(DB::queryFirstField("SELECT date_bill FROM `users` WHERE username = '".$user_new['username']."'"));
            if (time() < $timestampHetHan) {
                $tiengoc = 0;
                $tiengoc2 = 0;
                $tiengoc1 = 0;
            } else {
                DB::query("UPDATE users SET date_bill='' WHERE username = '".$user_new['username']."'");
            
            }
}

    $default = 'demo';

function formatTimeAgo($time) {
    // Chuyển thời gian cụ thể thành timestamp
    $timestamp = strtotime($time);

    // Thời gian hiện tại
    $currentTimestamp = time();

    // Tính khoảng thời gian giữa hai thời điểm
    $diff = $currentTimestamp - $timestamp;

    if ($diff < 60) {
        return $diff . " giây trước";
    } elseif ($diff < 3600) {
        $minutes = floor($diff / 60);
        return $minutes . " phút trước";
    } elseif ($diff < 86400) {
        $hours = floor($diff / 3600);
        return $hours . " giờ trước";
    } elseif ($diff < 604800) {
        $days = floor($diff / 86400);
        return $days . " ngày trước";
    } else {
        // Nếu đã qua một tuần, trả về thời gian dưới dạng ngày/tháng/năm
        return date("d/m/Y", $timestamp);
    }
}

function canchinhgiua($image, $fontsize, $y, $textColor, $font, $text) {
    $fontSize = $fontsize;
    $textBoundingBox = imagettfbbox($fontSize, 0, $font, $text);
    $textWidth = $textBoundingBox[2] - $textBoundingBox[0];
    $imageWidth = imagesx($image);
    $x = ($imageWidth - $textWidth) / 2; // Căn giữa theo chiều ngang
    imagettftext($image, $fontSize, 0, $x, $y, $textColor, $font, $text);
}
function removeAccentsAndToUpper($str) {
    $str = mb_strtolower($str, 'UTF-8');
    $str = str_replace(
        ['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'],
        'a',
        $str
    );
    $str = str_replace(
        ['đ'],
        'd',
        $str
    );
    $str = str_replace(
        ['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'],
        'e',
        $str
    );
    $str = str_replace(
        ['í', 'ì', 'ỉ', 'ĩ', 'ị'],
        'i',
        $str
    );
    $str = str_replace(
        ['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'],
        'o',
        $str
    );
    $str = str_replace(
        ['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'],
        'u',
        $str
    );
    $str = str_replace(
        ['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'],
        'y',
        $str
    );

    $str = strtoupper($str);

    return $str;
}
function removeAccentsAndToUpper1($str) {
    $str = $str;
    $str = str_replace(
        ['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'],
        'a',
        $str
    );
    $str = str_replace(
        ['đ'],
        'd',
        $str
    );
    $str = str_replace(
        ['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'],
        'e',
        $str
    );
    $str = str_replace(
        ['í', 'ì', 'ỉ', 'ĩ', 'ị'],
        'i',
        $str
    );
    $str = str_replace(
        ['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'],
        'o',
        $str
    );
    $str = str_replace(
        ['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'],
        'u',
        $str
    );
    $str = str_replace(
        ['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'],
        'y',
        $str
    );

    $str = $str;

    return $str;
}



function thongbao($status,$content){
    if($status == 'error'){
        $status = 'danger';
    }
   return '<div class="mt-3 alert alert-'.$status.'" role="alert">
  '.$content.'
</div>';
}

function generateRandomString($length = 15) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $randomString;
}
$MEMO_PREFIX = 'nap';
function get_id_bank($des)
{
    global $MEMO_PREFIX;
    $re = '/'.$MEMO_PREFIX.'\d+/im';
    preg_match_all($re, $des, $matches, PREG_SET_ORDER, 0);
    if (count($matches) == 0 )
        return null;
    // Print the entire match result
    $orderCode = $matches[0][0];
    $prefixLength = strlen($MEMO_PREFIX);
    $orderId = intval(substr($orderCode, $prefixLength ));
    return $orderId ;
}