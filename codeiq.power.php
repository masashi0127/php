<?php
function graduationday(){
    //下の1行は下記カレンダーを参照して取得できる値を確認して下さい。
    $wf = (int)date('w',mktime(0,0,0,3,1,2014));
    
    $fd = 5 - $wf + 1;
    if($fd <= 0){
        $fd += 7;
    }
    
    $result = $fd + 7 * (2 - 1);
    
    return $result;
}
echo "卒業式は".graduationday()."日";
