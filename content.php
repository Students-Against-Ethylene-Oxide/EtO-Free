<?php

$handle = fopen('fullcontent.txt', 'r');
$content = stream_get_contents($handle);
fclose($handle);
preg_replace("/(<[\w\W]*?>)/imu", "", $content);
$text = preg_replace(["/(<[\w\W]*?>)/imu", "/\t/imu"], "", $content);
// console_log(html_entity_decode($text));

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
?>
