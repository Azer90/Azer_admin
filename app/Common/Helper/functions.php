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


function get_content_img($str){
    $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";
    preg_match_all($pattern,$str,$match);
    $article_img = count($match[1]);

    $img=[];
    if(empty($article_img)){
        return $img;
    }
    if($article_img<3){
        $url=CheckUrl($match[1][0]);//1图
        if(!$url){
            $img_url=get_host().$match[1][0];
        }else{
            $img_url=$match[1][0];
        }
        $img[]= '"'.$img_url.'"';
    }elseif($article_img>=3){
        for($i=$article_img-1;$i>($article_img-4);$i--){
            $url=CheckUrl($match[1][$i]);
           if(!$url){
               $img_url=get_host().$match[1][$i];
           }else{
               $img_url=$match[1][$i];
           }

                $img[]='"'.$img_url.'"';
        }
    }
    $img= implode(',',$img);
    return $img;
}


function CheckUrl($C_url){
    $str="/^http(s?):\/\/(?:[A-za-z0-9-]+\.)+[A-za-z]{2,4}(?:[\/\?#][\/=\?%\-&~`@[\]\':+!\.#\w]*)?$/";
    if (!preg_match($str,$C_url)){
        return false;
    }else{
        return true;
    }
}