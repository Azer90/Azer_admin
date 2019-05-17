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

function article_curl($urls=array()){
    $api = 'http://data.zz.baidu.com/urls?site=www.ipdftoword.net&token=SXtI9P0RvVBs77sh';
    $ch = curl_init();
    $options =  array(
        CURLOPT_URL => $api,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => implode("\n", $urls),
        CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    );
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    return $result;
}
