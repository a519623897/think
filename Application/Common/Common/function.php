<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-2
 * Time: 下午2:23
 */

function phiz($common){
    preg_match_all('/\[.*?\]/is',$common,$arr);

    if($arr[0]){
        $phiz = F('phiz','','./Data/');
        foreach ($arr[0] as $vo) {
            foreach($phiz as $key=>$value){
                if($vo=='['.$value.']'){
                    $common = str_replace($vo,'<img src="'.__ROOT__.'/Public/Home/Images/phiz/'.$key.'.gif"/>',$common);
                }
                continue;
            }
        }
    }
    return $common;
}

/**
 * 递归重组节点信息为多维数组
 * @param $node 要处理的节点数组
 * @param int $pid3
 */
function node_merge ($node,$access=null,$pid = 0){
    $arr = array();
    foreach ($node  as $v ) {
        if(is_array($access)){
            $v['access'] = in_array($v['id'],$access)?1:0;
        }
        if($v['pid'] == $pid){
            $v['child'] = node_merge($node,$access,$v['id']);
            $arr[] = $v;
        }
    }
    return $arr;

}

