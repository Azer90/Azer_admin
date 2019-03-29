<?php
/**
* 获取当前host域名
* @return string
*/
function get_host(){

    $scheme = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
    $url = $scheme.$_SERVER['HTTP_HOST'];
    return $url;
}

