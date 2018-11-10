<?php
/* 这是党建的api接口 */

getTodayOfParty();


/* 定义6个类型内容：*/
/* 
党史上的今天
    时间 - 精确到天
    标题 - 200个字
    内容
*/
function getTodayOfParty(){
    // 开始输出
    $returnArray = array();
    $return['dayOfDate'] = $dayOfDate;
    $return['title'] = $title;
    $return['content'] = $content;
    $returnString = json_encode($returnArray);
    return $returnString;
}

/* 
入场签到
    当前排名
    签名内容 - 名字
*/
function onCheck(){
    // 开始输出
    $returnArray = array();
    $return['num'] = $num;
    $return['name'] = $name;
    $returnString = json_encode($returnArray);
    return $returnString;
}
    

/*
红色人物
    人物名字
    外号
    图片
    内容 
*/
function getRedPersonOfParty(){
    // 开始输出
    $returnArray = array();
    $return['name'] = $name;
    $return['callName'] = $callName;
    $return['img'] = $img;
    $return['content'] = $content;
    $returnString = json_encode($returnArray);
    return $returnString;
}
    

/* 
党的历史
    历史名称
    图片
    内容
*/
function getHistoryOfParty(){
    // 开始输出
    $returnArray = array();
    $return['historyName'] = $historyName;
    $return['img'] = $img;
    $return['content'] = $content;
    $returnString = json_encode($returnArray);
    return $returnString;
}
    


/* 
党章制度
    党章名字
    内容（有小标题）
*/
function getRuleOfParty(){
    // 开始输出
    $returnArray = array();
    $return['historyName'] = $historyName;
    $return['img'] = $img;
    $return['content'] = $content;
    $returnString = json_encode($returnArray);
    return $returnString;
}
    

/* 6、党史自测 */
function doTestHistoryOfParty(){
    // 开始输出
    $returnString = "";
    return $returnString;    
}


?>