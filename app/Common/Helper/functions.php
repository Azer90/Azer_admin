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

function article_curl($api='',$urls=array()){
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

function Yoko_time($time =array()){
    $stimestamp = strtotime($time['start_time']);
    $etimestime = strtotime($time['end_time']);
    //计算日期段内有多少天
    $days = ($etimestime - $stimestamp)/86400+1;
    //保存每天日期
    $date = array();
    /* for循环本周一到周日 */
    for($i=0; $i<$days; $i++){
        $date[] = date("Y-m-d",$stimestamp+(86400*$i));
    }
    return $date;
}
